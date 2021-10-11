(function(){
	//VARIABLES
	var lista = document.getElementById("lista"),
	tareaInput = document.getElementById("tareaInput"),
	btnNuevaTarea = document.getElementById("btn-agregar");


	//FUNCIONES
var agregarTarea= function(){
	var tarea = tareaInput.value;
		nuevaTarea= document.createElement("li"),
		enlace = document.createElement("a"),
		contenido = document.createTextNode(tarea);


		if (tarea === "") {
			tareaInput.setAttribute("placeholder", "AGREGA UNA TAREA VALIDA");
			tareaInput.className= "error";
			return false;
		}

			//Agregamos el conetnido al enlace 
			enlace.appendChild(contenido);
			//Le establecemos un enlace href
			enlace.setAttribute("href", "#");
			//Agregamos el enlace a la nueva Tarea(li)
			nuevaTarea.appendChild(enlace);
			//Agregamos la nueva tarea a la lista
			lista.appendChild(nuevaTarea);
			//Para limpiar el input a la hora de agregar la tarea
			tareaInput.value = "";
			for (var i = 0; i <= lista.children.length -1; i++) {
				lista.children[i].addEventListener("click", function(){

					this.parentNode.removeChild(this);
				});

			}
		
};

var comprobarInput = function(){
	tareaInput.className="";
	tareaInput.setAttribute("placeholder", "DEBE AGREGAR UNA TAREA")
};

var eliminarTarea = function(){
	
	this.parentNode.removeChild(this);
}

	//EVENTOS
	//agregar tarea
	btnNuevaTarea.addEventListener("click", agregarTarea);
	//comprovar input
	tareaInput.addEventListener("click",comprobarInput)
// Crear un ciclo for para acceder a un elemento de  la lista y borrarlo(esto es solo un evento)
	for (var i = 0; i <= lista.children.length -1; i++) {
		lista.children[i].addEventListener("click",eliminarTarea)

	}
	
	}());	