@extends('dashboards.index')
@section('registro_clientes')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            CREAR RESERVA

                        </h2>

                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">

                        <form method="POST" action="{{ route('post_reserva',['lugar_po'=>$datalugar]) }}" accept-charset="UTF-8"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-4">
                                    <h5 class="text-center py-4  ">Cliente</h5>
                                    <hr>
                                    <div class="form-group ">
                                        <div class="form-line">
                                            <input type="text" id="cedula_usuario" name="cedula_usuario"
                                                class="form-control text-center"
                                                placeholder="Digite numero de documento">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" id="mensaje" name="mensaje"
                                                class="form-control bg-warning text-center"
                                                placeholder="Cliente No Encontrado">
                                        </div>
                                    </div>




                                </div>
                                <div class="col-md-4">
                                    <h5 class="text-center py-4  ">Tiempo de Alquiler</h5>
                                    <hr>
                                    <div class="row ">

                                        <div class="col-md-12 ">
                                            <label for="nombre_vehiculo">Desde</label>
                                            <div class="form-group">
                                                <input class="form-control" type="date" id="desde_u" name="desde"
                                                   >
                                            </div>
                                        </div>

                                        <div class="col-md-12 ">
                                            <label for="nombre_vehiculo">Hora de entrega</label>
                                            <input type="time" id="hora_entrega" name="hora_entrega" required
                                                placeholder="Hora de recogida"
                                                >
                                        </div>

                                        <div class="col-md-12 "> <label for="nombre_vehiculo">Hasta</label>
                                            <div class="form-group">
                                                <input class="form-control" type="date" id="hasta_u" name="hasta"
                                                   >
                                            </div>
                                        </div>

                                        <div class="col-md-12 ">
                                            <label for="nombre_vehiculo">Hora de recogida </label>
                                            <input type="time" id="hora_recogida" name="hora_recogida" required
                                                placeholder="Hora de recogida"
                                                >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="text-center py-4  ">Vehículo  {{$lugar}}</h5>
                                    <hr> 
                                    <div class="form-group">

                                        <select class="form-control" id="vehiculo" name="vehiculo">
                                            <option id="0">Seleccione Un Vehículo</option>
                                            @foreach ($vehiculos as $vehiculo)

                                            <option value="{{ $vehiculo->id_vehiculo }}">
                                                {{ $vehiculo->nombre_vehiculo }}
                                                {{ $vehiculo->modelo }}
                                                Color {{ $vehiculo->color }} || {{ $vehiculo->placa }}
                                            </option>
                                            @endforeach


                                        </select>
                                    </div>
                                    <div class="form-group row" id="trans" style="display: none;">
                                        <div class="col-md-5">Transporte Aeropuerto</div>
                                        <div class="col-sm-7">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck1">
                                                    ¿Desea ser recogido en Aeropuerto?
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row form_person">
                                        <hr>
                                        <div class="col-md-5">Trayecto</div>
                                        <div class="col-sm-7">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="lugar"
                                                    id="exampleRadios1" value="Pasto">
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Pasto
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="lugar"
                                                    id="exampleRadios2" value="Ipiales">
                                                <label class="form-check-label" for="exampleRadios2">
                                                    Ipiales
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="lugar"
                                                    id="exampleRadios3" value="Otro">
                                                <label class="form-check-label" for="exampleRadios3">
                                                    Otro Lugar
                                                </label>
                                            </div>
                                            <div id="nuevos_lugares" style="display: none;">
                                                <div class="form-group">
                                                    <label for="nuevo_lugar">Lugar</label>
                                                    <input type="text" class="form-control bg-light" id="nuevo_lugar"
                                                        placeholder="Nuevo Lugar" name="nuevo_lugar">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nuevo_lugar">Precio</label>
                                                    <input type="number" class="form-control bg-light"
                                                        id="nuevo_lugar_precio" placeholder="Precio"
                                                        name="nuevo_lugar_precio">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <fieldset class="form-group lugar">
                                        <div class="row">
                                            <legend class="col-form-label col-sm-3 pt-0">Lugar</legend>
                                            <div class="col-sm-9">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios"
                                                        id="gridRadios1" value="Pasto">
                                                    <label class="form-check-label" for="gridRadios1">
                                                        Pasto
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="gridRadios1"
                                                        id="gridRadios2" value="Ipiales">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        Ipiales
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </fieldset>

                                    <div class="form-group row " id="lav" style="display: none;">
                                        <div class="col-md-5">Lavado Vehiculo:</div>
                                        <div class="col-sm-7">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck2"
                                                    name="lavados">
                                                <label class="form-check-label" for="gridCheck2">
                                                    ¿Desea Lavado de Vehiculo?
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-center border border-secondary py-2 ">

                                    <h4 class="text-center">Ticket de Reserva</h4>
                                    <hr>
                                    <h4 class="text-center">Cliente</h4>
                                    <hr>
                                    <div class="row justify-content-center">
                                        <div class="col-md-4">
                                            <label for="nombre_vehiculo">Id Cliente</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="id_cliente" name="id_cliente"
                                                        class="text-center form-control bg-light " placeholder=""
                                                        value="" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="nombre_vehiculo">No Documento</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="documento" name="documento"
                                                        class="form-control bg-light text-center" placeholder=""
                                                        value="" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">


                                            <label for="nombre_vehiculo">Nombres</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="nombres" name="nombres"
                                                        class="form-control bg-light text-center" placeholder=""
                                                        value="" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">

                                        <div class="col-md-4">
                                            <label for="nombre_vehiculo">Apellidos</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="apellidos" name="apellidos"
                                                        class="form-control bg-light text-center" placeholder=""
                                                        value="" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="nombre_vehiculo">Dirección</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="direccion" name="direccion"
                                                        class="form-control bg-light text-center " placeholder=""
                                                        value="" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="nombre_vehiculo">Telefono</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="telefono" name="telefono"
                                                        class="form-control bg-light text-center" placeholder=""
                                                        value="" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="text-center">Vehiculo</h4>
                                    <hr>
                                    <div class="row justify-content-center ">
                                        <div class="col-md-5">
                                            <label for="nombre_vehiculo">Vehiculo</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="name_car" name="name_car"
                                                        class="form-control bg-light text-center " placeholder=""
                                                        value="" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <label for="nombre_vehiculo">Precio Alquiler</label>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="precio_alquiler" name="precio_alquiler"
                                                        class="form-control bg-light text-center" placeholder=""
                                                        value="" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="text-center">Informacion Alquiler</h4>
                                    <hr>
                                    <div class="row justify-content-center align-items-center">
                                        <div class="col-md-3 ">
                                            <h5><b>Dias Totales</b></h5>
                                        </div>
                                        <div class="col-md-7 ">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <label for="fechas"><b>Desde: </b><label id="des">...</label>
                                                        <b>Hasta </b><label id="has">...</label> </label>
                                                    <input type="text" id="dias" name="dias"
                                                        class="form-control bg-light text-center" placeholder=""
                                                        value="0" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-3">
                                            <h5><b>Total Vehiculo</b></h5>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="t_vehiculo" name="t_vehiculo"
                                                        class="form-control bg-light text-center" placeholder=""
                                                        value="0" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-3">
                                            <h5><b>Transporte<h5 id="ubicacion"></h5> </b></h5>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="transporte" name="transporte"
                                                        class="form-control bg-light text-center" placeholder=""
                                                        value="0" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-3">
                                            <h5><b>Lavado</b></h5>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="lava" name="lava"
                                                        class="form-control bg-light text-center" placeholder=""
                                                        value="0" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row justify-content-center">
                                        <div class="col-md-3">
                                            <h5><b>Valor Reserva</b></h5>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="reserva" name="reserva"
                                                        class="form-control bg-light text-center" placeholder=""
                                                        value="0" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-3">
                                            <h5><b>Saldo</b></h5>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="saldo" name="saldo"
                                                        class="form-control bg-light text-center" placeholder=""
                                                        value="0" disabled>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-3">
                                            <h5><b>Descuento</b></h5>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="number" id="descuento" name="descuento"
                                                        class="form-control bg-success text-center" placeholder=""
                                                        value="0">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <br>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">GUARDAR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var lugar = "{{ $datalugar }}";
   
</script>
@endsection