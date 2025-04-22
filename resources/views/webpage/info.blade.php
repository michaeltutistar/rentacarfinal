@extends('webpage.index')
@section('content')
 <!-- Breadcromb Area Start -->
 <section class="gauto-breadcromb-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-box">
                        <h3>SOBRE NOSOTROS</h3>
                        <ul>
                            <li><i class="fa fa-home"></i></li>
                            <li><a href="index.html">Inicio</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li>Nosotros</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Breadcromb Area End -->
    <!-- About Page Area Start -->
    <section class="about-page-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about-page-left">
                        <h4>RENTACAR PASTO</h4>
                        <hr>
                        <h3>MISIÓN</h3>
                        <p style="font-size: 18px; color: #000;">Nuestra misión es satisfacer en su totalidad las expectativas de todos nuestros clientes y sus familias, brindándoles un servicio integral y con un alto estándar de calidad. Ya sea por vacaciones, recreación, descanso, negocios, trabajo o placer RENTA CAR PASTO ofrece la renta de autos, al mejor precio y con seguro de cobertura amplia y kilometraje ilimitado en todos los vehículos.</p>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="about-page-right"><img src="{!! asset('webpage/img/mision.png')!!}" alt="about page" /></div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="about-page-area section_90">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about-page-left">
                        <h4>RENTACAR PASTO</h4>
                        <hr>
                        <h3>VISIÓN</h3>
                        <p style="font-size: 18px; color: #000;">Servir eficientemente, siendo fiel a nuestros principios y valores corporativos, generando bienestar, seguridad y confianza en nuestros clientes, usuarios, empleados y todo aquel que solicite nuestros servicios de alquiler de vehículos, satisfaciendo eficazmente y con entusiasmo, la necesidad del servicio que ha solicitado.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-page-right"><img src="{!! asset('webpage/img/vision.png')!!}" alt="about page" /></div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-page-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about-page-left">
                        <h4>RENTACAR PASTO</h4>
                        <hr>
                        <h3>VALORES</h3>
                        <p style="font-size: 18px; color: #000;">Cumpliremos todos los compromisos que tenemos con nuestros clientes.</p>
                        <p style="font-size: 18px; color: #000;">Dirigiremos nuestra empresa con altos estándares inquebrantables de honestidad, confianza, profesionalismo y ética.</p>
                        <p style="font-size: 18px; color: #000;">El interés de nuestros clientes siempre estará primero.</p>
                        <p style="font-size: 18px; color: #000;"> Nos dedicaremos a brindar una experiencia de alquiler individual que garantice la satisfacción del cliente y por medio de la cual nos ganemos la confianza incondicional de nuestros clientes.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-page-right"><img src="{!! asset('webpage/img/valores.png')!!}" alt="about page" /></div>
                </div>
            </div>
        </div>
    <section class="map-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-heading">
                        <h2>NUESTRA UBICACIÓN</h2>
                        <p>ENCUENTRANOS EN PASTO</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="google-map">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7737845789837!2d-77.28333468524528!3d1.2125799991599774!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2ed48aaaaaaaab%3A0xaaaaaaaaaaaaaaaaa!2sCra.%2036%20%2310-21%2C%20Pasto%2C%20Nari%C3%B1o!5e0!3m2!1ses!2sco!4v1635789012345!5m2!1ses!2sco"
                            width="100%" 
                            height="450" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                    <div class="location-info text-center mt-4">
                        <h4><i class="fa fa-map-marker"></i> Cra 36 #10-21, Avenida Panamericana, Pasto, Nariño</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>

@endsection