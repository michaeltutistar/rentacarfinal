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
                        <span><b>El cliente se creo correctamente</span>
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
                                LISTA CLIENTES


                            </h2>
                     
                            <div class="body table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>TIPO DOCUMENTO</th>
                                            <th>NÚMERO DOCUMENTO</th>
                                            <th>NOMBRES</th>
                                            <th>APELLIDOS</th>
                                            <th>DIRECCIÓN</th>
                                            <th>TELÉFONO</th>
                                            <th>NOMBRE CONDUCTOR ADICIONAL</th>
                                            <th>DOCUMENTO CONDUCTOR ADICIONAL</th>
                                            <th>OPCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($cliente!=null)
                                            <tr>
                                                <th scope="row">{{ $cliente->id_cliente }}</th>
                                                <td>{{ $cliente->tipo_documento }}</td>
                                                <td>{{ $cliente->numero_documento }}</td>
                                                <td>{{ $cliente->nombres }}</td>
                                                <td>{{ $cliente->apellidos }}</td>
                                                <td>{{ $cliente->direccion }}</td>
                                                <td>{{ $cliente->telefono }}</td>
                                                <td>{{ $cliente->conductor_adicional }}</td>
                                                <td>{{ $cliente->documento_conductor_adicional }}</td>
                                                <td>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <a type="button"
                                                                    class="btn btn-success btn-circle waves-effect waves-circle waves-float d-inline"
                                                                    href="{{ route('actualizar_cliente', $cliente->id_cliente) }}">
                                                                    <i class="material-icons">mode_edit</i>
                                                                </a>
                                                                <a type="button"
                                                                    class=" btn_eliminar btn bg-red btn-circle waves-effect waves-circle waves-float d-inline"
                                                                    onclick="getid({{ $cliente->id_cliente }})">
                                                                    <i class="material-icons">delete</i>
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
