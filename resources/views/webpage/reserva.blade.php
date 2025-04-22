@extends('webpage.index')
@section('content')
<!-- Breadcromb Area Start -->
<section class="gauto-breadcromb-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-box">
                        <h3>Vehículos Disponibles</h3>
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
            <div class="row justify-content-center">
               <div class="col-md-3 col-6 bg-carmesy text-light mx-1 mt-1"><h5>Lugar de entrega: {{$todo["lugar_entrega"]}}</h5></div>
               <div class="col-md-2 col-4 bg-carmesy text-light mx-1 mt-1"><h5>{{$todo["desdes"]}}</h5></div>
               <div class="col-md-3 col-6 bg-carmesy text-light mx-1 mt-1"><h5>Lugar de recogida: {{$todo["lugar_recogida"]}}</h5></div>
               <div class="col-md-2 col-4 bg-carmesy text-light mx-1 mt-1"><h5>{{$todo["hastas"]}}</h5></div>
            </div>
            @foreach ($disponibles as $disponible)
            <div class="border border-danger row my-4 justify-content-center bg-fondo  py-2 mx-1 ">
                
                <div class="col-md-4 col-5 text-center align-self-center" >  
                    
                    <div class="row justify-content-center bg-black text-light mb-1 py-3">
                        <h5 >{{$disponible->nombre_vehiculo}}</h5>
                    </div>
                            <div class="row  mb-1 text-center">
                                <div class="col-md-6  col-4 bg-carmesy  text-light text-center">Total</div>
                                <div class="col-md-6  col-8  bg-black text-light ">
                                  <h5>  @if ($dia==1)
                                    {{$dia}} Día
                                @else
                                {{$dia}} Días
                                @endif
                                </h5></div>
                            </div>
                            <div class="row  mb-1">
                                <div class="col-md-6 col-4 bg-carmesy  text-light">COP</div>
                                <?php 
                                $valor=$dia*$disponible->precio_alquiler; 
                                $valor=  number_format($valor, 0);
                                ?>
                                <div class="col-md-6 col-8 bg-black text-light"><h5>${{$valor}}</h5></div>
                            </div>
                            <div class="row  pt-3 justify-content-center bg-grid text-light">
                                <div class="col-md-5 col-5"><i class="fas fa-users"> {{$disponible->pasajeros}} <br>pasajeros</i></div>
                                
                                
                                <div class="col-md-5 col-5"><i class="fas fa-cash-register"> {{$disponible->caja}} </i></div>
                                
                            </div>
                </div>
                <div class="col-md-4 col-6 mb-1 text-center align-self-center">
                    <img   class="rounded" src="{{ url('/storage/vehiculo/', $disponible->foto_vehiculo) }}">
                </div>
                <div class="col-md-3 align-self-center"><button type="button" class="btn btn-success btn-block" onclick="reserva_wasap('{{$disponible->nombre_vehiculo}}','{{$todo['desdes']}}','{{$todo['hastas']}}')"> <i class="fa fa-whatsapp icono"></i> Escríbenos</button>

                    <?php 
                        $fecha_prueba=strtotime($todo["desdes"]);
                        $desde=date('Y-m-d',$fecha_prueba);
                        $desde=$desde." ".$todo["hora_entrega"];
                    
                        $fecha_prueba1=strtotime($todo["hastas"]);
                        $hasta=date('Y-m-d',$fecha_prueba1);
                        $hasta=$hasta." ".$todo["hora_recogida"];

                        //$date1 = new DateTime($desde);
                        //$date2 = new DateTime($hasta);
                        
                       
                        
                        ?>
                    <button type="button" class="btn btn-danger btn-block" ><a class="text-light" href="{{ route('reserva_cliente',['data'=>$disponible->id_vehiculo,'fecha1'=>$desde,'fecha2'=>$hasta,'transporte'=>$transporte ])}}">Reservar Ahora</a></button></div>
            </div>
            @endforeach
            
        </div>
    </section><!-- Contact Area End -->
@endsection