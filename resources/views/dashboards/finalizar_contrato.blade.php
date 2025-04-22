@extends('dashboards.index')
@section('registro_clientes')

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                          FINALIZAR CONTRATO
                        </h2>
                       
                        <br>
						<div class="body">
                            <div class="row">
                                <div class="col-md-6">
                                   <div class="row">
                                    <h4>Cliente</h4>
                                   </div>
                                   <div class="row">
                                    <div class="col-md-12">
                                        <table class="table">
                                          <thead class="thead-light">
                                            <tr>
                                              <th scope="col">Campos</th>
                                              <th scope="col">Datos</th>
                                            
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <th scope="row">NOMBRE COMPLETO</th>
                                              <td>{{$reservas[0]->nombres}} {{$reservas[0]->apellidos}}</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">DOCUMENTO DE IDENTIDAD</th>
                                              <td>{{$reservas[0]->numero_documento}}</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">TELEFONO DE CONTACTO</th>
                                              <td>{{$reservas[0]->telefono}}</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">DIRECCION Y CIUDAD DE DOMICILIO</th>
                                              <td>{{$reservas[0]->direccion}}</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">GARANTIA - VOUCHER</th>
                                              <td>none</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">FECHA DE ENTREGA</th>
                                              <td>{{$reservas[0]->fecha_inicio}}</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">FECHA DE DEVOLUCION</th>
                                              <td>{{$reservas[0]->fecha_fin}}</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">CONDUCTOR ADICIONAL O AUTORIZADO</th>
                                              <td>{{$reservas[0]->conductor_adicional}}</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">DOCUMENTO DE IDENTIDAD CONDUCTOR ADICIONAL</th>
                                              <td>{{$reservas[0]->documento_conductor_adicional}}</td>
                                            </tr>
                                            
                                          </tbody>
                                        </table>
                                     </div>
                                   </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="row">
                                    <h4>Vehiculo</h4>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12">
                                
                                  
                                        <table class="table">
                                          <thead class="thead-light">
                                            <tr>
                                              <th scope="col">Campos</th>
                                              <th scope="col">Datos</th>
                                            
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                              <th scope="row">VEHICULO</th>
                                              <td>{{$reservas[0]->nombre_vehiculo}}</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">PLACA</th>
                                              <td>{{$reservas[0]->placa}}</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">MARCA</th>
                                              <td>{{$reservas[0]->marca}}</td>
                                            </tr>
                                            <tr>
                                              <th scope="row">MODELO</th>
                                              <td>{{$reservas[0]->modelo}}</td>
                                            </tr>
                                            
                                            <tr>
                                              <th scope="row">COLOR</th>
                                              <td>{{$reservas[0]->color}}</td>
                                            </tr>
                                            <tr>
                                              <th scope="row"> </th>
                                              <td><img src="{{ url('/storage/vehiculo/', $reservas[0]->foto_vehiculo) }}"
                                                class=" img-thumbnail" width="300px" height="300px"></td>
                                            </tr>
                                            
                                          </tbody>
                                        </table>
                                     </div>
                                  </div>
                                </div>
                               
                               
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Información Entrada</h4>
                                </div>
                               
                            </div>
                            
                        <form action="{{ route('post_finalizar_contrato', $id_contrato) }}" method="POST" >
                            @csrf
                            <?php 
                             $todo= $reservas[0]->fecha_fin; 
                             $fecha_prueba=strtotime($todo);
                             $desde=date('Y-m-d',$fecha_prueba);
                            ?>
                            <label>Fecha de Entrada</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="date"  class="form-control"  value="{{ $desde}}" name="fecha_entrada">
                                </div>
                            </div>
							<label>Hora Entrada</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="time"  id="hora_entrada"  name="hora_entrada" class="form-control" placeholder="HH:MM">
                                </div>
                            </div>
							<label>KM Entrada</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" class="form-control"   name="km_entrada">
                                </div>
                            </div>
							<label>KM por Cobrar</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" class="form-control" id="km_por_cobrar" name="km_por_cobrar">
                                </div>
                            </div>
							<label>Combustible de Entrada</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" id="combustible_entrada" name="combustible_entrada">
                                        <option value="R">R</option>
                                        <option value="1/2" >1/2</option>
                                        <option value="1/4" >1/4</option>
                                        <option value="3/4" >3/4</option>
                                        <option value="FULL" >FULL</option>
                                            </select>
                                </div>
                            </div>
							<label>No. Días</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" class="form-control" id="dias" name="dias" value="{{ $reservas[0]->dias_reserva}}">
                                </div>
                            </div>
                            
							<br>

							
							<div class="form-group row">
                                    <label class="col-md-8 text-center text-center col-form-label">Documentos al día</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox"  name="documento_dia"
                                                id="documento_dia" {{$reservas[0]->documento_dia==1?"checked":""}}><span class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center  col-form-label">Luces Exteriores</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox"  name="Luces_exteriores"
                                                id="Luces_exteriores" {{$reservas[0]->Luces_exteriores==1?"checked":""}}><span class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Luz Interior</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox"  name="Luz_interior" id="Luz_interior"
                                       {{$reservas[0]->Luz_interior==1?"checked":""}} ><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Limpia Parabrisas</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox"  name="Limpia_brisas"
                                                id="Limpia_brisas" {{$reservas[0]->Limpia_brisas==1?"checked":""}}><span class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Pito</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox"  name="Pito" id="Pito"
                                        {{$reservas[0]->Pito==1?"checked":""}}><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Espejos Internos-Externos</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox"  name="Espejos_externos_internos"
                                                id="Espejos_externos_internos" {{$reservas[0]->Espejos_externos_internos==1?"checked":""}}><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Radio</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox"  name="Radio" id="Radio" 
                                        {{$reservas[0]->Radio==1?"checked":""}}><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Llanta de repuesto</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox"  name="Llanta_repuesto"
                                                id="Llanta_repuesto" {{$reservas[0]->Llanta_repuesto==1?"checked":""}}><span class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Gato</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox"  name="Gato" id="Gato"
                                        {{$reservas[0]->Gato==1?"checked":""}}><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Cruceta</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox"  name="Cruceta" id="Cruceta"
                                        {{$reservas[0]->Cruceta==1?"checked":""}}><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Equipo de carreteras</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox"  name="Equipo_carretera"
                                                id="Equipo_carretera" {{$reservas[0]->Equipo_carretera==1?"checked":""}}><span class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Emblemas</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox"  name="Emblemas" id="Emblemas"
                                        {{$reservas[0]->Emblemas==1?"checked":""}}><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Antena</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox"  name="Antena" id="Antena"
                                        {{$reservas[0]->Antena==1?"checked":""}}><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Copas</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox"  name="Copas" id="Copas"
                                        {{$reservas[0]->Copas==1?"checked":""}}><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>

                                

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Mantenimiento</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox"  name="mantenimiento"
                                                id="mantenimiento" {{$reservas[0]->mantenimiento==1?"checked":""}}><span class="lever"></span>Si</label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-8 text-center col-form-label">Lavado</label>
                                    <div class="switch">
                                        <label>No<input type="checkbox"  name="lavado" id="lavado"
                                        {{$reservas[0]->lavado==1?"checked":""}}><span
                                                class="lever"></span>Si</label>
                                    </div>
                                </div>
                            <br>
                            
                                <br><br>
                            <label>¿Observaciones por parte de quien recibe?</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" value="Todo en orden" class="form-control" id="observaciones_recibido_entrada" name="observaciones_recibido_entrada">
                                </div>
                            </div>
                            <label>¿Observaciones por parte de quien entrega?</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" value="Todo en orden" class="form-control" id="observaciones_entregado_entrada" name="observaciones_entregado_entrada">
                                </div>
                            </div>
                    </div>
   

                    <hr>
                    <h3 class="text-center">Control Inventario</h3>
                    <div class="container-fluid">
                        <div class="row ">
                          
                            <div class="col-md-8 text-center ">
                                <canvas id="draw-canvas3" class=""   width="390" height="340"   >       
                                </canvas>
                            </div>
                            <div class="col-md-4  text-center">
                                <label><h5>Color de pluma</h5></label><br><br>
                                <input  type="color" id="color3" value="#000000"><br><br>
                                <label><h5>Tamaño de pluma</h5></label><br><br>
                                <input  type="range" id="puntero3" min="1" default="1" max="5" width="10%">
                                <br>
                                <input type="button" class="button" id="draw-clearBtn3" value="Borrar Trazos">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center" >
                                <input style="display:none;" type="button" class="button" id="draw-submitBtn3" value="Crear Firma" ></input>
                            </div>
                        </div>
                        <br/>
                        <div class="row" style="display:none;">
                            <div class="col-md-12">
                                <textarea id="draw-dataUrl3" name="inventario" class="form-control" rows="5">Base 64:</textarea>
                            </div>
                        </div>
                        <div class="contenedor" style="display:none;">
                            <div class="col-md-12">
                                <img id="draw-image3" src="" alt=" Firma" width="320" height="150"/>
                            </div>
                        </div>
                    </div>
                    

