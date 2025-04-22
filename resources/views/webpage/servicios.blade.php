@extends('webpage.index')
@section('content')
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
                        <div class="single-service"><span class="service-number">01</span>
                            <div class="service-icon"><img src="{!! asset('webpage/img/service-1.png')!!}" alt="city trasport" />
                            </div>
                            <div class="service-text"><a href="#">
                                    <h3>Alquiler de Vehículos</h3>
                                </a>
                                <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur
                                    adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="single-service"><span class="service-number">02</span>
                            <div class="service-icon"><img src="{!! asset('webpage/img/airport-transport.png')!!}"
                                    alt="airport trasport" /></div>
                            <div class="service-text"><a href="#">
                                    <h3>Transporte Aeropuerto</h3>
                                </a>
                                <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur
                                    adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="single-service"><span class="service-number">03</span>
                            <div class="service-icon"><img src="{!! asset('webpage/img/service-3.png')!!}"
                                    alt="hospital trasport" /></div>
                            <div class="service-text"><a href="#">
                                    <h3>Servicio de Conductor</h3>
                                </a>
                                <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur
                                    adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="single-service"><span class="service-number">04</span>
                            <div class="service-icon"><img src="{!! asset('webpage/img/service-4.png')!!}"
                                    alt="wedding trasport" /></div>
                            <div class="service-text"><a href="#">
                                    <h3>Servicio de Recogida</h3>
                                </a>
                                <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur
                                    adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="single-service"><span class="service-number">05</span>
                            <div class="service-icon"><img src="{!! asset('webpage/img/domicilio.png')!!}"
                                    alt="wedding trasport" /></div>
                            <div class="service-text"><a href="#">
                                    <h3>Entrega A Domicilio</h3>
                                </a>
                                <p>Risus commodo maecenas accumsan lacus vel facilisis. Dorem ipsum dolor consectetur
                                    adipiscing elit.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Area End -->
@endsection
