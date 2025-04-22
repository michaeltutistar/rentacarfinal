<?php

namespace App\Http\Controllers;

use App\Models\registro_contrato;
use Illuminate\Http\Request;
use DB;
use Redirect;
use App\Models\estado_vehiculo;
use App\Models\reserva;
use App\Models\control_kilometraje;
use App\Http\Controllers\ControlKilometrajeController;
use Illuminate\Support\Facades\App;
class RegistroContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contratos=DB::table('registro_contratos')
        ->join('reservas','reservas.id_reserva','=','registro_contratos.id_de_reserva')
        ->join('clientes','reservas.cliente_id','=','clientes.id_cliente')
        ->join('vehiculos','reservas.vehiculo_id','=','vehiculos.id_vehiculo')
        ->select()
        ->where("Estado_contrato","=","Salida")
        ->get();
        return view('dashboards.lista_contratos',compact("contratos"));
       
    }
    public function index_fin()
    {
        $contratos=DB::table('registro_contratos')
        ->join('reservas','reservas.id_reserva','=','registro_contratos.id_de_reserva')
        ->join('clientes','reservas.cliente_id','=','clientes.id_cliente')
        ->join('vehiculos','reservas.vehiculo_id','=','vehiculos.id_vehiculo')
        ->select()
        ->where("Estado_contrato","=","Finalizado")
        ->get();
        return view('dashboards.lista_contratos_fin',compact("contratos"));
       
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
    public function store(Request $request,$id)
    {
        $data_salida=self::convertir_array_string($request->all());
        $todo=$request->all();
        $ldate = date('Y-m-d-H_i_s');
        $contrato= new registro_contrato;
        $contrato->id_de_reserva=$id;
        $contrato->fecha_salida =$request->fecha_salida;
        $contrato->km_salida=$request->km_salida;
        $contrato->voucher=$request->voucher;
        $contrato->km_permitido=$request->km_permitido;
        $contrato->hora_salida=$request->hora_salida;
        $contrato->combustible_salida=$request->combustible_salida;
        $contrato->destino=$request->destino;
        $contrato->entregado_por="url img";
        $contrato->recibido_por="url img";
        $contrato->inventario_salida="url img";
        $contrato->observaciones_entregado=$request->observaciones_entregado;
        $contrato->observaciones_recibido=$request->observaciones_recibido;
        $contrato->estado_salida=$data_salida;
        $contrato->Estado_contrato="Salida";
        $contrato->save();
        $id_contrato=$contrato->id;
        $img = $request->entregado_por;
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $nombres1=$id_contrato."-entregado_por.png";
        \Storage::disk('local')->put("/firmas/".$nombres1,  $image_base64);
        $img = $request->recibido_por;
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $nombres2=$id_contrato."-recibido_por.png";
        \Storage::disk('local')->put("/firmas/".$nombres2,  $image_base64);
        $img = $request->inventario;
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $nombres3=$id_contrato."-inventario_salida.png";
        \Storage::disk('local')->put("/firmas/".$nombres3,  $image_base64);
        $contrato->entregado_por=$nombres1;
        $contrato->recibido_por=$nombres2;
        $contrato->inventario_salida=$nombres3;

        
        $contrato->save();
        $actualizar_reserva=reserva::findOrFail($id);
        $actualizar_reserva->estado_reserva="Contratado";
        $actualizar_reserva->save();

        return Redirect::to('/lista_contratos')->with('correcto', 'El cliente se creo correctamente');
        return response(["id_reserva"=>$todo]);
    }

    public function convertir_array_string($objeto){
        $array_estado=array(
            "documento_dia"=>isset($objeto["documento_dia"])?1:0,
            "Luces_exteriores"=>isset($objeto["Luces_exteriores"])?1:0,
            "Luz_interior"=>isset($objeto["Luz_interior"])?1:0,
            "Limpia_brisas"=>isset($objeto["Limpia_brisas"])?1:0,
            "Pito"=>isset($objeto["Pito"])?1:0,
            "Espejos_externos_internos"=>isset($objeto["Espejos_externos_internos"])?1:0,
            "Radio"=>isset($objeto["Radio"])?1:0,
            "Llanta_repuesto"=>isset($objeto["Llanta_repuesto"])?1:0,
            "Gato"=>isset($objeto["Gato"])?1:0,
            "Cruceta"=>isset($objeto["Cruceta"])?1:0,
            "Equipo_carretera"=>isset($objeto["Equipo_carretera"])?1:0,
            "Emblemas"=>isset($objeto["Emblemas"])?1:0,
            "Antena"=>isset($objeto["Antena"])?1:0,
            "Copas"=>isset($objeto["Copas"])?1:0,
            "mantenimiento"=>isset($objeto["mantenimiento"])?1:0,
            "lavado"=>isset($objeto["lavado"])?1:0
        );
        $array_estado=json_encode( $array_estado );  
        return $array_estado; 
    }

    


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registro_contrato  $registro_contrato
     * @return \Illuminate\Http\Response
     */
    public function show(registro_contrato $registro_contrato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registro_contrato  $registro_contrato
     * @return \Illuminate\Http\Response
     */
    public function edit(registro_contrato $registro_contrato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registro_contrato  $registro_contrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registro_contrato $registro_contrato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registro_contrato  $registro_contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy(registro_contrato $registro_contrato)
    {
        //
    }

    public function generar_pdf($data){
        
        $contratos=DB::table('registro_contratos')
        ->join('reservas','reservas.id_reserva','=','registro_contratos.id_de_reserva')
        ->join('clientes','reservas.cliente_id','=','clientes.id_cliente')
        ->join('vehiculos','reservas.vehiculo_id','=','vehiculos.id_vehiculo')
        ->select()
        ->where("registro_contratos.id","=",$data)
        ->first();
       if($contratos->estado_entrada==null){
        $estado=json_decode($contratos->estado_salida,TRUE);  
        $dompdf = App::make("dompdf.wrapper");
        $dompdf->loadView("dashboards.contrato_proceso",compact("contratos","estado"));
        $nombres_completos=$contratos->nombres."-".$contratos->apellidos;
        $nombre_archivo="Contrato-".$nombres_completos.".pdf";
       // return $dompdf->stream();
       return $dompdf->download($nombre_archivo); 
       }else{
        $finalizado=json_decode($contratos->estado_entrada,TRUE); 
        $estado=json_decode($contratos->estado_salida,TRUE);  
        $dompdf = App::make("dompdf.wrapper");
        $dompdf->loadView("dashboards.contrato",compact("contratos","estado","finalizado"));
        $nombres_completos=$contratos->nombres."-".$contratos->apellidos;
        $nombre_archivo="Contrato-".$nombres_completos.".pdf";
        return $dompdf->download($nombre_archivo); 
       }
        
        
        
    }

    public function finalizar_contrato($id){
        $contratos=DB::table('registro_contratos')
        ->join('reservas','reservas.id_reserva','=','registro_contratos.id_de_reserva')
        ->select()
        ->where("registro_contratos.id","=",$id)
        ->first();

        $id_contrato=$id;
        $reserva_id=$contratos->id_reserva;
       
        $reservas=DB::table('reservas')
        ->join('clientes','reservas.cliente_id','=','clientes.id_cliente')
        ->join('vehiculos','reservas.vehiculo_id','=','vehiculos.id_vehiculo')
        ->join('estado_vehiculos','estado_vehiculos.vehiculo_id','=','vehiculos.id_vehiculo')
        ->select()
        ->where('id_reserva','=',$reserva_id)
        ->get();
        $url_salida=$contratos->inventario_salida;
        return view('dashboards.finalizar_contrato',compact("reservas","id_contrato","url_salida"));
        return response(["finalizar"=>$id]);
    }

    public function fin(Request $request,$id){
        
        $vehiculo=DB::table('registro_contratos')
        ->select()
        ->join("reservas","registro_contratos.id_de_reserva","=","reservas.id_reserva")
        ->where("registro_contratos.id","=",$id)
        ->first();


        $data_entrada=self::convertir_array_string_entrada($request->all(),$vehiculo->vehiculo_id);
        $todo=$request->all();
        $actualizar_contrato=registro_contrato::findOrFail($id);
        $actualizar_contrato->fecha_entrada=$request->fecha_entrada;
        $actualizar_contrato->hora_entrada=$request->hora_entrada;
        $actualizar_contrato->km_entrada=$request->km_entrada;
        $actualizar_contrato->km_por_cobrar=$request->km_por_cobrar;
        $actualizar_contrato->combustible_entrada=$request-> combustible_entrada;
        $actualizar_contrato->dias=$request->dias;
        //entrada
        $img = $request->entregado_por_entrada;
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $nombres1=$id."-entregado_por_entrada.png";
        \Storage::disk('local')->put("/firmas/".$nombres1,  $image_base64);
        $actualizar_contrato->entregado_por_entrada=$nombres1;
        //recibido
        $img = $request->recibido_por_entrada;
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $nombres2=$id."-recibido_por_entrada.png";
        \Storage::disk('local')->put("/firmas/".$nombres2,  $image_base64);
        $actualizar_contrato->recibido_por_entrada=$nombres2;
        $img = $request->inventario;
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $nombres3=$id."-inventario_entrada.png";
        \Storage::disk('local')->put("/firmas/".$nombres3,  $image_base64);
        $actualizar_contrato->inventario_entrada=$nombres3;
       

        $actualizar_contrato->estado_entrada=$data_entrada;
        $actualizar_contrato->observaciones_entregado_entrada=$request->observaciones_entregado_entrada;
        $actualizar_contrato->observaciones_recibido_entrada=$request->observaciones_recibido_entrada;
        $actualizar_contrato->Estado_contrato="Finalizado";
        $actualizar_contrato->save();
        $actualizar_reserva=reserva::findOrFail($vehiculo->id_reserva);
        $actualizar_reserva->estado_reserva="Finalizado";
        $actualizar_reserva->save();
        return Redirect::to('/lista_contratos_finalizados')->with('correcto', 'El cliente se creo correctamente');
       
    }

    function crear_notificacion_estado($contador,$meta,$id,$nombre,$descripcion){
        if($contador >= $meta){
            $img="dash/images/revision.jpg";
            $crear_noti=new NotificacionesController();
            $crear_noti->create($nombre,$descripcion,$img,$id);
        }
           
    }
    public function convertir_array_string_entrada($objeto,$id_vehiculo){
        $id_estado=DB::table("estado_vehiculos")->select("id")->where("vehiculo_id","=",$id_vehiculo)->first();
        $id_estado=$id_estado->id;

        $control=DB::table("control_kilometrajes")->select()->where("vehiculo_ids","=",$id_vehiculo)->first();
        $contador=$objeto["km_entrada"]-$control->km_actuales;
        $control=$control->id;
        //incrimentar contador
        
        $cambio=control_kilometraje::find($control);
        $cambio->km_actuales=$objeto["km_entrada"];
        $cambio->contador=$contador;
        $cambio->save();
        self::crear_notificacion_estado($contador,$cambio->limite,$cambio->vehiculo_ids,"Alerta Cambio Aceite","El Vehículo Necesita cambio de aceite");

        $cambio=control_kilometraje::find($control+1);
        $cambio->km_actuales=$objeto["km_entrada"];
        $cambio->contador=$contador;
        $cambio->save();
         self::crear_notificacion_estado($contador,$cambio->limite,$cambio->vehiculo_ids,"Alerta Cambio Correa","El Vehículo Necesita cambio de Correa");

        $cambio=control_kilometraje::find($control+2);
        $cambio->km_actuales=$objeto["km_entrada"];
        $cambio->contador=$contador;
        $cambio->save();
        self::crear_notificacion_estado($contador,$cambio->limite,$cambio->vehiculo_ids,"Alerta Cambio Pastillas","El Vehículo Necesita cambio de pastillas");

        $actualizar_estado= estado_vehiculo::findOrFail($id_estado);


        $actualizar_estado->documento_dia=isset($objeto["documento_dia"])?1:0;
        $actualizar_estado->Luces_exteriores=isset($objeto["Luces_exteriores"])?1:0;
        $actualizar_estado->Luz_interior=isset($objeto["Luz_interior"])?1:0;
        $actualizar_estado->Limpia_brisas=isset($objeto["Limpia_brisas"])?1:0;
        $actualizar_estado->Pito=isset($objeto["Pito"])?1:0;
        $actualizar_estado->Espejos_externos_internos=isset($objeto["Espejos_externos_internos"])?1:0;
        $actualizar_estado->Radio=isset($objeto["Radio"])?1:0;
        $actualizar_estado->Llanta_repuesto=isset($objeto["Llanta_repuesto"])?1:0;
        $actualizar_estado->Gato=isset($objeto["Gato"])?1:0;
        $actualizar_estado->Cruceta=isset($objeto["Cruceta"])?1:0;
        $actualizar_estado->Equipo_carretera=isset($objeto["Equipo_carretera"])?1:0;
        $actualizar_estado->Emblemas=isset($objeto["Emblemas"])?1:0;
        $actualizar_estado->Antena=isset($objeto["Antena"])?1:0;
        $actualizar_estado->Copas=isset($objeto["Copas"])?1:0;
        $actualizar_estado->mantenimiento=isset($objeto["mantenimiento"])?1:0;
        $actualizar_estado->lavado=isset($objeto["lavado"])?1:0;
        $actualizar_estado->kilometraje=$objeto["km_entrada"];
        $actualizar_estado->save();
        $array_estado=array(
            "documento_dia"=>isset($objeto["documento_dia"])?1:0,
            "Luces_exteriores"=>isset($objeto["Luces_exteriores"])?1:0,
            "Luz_interior"=>isset($objeto["Luz_interior"])?1:0,
            "Limpia_brisas"=>isset($objeto["Limpia_brisas"])?1:0,
            "Pito"=>isset($objeto["Pito"])?1:0,
            "Espejos_externos_internos"=>isset($objeto["Espejos_externos_internos"])?1:0,
            "Radio"=>isset($objeto["Radio"])?1:0,
            "Llanta_repuesto"=>isset($objeto["Llanta_repuesto"])?1:0,
            "Gato"=>isset($objeto["Gato"])?1:0,
            "Cruceta"=>isset($objeto["Cruceta"])?1:0,
            "Equipo_carretera"=>isset($objeto["Equipo_carretera"])?1:0,
            "Emblemas"=>isset($objeto["Emblemas"])?1:0,
            "Antena"=>isset($objeto["Antena"])?1:0,
            "Copas"=>isset($objeto["Copas"])?1:0,
            "mantenimiento"=>isset($objeto["mantenimiento"])?1:0,
            "lavado"=>isset($objeto["lavado"])?1:0
        );
        $array_estado=json_encode( $array_estado );  
        return $array_estado; 
    }
}
