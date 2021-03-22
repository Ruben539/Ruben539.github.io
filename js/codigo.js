document.getElementById("btn-registro").addEventListener("click", registro);
document.getElementById("btnInciar-sesion").addEventListener("click", IniciarSesion);
window.addEventListener("resize", anchoPagina);


//Variables declaradas para usar en el codigo
var formulario_contenedor = document.querySelector(".container-registro");
var formulario_login = document.querySelector(".formLogin");
var formulario_registro = document.querySelector(".formRegistro");
var formulario_cajaLogin = document.querySelector(".cajatrasera-login");
var formulario_cajaRegistro = document.querySelector(".cajatrasera-registro");

function anchoPagina(){
	if (window.innerWidth > 850) {
		formulario_cajaRegistro.style.display = "block";
		formulario_cajaRegistro.style.display = "block";
	}else{
		formulario_cajaRegistro.style.display = "block";
		formulario_cajaRegistro.style.opacity = "1";
		formulario_cajaLogin.style.display = "none";
		formulario_login.style.display = "block";
		formulario_registro.style.display = "none";
		formulario_contenedor.style.left = "0px";
	}
}

anchoPagina();

function IniciarSesion(){
	if(window.innerWidth > 850){
		formulario_registro.style.display = "none";
		formulario_contenedor.style.left= "10px";
		formulario_login.style.display= "block";
		formulario_cajaRegistro.style.opacity= "1";
		formulario_cajaLogin.style.opacity= "0";
	}else{
		formulario_registro.style.display = "none";
		formulario_contenedor.style.left= "0px";
		formulario_login.style.display= "block";
		formulario_cajaRegistro.style.display = "block";
		formulario_cajaLogin.style.display= "none";
	}

}

anchoPagina();

function registro(){
	if(window.innerWidth > 850){
		formulario_registro.style.display = "block";
		formulario_contenedor.style.left= "410px";
		formulario_login.style.display= "none";
		formulario_cajaRegistro.style.opacity = "0";
		formulario_cajaLogin.style.opacity= "1";
	}else{ 
		formulario_registro.style.display = "block";
		formulario_contenedor.style.left= "0px";
		formulario_login.style.display= "none";
		formulario_cajaRegistro.style.display = "none";
		formulario_cajaLogin.style.display= "block";
		formulario_cajaLogin.style.opacity = "1";
	}

}

anchoPagina();

//Scrip del menu
