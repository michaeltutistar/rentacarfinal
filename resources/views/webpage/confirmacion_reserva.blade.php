@extends('webpage.index')
@section('content')
<!-- Breadcromb Area Start -->
<section class="gauto-breadcromb-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-box">
                        <h3>Reserva Exitosa</h3>
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

    <?php 
        $clientes = Session::get('clientes'); 
        $vehiculo = Session::get('vehiculo'); 
        $reservas = Session::get('reservas'); 
       $nombre_completo= $clientes->nombres." ".$clientes->apellidos;
       $nombre_vehiculo=$vehiculo->nombre_vehiculo;
       $correo=$clientes->email;
       
     
    ?>
    <section class="gauto-contact-area section_70">
        <div class="container">
            
        <h2 class="text-danger text-center">Información Importante</h2>
        <p class="lead text-light text-justify">
            ¡HOLA!<br><br>
            <b class="text-danger">{{$nombre_completo}} </b><br><br>
           gracias por reservar con <b class="text-danger">RENT A CAR</b> hemos enviado los detalles de la reserva al correo <b class="text-danger">{{$correo}}</b>.
           El ultimo paso es validar tu reserva con uno de nuestros funcionarios y todo quedará en orden para el arrendamiento del vehículo <b class="text-danger">{{$nombre_vehiculo}}</b>
        </p>
        <br>
        <div class="text-center">
            <input type="button" class="btn btn-success text-center" onclick="confirmar_reserva('{{$nombre_completo}}','{{$reservas}}')" value="Validar Reserva">
        </div>
       
        </div>
    </section><!-- Contact Area End -->
@endsection