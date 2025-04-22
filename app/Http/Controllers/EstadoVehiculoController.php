<?php

namespace App\Http\Controllers;

use App\Models\estado_vehiculo;
use App\Models\vehiculos;
use Illuminate\Http\Request;
use App\Models\control_kilometraje;
use App\Http\Controllers\ControlKilometrajeController;
use DB;
use Redirect;
use Session;
class EstadoVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
       
        

        //return response(["datas"=>$request->Foto_izq]);
        $ldate = date('Y-m-d-H_i_s');
        //imagen left
/*
        $file = $request->file('Foto_izq');
        
        $nombre_l = $file->getClientOriginalName();
        
        \Storage::disk('local')->put("/estado/".$ldate.$nombre_l,  \File::get($file));
      
        //imagen right
        $file = $request->file('Foto_der');
        $nombre_r = $file->getClientOriginalName();
        \Storage::disk('local')->put("/estado/".$ldate.$nombre_r,  \File::get($file));
      
        
       

        //imagen frontal

        $file = $request->file('Foto_frente');
        $nombre_f = $file->getClientOriginalName();
        \Storage::disk('local')->put("/estado/".$ldate.$nombre_f,  \File::get($file));

        //imagen trasera

        $file = $request->file('Foto_trasera');
        $nombre_t = $file->getClientOriginalName();
        \Storage::disk('local')->put("/estado/".$ldate.$nombre_t,  \File::get($file));

*/


        $crear_estado=new estado_vehiculo;
        $crear_estado->vehiculo_id=$id;
        $crear_estado->documento_dia = self::validador_checks($request->documento_dia);
        $crear_estado->Luces_exteriores = self::validador_checks( $request->Luces_exteriores);
        $crear_estado->Luz_interior= self::validador_checks( $request->Luz_interior);
        $crear_estado->Limpia_brisas= self::validador_checks( $request->Limpia_brisas);
        $crear_estado->Pito= self::validador_checks( $request->Pito);
        $crear_estado->Espejos_externos_internos= self::validador_checks( $request->Espejos_externos_internos);
        $crear_estado->Radio = self::validador_checks($request->Radio);
        $crear_estado->Llanta_repuesto= self::validador_checks( $request->Llanta_repuesto);
        $crear_estado->Gato = self::validador_checks( $request->Gato);
        $crear_estado->Cruceta = self::validador_checks( $request->Cruceta);
        $crear_estado->Equipo_carretera = self::validador_checks($request->Equipo_carretera);
        $crear_estado->Emblemas= self::validador_checks(  $request->Emblemas);
        $crear_estado->Antena= self::validador_checks( $request->Antena);
        $crear_estado->Copas= self::validador_checks(  $request->Copas);
       
        $crear_estado->mantenimiento= self::validador_checks( $request->mantenimiento_m);
        $crear_estado->lavado= self::validador_checks( $request->lavado);
        //$crear_estado->Foto_izq  $request->Foto_izq
        //$crear_estado->Foto_der ="da";
        //$crear_estado->Foto_frente ="da";
        //$crear_estado->Foto_trasera ="da";
        /*
        $crear_estado->Foto_izq=$ldate.$nombre_l;
        $crear_estado->Foto_der=$ldate.$nombre_r;
        $crear_estado->Foto_frente=$ldate.$nombre_f;
        $crear_estado->Foto_trasera=$ldate.$nombre_t;
        */
        $crear_estado->Foto_izq="foto";
        $crear_estado->Foto_der="foto";
        $crear_estado->Foto_frente="foto";
        $crear_estado->Foto_trasera="foto";
        $crear_estado->kilometraje=$request->kilometraje;
        $crear_estado->observaciones= $request->observaciones;
        $crear_estado->save();

        $nuevo_tipo=new ControlKilometrajeController();
        $nuevo_tipo=$nuevo_tipo->create($id,$request->kilometraje);
        return Redirect::to('/listar_vehiculo')->with('correcto', 'El vehículo se creo correctamente');
        return response(["datas"=>"datos agregados correctamente"]);
    }

    public function validador_checks($valor_check){
        //con un if terneario valido si el valor del check es igual
        //a on , entonces retorna true, de lo contrario si esta diferente 
        //retorna false
        $resultado=$valor_check=="on"? true:false;
        return $resultado;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\estado_vehiculo  $estado_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehiculo=DB::table('vehiculos')
        ->join("estado_vehiculos","estado_vehiculos.vehiculo_id","=","vehiculos.id_vehiculo")
        ->select()
        ->where("id_vehiculo","=",$id)
        ->first();

        $indicadores=DB::table("control_kilometrajes")
        ->select()
        ->where("vehiculo_ids","=",$id)
        ->get();
        return view('dashboards.actualizar_vehiculo',compact("vehiculo","indicadores"));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\estado_vehiculo  $estado_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(estado_vehiculo $estado_vehiculo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\estado_vehiculo  $estado_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id_vehiculo)
    {
        
        if($request->cd1!=null){
           $cambios=control_kilometraje::find($request->cd1);
           $cambios->contador=0;
           $cambios->save();
          
        }
        if($request->cd2!=null){
            $cambios=control_kilometraje::find($request->cd2);
            $cambios->contador=0;
            $cambios->save();
           
         }
         if($request->cd3!=null){
            $cambios=control_kilometraje::find($request->cd3);
            $cambios->contador=0;
            $cambios->save();
           
         }

      
        //actualizar vehiculo
        $actualizar_vehiculo=vehiculos::findOrFail($id_vehiculo);
        $actualizar_vehiculo->nombre_vehiculo=$request->nombre_vehiculo;
        $actualizar_vehiculo->placa=$request->placa;
        $actualizar_vehiculo->marca=$request->marca;
        $actualizar_vehiculo->modelo=$request->modelo;
        $actualizar_vehiculo->color=$request->color;
        $actualizar_vehiculo->vigencia_soat=$request->vigencia_soat;
        $actualizar_vehiculo->vigencia_tecnomecanica=$request->vigencia_tecnomecanica;
        $actualizar_vehiculo->precio_alquiler=$request->precio_alquiler;
        $actualizar_vehiculo->Precio_Variante=$request->precio_variante;
        $actualizar_vehiculo->precio_lavado=$request->precio_lavado;
        $actualizar_vehiculo->disponibilidad=$request->disponibilidad;
        $actualizar_vehiculo->save();
        //actualizar estado
        $id_estado=DB::table("estado_vehiculos")->select("id")->where("vehiculo_id","=",$id_vehiculo)->first();
        $id_estado=$id_estado->id;
        $actualizar_estado= estado_vehiculo::findOrFail($id_estado);
        $actualizar_estado->documento_dia=$request->documento_dia=="on"?1:0;
        $actualizar_estado->Luces_exteriores=$request->Luces_exteriores=="on"?1:0;
        $actualizar_estado->Luz_interior=$request->Luz_interior=="on"?1:0;
        $actualizar_estado->Limpia_brisas=$request->Limpia_brisas=="on"?1:0;
        $actualizar_estado->Pito=$request->Pito=="on"?1:0;
        $actualizar_estado->Espejos_externos_internos=$request->Espejos_externos_internos=="on"?1:0;
        $actualizar_estado->Radio=$request->Radio=="on"?1:0;
        $actualizar_estado->Llanta_repuesto=$request->Llanta_repuesto=="on"?1:0;
        $actualizar_estado->Gato=$request->Gato=="on"?1:0;
        $actualizar_estado->Cruceta=$request->Cruceta=="on"?1:0;
        $actualizar_estado->Equipo_carretera=$request->Equipo_carretera=="on"?1:0;
        $actualizar_estado->Emblemas=$request->Emblemas=="on"?1:0;
        $actualizar_estado->Antena=$request->Antena=="on"?1:0;
        $actualizar_estado->Copas=$request->Copas=="on"?1:0;
        $actualizar_estado->mantenimiento=$request->mantenimiento=="on"?1:0;
        $actualizar_estado->lavado=$request->lavado=="on"?1:0;
        $actualizar_estado->kilometraje=$request->kilometraje;
        $actualizar_estado->observaciones=$request->observaciones;
        $actualizar_estado->save();



        return Redirect::to('/listar_vehiculo')->with('correcto1', 'El cliente se creo correctamente');
        return response(["data"=>$request->all(),"id"=>$id_estado]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\estado_vehiculo  $estado_vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(estado_vehiculo $estado_vehiculo)
    {
        //
    }
    function registrar_estado ($id) {
      
        $vehiculo=DB::table('vehiculos')->select()->where("id_vehiculo","=",$id)->first();
        return view('dashboards.crear_estado_vehiculo',compact("vehiculo"));
    }
}
