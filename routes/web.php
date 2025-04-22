<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// metodos de vista

Route::get('/s', function () {
    return view('welcome');
});
Route::get('clientes',"ClientesController@store");

Route::get('dashboard', function () {
    return view('dashboards.inicio');
});

Route::get('logins', function () {
    return view('dashboards.login');
})->name("login");

Route::get('crear_cliente', function () {
    return view('dashboards.registro_clientes');
});

Route::get('crear_estado/{id}',"EstadoVehiculoController@registrar_estado");
Route::get('actualizar_estado/{id}',"EstadoVehiculoController@show");

Route::get('cliente_actual', "ClientesController@cliente_actual")->name("cliente_actual");

Route::get('actualizar_cliente/{id}',"ClientesController@show")->name("actualizar_cliente");

Route::get('crear_contrato/{id}',"ReservaController@generar_contrato")->name("crear_contrato");

Route::get('actualizar_reserva/{id}',"ReservaController@actualizar_reserva")->name("actualizar_reservas");

Route::post('u_actualizar/{id}',"ReservaController@actualizar")->name("u_actualizar");

//envuar correo purebas
Route::get('correo',"ReservaController@enviar_correo")->name("correo");

Route::get('finalizar_contrato/{id}',"RegistroContratoController@finalizar_contrato")->name("finalizar_contrato");

Route::get('listar_cliente',"ClientesController@index")->name("listar_cliente");
Route::post('listar_cliente',"ClientesController@index_id")->name("serial_buscar_cliente");


Route::get('listar_vehiculo',"VehiculosController@index")->name("listar_vehiculo");
Route::get('listar_vehiculo_eliminado',"VehiculosController@index_delete")->name("listar_vehiculo_eliminado");
Route::get('crear_vehiculos', function () {
    return view('dashboards.crear_vehiculos');
})->name("crear_vehiculo");

Route::get('actualizar_vehiculos', function () {
    return view('dashboards.actualizar_vehiculos');
});

Route::get('plantilla', function () {
    
    return view('dashboards.plantilla_correo');
});
//vista crear reserva
Route::get('crear_reserva/{location}', "ReservaController@index");


//VISTAS PAGINA WEB

//vista base
Route::get('rentacar-index', function () {
    return view('webpage.index');
});

Route::get('/', function () {
    return view('webpage.inicio');
})->name("inicio");

Route::get('site1', function () {
    return view('webpage.base-completa');
});

Route::get('servicios', function () {
    return view('webpage.servicios');
})->name("servicios");


Route::get('vehiculos', function () {
    return view('webpage.vehiculos');
})->name("vehiculos");

Route::get('informacion', function () {
    return view('webpage.info');
})->name("info");

Route::get('galeria', function () {
    return view('webpage.gallery');
})->name("gallery");

Route::get('contacto', function () {
    return view('webpage.contact');
})->name("contact");

//VISTA LISTAR RESERVA
Route::get('listar_reservas', "ReservaController@listar_reserva");
Route::post('listar_reservas', "ReservaController@listar_reserva_id")->name("serial_buscar");
Route::get('reserva_cliente/{data}/{fecha1}/{fecha2}/{transporte}', "ReservaController@reserva_cliente")->name("reserva_cliente");

//vista registrar contrato
Route::get('registrar_contrato', function () {
    return view('dashboards.registrar_contrato');
});
Route::get('reserva_exitosa', function () {
    return view('webpage.confirmacion_reserva');
});

Route::get('eliminar_reserva/{id}',"ReservaController@destroy")->name("eliminar_reserva");
Route::get('lista_vehiculos',"VehiculosController@index");
Route::get('lista_contratos',"RegistroContratoController@index");
Route::get('lista_contratos_finalizados',"RegistroContratoController@index_fin");
Route::get('pdf_contrato/{data}',"RegistroContratoController@generar_pdf")->name("pdf_contrato");

Route::get('obtener_nombre/{id}',"ClientesController@obtener_nombre")->name("obtener_nombre");
Route::get('obtener_carro/{id}/{lugar}',"VehiculosController@obtener_carro")->name("obtener_carro");
//metodos de envio en este caso post

Route::post('crear_clientes','ClientesController@store')->name('post_cliente');
Route::post('crear_clientes1/{id_vehiculo}/{desde}/{hasta}/{transporte}','ClientesController@store1')->name('post_cliente1');

Route::post('crear_vehiculos','VehiculosController@store')->name('post_vehiculo');
Route::post('crear_estado/{id}','EstadoVehiculoController@store')->name('post_estado');
Route::post('crear_reserva/{lugar_po}','ReservaController@store')->name('post_reserva');
Route::post('consulta_reserva','ReservaController@consulta_clientes_reserva')->name('post_reserva_usuario');
Route::post('crear_contrato/{id}','RegistroContratoController@store')->name('post_registro_contrato');
Route::post('finalizar_contrato/{id}','RegistroContratoController@fin')->name('post_finalizar_contrato');

//metodoos de eliminar

Route::delete('clientes_eliminar/{id}', "ClientesController@destroy")->name("eliminar_cliente");

//metodos de actualizar

Route::post('actualizar_cliente_unico/{id}', "ClientesController@update")->name('actualizar_cliente_unico');

Route::post('actualizar_vehiculo/{id}', "EstadoVehiculoController@update")->name('actualizar_vehiculo');



//descargar imagenes

Route::get('storage/{archivo}', function ($nombre) {
    $public_path = public_path();
    $url = $public_path.'/storage/'.$nombre;// depende de root en el archivo filesystems.php.
    //verificamos si el archivo existe y lo retornamos
    if (\Storage::exists($nombre))
    {
        return response()->download($url);
    }
    //si no se encuentra lanzamos un error 404.
    abort(404);
  
  });
Route::get('notificaciones',"NotificacionesController@index");
Route::get('notificacionesupdate/{id}',"NotificacionesController@update");
Route::get('crear_notificaciones',"NotificacionesController@crear_notificaciones");
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//pagos
Route::get('pago/{id}',"ReservaController@vista_pago")->name("pago");
Route::post('generar_pago/{id}',"ReservaController@generar_pago")->name("generar_pago");
