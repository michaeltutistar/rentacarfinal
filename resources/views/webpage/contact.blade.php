@extends('webpage.index')
@section('content')
<!-- Breadcromb Area Start -->
<section class="gauto-breadcromb-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-box">
                        <h3>Contáctanos</h3>
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
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-left">
                        <h3>Ponte en contacto con nosotros</h3>
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-contact-field"><input type="text" placeholder="Nombres & Apellidos"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-contact-field"><input type="email" placeholder="Correo Electrónico">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-contact-field"><input type="text" placeholder="Asunto (PQRS)"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-contact-field"><input type="tel" placeholder="Teléfono / Celular">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="single-contact-field"><textarea
                                            placeholder="Escriba el motivo por el cual desea contactarse con nosotros"></textarea></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="single-contact-field"><button type="submit" class="gauto-theme-btn"><i
                                                class="fa fa-paper-plane"></i> Enviar Mensaje</button></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-right">
                        <h3>Información de Contacto</h3>
                        <div class="contact-details">
                            <p><i class="fa fa-map-marker"></i>Cra 36 #10-21, Avenida Panamericana, Pasto, Nariño</p>
                            <div class="single-contact-btn">
                                <h4>Escríbenos</h4><a href="#">sistemas@rentacarpasto.com</a>
                            </div>
                            <div class="single-contact-btn">
                                <h4>Llámanos</h4><a href="#">3227795422</a>
                            </div>
                            <div class="social-links-contact">
                                <h4>Síguenos:</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Contact Area End -->
@endsection