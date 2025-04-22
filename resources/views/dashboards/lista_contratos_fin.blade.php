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
                        <span><b>El contrato finalizó correctamente</span>
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Contratos Finalizados
                               
                            </h2>
                            <div class="body table-responsive">
                                <table class="table table-striped" >
                                    <thead>
                                        <?php $i=1;
                                        
                                        
                                        ?>
                                        <tr>
                                            <th>CONTRATO NO.</th>
                                            <th>CLIENTE</th>
                                            <th>VEHICULO</th>
                                            <th class="no_salto">FECHA DE INICIO</th>
                                            <th class="no_salto">FECHA DE ENTREGA</th>
                                            <th class="text-center">DIAS DE ALQUILER</th>
                                            <th>VALOR DE RESERVA</th>
                                            <th>VALOR TOTAL</th>
                                            <th class="text-center">PDF</th>
                                            
                                            
                                          
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       @foreach ($contratos as $contrato)
                                       <tr>
                                       <td class="text-center"><b>{{$contrato->id}}</b></td>
                                       <td>{{$contrato->nombres}} {{$contrato->apellidos}} </td>
                                       <td>{{$contrato->nombre_vehiculo}} {{$contrato->modelo}} </td>
                                       
                                       <td class="text-center">{{ date('Y-m-d h:i A', strtotime($contrato->fecha_inicio))}}</td>
                                       <td class="text-center">{{ date('Y-m-d h:i A', strtotime($contrato->fecha_fin))}}</td>
                                       <td class="text-center"> <b>{{$contrato->dias_reserva}}</b></td>
                                       <td>{{$contrato->valor_reserva}}</td>
                                       <td>{{$contrato->saldo}}</td>
                                       <td>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <a type="button"
                                                        class="btn btn-danger btn-circle waves-effect waves-circle waves-float d-inline"
                                                        href="{{ route('pdf_contrato', $contrato->id) }}">
                                                        <i class="material-icons">picture_as_pdf</i>
                                                    </a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </td>
                                      
                                    </tr>
                                       @endforeach
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
