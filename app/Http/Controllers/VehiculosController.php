<?php

namespace App\Http\Controllers;

use App\Models\vehiculos;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Http\Controllers\NotificacionesController;
use Redirect;
class VehiculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $vehiculos=DB::table('vehiculos')
        ->select()
        ->where("disponibilidad","=","1")
        ->get();
        return view('dashboards.lista_vehiculos',compact("vehiculos"));
       
    }
    public function index_delete()
    {
        
        $vehiculos=DB::table('vehiculos')
        ->select()
        ->where("disponibilidad","=","0")
        ->get();
        return view('dashboards.lista_vehiculos',compact("vehiculos"));
       
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
    public function store(Request $request)
    {
        $ldate = date('Y-m-d-H_i_s');
      

        $file = $request->file('imagen');
        $nombre = $file->getClientOriginalName();
        \Storage::disk('local')->put("/vehiculo/".$ldate.$nombre,  \File::get($file));


     // return response(["data"=>$request->vigencia_tecnomecanica]);
        $crear_vehiculo=new vehiculos;
        $crear_vehiculo->nombre_vehiculo= $request->nombre_vehiculo;
        $crear_vehiculo->placa= $request->placa;
        $crear_vehiculo->marca= $request->marca;
        $crear_vehiculo->modelo=  $request->modelo;
        $crear_vehiculo->color= $request->color;
        $crear_vehiculo->vigencia_soat=$request->vigencia_soat;
        $crear_vehiculo->vigencia_tecnomecanica= $request->vigencia_tecnomecanica;
        $crear_vehiculo->precio_alquiler=$request->precio_alquiler;
        $crear_vehiculo->precio_lavado=$request->precio_lavado;
        $crear_vehiculo->disponibilidad=1;
        $crear_vehiculo->foto_vehiculo=$ldate.$nombre;
        
        $crear_vehiculo->save();
       $id= $crear_vehiculo->id_vehiculo;
      
        return Redirect::to('/crear_estado'.'/'.$id)->with('correcto', 'El vehiculo se creo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function show(vehiculos $vehiculos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function edit(vehiculos $vehiculos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vehiculos $vehiculos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function destroy(vehiculos $vehiculos)
    {
        //
    }

    public function obtener_carro($id,$lugar){
        $carro=DB::table('vehiculos')
        ->select()
        ->where("id_vehiculo","=",$id)
        ->first();
        // Modificar los datos según $location
        if ($lugar == "EC") {
            $carro->precio_alquiler = $carro->Precio_Variante; // Reemplaza precio_alquiler con Precio Variante
            unset($carro->Precio_Variante); // Opcional: elimina Precio Variante del objeto
        }



        if(!empty($carro)){
            return response(["data"=>$carro]);
        }else{
            return response(["data"=>"error"]);
        }
    }
}
