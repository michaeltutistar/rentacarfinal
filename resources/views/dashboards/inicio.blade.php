@extends('dashboards.index')
@section('registro_clientes')
    <section class="content">
        <div class="container-fluid ">
            
            <!-- Hover Zoom Effect -->
            <div class="block-header">
               
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-red">people</i>
                        </div>
                        <div class="content">
                            <div class="text">CLIENTES</div>
                            <div class="number">{{$clientes}}</div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-red">directions_car</i>
                        </div>
                        <div class="content">
                            <div class="text">VEHÍCULOS</div>
                            <div class="number">{{$vehiculos}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-red">assignment_ind</i>
                        </div>
                        <div class="content">
                            <div class="text">RESERVACIONES</div>
                            <div class="number">{{$reservas}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box-4 hover-zoom-effect">
                        <div class="icon">
                            <i class="material-icons col-red">grading</i>
                        </div>
                        <div class="content">
                            <div class="text">CONTRATOS</div>
                            <div class="number">{{$contratos}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection