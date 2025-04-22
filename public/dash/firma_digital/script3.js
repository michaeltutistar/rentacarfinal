(function() { // Comenzamos una funcion auto-ejecutable

	// Obtenenemos un intervalo regular(Tiempo) en la pamtalla
	window.requestAnimFrame = (function (callback) {
		return window.requestAnimationFrame ||
					window.webkitRequestAnimationFrame ||
					window.mozRequestAnimationFrame ||
					window.oRequestAnimationFrame ||
					window.msRequestAnimaitonFrame ||
					function (callback) {
					 	window.setTimeout(callback, 1000/60);
            // Retrasa la ejecucion de la funcion para mejorar la experiencia
					};
	})();

	// Traer el canvas3 mediante el id del elemento html
	var canvas3 = document.getElementById("draw-canvas3");
	if (canvas3) {
    var ctx3 = canvas3.getContext("2d");
    //console.log("Canvas encontrado y contexto inicializado.");
} 


	// Mandamos llamar a los Elemetos interactivos de la Interfaz HTML
	var drawText3 = document.getElementById("draw-dataUrl3");
	var drawImage3 = document.getElementById("draw-image3");
	
	var submitBtn3 = document.getElementById("draw-submitBtn3");
	
		// Definimos que pasa cuando el boton draw-submitBtn es pulsado
	submitBtn3.addEventListener("click", function (e) {
		pasar_dibujo3();
	 }, false);
	 function pasar_dibujo3(){
		var dataUrl3 = canvas3.toDataURL();
	drawText3.innerHTML = dataUrl3;
	drawImage3.setAttribute("src", dataUrl3);
		//console.log("acabe de dibujar");
	 }
	// Activamos MouseEvent para nuestra pagina
	var drawing = false;
	var mousePos = { x:0, y:0 };
	var lastPos = mousePos;
	canvas3.addEventListener("mousedown", function (e)
  {
    /*
      Mas alla de solo llamar a una funcion, usamos function (e){...}
      cuando ocurre un evento
    */
		var tint = document.getElementById("color3");
		var punta = document.getElementById("puntero3");
		//console.log(e);
		drawing = true;
		lastPos = getMousePos(canvas3, e);
	}, false);
	canvas3.addEventListener("mouseup", function (e)
  {
	  pasar_dibujo3();
		drawing = false;
	}, false);
	canvas3.addEventListener("mousemove", function (e)
  {
		mousePos = getMousePos(canvas3, e);
	}, false);

	// Activamos touchEvent para nuestra pagina
	canvas3.addEventListener("touchstart", function (e) {
		mousePos = getTouchPos(canvas3, e);
    //console.log(mousePos);
    e.preventDefault(); // Prevent scrolling when touching the canvas3
		var touch = e.touches[0];
		var mouseEvent = new MouseEvent("mousedown", {
			clientX: touch.clientX,
			clientY: touch.clientY
		});
		canvas3.dispatchEvent(mouseEvent);
	}, false);
	canvas3.addEventListener("touchend", function (e) {
    e.preventDefault(); // Prevent scrolling when touching the canvas3
		var mouseEvent = new MouseEvent("mouseup", {});
		canvas3.dispatchEvent(mouseEvent);
	}, false);
  canvas3.addEventListener("touchleave", function (e) {
    // Realiza el mismo proceso que touchend en caso de que el dedo se deslice fuera del canvas3
    e.preventDefault(); // Prevent scrolling when touching the canvas3
    var mouseEvent = new MouseEvent("mouseup", {});
    canvas3.dispatchEvent(mouseEvent);
  }, false);
	canvas3.addEventListener("touchmove", function (e) {
    e.preventDefault(); // Prevent scrolling when touching the canvas3
		var touch = e.touches[0];
		var mouseEvent = new MouseEvent("mousemove", {
			clientX: touch.clientX,
			clientY: touch.clientY
		});
		canvas3.dispatchEvent(mouseEvent);
	}, false);

	// Get the position of the mouse relative to the canvas3
	function getMousePos(canvasDom, mouseEvent) {
		var rect = canvasDom.getBoundingClientRect();
    /*
      Devuelve el tamaño de un elemento y su posición relativa respecto
      a la ventana de visualización (viewport).
    */
		return {
			x: mouseEvent.clientX - rect.left,
			y: mouseEvent.clientY - rect.top
		};
	}

	// Get the position of a touch relative to the canvas3
	function getTouchPos(canvasDom, touchEvent) {
		var rect = canvasDom.getBoundingClientRect();
    //console.log(touchEvent);
    /*
      Devuelve el tamaño de un elemento y su posición relativa respecto
      a la ventana de visualización (viewport).
    */
		return {
			x: touchEvent.touches[0].clientX - rect.left, // Popiedad de todo evento Touch
			y: touchEvent.touches[0].clientY - rect.top
		};
	}

	// Draw to the canvas3
	function renderCanvas() {
		if (drawing) {
      var tint = document.getElementById("color3");
      var punta = document.getElementById("puntero3");
      ctx3.strokeStyle = tint.value;
      ctx3.beginPath();
			ctx3.moveTo(lastPos.x, lastPos.y);
			ctx3.lineTo(mousePos.x, mousePos.y);
      //console.log(punta.value);
    	ctx3.lineWidth = punta.value;
			ctx3.stroke();
      ctx3.closePath();
			lastPos = mousePos;
		}
	}

	
	
	// Allow for animation
	(function drawLoop () {
		requestAnimFrame(drawLoop);
		renderCanvas();
	})();

})();

