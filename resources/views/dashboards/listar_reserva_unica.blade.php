@extends('dashboards.index')
@section('registro_clientes')
    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                @if (Session::get('correcto'))
                    <div class="alert alert-success">
                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert"
                            aria-label="Close">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                        <span><b>la reserva se creo correctamente</span>
                    </div>
                @endif
                @if (Session::get('correcto1'))
                    <div class="alert alert-success">
                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert"
                            aria-label="Close">
                            <i class="tim-icons icon-simple-remove"></i>
                        </button>
                        <span><b>El cliente se actualizo correctamente</span>
                    </div>
                @endif
                @if (Session::get('error'))
                <div class="alert alert-success">
                    <button type="button" aria-hidden="true" class="close" data-dismiss="alert"
                        aria-label="Close">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                    <span><b>Reserva Eliminada</span>
                </div>
            @endif
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Lista de Reservas
                            </h2>
                           
                            <div class="body table-responsive">
                                <table class="table table-striped" >
                                    <thead>
                                        <?php $i=1;
                                        
                                        
                                        ?>
                                        <tr>
                                            <th>#</th>
                                            <th>CLIENTE</th>
                                            <th>VEHICULO</th>
                                            <th class="no_salto">FECHA DE INICIO</th>
                                            <th class="no_salto">FECHA DE ENTREGA</th>
                                          
                                            <th>TRANSPORTE AEREOPUERTO</th>
                                            <th>LAVADO</th>
                                            <th>VALOR DE RESERVA</th>
                                            <th>VALOR TOTAL</th>
                                            <th>CONTRATO</th>
                                            <th>ELIMINAR</th>
                                            <th>EDITAR</th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                            
                                        
                                        @if ($reserva!=null)
                                          <tr>
                                            <?php
                                           
                                            
                                            ?>

                                              <td>{{$reserva->id_reserva}}</td>
                                              <td>{{$reserva->nombres}} {{$reserva->apellidos}} </td>
                                              <td>{{$reserva->nombre_vehiculo}} {{$reserva->modelo}} </td>
                                              <td class="text-center">{{ date('Y-m-d h:i A', strtotime($reserva->fecha_inicio))}}</td>
                                              <td class="text-center">{{ date('Y-m-d h:i A', strtotime($reserva->fecha_fin))}}</td>
                                            
                                              @if ($reserva->transporte==1)
                                                <td class="bg-verde text-center ">{{$reserva->lugar}} </td>
                                                @else
                                                <td class="bg-rojo text-light text-center">No Requiere Transporte</td>
                                                @endif

                                                @if ($reserva->lavado==1)
                                                <td class="bg-verde text-center">Requiere Lavado</td>
                                                @else
                                                <td class="bg-rojo text-light text-center">No Requiere Lavado</td>
                                                @endif
                                            
                                                

                                              
                                              <td>{{$reserva->valor_reserva}}</td>
                                              <td>{{$reserva->saldo}}</td>

                                              <td>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <a type="button"
                                                                class="btn btn-success btn-circle waves-effect waves-circle waves-float d-inline"
                                                                href="{{ route('crear_contrato', $reserva->id_reserva) }}">
                                                                <i class="material-icons">articleIcon</i>
                                                            </a>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <a type="button"
                                                                class="btn btn-danger btn-circle waves-effect waves-circle waves-float d-inline"
                                                                href="{{ route('eliminar_reserva', $reserva->id_reserva) }}">
                                                                <i class="material-icons">articleIcon</i>
                                                            </a>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <a type="button"
                                                                class="btn btn-warning btn-circle waves-effect waves-circle waves-float d-inline"
                                                                href="{{ route('actualizar_reservas', $reserva->id_reserva) }}">
                                                                <i class="material-icons">articleIcon</i>
                                                            </a>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            </tr>
                                            @else
                                            
                                        @endif
                                      
                                    </tbody>
                                </table>
                              
                            </div>
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
