@extends('webpage.index')
@section('content')

  <style>
 option{
  height: 50px;
  overflow: auto;
}
</style>
<!-- Cookie Consent Banner -->


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-carmesy text-center" style="
        border-bottom-width: 0px;
    ">
          <h5 class="modal-title  text-light" id="exampleModalLabel">Rent A Car</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body bg-black">
           <a href="https://api.whatsapp.com/send?phone=573227795422&text=Hola%20Rent%20A%20Car%20necesito%20ayuda%20para%20alquilar%20un%20veh%C3%ADculo.">  <img src="{!! asset('webpage/img/publicidad1rentacar.jpg')!!}" 
            class="img-fluid rounded mx-auto d-block" alt="Responsive image"></a>
        </div>
        <div class="modal-footer bg-black text-center" style="
        border-top-width: 0px;
    ">
          <button type="button" class="btn btn-secondary bg-carmesy" data-dismiss="modal">Visita Nuestro Portal</button>
        </div>
      </div>
    </div>
  </div>
  
<!-- Slider Area Start -->
<section class="gauto-slider-area fix">
        <div class="gauto-slide owl-carousel">
            <div class="gauto-main-slide slide-item-1">
                <div class="gauto-main-caption">
                    <div class="gauto-caption-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-text">
                                        <p>Autos desde $190.000 por día</p>
                                        <h2>Reserva Hoy Mismo</h2> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gauto-main-slide slide-item-2">
                <div class="gauto-main-caption">
                    <div class="gauto-caption-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-text">
                                    <p>Autos desde $190.000 por día</p>
                                        <h2>Reserva Hoy Mismo</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gauto-main-slide slide-item-3">
                <div class="gauto-main-caption">
                    <div class="gauto-caption-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-text">
                                    <p>Autos desde $190.000 por día</p>
                                        <h2>Reserva Hoy Mismo</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gauto-main-slide slide-item-4">
                <div class="gauto-main-caption">
                    <div class="gauto-caption-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-text">
                                    <p>Autos desde $190.000 por día</p>
                                        <h2>Reserva Hoy Mismo</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gauto-main-slide slide-item-5">
                <div class="gauto-main-caption">
                    <div class="gauto-caption-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-text">
                                    <p>Autos desde $190.000 por día</p>
                                        <h2>Reserva Hoy Mismo</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gauto-main-slide slide-item-6">
                <div class="gauto-main-caption">
                    <div class="gauto-caption-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-text">
                                    <p>Autos desde $190.000 por día</p>
                                        <h2>Reserva Hoy Mismo</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gauto-main-slide slide-item-7">
                <div class="gauto-main-caption">
                    <div class="gauto-caption-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-text">
                                    <p>Autos desde $190.000 por día</p>
                                        <h2>Reserva Hoy Mismo</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gauto-main-slide slide-item-8">
                <div class="gauto-main-caption">
                    <div class="gauto-caption-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-text">
                                    <p>Autos desde $190.000 por día</p>
                                        <h2>Reserva Hoy Mismo</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- Slider Area End -->
     <!-- Find Area Start -->
     <section class="gauto-find-area" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="find-box">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="find-text">
                                    <h3>Encuentre los mejores autos aquí.</h3>
                                </div>
                            </div>
                            
                            <div class="col-md-8">
                                <div class="find-form">
                                    @if (\Session::has('error'))
                                    <div class="alert alert-danger" role="alert">
                                        ERROR:{!! \Session::get('error') !!}
                                    </div>
                                    @endif
                                    <form method="POST" id="consulta_carros" action="{{ route('post_reserva_usuario') }}" >
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-4">
                                                <p>
                                                    
                                                <select id="lugar-entrega" name="lugar_entrega">
                                                <option disabled selected>Lugar de entrega</option>
                                                <option value="Pasto">Pasto</option>
                                                <option value="Aeropuerto-Pasto">Pasto - Aeropuerto Antonio Nariño</option>
                                                <option value="Aeropuerto-Ipiales">Ipiales - Aeropuerto San Luis</option>
                                               
                                            </select>
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p> <input class="form-control" type="date" id="desdes" name="desdes">
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    <input type="time" id="hora_entrega" name="hora_entrega"
                                                    required placeholder="Hora de entrega">
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                        <div class="col-md-4">
                                                <p>
                                                <select id="lugar-recogida" name="lugar_recogida">
                                                <option disabled selected>Lugar de recogida</option>
                                                <option value="Pasto">Pasto</option>
                                                <option value="Aeropuerto-Pasto">Pasto - Aeropuerto Antonio Nariño</option>
                                                <option value="Aeropuerto-Ipiales">Ipiales - Aeropuerto San Luis</option>
                                                
                                                </select>
                                                </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p> <input class="form-control" type="date" id="hastas" name="hastas">
                                            </p>
                                            </div>
                                            <div class="col-md-4">
                                                <p>
                                                    
                                                    <input type="time" id="hora_recogida" name="hora_recogida"
                                                 required  placeholder="Hora de recogida">
                                                </p>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <p><button type="submit" class="gauto-theme-btn" id="Buscar">BUSCAR</button></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Find Area End -->
    <div class="marquee">
        <!-- <span><h3>🚗 ¡Explora Pasto con estilo! Rent a Car Pasto te ofrece los mejores precios, vehículos modernos y un servicio de calidad. 🚘 ¡Reserva ahora y empieza tu aventura! 🌟</h3></span> -->
    </div>
    <!-- Offers Area Start -->
    <section class="gauto-offers-area section_70 img_cars_fond">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading">
                        <h2>NUESTROS VEHÍCULOS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="offer-tabs">
                        
                        <div class="tab-content" id="offerTabContent">
                            <!-- All Tab Start -->
                            <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                <div class="row">
                                <div class="col-lg-4">
                                        <div class="single-offers" >
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/onix-ltz.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Suzuki S-presso</h3>
                                                </a>
                                                 <!--  <h4>$200.000<span>/ Día</span></h4> -->
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                    <li><i class="fa fa-car"></i>MECÁNICO <i class="fa fa-user"></i>5 Pasajeros</li>
                                                </ul>
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Chevrolet Onix LTZ')" class="offer-btn-1">Reservar</a><a
                                                href="#" class="offer-btn-2" onclick="Swal.fire({
                                                            title: 'Detalles del Suzuki S-presso',
                                                            text: 'El Suzuki S-Presso, de tamaño compacto, cuenta con una estética así como un despeje de suelo que lo ubica en la gama de los SUV. Su motor de 1.000 cc lo hacen además muy rendidor y económico. Su cajuela cuenta con capacidad para 239 litros, ideal para cualquier tipo de carga. Con su transmisión manual de 5 velocidades, hace que conducir por cualquier carretera sea una experiencia placentera. Pantalla LCD, Radio AM/FM, USB y conectividad Bluetooth',
                                                            icon: 'success',
                                                            confirmButtonText: 'Aceptar',
                                                            confirmButtonColor: '#28a745'
                                                        })">Detalles</a>    
                                                </div>
                                                </div>
                                        </div>
                                    </div>   

                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/nisan-march.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Nissan March</h3>
                                                </a>
                                                 <!--  <h4>$160.000<span>/ Día</span></h4>-->
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                    <li><i class="fa fa-car"></i>MECÁNICO <i class="fa fa-user"></i>5 Pasajeros</li>
                                                </ul>
                                                <div class="offer-action"><a  href="" onclick="mensaje_wpp_carro('Nissan March')" class="offer-btn-1">Reservar</a><a
                                                        href="#" class="offer-btn-2" onclick="Swal.fire({
                                                            title: 'Detalles del Nissan March',
                                                            text: 'Motor HR16DE de 1.6 litros y 4 cilindros que genera 106 caballos de fuerza a 5.600 RPM Transmisión: Caja mecánica de 5 velocidades y automática Rendimiento: Rinde hasta 16.1 kilómetros por litro en ciudad, 21.1 en carretera y 18.0 combinado Seguridad: Airbags de conductor y acompañante, frenos ABS, sistema de frenado EBD y asistencia de frenado BA Conectividad: Unidad de audio con pantalla táctil de 6.75 compatible con Android Auto® y Apple CarPlay',
                                                            icon: 'success',
                                                            confirmButtonText: 'Aceptar',
                                                            confirmButtonColor: '#28a745',
                                                        })">Detalles</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/volkswagen.png')!!}" alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Volkswagen Gol</h3>
                                                </a>
                                                <!--   <h4>$170.000<span>/ Día</span></h4>-->
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                    <li><i class="fa fa-car"></i>MECÁNICO <i class="fa fa-user"></i>5 Pasajeros</li>
                                                </ul>
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Volkswagen Gol')" class="offer-btn-1">Reservar</a><a
                                                href="#" class="offer-btn-2" onclick="Swal.fire({
                                                            title: 'Detalles del Volkswagen Gol',
                                                            text: 'El Motor TSI con una potencia de 150 Hp y torque de 250 Nm,  la transmisión DSG del Golf 1.4TSI ofrece la deportividad y el rendimiento, Sistema de 7 airbags.Las bolsas de aire frontales, laterales, de cortina y de rodilla ofrecen la máxima seguridad a sus ocupantes, Pantalla táctil de 8compatible con Apple Car Play, Android Auto y MirrorLink®.',
                                                            icon: 'success',
                                                            confirmButtonText: 'Aceptar',
                                                            confirmButtonColor: '#28a745'
                                                        })">Detalles</a>        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/renault-sandero.png')!!}" alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Renault Sandero</h3>
                                                </a>
                                                <!--   <h4>$190.000<span>/ Día</span></h4>-->
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                    <li><i class="fa fa-car"></i>MECÁNICO <i class="fa fa-user"></i>5 Pasajeros</li>
                                                </ul>
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Renault Sandero')" class="offer-btn-1">Reservar</a><a
                                                href="#" class="offer-btn-2" onclick="Swal.fire({
                                                            title: 'Detalles del Renault Sandero',
                                                            text: 'El Renault SANDERO está equipado de serie con 4 airbags (conductor, copiloto y laterales), frenos ABS, fijaciones ISOFIX®, Disfruta de la gran potencia de un motor de 111HP* en todos tus trayectos, con un menor consumo. Motor 1.6L 16V 111HP, Aire acondicionado manual',
                                                            icon: 'success',
                                                            confirmButtonText: 'Aceptar',
                                                            confirmButtonColor: '#28a745'
                                                        })">Detalles</a>        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-lg-4">
                                        <div class="single-offers" >
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/joy.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Chevrolet Joy</h3>
                                                </a>
                                                <!--   <h4>$200.000<span>/ Día</span></h4> -->
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                    <li><i class="fa fa-car"></i>MECÁNICO <i class="fa fa-user"></i>5 Pasajeros</li>
                                                </ul>
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Sandero Stepway')" class="offer-btn-1">Reservar</a><a
                                                href="#" class="offer-btn-2" onclick="Swal.fire({
                                                            title: 'Detalles del Chevrolet Joy',
                                                            text: 'El motor 1.4L con caja manual de 5 velocidades del nuevo Chevrolet Joy, te ofrece un desempeño de 97 HP y 126 NM de torque. Radio touchscreen 7 con smartphone integration TECNOLOGÍA Asistente de arranque en pendiente SEGURIDAD con 2 airbags frontales, sistema de frenos ABS con distribución de frenado EBD, asistente de arranque en pendiente (HSA), alerta sonora de cinturón de seguridad y sistema de anclaje Isofix & Top Tether.',
                                                            icon: 'success',
                                                            confirmButtonText: 'Aceptar',
                                                            confirmButtonColor: '#28a745'
                                                        })">Detalles</a>    
                                                
                                                </div>
                                                </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="single-offers" >
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/joysedan.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Chevrolet Joy Sedan</h3>
                                                </a>
                                                <!--   <h4>$200.000<span>/ Día</span></h4> -->
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                    <li><i class="fa fa-car"></i>MECÁNICO <i class="fa fa-user"></i>5 Pasajeros</li>
                                                </ul>
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Sandero Stepway')" class="offer-btn-1">Reservar</a><a
                                                href="#" class="offer-btn-2" onclick="Swal.fire({
                                                            title: 'Detalles del Chevrolet Joy',
                                                            text: 'El motor 1.4L con caja manual de 5 velocidades del nuevo Chevrolet Joy, te ofrece un desempeño de 97 HP y 126 NM de torque. Radio touchscreen 7 con smartphone integration TECNOLOGÍA Asistente de arranque en pendiente SEGURIDAD con 2 airbags frontales, sistema de frenos ABS con distribución de frenado EBD, asistente de arranque en pendiente (HSA), alerta sonora de cinturón de seguridad y sistema de anclaje Isofix & Top Tether.',
                                                            icon: 'success',
                                                            confirmButtonText: 'Aceptar',
                                                            confirmButtonColor: '#28a745'
                                                        })">Detalles</a>    
                                                
                                                </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers" >
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/onix.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Chevrolet Onix Sedan</h3>
                                                </a>
                                                <!--   <h4>$200.000<span>/ Día</span></h4> -->
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                    <li><i class="fa fa-car"></i>MECÁNICO <i class="fa fa-user"></i>5 Pasajeros</li>
                                                </ul>
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Sandero Stepway')" class="offer-btn-1">Reservar</a><a
                                                href="#" class="offer-btn-2" onclick="Swal.fire({
                                                            title: 'Detalles del Chevrolet Joy',
                                                            text: 'El motor 1.4L con caja manual de 5 velocidades del nuevo Chevrolet Onox, te ofrece un desempeño de 97 HP y 126 NM de torque. Radio touchscreen 7 con smartphone integration TECNOLOGÍA Asistente de arranque en pendiente SEGURIDAD con 2 airbags frontales, sistema de frenos ABS con distribución de frenado EBD, asistente de arranque en pendiente (HSA), alerta sonora de cinturón de seguridad y sistema de anclaje Isofix & Top Tether.',
                                                            icon: 'success',
                                                            confirmButtonText: 'Aceptar',
                                                            confirmButtonColor: '#28a745'
                                                        })">Detalles</a>    
                                                
                                                </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers" >
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/onix-hatchback.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Suzuki Dzire</h3>
                                                </a>
                                              <!--     <h4>$200.000<span>/ Día</span></h4> -->
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                    <li><i class="fa fa-car"></i>MECÁNICO <i class="fa fa-user"></i>5 Pasajeros</li>
                                                </ul>
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Chevrolet Onix LTZ HATCHBACK')" class="offer-btn-1">Reservar</a><a
                                                href="#" class="offer-btn-2" onclick="Swal.fire({
                                                            title: 'Detalles del Suzuki Dzire',
                                                            text: 'Las excepcionales prestaciones del Dzire provienen de la combinación de su motor 1.2L y la plataforma HEARTECT. Experimenta una conducción de la que no te cansarás.Funciona con Apple CarPlay para tu iPhone, o Android Auto™ o MirrorLink™ para tu smartphone compatible. sistema de entretenimiento de Radio AM/FM con compatible con MP3, CD y AUX. El Dzire viene con bolsas de aire frontales duales para la seguridad del conductor y el pasajero',
                                                            icon: 'success',
                                                            confirmButtonText: 'Aceptar',
                                                            confirmButtonColor: '#28a745'
                                                        })">Detalles</a>     
                                                </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/chevrolet-onix.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Renault Logan</h3>
                                                </a>
                                                <!--   <h4>$210.000<span>/ Día</span></h4> -->
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                    <li><i class="fa fa-car"></i>MECÁNICO <i class="fa fa-user"></i>5 Pasajeros</li>
                                                </ul>
                                                
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Chevrolet Onix')" class="offer-btn-1">Reservar</a><a
                                                href="#" class="offer-btn-2" onclick="Swal.fire({
                                                            title: 'Detalles del Renault Logan',
                                                            text: '1600cc- 16 V 111HP / Airbags Conductor + copiloto / Airbags laterales / Frenos ABS (sistema antibloqueo de frenos) / REF (repartidor electrónico de frenado) / Seguro de niños en las puertas traseras / Cinturones delanteros regulables en altura / Alerta olvido de luces. Aprovecha de un baúl gigante para el segmento con sus 510L. Y para esos días en los que necesites más espacio la silla trasera abatible 1/3-2/3*, permitirá aumentar la capacidad de carga hasta 1.257L',
                                                            icon: 'success',
                                                            confirmButtonText: 'Aceptar',
                                                            confirmButtonColor: '#28a745'
                                                        })">Detalles</a>       
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                   

                                    <div class="col-lg-4">
                                        <div class="single-offers" >
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/susw.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Suzuki Swift Hibrido</h3>
                                                </a>
                                                <!--   <h4>$220.000<span>/ Día</span></h4> -->
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                    <li><i class="fa fa-car"></i>MECÁNICO <i class="fa fa-user"></i>5 Pasajeros</li>
                                                </ul>
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Suzuki Swift')" class="offer-btn-1">Reservar</a><a
                                                href="#" class="offer-btn-2" onclick="Swal.fire({
                                                            title: 'Detalles del Suzuki Swift Hibrido',
                                                            text: 'Al ser un carro híbrido con sistema SHVS, permite que consuma menos combustible. El motor Z12E de 1.242 cc y 12 válvulas con doble VVT (admisión y escape) e inyección electrónica multipunto proporciona una potencia máxima de 60 HP a 5.700 RPM y un torque de 65 Nm a 4.300 RPM. Pantalla táctil con conectividad Apple CarPlay® y Android Auto®. Equipado con Alerta de colisión frontal, Función de asistencia en el carril, y Frenado Autónomo de emergencia, el Swift Híbrido te cuida en cada camino.',
                                                            icon: 'success',
                                                            confirmButtonText: 'Aceptar',
                                                            confirmButtonColor: '#28a745'
                                                        })">Detalles</a>        
                                                </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers" >
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/rs.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Renault Stepway</h3>
                                                </a>
                                                <!--   <h4>$220.000<span>/ Día</span></h4> -->
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                    <li><i class="fa fa-car"></i>MECÁNICO <i class="fa fa-user"></i>5 Pasajeros</li>
                                                </ul>
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Renault Sandero Stepway')" class="offer-btn-1">Reservar</a><a
                                                href="#" class="offer-btn-2" onclick="Swal.fire({
                                                            title: 'Detalles del Renault Stepway',
                                                            text: 'Motor 1.6L 16V 111HP-5.500 / Inyección multipunto secuencial / Berlina 5 puertas con tracción delantera / Chasis autoportante con cuatro ruedas independientes / Discos delanteros ventilados de 258 mm de diámetro y 22 mm de espesor / Frenos traseros de campanas de 8 pulgadas de diámetro. STEPWAY está equipado de serie con 4 airbags (conductor, copiloto y laterales), frenos ABS, control de estabilidad (ESC), control de tracción (ASR), fijaciones ISOFIX®',
                                                            icon: 'success',
                                                            confirmButtonText: 'Aceptar',
                                                            confirmButtonColor: '#28a745'
                                                        })">Detalles</a>     
                                                </div>
                                                </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/nk.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Nissan Versa</h3>
                                                </a>
                                                <!--   <h4>$230.000<span>/ Día</span></h4> -->
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                    <li><i class="fa fa-car"></i>AUTOMÁTICO <i class="fa fa-user"></i>5 Pasajeros</li>
                                                </ul>
                                                
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Nissan Versa')" class="offer-btn-1">Reservar</a><a
                                                href="#" class="offer-btn-2" onclick="Swal.fire({
                                                            title: 'Detalles del Nissan Versa',
                                                            text: 'motor de gasolina de 1.6 litros, que desarrolla 118 HP a 6.300 rpm, con torque de 149 nm @4000 rpm. El manejo es llevado a las llantas delanteras por medio de una suave caja de cambios. pantalla de asistencia avanzada de manejo, y en todas sus versiones con botón de encendido y llave inteligente, seis bolsas de aire, ubicadas tanto para el conductor como para el resto de los pasajeros, Sistema de anclaje para la silla del bebé en asiento trasero, Control Dinámico Vehicular, Asistente de ascenso en pendientes y sensores traseros de estacionamiento, que permiten perfeccionar el sistema de seguridad del vehículo.',
                                                            icon: 'success',
                                                            confirmButtonText: 'Aceptar',
                                                            confirmButtonColor: '#28a745'
                                                        })">Detalles</a>        
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/versam.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Nissan Versa</h3>
                                                </a>
                                                <!--   <h4>$230.000<span>/ Día</span></h4> -->
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                    <li><i class="fa fa-car"></i>MANUAL <i class="fa fa-user"></i>5 Pasajeros</li>
                                                </ul>
                                                
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Nissan Versa')" class="offer-btn-1">Reservar</a><a
                                                href="#" class="offer-btn-2" onclick="Swal.fire({
                                                            title: 'Detalles del Nissan Versa',
                                                            text: 'motor de gasolina de 1.6 litros, que desarrolla 118 HP a 6.300 rpm, con torque de 149 nm @4000 rpm. El manejo es llevado a las llantas delanteras por medio de una suave caja de cambios. pantalla de asistencia avanzada de manejo, y en todas sus versiones con botón de encendido y llave inteligente, seis bolsas de aire, ubicadas tanto para el conductor como para el resto de los pasajeros, Sistema de anclaje para la silla del bebé en asiento trasero, Control Dinámico Vehicular, Asistente de ascenso en pendientes y sensores traseros de estacionamiento, que permiten perfeccionar el sistema de seguridad del vehículo.',
                                                            icon: 'success',
                                                            confirmButtonText: 'Aceptar',
                                                            confirmButtonColor: '#28a745'
                                                        })">Detalles</a>        
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="site-heading">
                                    <br>
                                    <h2>CAMIONETAS</h2>
                                </div>

                                <div class="row">
   
                                <div class="col-lg-4">
                                        <div class="single-offers" >
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/duster_blanco.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Renault Duster 4x2</h3>
                                                </a>
                                                <!--   <h4>$290.000<span>/ Día</span></h4> -->
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                    <li><i class="fa fa-car"></i>MECÁNICO <i class="fa fa-user"></i>5 Pasajeros</li>
                                                </ul>
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Renault Duster')" class="offer-btn-1">Reservar</a><a
                                                href="#" class="offer-btn-2" onclick="Swal.fire({
                                                            title: 'Detalles del Renault Duster',
                                                            text: 'Motor 1.6 16V 105 HP, ABS+REF (Repartidor Electrónico de Frenado), Airbag conductor + pasajero, Rines 16 de lámina, Aire acondicionado, Indicador de Cambio de Marcha (GSI), BCI (Bloqueo Central Inteligente a partir de 10 Km/h), Radio con MP3, USB, entrada auxiliar y Bluetooth®, Alarma de olvido de ajuste de cinturón, Vidrios eléctricos delanteros, Anclajes ISOFIX en plazas traseras, Modo ECO, (HSA) Evita que el vehículo se ruede durante la maniobra de arranque en una pendiente. Todas las versiones equipada con frenos ABS de serie asegurando un mejor frenado en todo momento.',
                                                            icon: 'success',
                                                            confirmButtonText: 'Aceptar',
                                                            confirmButtonColor: '#28a745'
                                                        })">Detalles</a>    
                                                </div>
                                                </div>
                                        </div>
                                    </div>
                                <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/chevrolet-tracker.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Renault Duster 4x4</h3>
                                                </a>
                                             
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                    <li><i class="fa fa-car"></i>MECÁNICO <i class="fa fa-user"></i>5 Pasajeros</li>
                                                </ul>
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Chevrolet Tracker')" class="offer-btn-1">Reservar</a><a
                                                        href="#" class="offer-btn-2">Detalles</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/fordeco.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Ford EcoSport</h3>
                                                </a>
                                                <!--   <h4>$300.000<span>/ Día</span></h4> -->
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                    <li><i class="fa fa-car"></i>MECÁNICO <i class="fa fa-user"></i>5 Pasajeros</li>
                                                </ul>
                                                <div class="offer-action"><a href=""  onclick="mensaje_wpp_carro('Hyundai Tucson')" class="offer-btn-1">Reservar</a><a
                                                href="#" class="offer-btn-2" onclick="Swal.fire({
                                                            title: 'Detalles del Hyundai Tucson',
                                                            text: 'MOTOR 2.0 , 16 V, RIN 19 ALUMINIO BITONO, MODOS DE MANEJO ECO CONFORT Y SPORT, ASIENTO DE CONDUCTOR CON AJUSTE ELECTRICO, COJINERIA EN CUERO, RADIO TACTIL, TECHO PANORAMICO CON SUNROOF, 4X4 INTELIGENTE, CONTROL DE TRACCION, PARABRISAS TRASERO CON DESEMPAÑADOR AUTOMATICO, CARGADOR INALAMBRICO, Dirección electroasistida, sistema antibloqueo de frena, distribución electrónica de frenado, asistente de frenado, control de tracción asistente de ascenso en pendientes y mucho más.',
                                                            icon: 'success',
                                                            confirmButtonText: 'Aceptar',
                                                            confirmButtonColor: '#28a745'
                                                        })">Detalles</a>           
                                                
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/tucson.png')!!}"
                                                        alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Hyundai Tucson</h3>
                                                </a>
                                                <!--   <h4>$300.000<span>/ Día</span></h4> -->
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                    <li><i class="fa fa-car"></i>MECÁNICO <i class="fa fa-user"></i>5 Pasajeros</li>
                                                </ul>
                                                <div class="offer-action"><a href=""  onclick="mensaje_wpp_carro('Hyundai Tucson')" class="offer-btn-1">Reservar</a><a
                                                href="#" class="offer-btn-2" onclick="Swal.fire({
                                                            title: 'Detalles del Hyundai Tucson',
                                                            text: 'MOTOR 2.0 , 16 V, RIN 19 ALUMINIO BITONO, MODOS DE MANEJO ECO CONFORT Y SPORT, ASIENTO DE CONDUCTOR CON AJUSTE ELECTRICO, COJINERIA EN CUERO, RADIO TACTIL, TECHO PANORAMICO CON SUNROOF, 4X4 INTELIGENTE, CONTROL DE TRACCION, PARABRISAS TRASERO CON DESEMPAÑADOR AUTOMATICO, CARGADOR INALAMBRICO, Dirección electroasistida, sistema antibloqueo de frena, distribución electrónica de frenado, asistente de frenado, control de tracción asistente de ascenso en pendientes y mucho más.',
                                                            icon: 'success',
                                                            confirmButtonText: 'Aceptar',
                                                            confirmButtonColor: '#28a745'
                                                        })">Detalles</a>           
                                                
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-lg-4">
                                        <div class="single-offers">
                                            <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/qashqai.png')!!}" alt="offer 1" /></a></div>
                                            <div class="offer-text"><a href="#">
                                                    <h3>Van Shineray X30</h3>
                                                </a>
                                              
                                                <ul>
                                                    <li><i class="fa fa-car"></i>Full equipo AC</li>
                                                    <li><i class="fa fa-car"></i>MECANICO <i class="fa fa-user"></i>7 Pasajeros</li>
                                                </ul>
                                                <div class="offer-action"><a href="" onclick="mensaje_wpp_carro('Nissan Qashqai')" class="offer-btn-1">Reservar</a><a
                                                href="#" class="offer-btn-2" onclick="Swal.fire({
                                                            title: 'Detalles de la Van Shineray X30',
                                                            text: 'La Van Shineray X30 pasajeros es perfecta para transportar hasta 7 ocupantes con un espacio interior adecuado para cada persona.Interior lujosamente equipado con un elegante tablero electrónico. El vehículo también cuenta con aire acondicionado, desempañador posterior, asiento del conductor regulable en 6 direcciones, alarma de cinturón de seguridad e inmovilizador antirrobo',
                                                            icon: 'success',
                                                            confirmButtonText: 'Aceptar',
                                                            confirmButtonColor: '#28a745'
                                                        })">Detalles</a>        
                                                
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    
                                </div>

                                    
                            </div>
                            
                            </div>
                            <!-- All Tab End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offers Area End -->
   
    <!-- About Area Start -->
    <section class="gauto-about-area section_70 gradient-black-red">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-6">
                    <div class="about-left">
                        <h4>RENT A CAR PASTO</h4>
                        <h2>¡Bienvenido!</h2>
                        <p>Empresa pionera y lider en Nariño pone a su disposición vehículos en diferentes gamas para:</p>
                        <div class="about-list">
                            <ul>
                                <li><i class="fa fa-check"></i>Alquiler de Vehículos</li>
                                <li><i class="fa fa-check"></i>Vehiculo 7 pasajeros</li>
                                <li><i class="fa fa-check"></i>Servicio de Recogida</li>
                                <li><i class="fa fa-check"></i>Entrega a Domicilio</li>
                                <li><i class="fa fa-check"></i>Cómodos Precios</li>
                           
                            </ul>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-6">
                    <div class="about-right">
                        <h4 class="text-white">Requisitos para reservar:</h4>
                        <ul style="list-style: none; padding-left: 0;">
                            <li style="font-size: 18px;"><i class="fa fa-check"></i> Ser mayor de 25 años</li>
                            <li style="font-size: 18px;"><i class="fa fa-check"></i> Tarjeta de crédito para la garantía de $1.000.000 para vehículos y $1.500.000 para camionetas</li>
                            <li style="font-size: 18px;"><i class="fa fa-check"></i> Licencia de conduccion, cedula o pasaporte</li>
                        </ul>
                    </div>
                </div>
        
                    <div class="google-map">
                        <iframe 
                        
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7737845789837!2d-77.28333468524528!3d1.2125799991599774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2ed48aaaaaaaab%3A0xaaaaaaaaaaaaaaaaa!2sCra.%2036%20%2310-21%2C%20Pasto%2C%20Nari%C3%B1o!5e0!3m2!1ses!2sco!4v1635789012345!5m2!1ses!2sco"
                            width="350" 
                            height="220" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                    <div class="location-info text-left mt-4">
                        <h5 class="text-left"><i class="fa fa-map-marker"></i>ESTAMOS UBICADOS EN: Cra 36 #10-21, Avenida Panamericana, Pasto, Nariño</h5>
                    </div>
                
            

            </div>
        </div>
    </section><!-- About Area End -->
   <!-- Service Area Start -->
