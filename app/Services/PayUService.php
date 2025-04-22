<?php

namespace App\Services;

use App\Services\CurrencyConversionService;
use App\Traits\ConsumesExternalServices;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PayUService
{
    use ConsumesExternalServices;

    protected $baseUri;

    protected $key;

    protected $secret;

    protected $baseCurrency;

    protected $merchantId;

    protected $accountId;

    protected $converter;

    public function __construct()
    {
        $this->baseUri = config('services.payu.base_uri');
        $this->key = config('services.payu.key');
        $this->secret = config('services.payu.secret');
        $this->baseCurrency = strtoupper(config('services.payu.base_currency'));
        $this->merchantId = config('services.payu.merchant_id');
        $this->accountId = config('services.payu.account_id');

        $this->converter = "g";
    }

    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $formParams['merchant']['apiKey'] = $this->key;
        $formParams['merchant']['apiLogin'] = $this->secret;
    }

    public function decodeResponse($response)
    {
        return json_decode($response);
    }

    public function handlePayment(Request $request)
    {
        $request->validate([
            'payu_card' => 'required',
            'payu_cvc' => 'required',
            'payu_year' => 'required',
            'payu_month' => 'required',
            'payu_network' => 'required',
            'payu_name' => 'required',
            'payu_email' => 'required',
        ]);

        $payment = $this->createPayment(
            $request->value,
            $request->currency,
            $request->payu_name,
            $request->payu_email,
            $request->payu_card,
            $request->payu_cvc,
            $request->payu_year,
            $request->payu_month,
            $request->payu_network,
        );

        if ($payment->transactionResponse->state === "APPROVED") {
            $name = $request->payu_name;

            $amount = $request->value;
            $currency = strtoupper($request->currency);

            return redirect()
                ->route('home')
                ->withSuccess(['payment' => "Thanks, {$name}. We received your {$amount}{$currency} payment."]);
        }

        return redirect()
            ->route('home')
            ->withErrors('We were unable to process your payment. Check your details and try again, please');
    }

    public function handleApproval()
    {
        //
    }

    public function createPayment($value, $currency, $name, $email, $card, $cvc, $year, $month, $network, $installments = 1, $paymentCountry = 'CO')
    {
        return $this->makeRequest(
            'POST',
            '/payments-api/4.0/service.cgi',
            [],
            [
                'language' => $language = config('app.locale'),
                'command' => 'SUBMIT_TRANSACTION',
                'test' => true,
                'transaction' => [
                    'type' => 'AUTHORIZATION_AND_CAPTURE',
                    'paymentMethod' => strtoupper($network),
                    'paymentCountry' => strtoupper($paymentCountry),
                    'deviceSessionId' => session()->getId(),
                    'ipAddress' => request()->ip(),
                    'userAgent' => request()->header('User-Agent'),
                    'creditCard' => [
                        'number' => $card,
                        'securityCode' => $cvc,
                        'expirationDate' => "{$year}/{$month}",
                        'name' => "APPROVED",
                    ],
                    'extraParameters' => [
                        'INSTALLMENTS_NUMBER' => $installments,
                    ],
                    'payer' => [
                        'fullName' => $name,
                        'emailAddress' => $email,
                    ],
                    'order' => [
                        'accountId' => $this->accountId,
                        'referenceCode' => $reference = Str::random(12),
                        'description' => 'Testing PayU',
                        'language' => $language,
                        'signature' => $this->generateSignature($reference, $value = round($value * $this->resolveFactor($currency))),
                        'additionalValues' => [
                            'TX_VALUE' => [
                                'value' => $value,
                                'currency' => $this->baseCurrency,
                            ],
                        ],
                        'buyer' => [
                            'fullName' => $name,
                            'emailAddress' => $email,
                            'shippingAddress' => [
                                'street1' => '',
                                'city' => '',
                            ],
                        ],
                    ],
                ],
            ],
            [
                'Accept' => 'application/json',
            ],
            $isJsonRequest = true,
        );
    }

    public function Genetare_Pse($value){

        return $this->makeRequest(
            'POST',
            '/payments-api/4.0/service.cgi',
            [],
            [
                'language'=>'es',
                'command'=>'SUBMIT_TRANSACTION',
                'test'=>true,
                'merchant'=>
                    [
                        'apiLogin'=>$this->secret,
                        'apiKey'=>$this->key
                    ],
                'transaction'=>
                    [
                        'order'=>
                            [
                                'accountId'=>$this->accountId,
                                'referenceCode'=>$reference = Str::random(12),
                                'description'=>'Renta de vehiculo',
                                'language'=>'es',
                                'signature'=> $this->generateSignature($reference, $value = round($value)),
                                'buyer'=>
                                        [
                                            'fullName'=>'Cristina Arboleda',
                                            'emailAddress'=>'harvey@hotmail.com',
                                            'contactPhone'=>'3226755570',
                                            'dniNumber'=>'1085330718',
                                            'shippingAddress'=>
                                                                [
                                                                    'street1'=>'mz casa 14',
                                                                    'city'=>'pasto',
                                                                    'state'=>'Narino',
                                                                    'country'=>	'CO',
                                                                    'postalCode'=>'52000',
                                                                    'phone'=>'322675570'
                                                                ]
                                        ],
                                'additionalValues'=>
                                    [
                                        'TX_VALUE'=>
                                            [
                                                'value'=>$value,
                                                'currency'=>'COP'
                                            ]
                                    ]
                            ],
                        'payer'=>
                            [
                               'emailAddress'=>'harveympv@hotmail.com',
                                'fullName'=>'Harvey Riascos',
                                'billingAddress'=>
                                        [
                                            'street1'=>'Pasto',
                                            'city'=>'Pasto'
                                        ],
                            'contactPhone'=>'3226755570',
                            'dniNumber'=>'1085330718'
                            ],
                        'type'=>'AUTHORIZATION_AND_CAPTURE',
                        'paymentMethod'=>'PSE',
                        'paymentCountry'=>'CO',
                        'deviceSessionId' => session()->getId(),
                        'ipAddress' => request()->ip(),
                        'userAgent' => request()->header('User-Agent'),
                    ]
                 
            ],
            [
                'Accept' => 'application/json',
            ],
            $isJsonRequest = true,
        );

    }

    public function pse($value){
        return  response(['apiLogin'=>$this->secret,'apiKey'=>$this->key]);
        return $this->makeRequest(
            'POST',
            'https://sandbox.api.payulatam.com/payments-api/4.0/service.cgi',
            [],
            [
                'language'=> 'es',
                'command'=> 'SUBMIT_TRANSACTION',
                'merchant'=> [
                   'apiKey'=> 'Rm6Uf5YP2838N16IW4oqAvIRkU',
                   'apiLogin'=> 'Q4GYAR7xyg3Vg4i'
                ],
                'transaction'=> [
                   'order'=> [
                      'accountId'=> $this->accountId,
                      'referenceCode'=>$reference = Str::random(12),
                      'description'=> 'Payment test description',
                      'language'=> 'es',
                      'signature'=>$this->generateSignature($reference, $value),
                      'notifyUrl'=> 'http=>//www.payu.com/notify',
                      'additionalValues'=> [
                         'TX_VALUE'=> [
                            'value'=> $value,
                            'currency'=> 'USD'
                      ]
                      ],
                      'buyer'=> [
                         'merchantBuyerId'=> '1',
                         'fullName'=> 'First name and second buyer name',
                         'emailAddress'=> 'buyer_test@test.com',
                         'contactPhone'=> '7563126',
                         'dniNumber'=> '123456789',
                         'shippingAddress'=> [
                            'street1'=> 'Cr 23 No. 53-50',
                            'street2'=> '5555487',
                            'city'=> 'Bogotá',
                            'state'=> 'Bogotá D.C.',
                            'country'=> 'CO',
                            'postalCode'=> '000000',
                            'phone'=> '7563126'
                         ]
                      ],
                      'shippingAddress'=> [
                         'street1'=> 'Cr 23 No. 53-50',
                         'street2'=> '5555487',
                         'city'=> 'Bogotá',
                         'state'=> 'Bogotá D.C.',
                         'country'=> 'CO',
                         'postalCode'=> '0000000',
                         'phone'=> '7563126'
                      ]
                   ],
                   'payer'=> [
                      'merchantPayerId'=> '1',
                      'fullName'=> 'First name and second payer name',
                      'emailAddress'=> 'payer_test@test.com',
                      'contactPhone'=> '7563126',
                      'dniNumber'=> '5415668464654',
                      'billingAddress'=> [
                         'street1'=> 'Cr 23 No. 53-50',
                         'street2'=> '125544',
                         'city'=> 'Bogotá',
                         'state'=> 'Bogotá D.C.',
                         'country'=> 'CO',
                         'postalCode'=> '000000',
                         'phone'=> '7563126'
                      ]
                   ],
                   'extraParameters'=> [
                      'RESPONSE_URL'=> 'http=>//www.payu.com/response',
                      'PSE_REFERENCE1'=> '127.0.0.1',
                      'FINANCIAL_INSTITUTION_CODE'=> '1022',
                      'USER_TYPE'=> 'N',
                      'PSE_REFERENCE2'=> 'CC',
                      'PSE_REFERENCE3'=> '123456789'
                   ],
                   'type'=> 'AUTHORIZATION_AND_CAPTURE',
                   'paymentMethod'=> 'PSE',
                   'paymentCountry'=> 'CO',
                  
               
                   'cookie'=> 'pt1t38347bs6jc9ruv2ecpv7o2',
                 

                   'deviceSessionId' => session()->getId(),
                        'ipAddress' => request()->ip(),
                        'userAgent' => request()->header('User-Agent'),
                ],
                'test'=> false
             ]
             
             
           ,
            [
                'Content-Type'=>'application/json',
                'Accept' => 'application/json',
            ],
            $isJsonRequest = true,
        );
    }

    public function resolveFactor($currency)
    {
        return $this->converter
            ->convertCurrency($currency, $this->baseCurrency);
    }

    public function generateSignature($referenceCode, $value)
    {
        
        return md5("{$this->key}~{$this->merchantId}~{$referenceCode}~{$value}~{$this->baseCurrency}");
    }

    public function get_bancos(){
        $bancos= $this->makeRequest(
            'POST',
            'https://sandbox.api.payulatam.com/payments-api/4.0/service.cgi',
            [],
            [ 
                "language" => "es",
                "command"=> "GET_BANKS_LIST",
                "merchant"=> 
                [
                    "apiLogin"=> "Q4GYAR7xyg3Vg4i",
                    "apiKey"=> "Rm6Uf5YP2838N16IW4oqAvIRkU"
                ],
                    "test"=> false,
                    "bankListInformation"=>[
                        "paymentMethod"=>"PSE",
                        "paymentCountry"=> "CO"]]
                        ,
                        ['Accept'=>'application/json'],
                        true
    );    
    $respuesta= $bancos->code;  
    if($respuesta=="SUCCESS"){
        return $bancos->banks;
    }
    }
}