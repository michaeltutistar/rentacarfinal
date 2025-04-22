@extends('dashboards.index')
@section('registro_clientes')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            @if (Session::get('correcto'))
            <div class="alert alert-success">
                <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
                <span><b>El vehículo se creo correctamente</span>
            </div>
            @endif
            @if (Session::get('correcto1'))
            <div class="alert alert-success">
                <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
                <span><b>El vehículo se actualizo correctamente</span>
            </div>
            @endif
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 class="pb-2">
                            LISTA VEHÍCULOS
                        </h2>

                        @foreach ($vehiculos as $vehiculo)
                        <div class="container-fluid ">
                            <div class="row">
                                <div class="col-md-12 bg-danger text-center text-light">VEHICULO</div>
                            </div>
                            <div class="row py-5">
                                <div class="col-md-6 text-center">

                                    <img src="{{ url('/storage/vehiculo/', $vehiculo->foto_vehiculo) }}"
                                        class=" img-thumbnail" width="300px" height="300px">

                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6"><b>Nombre:</b>
                                            {{ $vehiculo->nombre_vehiculo }}
                                        </div>
                                        <div class="col-md-6"><b>Placa:</b> {{ $vehiculo->placa }} </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Marca:</b> {{ $vehiculo->marca }} </div>
                                        <div class="col-md-6"><b>Modelo:</b> {{ $vehiculo->modelo }} </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"><b>Color:</b> {{ $vehiculo->color }} </div>
                                        @if ( $vehiculo->disponibilidad ==1)
                                        <div class="col-md-6 bg-success"><b>disponibilidad</b> Activado
                                            @else
                                            <div class="col-md-6 bg-danger"><b>disponibilidad</b> Desactivado
                                                @endif

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6"><b>Seguro Soat:</b>
                                                {{ $vehiculo->vigencia_soat }} </div>
                                            <div class="col-md-6"><b>Tecnomecanica:</b>
                                                {{ $vehiculo->vigencia_tecnomecanica }} </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6"><b>Precio Lavado:</b>
                                                ${{ $vehiculo->precio_lavado }} </div>
                                            <div class="col-md-6"><b>Precio Alquiler CO:</b>
                                                ${{ $vehiculo->precio_alquiler }} </div>
                                            <div class="col-md-6"><b>Precio Alquiler EC:</b>
                                                ${{ $vehiculo->Precio_Variante }} </div>
                                        </div>
                                        <br>
                                        <div class="row pb-1">
                                            <div class="col-md-12 bg-dark text-center text-light">OPCIONES</div>
                                        </div>

                                        <div class="row text-center justify-content-center">
                                            <div class="col-md-2">
                                                <a type="button"
                                                    class="btn btn-success btn-circle waves-effect waves-circle waves-float d-inline"
                                                    href="{{url("actualizar_estado", $vehiculo->id_vehiculo)}}">
                                                    <i class="material-icons">mode_edit</i>
                                                </a>
                                            </div>
                                            <div class="col-md-2">
                                                <a type="button"
                                                    class=" btn_eliminar btn bg-red btn-circle waves-effect waves-circle waves-float d-inline"
                                                    onclick="getid({{ $vehiculo->id_vehiculo }})">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach





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
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection