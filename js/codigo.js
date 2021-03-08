const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/ // 7 a 14 numeros.
}

const campos = {
	usuario : false,
	nombre : false,
	password : false,
	correo : false,
	telefono : false

}

const validarFormulario = (e) => {
	switch (e.target.name) {
//En caso de que el campo sea usuario se ejecuta este codigo
		case "usuario":
		validarCampo(expresiones.usuario, e.target, 'usuario');
		break;
//En caso de que el campo sea nombre se ejecuta este codigo
		case "nombre":
		validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
//En caso de que el campo sea password se ejecuta este codigo
		case "password":
		validarCampo(expresiones.password, e.target, 'password');
		validarPass2();
		break;
//En caso de que el campo sea password2 se ejecuta este codigo
		case "password2":
		validarPass2();
		break;
//En caso de que el campo sea correo se ejecuta este codigo
		case "correo":
		validarCampo(expresiones.correo, e.target, 'correo');
		break;
//En caso de que el campo sea telefono se ejecuta este codigo
		case "telefono":
		validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
	}
	
}

const validarCampo = (expresion,input,campo) => {
	if (expresion.test(input.value)) {
		document.getElementById(`grupo-${campo}`).classList.remove('form-group-incorrecto');
		document.getElementById(`grupo-${campo}`).classList.add('form-group-correcto');
		document.querySelector(`#grupo-${campo} i`).classList.add('fa-check-circle');
		document.querySelector(`#grupo-${campo} i`).classList.remove('fa-times-circle');
		//codigo para acceder al mensaje de error
		document.querySelector(`#grupo-${campo} .mensaje-error`).classList.remove('mensaje-error-activo');
		campos[campo] = true;
	}else{
		document.getElementById(`grupo-${campo}`).classList.add('form-group-incorrecto');
		document.getElementById(`grupo-${campo}`).classList.remove('form-group-correcto');
		document.querySelector(`#grupo-${campo} i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo-${campo} i`).classList.add('fa-times-circle');
		//codigo para acceder al mensaje de error
		document.querySelector(`#grupo-${campo} .mensaje-error`).classList.add('mensaje-error-activo');
		campos[campo] = false;
	}
}

const validarPass2 = () => {
	const inputpassword1 = document.getElementById('password');
	const inputpassword2 = document.getElementById('password2');

	if (inputpassword1.value !== inputpassword2.value) {

		document.getElementById(`grupo-password2`).classList.add('form-group-incorrecto');
		document.getElementById(`grupo-password2`).classList.remove('form-group-correcto');
		document.querySelector(`#grupo-password2 i`).classList.remove('fa-check-circle');
		document.querySelector(`#grupo-password2 i`).classList.add('fa-times-circle');
		//codigo para acceder al mensaje de error
		document.querySelector(`#grupo-password2 .mensaje-error`).classList.add('mensaje-error-activo');
		campos['password'] = false;
	}else{

	document.getElementById(`grupo-password2`).classList.remove('form-group-incorrecto');
		document.getElementById(`grupo-password2`).classList.add('form-group-correcto');
		document.querySelector(`#grupo-password2 i`).classList.remove('fa-times-circle');
		document.querySelector(`#grupo-password2 i`).classList.add('fa-check-circle');
		//codigo para acceder al mensaje de error
		document.querySelector(`#grupo-password2 .mensaje-error`).classList.remove('mensaje-error-activo');	
		campos['password'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur' , validarFormulario);
});

formulario.addEventListener('submit', (e) => {
	e.preventDefault();

	const terminos = document.getElementById('terminos');

	if (campos.usuario && campos.nombre && campos.password && campos.correo && campos.telefono &&terminos.checked ) {
		
		formulario.reset();

		document.getElementById('form-exito').classList.add('form-exito-activo');
		setTimeout(() => {
		document.getElementById('form-exito').classList.remove('form-exito-activo');	
		}, 5000);

		document.querySelectorAll('.form-group-correcto').forEach((icono) => {
			icono.classList.remove('form-group-correcto');
		});

	}else{
		document.getElementById('form-mensaje').classList.add('form-mensaje-activo');
	}
});


