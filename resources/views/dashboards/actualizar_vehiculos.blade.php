@extends('dashboards.index')
@section('registro_clientes')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            ACTUALIZAR INFORMACIÓN VEHICULO
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
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
                        <form>

                            <label for="nombre_vehiculo">Nombre Vehículo</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nombre_vehiculo" name="nombre_vehiculo" class="form-control">
                                </div>
                            </div>
                            <label for="placa">Placa Vehículo</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="placa" name="placa" class="form-control" placeholder="ABC 123">
                                </div>
                            </div>
                            <label for="marca">Marca Vehículo</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="marca" name="marca" class="form-control" placeholder="CHEVROLET">
                                </div>
                            </div>
                            <label for="modelo">Modelo Vehículo</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="modelo" name="modelo" class="form-control" placeholder="2020">
                                </div>
                            </div>
                            <label for="color">Color Vehículo</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="color" name="color" class="form-control" placeholder="Rojo">
                                </div>
                            </div>
                            <label for="vigencia_soat">Vigencia SOAT</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" id="vigencia_soat" name="vigencia_soat" class="form-control">
                                </div>
                            </div>
                            <label for="vigencia_tecnomecanica">Vigencia Tecnomecánica (CDA)</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date" id="vigencia_tecnomecanica" name="vigencia_tecnomecanica" class="form-control">
                                </div>
                            </div>
                            <label for="precio_alquiler">Valor Alquiler Vehículo</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="precio_alquiler" name="precio_alquiler" class="form-control" placeholder="150.000">
                                </div>
                            </div>
                            <label for="precio_lavado">Precio Lavado Vehículo</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="precio_lavado" name="precio_lavado" class="form-control" placeholder="30.000">
                                </div>
                            </div>
                            <label for="disponibilidad">Disponibilidad Vehículo</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="disponibilidad" name="disponibilidad" class="form-control">
                                </div>
                            </div>
                            <br>
                            <button type="button" class="btn btn-primary m-t-15 waves-effect">GUARDAR</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection