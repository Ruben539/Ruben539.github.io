	function index(){
		this.ini = function(){
			//console.log("iniciando");
			this.getIndicadores();
			

		}

		this.getIndicadores = function(){
	//Consulta de Vendidos al servisor de parte del Cliente Para ver el Total Vendido
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"1"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idDesembalado").text(parseFloat(datos).toLocaleString());
});

	//Consulta de la Sentencia para recuperar los datos para Almacen
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"2"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idHerreria").text(parseFloat(datos).toLocaleString());
});
	// Consulta de la sentencia para recuperar los datos para Ingresos
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"3"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idPintura").text(parseFloat(datos).toLocaleString());
});
	// Consulta de la sentencia para recuperar los datos para Ingresos
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"4"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idRuedas").text(parseFloat(datos).toLocaleString());
});

	// Consulta de la sentencia para recuperar los datos para Miguel
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"5"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idCinta").text(parseFloat(datos).toLocaleString());
});

	// Consulta de la sentencia para recuperar los datos para Bruno
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"6"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idProbado").text(parseFloat(datos).toLocaleString());
});

	// Consulta de la sentencia para recuperar los datos para Diego
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"7"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idDeposito").text(parseFloat(datos).toLocaleString());
});

	// Consulta de la sentencia para recuperar los datos para Chamorro
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"8"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idCuatro").text(parseFloat(datos).toLocaleString());
});

		//Consulta de Vendidos al servisor de parte del Cliente Para ver el Total Vendido
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"9"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idDesembalado_lib").text(parseFloat(datos).toLocaleString());
});

	//Consulta de la Sentencia para recuperar los datos para Almacen
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"10"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idHerreria_lib").text(parseFloat(datos).toLocaleString());
});
	// Consulta de la sentencia para recuperar los datos para Ingresos
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"11"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idPintura_lib").text(parseFloat(datos).toLocaleString());
});
	// Consulta de la sentencia para recuperar los datos para Ingresos
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"12"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idRuedas_lib").text(parseFloat(datos).toLocaleString());
});

	// Consulta de la sentencia para recuperar los datos para Miguel
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"13"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idCinta_lib").text(parseFloat(datos).toLocaleString());
});

	// Consulta de la sentencia para recuperar los datos para Bruno
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"14"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idProbado_lib").text(parseFloat(datos).toLocaleString());
});

	// Consulta de la sentencia para recuperar los datos para Diego
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"15"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idDeposito_lib").text(parseFloat(datos).toLocaleString());
});

	// Consulta de la sentencia para recuperar los datos para Chamorro
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"16"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idCuatro_lib").text(parseFloat(datos).toLocaleString());
});

	// Consulta de la sentencia para recuperar los datos para Miguel Urbieta
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"17"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idMiguel").text(parseFloat(datos).toLocaleString());
});

	// Consulta de la sentencia para recuperar los datos para Pablo
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"18"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idPablo").text(parseFloat(datos).toLocaleString());
});

	// Consulta de la sentencia para recuperar los datos para Diego
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"19"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idDiego").text(parseFloat(datos).toLocaleString());
});


	// Consulta de la sentencia para recuperar los datos para Mario
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"20"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idMario").text(parseFloat(datos).toLocaleString());
});

	// Consulta de la sentencia para recuperar los datos para Junior
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"21"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idJunior").text(parseFloat(datos).toLocaleString());
});


	// Consulta de la sentencia para recuperar los datos para Bruno Segovia
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"22"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idBrunos").text(parseFloat(datos).toLocaleString());
});

	// Consulta de la sentencia para recuperar los datos para Juan
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"23"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idJuan").text(parseFloat(datos).toLocaleString());
});

		// Consulta de la sentencia para recuperar los datos para Juan
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"24"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idHerminio").text(parseFloat(datos).toLocaleString());
});

		// Consulta de la sentencia para recuperar los datos para Juan
	$.ajax({
		statusCode:{
			404:function(){
				console.log("Esta Pagina no Existe");
			}
		},
		url:'Librerias/Core/servidor.php',
		method:'POST',
		data:{
			rq:"25"
		}
	}).done(function(datos){
	//Logica de respuesta  de los datos
	$("#idChamorro").text(parseFloat(datos).toLocaleString());
});

}
/*
this.getDataGrafica = function(){
		// Consulta de la sentencia para recuperar los datos del Grafico
		$.ajax({
			statusCode:{
				404:function(){
					console.log("Esta Pagina no Existe");
				}
			},
			url:'Librerias/Core/servidor.php',
			method:'POST',
			data:{
				rq:"11"
			}
		}).done(function(datos){
	//Logica de respuesta  de los datos para los valores del Grafico
	if (datos != '') {
		let etiquetas = new Array();
		let tproduccion = new Array();
		let tprobados = new Array();
		let tfaltante = new Array();
		let tbanco = new Array();
		let coloresV = new Array();
		let coloresP = new Array();
		let coloresF = new Array();
		let coloresB = new Array();
		var jDatos = JSON.parse(datos);

		//Creacion y Estrucura de la Tabla
		var tablaDatos = document.createElement('tabla');
		tablaDatos.classList.add('table','table-striped');
		var tr = document.createElement('tr');
		var th = document.createElement('th');
		th.innerText="Fecha";
		tr.appendChild (th);
		th = document.createElement('th');
		th.innerText="Producido";
		tr.appendChild (th);
		th = document.createElement('th');
		th.innerText="Habilitado";
		tr.appendChild (th);
		th = document.createElement('th');
		th.innerText="Faltantes";
		tr.appendChild (th);
		th = document.createElement('th');
		th.innerText="Banco";
		tr.appendChild (th);
		tablaDatos.appendChild(tr);


		//Llenado de datos que se muestran el la Grafica
		for(let i in jDatos){
			etiquetas.push(jDatos[i].fechaVenta);
			tproduccion.push(jDatos[i].totalProducido);
			tprobados.push(jDatos[i].totalProbado);
			tfaltante.push(jDatos[i].totalFaltante);
			tbanco.push(jDatos[i].totalBanco);
			coloresV.push("#006400");
			coloresP.push("#FFFF00");
			coloresF.push("#f00");
			coloresB.push("blue");

			tr = document.createElement('tr');
			var td = document.createElement("td");
			td.innerText = jDatos[i].fechaVenta;
			tr.appendChild(td);

			td = document.createElement("td");
			td.innerText = parseFloat(jDatos[i].totalProducido).toLocaleString();
			tr.appendChild(td);

			td = document.createElement("td");
			td.innerText = parseFloat(jDatos[i].totalProbado).toLocaleString();
			tr.appendChild(td);

			td = document.createElement("td");
			td.innerText = parseFloat(jDatos[i].totalFaltante).toLocaleString();
			tr.appendChild(td);

			td = document.createElement("td");
			td.innerText = parseFloat(jDatos[i].totalBanco).toLocaleString();
			tr.appendChild(td);



			tablaDatos.appendChild(tr);

		}

		var idCont = document.getElementById("idTabla");
		idCont.appendChild(tablaDatos);

		var ctx = document.getElementById('idgrafica').getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels:etiquetas,
				datasets: [{
					label: 'Total Producido',
					data: tproduccion,
					backgroundColor:coloresV
				},{
					label: 'Total Probado',
					data: tprobados,
					backgroundColor:coloresP
				},{
					label: 'Total Faltntes',
					data: tfaltante,
					backgroundColor:coloresF
				},
				{
					label: 'Banco de Pruebas',
					data: tbanco,
					backgroundColor:coloresB
				},
				]
			}
		});
	}
});
	}*/
}

	//llave de la primera Clase principal

	var oIndex = new index();
	setTimeout(function(){oIndex.ini();}, 100);