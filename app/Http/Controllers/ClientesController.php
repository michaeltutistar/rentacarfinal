<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ReservaController;
use App\Models\clientes;
use Illuminate\Http\Request;
use DB;
use Redirect;
use Session;
class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=DB::table('clientes')
        ->select()
        ->paginate(5);
        return view('dashboards.lista_clientes',compact("clientes"));
       
    }
    public function index_id(Request $request){
        $cliente=DB::table('clientes')
        ->select()
        ->where("numero_documento","=",$request->serial)
        ->first();
        return view('dashboards.listar_cliente_unico',compact("cliente"));
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
        $todo=$request->all();
        foreach ($todo as $key => $value) {
          if($value=="")  return redirect()->back()->with('error', 'Debe Rellenar Todos los Campos');   
        }
        
       $solicitud=$request->cliente_reserva;
        $crear_clientes=new clientes;
        $crear_clientes->tipo_documento=$request->tipo_documento;
        $crear_clientes->numero_documento= $request->numero_documento;
        $crear_clientes->nombres= $request->nombres;
        $crear_clientes->apellidos= $request->apellidos;
        $crear_clientes->email=$request->email;
        $crear_clientes->direccion= $request->direccion;
        $crear_clientes->telefono= $request->telefono;
        $crear_clientes->conductor_adicional= $request->conductor_adicional;
        $crear_clientes->documento_conductor_adicional=$request->documento_conductor_adicional;
        $crear_clientes->save();
        if($solicitud=="cliente"){
            return response(["informacion"=>"el cliente se registro"]);
        }
        return Redirect::to('/listar_cliente')->with('correcto', 'El cliente se creo correctamente');
      return response(["data"=>"usuario guardado"]);
    }
    public function store1(Request $request,$id_vehiculo,$desde,$hasta,$transporte)
    {
        
        $existente=$request->yes;
        if($existente==null){
            if(
            $request->tipo_documento ==""  AND
            $request->numero_documento ==""  AND
            $request->nombres ==""  AND
            $request->apellidos ==""  AND
            $request->email ==""  AND
            $request->direccion ==""  AND
            $request->telefono ==""  AND
            $request->conductor_adicional ==""  AND
            $request->documento_conductor_adicional
            ){
                return redirect()->back()->with('error', 'Debe Rellenar Todos los Campos'); 
            }

            $solicitud=$request->cliente_reserva;
            $crear_clientes=new clientes;
            $crear_clientes->tipo_documento=$request->tipo_documento;
            $crear_clientes->numero_documento= $request->numero_documento;
            $crear_clientes->nombres= $request->nombres;
            $crear_clientes->apellidos= $request->apellidos;
            $crear_clientes->email=$request->email;
            $crear_clientes->direccion= $request->direccion;
            $crear_clientes->telefono= $request->telefono;
            $crear_clientes->conductor_adicional= $request->conductor_adicional;
            $crear_clientes->documento_conductor_adicional=$request->documento_conductor_adicional;
            $crear_clientes->save();
            if($solicitud=="cliente" AND $crear_clientes->id_cliente!=""){
                $reserva=new ReservaController();
                list($reservas,$clientes,$vehiculo)= $reserva->reserva_unica($id_vehiculo,$crear_clientes->id_cliente,$desde,$hasta,$transporte);
               
                return Redirect::to('/reserva_exitosa')->with(["clientes"=>$clientes,"vehiculo"=>$vehiculo,"reservas"=>$reservas]);
            }
            else{
                return response(["data"=>"error"]);
            }
        }else{
            $id_cliente=DB::table("clientes")->select("id_cliente")->where("numero_documento","=",$existente)->first();
            $reserva=new ReservaController();
            $carros_disponibles=$reserva->comprobar_vehiculos_disponibles($desde,$hasta);
           
            $respuesta= self::verificador_carro($carros_disponibles,$id_vehiculo);
          
           
            if($id_cliente!=null AND $respuesta==1){
               
                list($reservas,$clientes,$vehiculo)= $reserva->reserva_unica($id_vehiculo,$id_cliente->id_cliente,$desde,$hasta,$transporte);
                return Redirect::to('/reserva_exitosa')->with(["clientes"=>$clientes,"vehiculo"=>$vehiculo,"reservas"=>$reservas]);
            }else{
                return response(["data"=>"error"]);
            }
            
        }
        
    }
    function verificador_carro($array,$carro){
        $verificador=false;
        for ($i=0; $i <= count($array)-1 ; $i++) { 
        //  if($array[$i]->id_vehiculo==$carro)echo $i ;
      
        if($array[$i]->id_vehiculo==$carro)$verificador= true ;
        }
      return $verificador;
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $list_view=DB::table('clientes')
        ->select()
        ->where("id_cliente","=",$id)
        ->first();
        if(!empty($list_view)){
            return Redirect()->route("cliente_actual")->with(["cliente"=>$list_view]);
        }else{
            return response(["s"=>"gsa"]);
        }
    }
    public function cliente_actual(){
        if(!empty(Session::get('cliente'))){
            return view('dashboards.actualizar_clientes');
        }else{
            return Redirect()->route("listar_cliente");
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit(clientes $clientes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       
        $actualizar_clientes=clientes::findOrFail($id);
        $actualizar_clientes->tipo_documento=$request->tipo_documento;
        $actualizar_clientes->numero_documento= $request->numero_documento;
        $actualizar_clientes->nombres= $request->nombres;
        $actualizar_clientes->apellidos= $request->apellidos;
        $actualizar_clientes->email=$request->email;
        $actualizar_clientes->direccion= $request->direccion;
        $actualizar_clientes->telefono= $request->telefono;
        $actualizar_clientes->conductor_adicional= $request->conductor_adicional;
        $actualizar_clientes->documento_conductor_adicional=$request->documento_conductor_adicional;
        $actualizar_clientes->save();
        return Redirect::to('/listar_cliente')->with('correcto1', 'El cliente se creo correctamente');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        response(["data"=>$id]);
    }

    public function obtener_nombre($id){

        $clientes=DB::table('clientes')
        ->select()
        ->where("numero_documento","=",$id)
        ->first();

        if(!empty($clientes)){
            return response(["data"=>$clientes]);
        }else{
            return response(["data"=>"error"]);
        }
    }
}
