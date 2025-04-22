<?php

namespace App\Http\Controllers;

use App\Models\notificaciones;
use Illuminate\Http\Request;
use DB;
class NotificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notificaciones=DB::table("notificaciones")->select()->where("estado","=","0")->get();
        return response(["data"=>$notificaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($titulo,$descripcion,$url,$id_vehiculo)
    {
        $nueva_notificacion=new notificaciones;
        $nueva_notificacion->id_v=$id_vehiculo;
        $nueva_notificacion->titulo_notificacion=$titulo;
        $nueva_notificacion->descripcion_notificacion=$descripcion;
        $nueva_notificacion->img_notificacion=$url;
        $nueva_notificacion->estado=0;
        $nueva_notificacion->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\notificaciones  $notificaciones
     * @return \Illuminate\Http\Response
     */
    public function show(notificaciones $notificaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\notificaciones  $notificaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(notificaciones $notificaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\notificaciones  $notificaciones
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $notificacion = notificaciones::findOrFail($id);
        $notificacion->estado=1;
        $notificacion->save();
        return response(["data"=>"Notificacion Ok ".$id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\notificaciones  $notificaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(notificaciones $notificaciones)
    {
        
    }

    public function crear_notificaciones(){
        $estados=DB::table("estado_vehiculos")
            ->join("vehiculos",'estado_vehiculos.vehiculo_id','=','vehiculos.id_vehiculo')
            ->select()
            ->orwhere('documento_dia','=',0)
            ->orwhere('Luces_exteriores','=',0)
            ->orwhere('Luz_interior','=',0)
            ->orwhere('Limpia_brisas','=',0)
            ->orwhere('Pito','=',0)
            ->orwhere('Espejos_externos_internos','=',0)
            ->orwhere('Radio','=',0)
            ->orwhere('Llanta_repuesto','=',0)
            ->orwhere('Gato','=',0)
            ->orwhere('Cruceta','=',0)
            ->orwhere('Equipo_carretera','=',0)
            ->orwhere('Emblemas','=',0)
            ->orwhere('Antena','=',0)
            ->orwhere('Copas','=',0)
            ->orwhere('mantenimiento','=',0)
            ->orwhere('lavado','=',0)
            ->get();
            $contador=count($estados);

            $control=DB::select("SELECT * FROM `control_kilometrajes` WHERE `contador` >= `limite` ");
            $contador_control=count($control);

       
       if($contador==0 AND $contador_control==0){
            return response(["data"=>"ok"]);
       }
      // self::create("hola","mundo");
      if($contador!=0){
            foreach ($estados as $estado ) {
                $id=$estado->id_vehiculo;
                $nombre= $estado->nombre_vehiculo;
                $descripcion="El Vehículo Necesita Revisión";
                $img="dash/images/revision.jpg";
                self::create($nombre,$descripcion,$img,$id);
            }
      }
      if($contador_control!=0){
        foreach ($control as $contro ) {
            $id=$contro->vehiculo_ids;
            $nombre= $contro->tipo_vehi;
            $descripcion="El Vehículo Necesita cambio de ".$nombre;
            $img="dash/images/revision.jpg";
            self::create($nombre,$descripcion,$img,$id);
        }
    }
 
     

      
    
       
    }
}
