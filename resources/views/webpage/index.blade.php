<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Rentacar Pasto | Alquiler de vehículos a nivel nacional">
    <meta name="keyword" content="taxi,car,rent,hire,transport">
    <meta name="author" content="Themescare">
    <!-- Title -->
    <title>Rentacar Pasto</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{!! asset('webpage/img/favicon/favicon-32x32.png')!!}">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/bootstrap.min.css') !!}" />
    <!--Font Awesome css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/font-awesome.min.css') !!}" />
    <!--Magnific css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/magnific-popup.css') !!}" />
    <!--Owl-Carousel css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/owl.carousel.min.css') !!}" />
    <link rel="stylesheet" href="{!! asset('webpage/css/owl.theme.default.min.css') !!}" />
    <!--Animate css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/animate.min.css') !!}" />
    <!--Datepicker css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/jquery.datepicker.css') !!}" />
    <!--Nice Select css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/nice-select.css') !!}" />
    <!-- Lightgallery css -->
    <link rel="stylesheet" href="{!! asset('webpage/css/lightgallery.min.css') !!}" />
    <!--ClockPicker css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/jquery-clockpicker.min.css') !!}" />
    <!--Slicknav css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/slicknav.min.css') !!}" />
    <!--Site Main Style css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/style.css') !!}" />
    <!--Responsive css-->
    <link rel="stylesheet" href="{!! asset('webpage/css/responsive.css') !!}" />
    <!--Icon webpage-->
    <link rel="icon" href="{!! asset('webpage/img/icon-webpage.png') !!}" />
</head>

