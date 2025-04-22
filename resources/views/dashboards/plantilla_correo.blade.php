<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Plantilla Correo Rentacar</title>
</head>

<body>
    <font style = "font-family:arial;">
    <div align="center">
        
        <img src="https://v2.rentacarpasto.com/dash/images/banner-correo.png" alt="Logo" width="100%" height="250">
    </div>
   
    <div align="center"> 
    <hr width=900 color=#C52121>
   <a href="https://api.whatsapp.com/send?phone=573227795422&text=🚨🚗VALIDAR%20RESERVA🚗🚨%0AHola%20RENT%20A%20CAR%0Asoy%20{{$cliente->nombres}}%20{{$cliente->apellidos}}%0Adeseo%20validar%20mi%20reserva%20con%20serial%20%23{{$reservas->id_reserva}}%20🏁." style="background-color: #4CAF50;" ><h3>¡CLICK AQUI PARA VALIDAR TU RESERVA!</h3></a>
    <hr width=900 color=#C52121>
    </div>
    
    <div align="center">
        <hr width=900 color=#C52121>
        <h3>INFORMACIÓN CLIENTE</h3>
        <hr width=900 color=#C52121>
    </div>

    <div align=center>
        <table width=850>
            <tr>
                <td>
                    <label>Serial Reserva</label>
                </td>

                <td>
                    <b id="tipo_documento">{{$reservas->id_reserva}}</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Tipo de Documento</label>
                </td>

                <td>
                    <b id="tipo_documento">{{$cliente->tipo_documento}}</b>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Número de Documento</label>
                </td>
                <td>
                    <b id="numero_documento">{{$cliente->numero_documento}}</b>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Nombres</label>
                </td>
                <td>
                    <b id="nombres">{{$cliente->nombres}}</b>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Apellidos</label>
                </td>
                <td>
                    <b id="apellidos">{{$cliente->apellidos}}</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Dirección</label>
                </td>
                <td>
                    <b id="direccion"> {{$cliente->direccion}}</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Teléfono/Celular</label>
                </td>
                <td>
                    <b id="telefono">{{$cliente->telefono}}</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Nombre Conductor Adiconal</label>
                </td>
                <td>
                    <b id="conductor_adicional">{{$cliente->conductor_adicional}}</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Numero Documento Conductor Adicional</label>
                </td>
                <td>
                    <b id="documento_conductor_adicional">{{$cliente->documento_conductor_adicional}}</b>
                </td>
            </tr>
        </table>
    </div>
    <hr width=900 color=#C52121>

    <div align="center">
        <h3>INFORMACIÓN VEHÍCULO</h3>
        <hr width=900 color=#C52121>
    </div>

    <div align=center>
        <table width=850>

            <tr>
                <td>
                    <label>Nombre Vehículo</label>
                </td>

                <td>
                    <b id="nombre_vehiculo">{{$vehiculo->nombre_vehiculo}}</b>
                </td>

                <td rowspan="10">
                    <img src="{{ url('/storage/vehiculo/', $vehiculo->foto_vehiculo) }}" width="400" height="280" />
                </td>
            </tr>

            <tr>
                <td>
                    <label>Placa Vehículo</label>
                </td>
                <td>
                    <b id="placa">{{$vehiculo->placa}}</b>
                </td>
            </tr>

            <tr>
                <td>
                    <label>Marca Vehículo</label>
                </td>
                <td>
                    <b id="marca">{{$vehiculo->marca}}</b>
                </td>
            </tr>

            
            <tr>
                <td>
                    <label>Color Vehículo</label>
                </td>
                <td>
                    <b id="color">{{$vehiculo->color}}</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Vigencia SOAT</label>
                </td>
                <td>
                    <b id="vigencia_soat">{{$vehiculo->vigencia_soat}}</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Vigencia Tecnomecánica (CDA)</label>
                </td>
                <td>
                    <b id="vigencia_tecnomecanica">{{$vehiculo->vigencia_tecnomecanica}}</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Valor Alquiler Vehículo</label>
                </td>
                <td>
                    <b id="precio_alquiler">{{$vehiculo->precio_alquiler}}</b>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Precio Lavado Vehículo</label>
                </td>
                <td>
                    <b id="precio_lavado">{{$vehiculo->precio_lavado}}</b>
                </td>
            </tr>
           

        </table>
    </div>
    <hr width=900 color=#C52121>
    <div align="center">
        <h3>INFORMACIÓN RESERVA</h3>
        <hr width=900 color=#C52121>
    </div>
    <div>
        <div align="center">
            <table border=3 width=850>
                <tr>
                    <th>VEHÍCULO</th>
                    <th>VALOR</th>
                    <th>TOTAL</th>
                </tr>

                <tr>
                    <td><label id="nombre_vehiculo">Alquiler {{$vehiculo->nombre_vehiculo}}
                    <br>Desde {{$reservas->fecha_inicio}} <br> Hasta {{$reservas->fecha_fin}} 
                    </label></td>

                    <td>
                        <b id="precio_alquiler">{{$vehiculo->precio_alquiler}} x {{$reservas->dias_reserva}} dias</b>
                    </td>
                    <td>
                        <b>
                            <?php $total=$vehiculo->precio_alquiler*$reservas->dias_reserva;?>
                            {{$total}}
                        </b>
                    </td>
                </tr>
                <tr>
                    <td>TRANSPORTE {{$reservas->lugar}}</td>
                    <td><b id="">{{$reservas->precio_transporte}}</b></td>
                    <td>
                        <b>
                            {{$reservas->precio_transporte}}
                        </b>
                    </td>
                </tr>
                @if ($reservas->lavado==1)
                    <tr>
                        <td>LAVADO VEHÍCULO</td>
                        <td><b id="precio_lavado">{{$vehiculo->precio_lavado}}</b></td>
                        <td>
                            <b>
                                {{$vehiculo->precio_lavado}}
                            </b>
                        </td>
                    </tr>
                @endif
                <tr>
                    <td>RESERVA</td>
                    <td>
                        <b id="">15% </b>
                    </td>
                    <td>
                        <b>
                            {{$reservas->valor_reserva}}
                        </b>
                    </td>
                </tr>

                <tr>
                    <td>DESCUENTO</td>
                    <td>
                        <b id=""></b>
                    </td>
                    <td>
                        <b>
                            {{$reservas->descuento}}
                        </b>
                    </td>
                </tr>


                <tr>
                    <td>SALDO</td>
                    <td>
                        <b id=""></b>
                    </td>
                    <td>
                        <b>
                            {{$reservas->saldo}}
                        </b>
                    </td>
                </tr>
               
            </table>
            <hr width=900 color=#C52121>
        </div>
    </div>

    <div>
        <div align="center">
            <table width=850>
                <tr>
                    <th align="justify">
                        <p style = "font-family:arial;">
                            El vehículo estará sujeto a las fechas solicitadas para los desplazamientos, por
                            esta razón se debe comunicar lo antes posible los días exactos de los recorridos
                            para no ceder el vehículo que usted escoja a otras actividades.
                            <br><br>
                            Con anticipación se debe hacer una reserva de los vehículos por medio de una
                            consignación a una cuenta bancaria del 30% del total de la renta, que se indicaría
                            posteriormente y el excedente se pagará contra entrega.
                            <br><br>
                            Si el vehículo lo necesita en el aeropuerto el costo adicional será de 35.000 por
                            trayecto.
                            <br><br>
                            Recuerde que son días de 24 horas, a la hora de entrega el 1er día será la misma hora
                             para la devolución el último día. Si lo entrega luego de ello se realiza un cobro de
                              la siguiente manera: Con gusto le ofrecemos horas adicionales con un máximo de 4
                               (cada una con un valor de $15.000) luego de eso se cobra el día completo de alquiler.
                            <br><br>
                            Los vehículos cuentan con los seguros correspondientes, incluidos en el precio. 
                            se tiene un kilometraje limitado a 220 km por día, cada Km adcional tiene un valor 
                            de $1.000 o depende del destino.
                            <br><br>
                            Para la renta pedimos una garantía de 1.000.000 con tarjeta de crédito por vehículo,
                            y 1.500.000 por las camionetas.
                            <br><br>
                            <b>CONDICIONES DEL ALQUILER</b>
                            <br><br>
                            <ul>
                                <li>Cubre 90%</li>
                                <li>Deducible el 10% a responsabilidad del cliente deducible: $ 1.000.000</li>
                                <li><b>Rent A Car Pasto no hace devolución del valor de la reserva, el valor puede ser utilizado para otra reserva.</b></li>
                               <li>Es indispensable dejar un depósito para alquiler de vehículos de 1.000.000 y alquiler de camionetas 1.500.000 como respaldo de seguridad, dinero que será reintegrado hasta 8 días hábiles después de la revisión del vehículo en caso de no presentarse novedades.</li>
                            </ul>
                            <br><br>
                            Quedo atenta a sus comentarios y solicitudes.
                        </p>
                    </th>
                </tr>

            </table>
        </div>
    </div>

    <div>
        <div align="center">
            <table width=850>
                <tr>
                    <th align="justify">
                        <p>
                            ___________________________________
                            <br>
                            AMANDA ELIZABETH BASTIDAS
                            <br>
                            Gerente administrativo
                            <br>
                            Cel. 3204408344
                        </p>
                    </th>
                </tr>

            </table>
            <hr width=900 color=#C52121>
        </div>
    </div>

    <div align="center">
        RENT A CAR PASTO. Cel: 320 440 8344 www.rentacarpasto.com
    </div>
</font>
</body>

</html>