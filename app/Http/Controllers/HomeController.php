<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('home');
        $clientes = DB::table('clientes')->count();
        $vehiculos = DB::table('vehiculos')->count();
        $reservas = DB::table('reservas')->count();
        $contratos = DB::table('registro_contratos')->count();
        return view('dashboards.inicio',compact("clientes","vehiculos","reservas","contratos"));
    }
}
