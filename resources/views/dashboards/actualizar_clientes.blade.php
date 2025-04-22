@extends('dashboards.index')
@section('registro_clientes')
    <section class="content">
        <div class="container-fluid">
            <?php $cliente = Session::get('cliente');
            
            ?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ACTUALIZAR INFORMACIÓN CLIENTE
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
                            <form action="{{ route('actualizar_cliente_unico', $cliente->id_cliente) }}" method="POST">
                                @csrf
                                <label for="tipo_documento">Tipo de Documento</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="tipo_documento" value="{{ $cliente->tipo_documento }}"
                                            name="tipo_documento" class="form-control" placeholder="CC">
                                    </div>
                                </div>
                                <label for="numero_documento">Número de Documento</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="numero_documento" value="{{ $cliente->numero_documento }}"
                                            name="numero_documento" class="form-control">
                                    </div>
                                </div>
                                <label for="nombres">Nombres</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="nombres" value="{{ $cliente->nombres }}" name="nombres"
                                            class="form-control">
                                    </div>
                                </div>
                                <label for="apellidos">Apellidos</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="apellidos" value="{{ $cliente->apellidos }}" name="apellidos"
                                            class="form-control">
                                    </div>
                                </div>
                                <label for="email">Correo Electronico</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="email" id="email" name="email"  value="{{ $cliente->email }}" class="form-control">
                                </div>
                            </div>
                                <label for="direccion">Dirección</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="direccion" value="{{ $cliente->direccion }}" name="direccion"
                                            class="form-control">
                                    </div>
                                </div>
                                <label for="telefono">Teléfono/Celular</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="telefono" value="{{ $cliente->telefono }}" name="telefono"
                                            class="form-control">
                                    </div>
                                </div>
                                <label for="conductor_adicional">Nombre Conductor Adicional</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="conductor_adicional"
                                            value="{{ $cliente->conductor_adicional }}" name="conductor_adicional"
                                            class="form-control">
                                    </div>
                                </div>
                                <label for="conductor_adicional">Numero Documento Conductor Adicional</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="documento_conductor_adicional"
                                            value="{{ $cliente->documento_conductor_adicional }}"
                                            name="documento_conductor_adicional" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">ACTUALIZAR
                                    INFORMACIÓN</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