<section class="gauto-service-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="site-heading">
        
                        <h2>Nuestros Servicios</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="service-slider owl-carousel">
                        <div class="single-service"><span class="service-number text-light">01</span>
                            <div class="service-icon"><img src="{!! asset('webpage/img/service-1.png')!!}" alt="city trasport" />
                            </div>
                            <div class="service-text"><a href="#">
                                    <h3>Alquiler de Vehículos</h3>
                                </a>
                                <p>Precios comodos en gamas baja,media y alta</p>
                            </div>
                        </div>
                        <!-- <div class="single-service"><span class="service-number text-light text-light">02</span>
                            <div class="service-icon"><img src="{!! asset('webpage/img/airport-transport.png')!!}"
                                    alt="airport trasport" /></div>
                            <div class="service-text"><a href="#">
                                    <h3>Transporte Aeropuerto</h3>
                                </a>
                                <p>Entregas y recogidas.</p>
                            </div>
                        </div> -->
                      
                       
                        <div class="single-service"><span class="service-number text-light">02</span>
                            <div class="service-icon"><img src="{!! asset('webpage/img/domicilio.png')!!}"
                                    alt="wedding trasport" /></div>
                            <div class="service-text"><a href="#">
                                    <h3>Entrega A Domicilio</h3>
                                </a>
                                <p>Entregas a domicilio dentro de la ciudad sin ningun costo</p>
                            </div>
                        </div>
                        <div class="single-service"><span class="service-number text-light">03</span>
                            <div class="service-icon"><img src="{!! asset('webpage/img/domicilio.png')!!}"
                                    alt="wedding trasport" /></div>
                            <div class="service-text"><a href="#">
                                    <h3>Traslados a nivel nacional</h3>
                                </a>
                                <p>Aplican terminos y condiciones</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area End -->

    <!-- Promo Area Start -->
    <section class="gauto-promo-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="promo-box-left" style="height:260px;width:500px;"><img src="{!! asset('webpage/img/logo-web.png')!!}" width="250"  /></div>
                </div>
                <div class="col-md-6">
                    <div class="promo-box-right">
                        <h2 style="color:White; font-size: 2.5em; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); margin-bottom: 2px;">¿Te gustaría tener ingresos adicionales? 💰</h2>
                        <p style="color:White; font-size: 1.2em; line-height: 1.6; text-shadow: 1px 1px 3px rgba(0,0,0,0.3);">¡Únete a nuestro equipo! Si tienes vehículos modelo 2022 o superior, esta es tu oportunidad. 🚗✨ <br><strong>¡Contáctanos ahora y comienza a generar ingresos!</strong></p>
                        <a href="https://api.whatsapp.com/send?phone=573227795422&text=Hola%20Rent%20A%20Car%20necesito%20ayuda%20para%20alquilar%20un%20veh%C3%ADculo." class="btn btn-light btn-lg mt-3" style="font-weight: bold; border-radius: 25px; padding: 10px 30px; transition: all 0.3s ease;">Más Información</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Promo Area End -->

    
@endsection