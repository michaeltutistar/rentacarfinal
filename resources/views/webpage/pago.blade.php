@extends('webpage.index')
@section('content')
<!-- Breadcromb Area Start -->
<section class="gauto-breadcromb-area section_70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcromb-box">
                        <h3>GESTION DE PAGO</h3>
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
            
        <h2 class="text-danger text-center">GESTION DE PAGO</h2>
        <p class="lead text-light text-justify">
            Realize su pago de manera segura por medio PSE<br><br>
           
           
        </p>
        
        <br>
        <div class="row ">
            <div class="col-md-5">
                <form  method="POST" id="" action="{{ route('generar_pago',['id'=>base64_encode($reserva->id_reserva*1996)]) }}">
                    @csrf
                    Tipo de documento
                    <div class="form-group">
                        
                        <select class="" id="" name="T_documento">
                            <option value="CC">Cédula de ciudadanía.
                                <option value="CE">Cédula de extranjería.
                                <option value="NIT">Número de Identificación Tributaria (Empresas).
                        </select>
                    </div><br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Número de documento</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Número" name="no_cedula" value="{{$reserva->numero_documento}}">
                    </div>
                
                    Nombre de Banco
                    <div class="form-group">
                    
                    <select class="form-control " id="" name="bank_code">
                        @foreach ($lista_bancos as $banco)
                        <option value="{{$banco->id}}">{{$banco->description}}</option>
                    
                        @endforeach
                    </select>
                
                    
                    </div><br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombre del titular</label>
                        <input type="text" class="form-control" id="" name="nombre_usuario" placeholder="Nombre" value="{{$reserva->nombres." ".$reserva->apellidos}}">
                    </div>
                    
                    Tipo de Beneficiario
                    <div class="form-group">
                        
                        <select class="form-control" id="" name="T_persona">
                            <option disabled>Seleccion Tipo</option>
                            <option value="individual">Natural</option>
                            <option value="association">Juridica</option>
                        
                        </select>
                        </div>
<br>
<h3 class="py-5 text-danger">Valor a cancelar</h3>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="porcentaje"checked/>
                            <label class="form-check-label" for="flexRadioDefault1"><h4>  15% de reserva {{$reserva->valor_reserva}}</h4> </label>
                          </div>
                          
                          <!-- Default checked radio -->
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="total" />
                            <label class="form-check-label" for="flexRadioDefault2"> <h4> Total de reserva {{$reserva->saldo+$reserva->valor_reserva}}</h4></label>
                          </div>
                        <br>
                        <div class="text-center">
                            <input type="submit" class="btn btn-success text-center"  value="Ir Al Banco">
                        </div>
                       
                </form>
            </div>
        
        </div>
       
        </div>
    </section><!-- Contact Area End -->
@endsection