<div class="contenedor">
    <div class="row">
        <div class="col-md-6">
            <p>Recibido por</p>
            <div class="row">
                <div class="col-md-12">
                     <canvas id="draw-canvas" width="320" height="150">
                     </canvas>
                 </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="button" class="button" id="draw-submitBtn" value="Crear Imagen"></input>
                    <input type="button" class="button" id="draw-clearBtn" value="Borrar Canvas"></input>
    
                            <label style="display:none;">Color</label>
                            <input style="display:none;" type="color" id="color">
                            <label style="display:none;">Tamaño Puntero</label>
                            <input style="display:none;" type="range" id="puntero" min="1" default="1" max="5" width="10%">
                </div>
    
                
            </div>
    
            <br/>
            <div class="row" style="display:none;">
                <div class="col-md-12">
                    <textarea id="draw-dataUrl" name="recibido_por_entrada" class="form-control" rows="5">Base 64:</textarea>
                </div>
            </div>
            <br/>
            <div class="contenedor" style="display:none;">
                <div class="col-md-12">
                    <img id="draw-image" src="" alt=" Firma"/>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <p>Entregado por</p>
            <div class="row">
                <div class="col-md-12">
                     <canvas id="draw-canvas2" width="320" height="150">
                     </canvas>
                 </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="button" class="button" id="draw-submitBtn2" value="Crear Imagen"></input>
                    <input type="button" class="button" id="draw-clearBtn2" value="Borrar Canvas"></input>
    
                            <label style="display:none;">Color</label>
                            <input style="display:none;" type="color" id="color2">
                            <label style="display:none;">Tamaño Puntero</label>
                            <input style="display:none;" type="range" id="puntero2" min="1" default="1" max="5" width="10%">
    
    
                </div>
    
            </div>
    
            <br/>
            <div class="row" style="display:none;">
                <div class="col-md-12">
                    <textarea id="draw-dataUrl2" name="entregado_por_entrada" class="form-control" rows="5">Base 64:</textarea>
                </div>
            </div>
            <br/>
            <div class="contenedor" style="display:none;">
                <div class="col-md-12">
                    <img id="draw-image2" src="" alt=" Firma"/>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary m-t-15 waves-effect">GUARDAR</button>
