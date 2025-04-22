<?php

namespace App\Services;

use App\Services\CurrencyConversionService;
use App\Traits\ConsumesExternalServices;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MercadoPagoService
{
    use ConsumesExternalServices;

    protected $baseUri;

    protected $key;

    protected $secret;

    protected $baseCurrency;



    public function __construct()
    {
        $this->baseUri = config('services.mercadopago.base_uri');
        $this->key = config('services.mercadopago.key');
        $this->secret = config('services.mercadopago.secret');
        $this->baseCurrency = strtoupper(config('services.mercadopago.base_currency'));
    
    }

    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $queryParams['access_token']=$this->resolveAccessToken();
    }

    public function decodeResponse($response)
    {
        return json_decode($response);
    }

    public function handlePayment(Request $request)
    {

       
    }
    public function resolveAccessToken(){
        return $this->secret;
    }

    public function resolveFactor($currency)
    {
     
    }
    public function get_bancos(){
        $bancos= $this->makeRequest(
            'GET',
            '/v1/payment_methods',
            [],
            [],
                        ['Accept'=>'application/json'],
                        true
    );    
   if(  $bancos[8]->status=="active" ){
        return $bancos[8]->financial_institutions;
   }
   
    }

    public function CreatePayment($precio,$auto,$email,$tipo,$numero,$tipo_persona,$code){
        $payment= $this->makeRequest(
            'POST',
            '/v1/payments',
        [],
        [
            'transaction_amount'=>$precio,
            'description'=>'Alquiler de vehiculo '.$auto,
            'payer'=>[
                        'email'=>$email,
                        'identification'=>[
                            'type'=>$tipo,
                            'number'=>$numero
                        ],
                        'entity_type'=>$tipo_persona
                    ],
            'additional_info'=>[
                'ip_address'=> request()->ip()
            ],
            'callback_url'=>'https://www.facebook.com/',
            'payment_method_id'=>'pse',
            "transaction_details"=>[
                'financial_institution'=>$code
            ]

        ],
        ['Accept'=>'application/json'],
        true
        );

        return $payment;
    }
   

  
}