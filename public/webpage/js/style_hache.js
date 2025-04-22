$('#exampleModal').modal('show');

var hoy=new Date();
var actual=moment(hoy).format('YYYY-MM-DD');
$("#desdes").prop("min",actual);

$("#desdes").change(
    function(){
       fecha_desde= $("#desdes").val();
       fechs=new Date(fecha_desde)
       fechs.setDate(fechs.getDate()+2)
       var formattedDate = moment(fechs).format('YYYY-MM-DD');
        
        $("#hastas").prop("min",formattedDate)
    }
)
$("#hastas").change(
    function (){
        fecha_desde= moment($("#desdes").val());
        fecha_hasta=moment($("#hastas").val());
        diferencia=fecha_hasta.diff(fecha_desde,'days')
        $("#dias").val(diferencia)
        console.log("diras fierentes "+diferencia);
    }
)



function mensaje_wpp_carro(auto){
    //con fecha
    
        window.open("https://api.whatsapp.com/send?phone=573227795422&text= Hola%20Rent%20a%20Car%20estoy%20interesado%20en%20alquilar%20el%20%20vehículo%20🚗%20"+auto+"%20%2C%20necesito%20mas%20información.", "Diseño Web")

    
    //sin fecha
   
}

function reserva_wasap(auto,fecha1,fecha2){
    window.open("https://api.whatsapp.com/send?phone=573227795422&text=Hola%20Rent%20A%20Car%2C%20deseo%20mas%20informacíon%20del%20vehículo%20"+auto+"%20🚗%20%2C%20desde%20"+fecha1+"📅%20hasta%20"+fecha2+"📅%2C%20muchas%20gracias.", "Diseño Web")
}
function confirmar_reserva(nombre,id_reserva){
    
    window.open("https://api.whatsapp.com/send?phone=573227795422&text=🚨🚗VALIDAR%20RESERVA🚗🚨%0AHola%20RENT%20A%20CAR%0Asoy%20"+nombre+"%0Adeseo%20validar%20mi%20reserva%20con%20serial%20%23"+id_reserva+"%20🏁.", "Diseño Web")
}

function reserva_form(id,fecha1,fecha2){
    //    
}

$("#sgt").click(function(){
    if( $("#tipo_documento").val() != "" &&
        $("#numero_documento").val() != "" &&
    $("#nombres").val() != "" &&
    $("#apellidos").val() != "" &&
    $("#email").val() != "" 
    ){
        $("#parte1").hide();
        $("#parte2").show();
    }else{
        Swal.fire('Complete todos los datos')
    }
    //telefono
    //conductor_adicional
    //documento_conductor_adicional
})
$("#rgs").click(function(){
    
        $("#parte2").hide();
        $("#parte1").show();
    
    //telefono
    //conductor_adicional
    //documento_conductor_adicional
})


$('#numero_documento').keyup(function() {
   
    var texto = $("#numero_documento").val();
    var tam=texto.length;
    if(tam>=6){
    $.get( "../../../../obtener_nombre/"+texto, function( data ) {
       
        if(data.data =="error"){
          console.log("no aparece");
        }else{
          
           
            $("#yes").val(texto);
            $("#parte1").hide();
            $("#parte2").hide();
            Swal.fire('Ya formas parte de nuestros clientes')
            $("#nombre_encontrado").text(data.data.nombres+" "+data.data.apellidos)
            $("#parte3").show();
        }
      });
    }
   });


