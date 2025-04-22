@extends('dashboards.index')
@section('registro_clientes')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-18 col-md-18 col-sm-18 col-xs-18">
                <div class="card">
                    <div class="header">

                        <h8>
                            ESTADO DEL VEHICULO
                        </h8>
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
                        <hr>
                        <div class="container-fluid ">
                            <form method="POST" action="{{ route('actualizar_vehiculo', $vehiculo->id_vehiculo) }}"
                                accept-charset="UTF-8" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 text-center">

                                        <img src="{{ url('/storage/vehiculo/', $vehiculo->foto_vehiculo) }}"
                                            class=" img-thumbnail" width="300px" height="300px">

                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">

                                            <div class="col-md-6"><b>Nombre:</b> <input name="nombre_vehiculo"
                                                    value="{{ $vehiculo->nombre_vehiculo }}">
                                            </div>
                                            <div class="col-md-6"><b>Placa:</b> <input name="placa"
                                                    value="{{ $vehiculo->placa }}"> </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6"><b>Marca:</b><input name="marca"
                                                    value="{{ $vehiculo->marca }}"> </div>
                                            <div class="col-md-6"><b>Modelo:</b> <input name="modelo"
                                                    value="{{ $vehiculo->modelo }}"> </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6"><b>Color:</b><input name="color"
                                                    value="{{ $vehiculo->color }}"> </div>
                                            <div class="col-md-6"><b>disponibilidad</b>

                                                <select id="disponibilidad" name="disponibilidad">
                                                    @if ($vehiculo->disponibilidad==1)
                                                    <option value="1" selected>Activado</option>
                                                    <option value="0">Desactivado</option>
                                                    @else
                                                    <option value="0" selected>Desactivado</option>
                                                    <option value="1">Activado</option>
                                                    @endif


                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6"><b>Seguro Soat:</b><input type="date"
                                                    name="vigencia_soat"
                                                    value="{{  date('Y-m-d', strtotime($vehiculo->vigencia_soat)) }}">
                                            </div>
                                            <div class="col-md-6"><b>Tecnomecanica:</b><input type="date"
                                                    name="vigencia_tecnomecanica"
                                                    value="{{  date('Y-m-d', strtotime($vehiculo->vigencia_tecnomecanica)) }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6"><b>Precio Lavado:</b><input name="precio_lavado"
                                                    value="{{ $vehiculo->precio_lavado }}">
                                            </div>
                                            <div class="col-md-6"><b>Precio Alquiler CO:</b><input name="precio_alquiler"
                                                    value="{{ $vehiculo->precio_alquiler }}">
                                            </div>
                                            <div class="col-md-6"><b>Precio Alquiler EC:</b><input name="precio_variante"
                                                value="{{ $vehiculo->Precio_Variante }}">
                                        </div>
                                        </div>



                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="body">



                        <div class="form-group row">
                            <label class="col-md-8 text-center text-center col-form-label">Documentos al día</label>
                            <div class="switch">
                                <label>No<input type="checkbox" name="documento_dia" id="documento_dia"
                                        {{$vehiculo->documento_dia==1?"checked":""}}><span
                                        class="lever"></span>Si</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-8 text-center  col-form-label">Luces Exteriores</label>
                            <div class="switch">
                                <label>No<input type="checkbox" name="Luces_exteriores" id="Luces_exteriores"
                                        {{$vehiculo->Luces_exteriores==1?"checked":""}}><span
                                        class="lever"></span>Si</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-8 text-center col-form-label">Luz Interior</label>
                            <div class="switch">
                                <label>No<input type="checkbox" name="Luz_interior" id="Luz_interior"
                                        {{$vehiculo->Luz_interior==1?"checked":""}} ><span
                                        class="lever"></span>Si</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-8 text-center col-form-label">Limpia Parabrisas</label>
                            <div class="switch">
                                <label>No<input type="checkbox" name="Limpia_brisas" id="Limpia_brisas"
                                        {{$vehiculo->Limpia_brisas==1?"checked":""}}><span
                                        class="lever"></span>Si</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-8 text-center col-form-label">Pito</label>
                            <div class="switch">
                                <label>No<input type="checkbox" name="Pito" id="Pito"
                                        {{$vehiculo->Pito==1?"checked":""}}><span class="lever"></span>Si</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-8 text-center col-form-label">Espejos Internos-Externos</label>
                            <div class="switch">
                                <label>No<input type="checkbox" name="Espejos_externos_internos"
                                        id="Espejos_externos_internos"
                                        {{$vehiculo->Espejos_externos_internos==1?"checked":""}}><span
                                        class="lever"></span>Si</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-8 text-center col-form-label">Radio</label>
                            <div class="switch">
                                <label>No<input type="checkbox" name="Radio" id="Radio"
                                        {{$vehiculo->Radio==1?"checked":""}}><span class="lever"></span>Si</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-8 text-center col-form-label">Llanta de repuesto</label>
                            <div class="switch">
                                <label>No<input type="checkbox" name="Llanta_repuesto" id="Llanta_repuesto"
                                        {{$vehiculo->Llanta_repuesto==1?"checked":""}}><span
                                        class="lever"></span>Si</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-8 text-center col-form-label">Gato</label>
                            <div class="switch">
                                <label>No<input type="checkbox" name="Gato" id="Gato"
                                        {{$vehiculo->Gato==1?"checked":""}}><span class="lever"></span>Si</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-8 text-center col-form-label">Cruceta</label>
                            <div class="switch">
                                <label>No<input type="checkbox" name="Cruceta" id="Cruceta"
                                        {{$vehiculo->Cruceta==1?"checked":""}}><span class="lever"></span>Si</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-8 text-center col-form-label">Equipo de carreteras</label>
                            <div class="switch">
                                <label>No<input type="checkbox" name="Equipo_carretera" id="Equipo_carretera"
                                        {{$vehiculo->Equipo_carretera==1?"checked":""}}><span
                                        class="lever"></span>Si</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-8 text-center col-form-label">Emblemas</label>
                            <div class="switch">
                                <label>No<input type="checkbox" name="Emblemas" id="Emblemas"
                                        {{$vehiculo->Emblemas==1?"checked":""}}><span class="lever"></span>Si</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-8 text-center col-form-label">Antena</label>
                            <div class="switch">
                                <label>No<input type="checkbox" name="Antena" id="Antena"
                                        {{$vehiculo->Antena==1?"checked":""}}><span class="lever"></span>Si</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-8 text-center col-form-label">Copas</label>
                            <div class="switch">
                                <label>No<input type="checkbox" name="Copas" id="Copas"
                                        {{$vehiculo->Copas==1?"checked":""}}><span class="lever"></span>Si</label>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-sm-8 text-center col-form-label">Mantenimiento</label>
                            <div class="switch">
                                <label>No<input type="checkbox" name="mantenimiento" id="mantenimiento"
                                        {{$vehiculo->mantenimiento==1?"checked":""}}><span
                                        class="lever"></span>Si</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-8 text-center col-form-label">Lavado</label>
                            <div class="switch">
                                <label>No<input type="checkbox" name="lavado" id="lavado"
                                        {{$vehiculo->lavado==1?"checked":""}}><span class="lever"></span>Si</label>
                            </div>
                        </div>

                        <!--
                                <div class="form-group">
                                    <label for="Foto_izq">Foto de Vehiculo - Lado Izquierdo</label>
                                    <input accept="image/*" class="form-control-file" type="file" id="Foto_izq"
                                        name="Foto_izq">
                                </div>

                                <div class="form-group">
                                    <label for="Foto_der">Foto de Vehiculo - Lado Derecho</label>
                                    <input accept="image/*" class="form-control-file" type="file" id="Foto_der"
                                        name="Foto_der">
                                </div>

                                <div class="form-group">
                                    <label for="Foto_frente">Foto de Vehiculo - Frontal</label>
                                    <input accept="image/*" class="form-control-file" type="file" id="Foto_frente"
                                        name="Foto_frente">
                                </div>

                                <div class="form-group">
                                    <label for="Foto_trasera">Foto de Vehiculo - Trasera</label>
                                    <input accept="image/*" class="form-control-file" type="file" id="Foto_trasera"
                                        name="Foto_trasera">
                                </div>
 -->

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Kilometraje</label>
                            <input type="number" id="kilometraje" name="kilometraje"
                                class="form-control bg-light text-center" placeholder=""
                                value="{{$vehiculo->kilometraje}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Observaciones</label>
                            <textarea class="form-control bg-light" id="observaciones" name="observaciones" rows="3"
                                placeholder="Digite aquí las observaciones del vehículo">{{$vehiculo->observaciones}}</textarea>
                        </div>
                        <h3>Indicadores del vehículo</h3>
                        <?php 
                                $c=1;?>
                        @foreach ($indicadores as $indicador)
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"> Cambio de {{$indicador->tipo_vehi}}</label>
                            <label for="exampleFormControlTextarea1"> Acumulado {{$indicador->contador}}, Limite
                                {{$indicador->limite}}</label>

                            <div class="progress">
                                <?php 
                                                $X=(100*$indicador->contador)/$indicador->limite;
                                                $tamano="width: ".$X."%";
                                                
                                            ?>
                                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar"
                                    style="{{$tamano}}" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{$indicador->id}}"
                                    id="defaultCheck1{{$indicador->id}}" name="cd{{$c++}}">
                                <label class="form-check-label" for="defaultCheck1{{$indicador->id}}">
                                    Reiniciar Contador de kilometraje
                                </label>
                            </div>
                        </div>
                        @endforeach




                        <button type="submit" class="btn btn-primary">GUARDAR</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection