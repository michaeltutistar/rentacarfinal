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

	// Traer el canvas2 mediante el id del elemento html
	var canvas2 = document.getElementById("draw-canvas2");
	if (canvas2) {
		var ctx2 = canvas2.getContext("2d");
		//console.log("Canvas encontrado y contexto inicializado.");
	} 


	// Mandamos llamar a los Elemetos interactivos de la Interfaz HTML
	var drawText2 = document.getElementById("draw-dataUrl2");
	var drawImage2 = document.getElementById("draw-image2");
	var clearBtn2 = document.getElementById("draw-clearBtn2");
	var submitBtn2 = document.getElementById("draw-submitBtn2");
	clearBtn2.addEventListener("click", function (e) {
		// Definimos que pasa cuando el boton draw-clearBtn es pulsado
		clearCanvas();
		drawImage2.setAttribute("src", "");
	}, false);
		// Definimos que pasa cuando el boton draw-submitBtn es pulsado
	submitBtn2.addEventListener("click", function (e) {
		pasar_dibujo2();
	 }, false);
	 function pasar_dibujo2(){
		var dataUrl2 = canvas2.toDataURL();
	drawText2.innerHTML = dataUrl2;
	drawImage2.setAttribute("src", dataUrl2);
		//console.log("acabe de dibujar");
	 }
	// Activamos MouseEvent para nuestra pagina
	var drawing = false;
	var mousePos = { x:0, y:0 };
	var lastPos = mousePos;
	canvas2.addEventListener("mousedown", function (e)
  {
    /*
      Mas alla de solo llamar a una funcion, usamos function (e){...}
      cuando ocurre un evento
    */
		var tint = document.getElementById("color2");
		var punta = document.getElementById("puntero2");
		//console.log(e);
		drawing = true;
		lastPos = getMousePos(canvas2, e);
	}, false);
	canvas2.addEventListener("mouseup", function (e)
  {
	  pasar_dibujo2();
		drawing = false;
	}, false);
	canvas2.addEventListener("mousemove", function (e)
  {
		mousePos = getMousePos(canvas2, e);
	}, false);

	// Activamos touchEvent para nuestra pagina
	canvas2.addEventListener("touchstart", function (e) {
		mousePos = getTouchPos(canvas2, e);
    //console.log(mousePos);
    e.preventDefault(); // Prevent scrolling when touching the canvas2
		var touch = e.touches[0];
		var mouseEvent = new MouseEvent("mousedown", {
			clientX: touch.clientX,
			clientY: touch.clientY
		});
		canvas2.dispatchEvent(mouseEvent);
	}, false);
	canvas2.addEventListener("touchend", function (e) {
    e.preventDefault(); // Prevent scrolling when touching the canvas2
		var mouseEvent = new MouseEvent("mouseup", {});
		canvas2.dispatchEvent(mouseEvent);
	}, false);
  canvas2.addEventListener("touchleave", function (e) {
    // Realiza el mismo proceso que touchend en caso de que el dedo se deslice fuera del canvas2
    e.preventDefault(); // Prevent scrolling when touching the canvas2
    var mouseEvent = new MouseEvent("mouseup", {});
    canvas2.dispatchEvent(mouseEvent);
  }, false);
	canvas2.addEventListener("touchmove", function (e) {
    e.preventDefault(); // Prevent scrolling when touching the canvas2
		var touch = e.touches[0];
		var mouseEvent = new MouseEvent("mousemove", {
			clientX: touch.clientX,
			clientY: touch.clientY
		});
		canvas2.dispatchEvent(mouseEvent);
	}, false);

	// Get the position of the mouse relative to the canvas2
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

	// Get the position of a touch relative to the canvas2
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

	// Draw to the canvas2
	function renderCanvas() {
		if (drawing) {
      var tint = document.getElementById("color2");
      var punta = document.getElementById("puntero2");
      ctx2.strokeStyle = tint.value;
      ctx2.beginPath();
			ctx2.moveTo(lastPos.x, lastPos.y);
			ctx2.lineTo(mousePos.x, mousePos.y);
      //console.log(punta.value);
    	ctx2.lineWidth = punta.value;
			ctx2.stroke();
      ctx2.closePath();
			lastPos = mousePos;
		}
	}

	function clearCanvas() {
		canvas2.width = canvas2.width;
	}

	// Allow for animation
	(function drawLoop () {
		requestAnimFrame(drawLoop);
		renderCanvas();
	})();

})();