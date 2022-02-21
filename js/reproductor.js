import {$,cargarMusica} from './funciones.js';

const btnCargar=$('#files');

document.addEventListener('DOMContentLoaded', ()=> {
	btnCargar.addEventListener('change', cargarMusica)
});

