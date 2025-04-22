<?php

namespace App\Http\Controllers;

use App\Mail\ReservaCorreo;
use App\Models\reserva;
use App\Services\MercadoPagoService;
use DateTime;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Redirect;

class ReservaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($location)
    {
        $lugar = "";
        $clientes = DB::table('clientes')
            ->select()
            ->get();

        $vehiculos = DB::table('vehiculos')
            ->select() // Selecciona todas las columnas
            ->where('disponibilidad', '=', 1)
            ->get();



// Establecer el lugar
        $lugar = $location == "EC" ? "Ecuador" : "Colombia";
        $datalugar = $location == "EC" ? "EC" : "CO";
        //return response(["data"=>$location]);

        return view('dashboards.crear_reserva', compact("vehiculos", "clientes", 'lugar','datalugar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$lugar_po)
    {
      
        $todo = $request->all();

        $nuevo_lugar = $request->lugar;
        $nuevo_precio_transporte = 0;
        if ($nuevo_lugar == "Otro") {
            $nuevo_lugar = $request->nuevo_lugar;
            $nuevo_precio_transporte = $request->nuevo_lugar_precio;
        } else {
            if ($nuevo_lugar == "Pasto") {
                $nuevo_precio_transporte = 35000;
            }
            if ($nuevo_lugar == "Ipiales") {
                $nuevo_precio_transporte = 140000;
            }
        }
        $trans = 0;
        if (is_null($nuevo_lugar)) {
            $trans = 0;
            $nuevo_lugar = "No requiere transporte";
        } else {
            $trans = 1;
        }

        //obtengo el cliente
        $clientes = DB::table('clientes')
            ->select()
            ->where("numero_documento", "=", $request->cedula_usuario)
            ->first();

        //calcular dias
        $dias = self::diferencia_dias($request->desde, $request->hasta);
        //obtengo el vehiculo
        $vehiculo = DB::table('vehiculos')
            ->select()
            ->where("id_vehiculo", "=", $request->vehiculo)
            ->first();
        if ($lugar_po == "EC") {
                $vehiculo->precio_alquiler = $vehiculo->Precio_Variante; // Reemplaza precio_alquiler con Precio Variante
                unset($vehiculo->Precio_Variante); // Opcional: elimina Precio Variante del objeto
        }
        //calcular reservas
        //insidencia
        
        $resultado = $vehiculo->precio_alquiler;
     
        $precio_total = $resultado * $dias;
        $valor_reserva = (($precio_total) * 30) / 100;

        //calcular opciones de trasnporte y lavado
        $transporte = 0;
        if (!is_null($request->gridRadios) || !is_null($request->gridRadios1)) {
            $transporte = 1;
        } else {
            $transporte = 0;
        }
        $lavado = !is_null($request->lavados) ? 1 : 0;
        $lugar = $transporte == 1 ?
        is_null($request->gridRadios) ? "Ipiales" : "Pasto"
        : "No transporte aeropuerto";
        $personas = $transporte == 1 ? $request->personas : 0;

        //comprobar lavado
        $precio_lavado = $lavado == 1 ? $vehiculo->precio_lavado : 0;
        //calcular saldo
        $precio_trasnporte = $nuevo_precio_transporte;

        $saldo = self::saldos_calculo($precio_total, $valor_reserva, $precio_trasnporte, $precio_lavado);
        $saldo = $saldo - $request->descuento;
        //return response(["data"=>$saldo,"total"=>$precio_total,"trans"=>$precio_trasnporte,"reserva"=>$valor_reserva]);
        $reservas = new reserva;
        $reservas->vehiculo_id = $request->vehiculo;
        $reservas->cliente_id = $clientes->id_cliente;
        //$reservas->fecha_inicio=$request->desde;
        //$reservas->fecha_fin=$request->hasta;
        $reservas->fecha_inicio = $request->desde . " " . $request->hora_entrega;
        $reservas->fecha_fin = $request->hasta . " " . $request->hora_recogida;
        $reservas->dias_reserva = $dias;
        $reservas->transporte = $trans;
        $reservas->precio_transporte = $nuevo_precio_transporte;
        $reservas->personas = 0;
        $reservas->lugar = $nuevo_lugar;
        $reservas->lavado = $lavado;
        $reservas->valor_reserva = $valor_reserva;
        $reservas->saldo = $saldo;
        $reservas->descuento = $request->descuento;
        $reservas->estado_reserva = "Reserva";
        $reservas->save();
        self::enviar_correo($clientes, $vehiculo, $reservas);
        return Redirect::to('/listar_reservas')->with('correcto', 'El cliente se creo correctamente');

        return response(["data" => "ok"]);
    }

    public function asignar_lugar_precio_reserva($a)
    {
        $lugar = "";
        $precio = 0;
        switch ($a) {
            case 1:
                $lugar = "Pasto";
                $precio = 0;
                break;
            case 2:
                $lugar = "Aeropuerto-Pasto";
                $precio = 35000;
                break;
            case 3:
                $lugar = "Aeropuerto-Ipiales";
                $precio = 140000;
                break;
        }
        return array($lugar, $precio);
    }
    public function reserva_unica($id_vehiculo, $id_cliente, $desde, $hasta, $transporte)
    {
        $partes = explode("-", $transporte);
        $transporte_entrega = $partes[0];
        $transporte_recogida = $partes[1];
        list($transporte_entrega, $transporte_precio) = self::asignar_lugar_precio_reserva($transporte_entrega);
        list($transporte_recogida, $transporte_precio1) = self::asignar_lugar_precio_reserva($transporte_recogida);
        $text_lugar = "Lugar de Entrega " . $transporte_entrega . ", Lugar de Recogida " . $transporte_recogida;
        //obtengo el cliente

        $clientes = DB::table('clientes')
            ->select()
            ->where("id_cliente", "=", $id_cliente)
            ->first();
        //calcular dias
        $dias = self::diferencia_dias($desde, $hasta);
        //obtengo el vehiculo
        $vehiculo = DB::table('vehiculos')
            ->select()
            ->where("id_vehiculo", "=", $id_vehiculo)
            ->first();
        $dias_temporal = $dias;
        if ($dias >= 7) {

            $dias = $dias - 1;
        }
        $saldo = $vehiculo->precio_alquiler * $dias;
        $valor_reserva = ($saldo * 15) / 100;
        $saldo = $saldo - $valor_reserva;
        $dias = $dias_temporal;
        //return response(["data"=>$saldo,"total"=>$precio_total,"trans"=>$precio_trasnporte,"reserva"=>$valor_reserva]);
        $reservas = new reserva;
        $reservas->vehiculo_id = $id_vehiculo;
        $reservas->cliente_id = $id_cliente;
        $reservas->fecha_inicio = $desde;
        $reservas->fecha_fin = $hasta;
        $reservas->dias_reserva = $dias;
        $reservas->transporte = 1;
        $reservas->precio_transporte = $transporte_precio + $transporte_precio1;
        $reservas->personas = 0;
        $reservas->lugar = $text_lugar;
        $reservas->lavado = 1;
        $reservas->valor_reserva = $valor_reserva;
        $reservas->saldo = $saldo + $transporte_precio + $transporte_precio1;
        $reservas->descuento = 0;
        $reservas->estado_reserva = "Reserva";
        $reservas->save();
        self::enviar_correo($clientes, $vehiculo, $reservas);
        // $id_reserva=$reservas->id_reserva;
        $id_reserva = $reservas->id_reserva;
        return array($id_reserva, $clientes, $vehiculo);
    }
    public function lugares($lugar, $cantidad)
    {
        //pasto  35000
        //ipiales 140000

        if ($lugar == "Pasto") {
            return 35000 * $cantidad;
        }
        if ($lugar == "Ipiales") {
            return 140000 * $cantidad;
        }
    }
    public function diferencia_dias($inicio, $fin)
    {
        $separar_inicio = explode(" ", $inicio);
        $separar_fin = explode(" ", $fin);
        $f1 = date_create($separar_inicio[0]);
        $f2 = date_create($separar_fin[0]);
        $dias = date_diff($f1, $f2)->format('%a');
        return $dias;
    }
    public function saldos_calculo($total_vehiculo, $descuento_reserva, $p_transporte, $p_lavado)
    {
        $saldito = $total_vehiculo - $descuento_reserva + $p_transporte + $p_lavado;
        return $saldito;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function show(reserva $reserva)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function edit(reserva $reserva)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reserva $reserva)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reserva  $reserva
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reserva = reserva::find($id);
        $reserva->delete();
        return redirect()->back()->with('error', 'Reserva Eliminada');
    }

    public function listar_reserva()
    {
        $reservas = DB::table('reservas')
            ->join('clientes', 'reservas.cliente_id', '=', 'clientes.id_cliente')
            ->join('vehiculos', 'reservas.vehiculo_id', '=', 'vehiculos.id_vehiculo')
            ->select()
            ->where("estado_reserva", "!=", "Contratado")
            ->where("estado_reserva", "!=", "Finalizado")
            ->orderBy('fecha_inicio', 'asc')
            ->paginate(5);

        return view('dashboards.listar_reservas', compact("reservas"));
    }
    public function listar_reserva_id(Request $request)
    {

        $reserva = DB::table('reservas')
            ->join('clientes', 'reservas.cliente_id', '=', 'clientes.id_cliente')
            ->join('vehiculos', 'reservas.vehiculo_id', '=', 'vehiculos.id_vehiculo')
            ->select()

            ->where("id_reserva", "=", $request->serial)
            ->first();

        return view('dashboards.listar_reserva_unica', compact("reserva"));
    }
    public function generar_contrato($id)
    {
        $reservas = DB::table('reservas')
            ->join('clientes', 'reservas.cliente_id', '=', 'clientes.id_cliente')
            ->join('vehiculos', 'reservas.vehiculo_id', '=', 'vehiculos.id_vehiculo')
            ->join('estado_vehiculos', 'estado_vehiculos.vehiculo_id', '=', 'vehiculos.id_vehiculo')
            ->select()
            ->where('id_reserva', '=', $id)
            ->get();
        return view('dashboards.registrar_contrato', compact("reservas"));
    }

    public function codigo_transporte($a)
    {
        $validador_a = 0;
        switch ($a) {
            case 'Pasto':
                $validador_a = 1;
                break;
            case 'Aeropuerto-Pasto':
                $validador_a = 2;
                break;
            case 'Aeropuerto-Ipiales':
                $validador_a = 3;
                break;
        }
        return $validador_a;

    }
    public function consulta_clientes_reserva(Request $request)
    {

        if ($request->lugar_entrega == "" and
            $request->lugar_recogida == "" and
            $request->desdes == "" and
            $request->hastas == "") {
            return redirect()->back()->with('error', 'Debe Rellenar Todos los Campos');
        }
        $entrega = self::codigo_transporte($request->lugar_entrega);
        $recogida = self::codigo_transporte($request->lugar_recogida);
        $transporte = $entrega . "-" . $recogida;

        $todo = $request->all();

        $fecha_prueba = strtotime($todo["desdes"]);

        $desde = date('Y-m-d', $fecha_prueba);
        $desde = $desde . " " . $todo["hora_entrega"];

        $fecha_prueba1 = strtotime($todo["hastas"]);
        $hasta = date('Y-m-d', $fecha_prueba1);
        $hasta = $hasta . " " . $todo["hora_recogida"];

        $date1 = new DateTime($desde);
        $date2 = new DateTime($hasta);
        $diff = $date1->diff($date2);
        // return response(["data"=>$diff]);
        $desde = $date1;
        $hasta = $date2;

        // will output 2 days
        $disponibles = self::comprobar_vehiculos_disponibles($desde, $hasta);

        $dia = $diff->days;
        // return response(["data"=>$disponibles]);
        return view('webpage.reserva', compact("todo", "disponibles", "dia", "transporte"));
        //return response(["data"=>$todo,"dias"=>$diff->days,"reseradv"=>$disponibles]);
    }
    public function comprobar_vehiculos_disponibles($desde, $hasta)
    {
        $finalizados = DB::table("reservas")
            ->select()
            ->where("estado_reserva", "=", "Finalizado")
            ->get();
        $finalizados = self::obtener_id_f($finalizados);

        $reservas = DB::table('reservas')

            ->select("vehiculo_id")

            ->where(function ($query) use ($desde, $hasta) {
                $query->whereBetween('fecha_inicio', [$desde, $hasta]);
            })

            ->orWhere(function ($query) use ($desde, $hasta) {
                $query->whereBetween('fecha_fin', [$desde, $hasta]);
            })

            ->orWhere(function ($query) use ($desde, $hasta) {
                $query->where('fecha_inicio', "<", $desde)
                    ->where('fecha_fin', ">", $hasta);
            })
            ->whereNotIn("id_reserva", $finalizados)
            ->get();

        $disponibles = self::obtener_id($reservas);

        $disponibles = DB::table("vehiculos")
            ->where("disponibilidad", "=", 1)
            ->whereNotIn("id_vehiculo", $disponibles)
            ->get();
        return $disponibles;
    }

    public function obtener_id($objects)
    {
        $ids = array();
        foreach ($objects as $object) {
            $actual = $object->vehiculo_id;
            array_push($ids, $actual);
        }
        return $ids;
    }
    public function obtener_id_f($objects)
    {
        $ids = array();
        foreach ($objects as $object) {
            $actual = $object->id_reserva;
            array_push($ids, $actual);
        }
        return $ids;
    }

    public function enviar_correo($cliente, $vehiculo, $reserva)
    {
        $arreglo = $cliente;
        $arreglo1 = $vehiculo;
        $arreglo2 = $reserva;
        $correos = array("lista_reservas@rentacarpasto.com", $arreglo->email);
        Mail::to($correos)->send(new ReservaCorreo($arreglo, $arreglo1, $arreglo2));
        return "OK";
    }

    public function reserva_cliente($data, $fecha1, $fecha2, $transporte)
    {
        $disponible = DB::table('vehiculos')->select()->where("id_vehiculo", '=', $data)->first();
        $desdes = $fecha1;
        $hastas = $fecha2;
        $dia = self::diferencia_dias($desdes, $hastas);
        return view("webpage.reserva_unica", compact("disponible", "desdes", "hastas", "dia", "transporte"));
    }

    public function actualizar_reserva($id)
    {
        $reservas = DB::table("reservas")->where('id_reserva', "=", $id)->first();
        $vehiculos = DB::table("vehiculos")->get();
        $persona = DB::table("clientes")->where("id_cliente", "=", $reservas->cliente_id)->first();
        $vehiculo_unico = DB::table("vehiculos")->where("id_vehiculo", "=", $reservas->vehiculo_id)->first();
        // return response(["data"=>$reservas]);
        //   return response(["data"=>$vehiculo->precio_alquiler]);
        return view("dashboards.actualizar_reserva", compact("reservas", "vehiculos", "persona", "vehiculo_unico"));
    }

    public function actualizar(Request $request, $id)
    {

        $cambios = reserva::find($id);

        $cambios->fecha_inicio = $request->desde . " " . $request->hora_entrega;
        $cambios->fecha_fin = $request->hasta . " " . $request->hora_recogida;
        $cambios->vehiculo_id = $request->vehiculo_cambio;
        $cambios->dias_reserva = $request->dias;
        $cambios->precio_transporte = $request->transporte_actualizacion;
        $cambios->valor_reserva = $request->reserva_u;
        $cambios->saldo = $request->saldo_u;
        $cambios->descuento = $request->descuento;
        $cambios->save();

        $clientes = DB::table('clientes')
            ->select()
            ->where("id_cliente", "=", $cambios->cliente_id)
            ->first();

        $vehiculo = DB::table('vehiculos')
            ->select()
            ->where("id_vehiculo", "=", $cambios->vehiculo_id)
            ->first();
        self::enviar_correo($clientes, $vehiculo, $cambios);
        return Redirect::to('/listar_reservas')->with('actualizado', 'El cliente se creo correctamente');

    }

    public function vista_pago($id)
    {
        $var = new MercadoPagoService();

        $lista_bancos = $var->get_bancos();
        $reserva = DB::table("reservas")
            ->join('clientes', 'reservas.cliente_id', '=', 'clientes.id_cliente')
            ->join('vehiculos', 'reservas.vehiculo_id', '=', 'vehiculos.id_vehiculo')
            ->select()
            ->where("id_reserva", "=", $id)->first();
        //return response(["h"=>$lista_bancos]);
        return view("webpage.pago", compact("lista_bancos", "reserva"));
    }

    public function generar_pago(Request $request, $id)
    {

        $id = base64_decode($id) / 1996;
        $reserva = DB::table("reservas")
            ->join('clientes', 'reservas.cliente_id', '=', 'clientes.id_cliente')
            ->join('vehiculos', 'reservas.vehiculo_id', '=', 'vehiculos.id_vehiculo')
            ->select()
            ->where("id_reserva", "=", $id)->first();

        $var = new MercadoPagoService();
        $precio = $request->flexRadioDefault == "porcentaje" ? $reserva->valor_reserva : $reserva->valor_reserva + $reserva->saldo;
        $respuesta_banco = $var->CreatePayment($precio, $reserva->nombre_vehiculo, $reserva->email, $request->T_documento, $request->no_cedula, $request->T_persona, $request->bank_code);
        $url = $respuesta_banco->transaction_details->external_resource_url;
        return "<script> window.open('" . $url . "');</script>";
        return response(["res" => $respuesta_banco->transaction_details->external_resource_url]);
        // return response(["h"=>$lista_bancos]);
        return view("webpage.pago", compact("respuesta_banco"));
    }

}
