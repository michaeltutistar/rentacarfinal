$(document).ready(function(){
    $("#box").hide()
var down = false;

$('#bell').click(function(e){


if(down){
    $("#box").hide()

down = false;
}else{
    $("#box").show()

down = true;

}

});

});