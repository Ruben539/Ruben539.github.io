//Comienzo del codigo JavaScrip

const altura = document.body.scrollHeight - window.innerHeight;
const fondo = document.getElementById('fondo');

window.onscroll = () => {
	const anchoFondo = (window.pageYOffset / altura) * 700;
if (anchoFondo <= 100) {
	fondo.style.width = anchoFondo + '%';
 }
	
} 

//Codigo del Carousel
document.addEventListener('DOMContentLoaded', () =>{
	const elementosCarrusel = document.querySelectorAll('.carousel');

	M.Carousel.init(elementosCarrusel, {
		duration:150,
		dist:-80,
		shift:5,
		padding:5,
		numVisible:3,
		indicators:true,
		noWrap:false

	});
});

//Codigo LightBox de Productos
document.addEventListener('DOMContentLoaded', () =>{
	const LightBox = document.querySelectorAll('.materializeBoxed');

	M.Materialbox.init(LightBox,{
		inDuration :500,
		outDuration: 1000
	});
});