</form>
	</div>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
ims({!! json_encode($url_salida) !!});
var drawImage3 = document.getElementById("draw-image3");
var clearBtn3 = document.getElementById("draw-clearBtn3");
    clearBtn3.addEventListener("click", function (e) {
		// Definimos que pasa cuando el boton draw-clearBtn es pulsado
        clearCanvas();
		drawImage3.setAttribute("src", "");
	}, false);

    function clearCanvas() {
        var canvas3 = document.getElementById("draw-canvas3");
		canvas3.width = canvas3.width;
		ims({!! json_encode($url_salida) !!});
       
	}
    function ims(a){
        console.log(a)
		var canvas4 = document.getElementById('draw-canvas3');
		//Get a 2D drawing context for the canvas.
		var context = canvas4.getContext('2d');
		var urlmia=window.location.origin+"/storage/firmas/"+a;
		var imgPath = urlmia;
		//Create a new Image object.
		var imgObj = new Image();
		//Set the src of this Image object.
		imgObj.setAttribute('crossorigin', 'anonymous'); // works for me
		imgObj.src = imgPath;
		//the x coordinates
		var x = 0;
		
		//the y coordinates
		var y = 0;
		
		//When our image has loaded.
		imgObj.onload = function(){
			//Draw the image onto the canvas.
			context.drawImage(imgObj,0, 0, 390,350);
		}
	  }
</script>
@endsection