<body>
    <style>
        .btn-wsp{
            position:fixed;
            width:60px;
            height:60px;
            line-height: 63px;
            bottom:50px;
            left:25px;
            background:#22c25c;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:35px;
            box-shadow: 0px 1px 10px rgba(0,0,0,0.3);
            z-index:100;
            transition: all 300ms ease;
        }
        .btn-wsp:hover{
            background: #134225;
        }
        @media only screen and (min-width:320px) and (max-width:768px){
            .btn-wsp{
                width:63px;
                height:63px;
                line-height: 66px;
            }
        }
        
        /* Estilos para el banner de cookies */
        .cookie-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.85);
            color: #fff;
            padding: 15px 20px;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.2);
        }
        
        .cookie-banner.hidden {
            display: none;
        }
        
        .cookie-content {
            flex: 1;
            margin-right: 20px;
        }
        
        .cookie-buttons {
            display: flex;
            gap: 10px;
        }
        
        .cookie-btn {
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .cookie-accept {
            background-color: #22c25c;
            color: white;
        }
        
        .cookie-accept:hover {
            background-color: #1ca94f;
        }
        
        .cookie-reject {
            background-color: #f44336;
            color: white;
        }
        
        .cookie-reject:hover {
            background-color: #d32f2f;
        }
        
        @media only screen and (max-width: 768px) {
            .cookie-banner {
                flex-direction: column;
                text-align: center;
            }
            
            .cookie-content {
                margin-right: 0;
                margin-bottom: 15px;
            }
        }
        </style>
        <a href="https://api.whatsapp.com/send?phone=573227795422&text=Hola%20Rent%20A%20Car%20necesito%20ayuda%20para%20alquilar%20un%20veh%C3%ADculo." class="btn-wsp" target="_blank">
                <i class="fa fa-whatsapp icono"></i>
        </a>
        
        <!-- Banner de Cookies -->
        <div id="cookieBanner" class="cookie-banner">
            <div class="cookie-content">
                <h4>Política de Cookies</h4>
                <p>Utilizamos cookies propias y de terceros para mejorar nuestros servicios y mostrarle publicidad relacionada con sus preferencias mediante el análisis de sus hábitos de navegación.</p>
            </div>
            <div class="cookie-buttons">
                <button id="acceptCookies" class="cookie-btn cookie-accept">Aceptar</button>
                <button id="rejectCookies" class="cookie-btn cookie-reject">Rechazar</button>
            </div>
        </div>
    <!-- Header Top Area Start -->
    <section class="gauto-header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="header-top-left">
                        <p><i class="fa fa-whatsapp"></i><a onclick=" window.open('https://api.whatsapp.com/send/?phone=573227795422&text&app_absent=0', '_blank');">  Contáctanos: 3227795422</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- 
                    <div class="header-top-right"><a href="{{ route('login')}}"><i class="fa fa-key"></i> Iniciar Sesión</a>
                   -->
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Header Top Area End -->
    <!-- Main Header Area Start -->
    <header class="gauto-main-header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="site-logo"><a href="{{ route('inicio')}}"><img src="{!! asset('webpage/img/logo.png')!!}" alt="rentacar" style="border-radius: 20px;"/></a></div>
                </div>
                <div class="col-lg-6 col-sm-9">
                    <div class="header-promo">
                        <div class="single-header-promo">
                            <div class="header-promo-icon"><img src="{!! asset('webpage/img/globe.png')!!} " alt="globe" /></div>
                            <div class="header-promo-info">
                                <h3>San Juan de Pasto</h3>
                                <p>Nariño, Colombia</p>
                            </div>
                        </div>
                        <div class="single-header-promo">
                            <div class="header-promo-icon"><img src="{!! asset('webpage/img/clock.png')!!}" alt="clock" /></div>
                            <div class="header-promo-info">
                                <h3>Lunes a Domingo</h3>
                                <p>7:00am - 8:00pm</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="col-lg-3">
                    <div class="header-action"><a href="#"><i class="fa fa-phone"></i>Request a call</a></div>
                </div>
                -->
            </div>
        </div>
    </header><!-- Main Header Area End -->

    <!-- Mainmenu Area Start -->
    <section class="gauto-mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="mainmenu">
                        <nav>
                            <ul id="gauto_navigation">
                                <li class="active"><a href="{{ route('inicio')}}">INICIO</a></li>
                                <!-- 
                                
                                <li><a href="{{ route('servicios')}}">SERVICIOS</a></li>
                                <li><a href="{{ route('vehiculos')}}">VEHÍCULOS</a></li>
                                -->
                                <li><a href="{{ route('gallery')}}">GALERÍA</a></li>
                                <li><a href="{{ route('contact')}}">CONTÁCTANOS</a></li>
                                <li><a href="{{ route('info')}}">SOBRE NOSOTROS</a></li>
                               
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="main-search-right">
                        <!-- Responsive Menu Start -->
                        <div class="gauto-responsive-menu"></div>
                        <!-- Responsive Menu Start -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Mainmenu Area End -->

    <!--inicio cuerpo de sitios-personalizado-->
    @yield('content')
    <!--final cuerpo de sitios-personalizado-->

    <!-- Footer Area Start -->
    <footer class="gauto-footer-area">
        <div class="footer-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="single-footer">
                           <!-- <div class="footer-logo"><a href="#"><img src="{!! asset('webpage/img/logo.png')!!}"
                                        alt="footer-logo" width="180px" height="180px"/></a></div>-->
                            <div class="footer-address">
                                <h3>RENTACAR PASTO</h3>
                                <p>Carrera 22B #11 Sur 61</p>
                                <ul>
                                    <li>Telefono: 3227795422</li>
                                    <li>Email: sistemas@rentacarpasto.com</li>
                                    <li>Horarios: 7AM a 7PM</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-footer quick_links">
                            <h3>ENLACES RÁPIDOS</h3>
                            <ul class="quick-links">
                                <li><a href="{{ route('inicio')}}">Inicio</a></li>
                                <li><a href="{{ route('servicios')}}">Servicios</a></li>
                                <li><a href="{{ route('vehiculos')}}">Vehículos</a></li>
                                <li><a href="{{ route('gallery')}}">Galería</a></li>
                            </ul>
                            <ul class="quick-links">
                                <li><a href="{{ route('info')}}">Información</a></li>
                                <li><a href="{{ route('contact')}}">Contactos</a></li>
                                
                            </ul>
                        </div>
                        <div class="single-footer newsletter_box">
                            <h3>NOTICIAS</h3>
                            <form><input type="email" placeholder="Email Address" /><button type="submit"><i
                                        class="fa fa-paper-plane"></i></button></form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="copyright">
                            <p>COPYRIGHT © 2025 RENTA CAR PASTO - TODOS LOS DERECHOS RESERVADOS  DESIGN AND DEVELOPEMENT BY <a href="http://www.mdaengine.com">MDAENGINE.COM</a></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!--Jquery js
    <script src="{!! asset('webpage/js/jquery.min.js') !!}"></script>
-->

    <script src="{!! asset('dash/plugins/jquery/jquery.min.js ') !!}"></script>
    <!-- Popper JS -->
    <script src="{!! asset('webpage/js/popper.min.js')!!}"></script>
    <script src="{!! asset('webpage/js/popper.min.js') !!}"></script>
    <!--Bootstrap js-->
    <script src="{!! asset('webpage/js/bootstrap.min.js') !!}"></script>
    <!--Owl-Carousel js-->
    <script src="{!! asset('webpage/js/owl.carousel.min.js') !!}"></script>
    <!--Lightgallery js-->
    <script src="{!! asset('webpage/js/lightgallery-all.js') !!}"></script>
    <script src="{!! asset('webpage/js/custom_lightgallery.js') !!}"></script>
    <!--Slicknav js-->
    <script src="{!! asset('webpage/js/jquery.slicknav.min.js')!!}"></script>
    <!--Magnific js-->
    <script src="{!! asset('webpage/js/jquery.magnific-popup.min.js') !!}"></script>
    <!--Nice Select js-->
    <script src="{!! asset('webpage/js/jquery.nice-select.min.js') !!}"></script>
    <!-- Datepicker JS -->
    <script src="{!! asset('webpage/js/jquery.datepicker.min.js') !!}"></script>
    <!--ClockPicker JS-->
    <script src="{!! asset('webpage/js/jquery-clockpicker.min.js') !!}"></script>
    <!--Main js-->
    <script src="{!! asset('webpage/js/main.js') !!}"></script>
    <!--WhatsappButton js-->
    <script src="{!! asset('dash/js/sweetalert2.all.min.js') !!}"></script>
    <script src="{!! asset('webpage/js/whpbtn.js') !!}"></script>
    <script src="{!! asset('dash/js/moment.min.js') !!}"></script>
    <script src="{!! asset('webpage/js/style_hache.js') !!}"></script>

    <!-- Script para el banner de cookies -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cookieBanner = document.getElementById('cookieBanner');
            const acceptBtn = document.getElementById('acceptCookies');
            const rejectBtn = document.getElementById('rejectCookies');
            
            // Comprobar si ya se ha tomado una decisión sobre las cookies
            if (!localStorage.getItem('cookiesAccepted') && !localStorage.getItem('cookiesRejected')) {
                cookieBanner.classList.remove('hidden');
            } else {
                cookieBanner.classList.add('hidden');
            }
            
            // Función para aceptar cookies
            acceptBtn.addEventListener('click', function() {
                localStorage.setItem('cookiesAccepted', 'true');
                cookieBanner.classList.add('hidden');
                // Aquí puedes añadir código para habilitar todas las cookies
            });
            
            // Función para rechazar cookies
            rejectBtn.addEventListener('click', function() {
                localStorage.setItem('cookiesRejected', 'true');
                cookieBanner.classList.add('hidden');
                // Aquí puedes añadir código para deshabilitar cookies no esenciales
            });
        });
    </script>
</body>

</html>