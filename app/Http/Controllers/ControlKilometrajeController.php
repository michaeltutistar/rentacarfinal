<?php

namespace App\Http\Controllers;

use App\Models\control_kilometraje;
use Illuminate\Http\Request;

class ControlKilometrajeController extends Controller
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
    public function create($id_vehiculo,$km_actual)
    {
            $crear_tipo=new control_kilometraje;
            $crear_tipo->vehiculo_ids=$id_vehiculo;
            $crear_tipo->tipo_vehi="Aceite";
            $crear_tipo->km_actuales=$km_actual;
            $crear_tipo->contador=0;
            $crear_tipo->limite=5000;
            $crear_tipo->save();

            $crear_tipo1=new control_kilometraje;
            $crear_tipo1->vehiculo_ids=$id_vehiculo;
            $crear_tipo1->tipo_vehi="Correa de reparticion";
            $crear_tipo1->km_actuales=$km_actual;
            $crear_tipo1->contador=0;
            $crear_tipo1->limite=50000;
            $crear_tipo1->save();

            $crear_tipo2=new control_kilometraje;
            $crear_tipo2->vehiculo_ids=$id_vehiculo;
            $crear_tipo2->tipo_vehi="Pastillas de freno";
            $crear_tipo2->km_actuales=$km_actual;
            $crear_tipo2->contador=0;
            $crear_tipo2->limite=200000;
            $crear_tipo2->save();
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
     * @param  \App\Models\control_kilometraje  $control_kilometraje
     * @return \Illuminate\Http\Response
     */
    public function show(control_kilometraje $control_kilometraje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\control_kilometraje  $control_kilometraje
     * @return \Illuminate\Http\Response
     */
    public function edit(control_kilometraje $control_kilometraje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\control_kilometraje  $control_kilometraje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, control_kilometraje $control_kilometraje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\control_kilometraje  $control_kilometraje
     * @return \Illuminate\Http\Response
     */
    public function destroy(control_kilometraje $control_kilometraje)
    {
        //
    }
}
