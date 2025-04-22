@extends('webpage.index')
@section('content')
<!-- Breadcromb Area Start -->
<section class="gauto-breadcromb-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-box">
                        <h3>Galería de Imágenes</h3>
                        <ul>
                            <li><i class="fa fa-home"></i></li>
                            <li><a href="index.html">Inicio</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li>Galería de Imágenes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcromb Area End -->
    <!-- Gallery Area Start -->
    <section class="gauto-gallery-area section_70" style="background-image: url('{!! asset('webpage/img/background.png') !!}'); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row" id="lightgallery">
            <div class="col-lg-4" data-src="{!! asset('webpage/img/onix-ltz.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/onix-ltz.png')!!}" alt="gallery 6" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3>Suzuki S-presso</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/onix-ltz.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('webpage/img/nisan-march.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/nisan-march.png')!!}" alt="gallery 2" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3>Nissan March</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/nisan-march.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('webpage/img/volkswagen.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/volkswagen.png')!!}" alt="gallery 5" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3><a href="#">Volkswagen gol</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/volkswagen.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4" data-src="{!! asset('webpage/img/renault-sandero.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/renault-sandero.png')!!}" alt="gallery 4" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3><a href="#">Renault Sandero</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/renault-sandero.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('webpage/img/joy.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/joy.png')!!}" alt="gallery 3" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3><a href="#">Chevrolet Joy</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/joy.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('webpage/img/joysedan.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/joysedan.png')!!}" alt="gallery 1" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3>Chevrolet joy sedan</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/joysedan.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-lg-4" data-src="{!! asset('webpage/img/onix.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/onix.png')!!}" alt="gallery 6" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3>Chevrolet Onix sedan</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/onix.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('webpage/img/onix-hatchback.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/onix-hatchback.png')!!}" alt="gallery 6" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3>Suzuki Dzire</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/onix-hatchback.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4" data-src="{!! asset('webpage/img/chevrolet-onix.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/chevrolet-onix.png')!!}" alt="gallery 6" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3>Renault Logan</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/chevrolet-onix.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('webpage/img/susw.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/susw.png')!!}" alt="gallery 6" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3>Suzuki Swift Hibrido</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/susw.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('webpage/img/rs.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/rs.png')!!}" alt="gallery 6" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3>Renault Stepway</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/rs.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('webpage/img/nk.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/nk.png')!!}" alt="gallery 6" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3>Nissan Versa AT</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/nk.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('webpage/img/versam.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/versam.png')!!}" alt="gallery 6" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3>Nissan Versa MT</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/versam.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('webpage/img/duster_blanco.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/duster_blanco.png')!!}" alt="gallery 6" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3>Renault Duster 4x2</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/duster_blanco.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('webpage/img/chevrolet-tracker.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/chevrolet-tracker.png')!!}" alt="gallery 6" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3>Renault Duster 4x4</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/chevrolet-tracker.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('webpage/img/fordeco.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/fordeco.png')!!}" alt="gallery 6" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3>Ford Ecosport</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/fordeco.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('webpage/img/tucson.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/tucson.png')!!}" alt="gallery 6" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3>Hyundai Tucson</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/tucson.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-src="{!! asset('webpage/img/qashqai.png')!!}">
                    <div class="single-gallery">
                        <div class="img-holder"><img src="{!! asset('webpage/img/qashqai.png')!!}" alt="gallery 6" />
                            <div class="overlay-content">
                                <div class="inner-content">
                                    <div class="title-box">
                                        <h3>Van Shineray X30</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="link-zoom-button">
                                
                                <div class="single-button"><a class="zoom lightbox-image"
                                        href="{!! asset('webpage/img/qashqai.png')!!}"><span class="fa fa-search"></span>Zoom</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Sedes Area Start -->
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="site-heading">
                            <h2>NUESTRAS SEDES</h2>
                            <p>CONOCE NUESTRAS SEDES</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="single-offers">
                            <div class="offer-img">
                                <img src="{!! asset('webpage/img/principal.jpg') !!}" alt="Sede Principal">
                            </div>
                            <div class="offer-text text-center">
                                <h3>Sede Principal</h3>
                                <p><i class="fa fa-map-marker"></i> Cabañas Rio Mayo oficina 1, Chachagüí</p>
                                <p><i class="fa fa-phone"></i> celular: (+57)3227795422</p>
                                <p><i class="fa fa-clock-o"></i> Lun - Sáb: 8:00 AM - 6:00 PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-offers">
                            <div class="offer-img">
                                <img src="{!! asset('webpage/img/panamericana.jpg') !!}" alt="Sede Pasto">
                            </div>
                            <div class="offer-text text-center">
                                <h3>Sede Pasto</h3>
                                <p><i class="fa fa-map-marker"></i> Cra 36 #10-21, Avenida Panamericana, Pasto, Nariño</p>
                                <p><i class="fa fa-phone"></i> Celular (+57) 3227795422</p>
                                <p><i class="fa fa-clock-o"></i> Lun - Sáb: 8:00 AM - 6:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sedes Area End -->
        </div>
    </section>
    <!-- Gallery Area End -->
@endsection