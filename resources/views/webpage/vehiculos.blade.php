@extends('webpage.index')
@section('content')
<!-- Breadcromb Area Start -->
<section class="gauto-breadcromb-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-box">
                        <h3>VEHÍCULOS</h3>
                        <ul>
                            <li><i class="fa fa-home"></i></li>
                            <li><a href="index.html">Inicio</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li>Vehículos</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Breadcromb Area End -->
    <!-- Car Listing Area Start -->
    <section class="gauto-car-listing section_70">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="car-listing-right">
                       
                        <div class="car-grid-list">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-offers">
                                        <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/kia-picanto.png')!!}" alt="offer 1" /></a></div>
                                        <div class="offer-text"><a href="#">
                                                <h3>Sandero</h3>
                                            </a>
                                            <h4>$190.000<span>/ Día</span></h4>
                                            <ul>
                                                <li><i class="fa fa-car"></i>Model:2017</li>
                                                <li><i class="fa fa-cogs"></i>Automatic</li>
                                                <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                            </ul>
<!--
                                            <div class="offer-action"><a href="#" class="offer-btn-1">Rent Car</a><a
                                                    href="#" class="offer-btn-2">Details</a></div>
                                            -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-offers">
                                        <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/spark-gt.png')!!}"
                                                    alt="offer 1" /></a></div>
                                        <div class="offer-text"><a href="#">
                                                <h3>Chevrolet tracker</h3>
                                            </a>
                                            <h4>$280.000<span>/ Día</span></h4>
                                            <ul>
                                                <li><i class="fa fa-car"></i>Model:2017</li>
                                                <li><i class="fa fa-cogs"></i>Automatic</li>
                                                <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                            </ul>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-offers">
                                        <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/renault-logan.png')!!}" alt="offer 1" /></a></div>
                                        <div class="offer-text"><a href="#">
                                                <h3>Hyundai Tucson</h3>
                                            </a>
                                            <h4>$300.000<span>/ Día</span></h4>
                                            <ul>
                                                <li><i class="fa fa-car"></i>Model:2017</li>
                                                <li><i class="fa fa-cogs"></i>Automatic</li>
                                                <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                            </ul>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-offers">
                                        <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/sandero-stepway.png')!!}"
                                                    alt="offer 1" /></a></div>
                                        <div class="offer-text"><a href="#">
                                                <h3>Chevrolet Beat</h3>
                                            </a>
                                            <h4>$180.000<span>/ Día</span></h4>
                                            <ul>
                                                <li><i class="fa fa-car"></i>Model:2017</li>
                                                <li><i class="fa fa-cogs"></i>Automatic</li>
                                                <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-offers">
                                        <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/renault-duster.jpg')!!}" alt="offer 1" /></a></div>
                                        <div class="offer-text"><a href="#">
                                                <h3>Renault Duster</h3>
                                            </a>
                                            <h4>$300.000<span>/ Día</span></h4>
                                            <ul>
                                                <li><i class="fa fa-car"></i>Model:2017</li>
                                                <li><i class="fa fa-cogs"></i>Automatic</li>
                                                <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                            </ul>
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-offers">
                                        <div class="offer-image"><a href="#"><img src="{!! asset('webpage/img/ford-ecosport.jpg')!!}" alt="offer 1" /></a></div>
                                        <div class="offer-text"><a href="#">
                                                <h3>Renault Sandero</h3>
                                            </a>
                                            <h4>$190.000<span>/ Día</span></h4>
                                            <ul>
                                                <li><i class="fa fa-car"></i>Model:2017</li>
                                                <li><i class="fa fa-cogs"></i>Automatic</li>
                                                <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Car Listing Area End -->
@endsection