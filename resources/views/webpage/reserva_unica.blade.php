@extends('webpage.index')
@section('content')
<!-- Breadcromb Area Start -->
<section class="gauto-breadcromb-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-box">
                        <h3>Reserva Vehículo</h3>
                        <ul>
                            <li><i class="fa fa-home"></i></li>
                            <li><a href="index.html">Inicio</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li>Contáctanos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcromb Area End -->
    <!-- Contact Area Start -->
    <section class="gauto-contact-area section_70">
        <div class="container">
            
           
            <div class="border border-danger row my-4 justify-content-center bg-fondo  py-2 mx-1 ">
                
                <div class="col-md-4 col-11 text-center align-self-center" >  
                    
                    <div class="row justify-content-center bg-black text-light mb-1 py-3">
                        <h5 >{{$disponible->nombre_vehiculo}}</h5>
                    </div>
                           
                            <div class="row pt-3">
                                <img   class="rounded" src="{{ url('/storage/vehiculo/', $disponible->foto_vehiculo) }}">
                            </div>
                            <div class="row  pt-3 justify-content-center bg-grid text-light">
                                <div class="col-md-3 col-3"><i class="fas fa-users"> 4</i></div>
                                <div class="col-md-3 col-3"><i class="fas fa-door-open"> 4</i></div>
                                
                                <div class="col-md-4 col-4"><i class="fas fa-cash-register">{{($disponible->nombre_vehiculo=="Nissan Qashqai" || $disponible->nombre_vehiculo=="Ford Fiesta")?"Automático":"Mecánico" }} </i></div>
                                
                            </div>
                            <div class="row justify-content-center py-3">
                                <div class="col-md-5 col-5 text-light bg-carmesy">Desde</div>
                                <div class="col-md-5 col-5 text-light bg-carmesy">Hasta</div>
                                <div class="col-md-5 col-5 text-light bg-black">{{$desdes}}</div>
                                <div class="col-md-5 col-5 text-light  bg-black">{{$hastas}}</div>
                            </div>
                            <div class="row  mb-1 text-center">
                                <div class="col-md-6  col-4 bg-carmesy  text-light text-center">Total Dias</div>
                                <div class="col-md-6  col-8  bg-black text-light ">
                                  <h5>  @if ($dia==1)
                                    {{$dia}} Día
                                @else
                                {{$dia}} Días
                                @endif
                                </h5></div>
                            </div>
                            <div class="row  mb-1">
                                <div class="col-md-6 col-4 bg-carmesy  text-light">Precio Alquiler</div>
                                <?php 
                                $valor=$dia*$disponible->precio_alquiler; 
                                $valor_suma=$valor;
                                $valor=  number_format($valor, 0);
                                ?>
                                <div class="col-md-6 col-8 bg-black text-light"><h5>${{$valor}}</h5></div>
                            </div>
                            <?php 
                            function asignar_lugar_precio($a){
                                $lugar="";
                                $precio=0;
                                switch ($a) {
                                    case 1:
                                        $lugar="Pasto";
                                        $precio=0;
                                        break;
                                    case 2:
                                        $lugar="Aeropuerto-Pasto";
                                        $precio=35000;
                                        break;
                                    case 3:
                                        $lugar="Aeropuerto-Ipiales";
                                        $precio= 140000;
                                        break;
                                }
                                return array($lugar,$precio);
                            }
                            $partes =explode("-", $transporte);
                            $transporte_entrega=$partes[0]; 
                            $transporte_recogida=$partes[1]; 
                            list($transporte_entrega,$transporte_precio)=asignar_lugar_precio($transporte_entrega);
                            list($transporte_recogida,$transporte_precio1)=asignar_lugar_precio($transporte_recogida);
                            ?>
                            <div class="row  mb-1">
                                <div class="col-md-6 col-4 bg-carmesy  text-light">Lugar Entrega<br>{{$transporte_entrega }}</div>
                                <div class="col-md-6 col-8 bg-black text-light align-items-center"><h5>${{$transporte_precio }}</h5></div>
                            </div>
                            <div class="row  mb-1">
                                <div class="col-md-6 col-4 bg-carmesy  text-light">Lugar Recogida<br>{{$transporte_recogida }} </div>
                                <div class="col-md-6 col-8 bg-black text-light align-items-center"><h5>${{$transporte_precio1 }}</h5></div>
                            </div>
                            <div class="row  mb-1">
                                <div class="col-md-6 col-4 bg-carmesy  text-light">Total</div>
                                <div class="col-md-6 col-8 bg-black text-light align-items-center"><h5>${{$valor_suma+$transporte_precio+$transporte_precio1}}</h5></div>
                            </div>

                </div>
                <div class="col-md-6 ">
                    @if (\Session::has('error'))
           
                    <h6 class="bg-danger text-light"> ERROR:{!! \Session::get('error') !!}</h6>
                    @endif
                    
                    <form action="{{route('post_cliente1',['id_vehiculo'=>$disponible->id_vehiculo,'desde'=>$desdes,'hasta'=>$hastas,'transporte'=>$transporte])}}" method="POST" >
                        @csrf
                        
                        <div id="parte1" class="">
                            <label for="tipo_documento">Tipo de Documento</label>
                            <div class="form-group">
                                <select class="form-control show-tick" id="tipo_documento" name="tipo_documento">
                                    <option value="">SELECCIONE TIPO DE DOCUMENTO</option>
                                    <option value="Cédula de ciudadanía" >Cédula de ciudadanía</option>
                                  
                                    <option value="Pasaporte" >Pasaporte</option>
                                    <option value="Documento Extranjero" >Documento Extranjero</option>
                                </select>
                            </div>
                           
    <br>
                            <label for="numero_documento">Número de Documento</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="numero_documento" name="numero_documento" class="form-control">
                                </div>
                            </div>
                            <label for="nombres">Nombres</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="nombres" name="nombres" class="form-control">
                                </div>
                            </div>
                            <label for="apellidos">Apellidos</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="apellidos" name="apellidos" class="form-control">
                                </div>
                            </div>
                            <label for="email">Correo Electronico</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="email" id="email" name="email" class="form-control">
                                </div>
                            </div>
                            
                           
                            <input type="button" id="sgt" class="btn btn-danger " value="Siguiente">
                        </div>
                       <div id="parte2" style="display: none;">
                        <label for="direccion">Dirección</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="direccion" name="direccion" class="form-control">
                            </div>
                        </div>
                        <label for="telefono">Teléfono/Celular</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="telefono" name="telefono" class="form-control">
                            </div>
                        </div>
                        <label for="conductor_adicional">Nombre Conductor Adicional</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="conductor_adicional" name="conductor_adicional" class="form-control">
                            </div>
                        </div>
                        <label for="conductor_adicional">Numero Documento Conductor Adicional</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" id="documento_conductor_adicional" name="documento_conductor_adicional" class="form-control">
                            </div>
                        </div>
                        <br>
                        <input type="text" value="cliente" name="cliente_reserva" style="display: none;">
                        <input type="button" value="Regresar" id="rgs" class="btn btn-danger" >
                        <button type="submit" class="btn btn-primary m-t-15 waves-effect">GUARDAR</button>
                       </div>
                       <div id="parte3" style="display: none;">
                        
                            <div class="form-group " style="display: none;">
                                <div class="form-line">
                                    <input type="text" id="yes" name="yes" class="form-control"  >
                                </div>
                            </div>
                            <h3 class="text-danger my-3">Hola me alegra tenerte por aqui</h3>
                            <p class="lead text-light text-justify my-1">
                                
                        
                               
                                <br>
                                <b id="nombre_encontrado" class="text-danger"></b>
                                <br> <br>
                                es un gusto que reserves con nosotros nuevamente 
                                <br>
                                <br>
                            </p>
                        <button type="submit" class="btn btn-danger m-t-15 waves-effect">RESERVAR AHORA</button>
                       </div>
                        
                    </form>
                </div>
                
                
            </div>
        
            
        </div>
    </section><!-- Contact Area End -->
@endsection