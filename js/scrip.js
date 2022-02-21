//Seleccionar los elementos necesarios

const wrapper = document.querySelector(".wrapper"),
musicImg = wrapper.querySelector(".img-area img"),
musicName = wrapper.querySelector(".song-details .name"),
musicArtist = wrapper.querySelector(".song-details .artist"),
mainAudio = wrapper.querySelector("#main-audio"),
playPauseBtn = wrapper.querySelector(".play-pause"),
prevBtn = wrapper.querySelector("#prev"),
nextBtn = wrapper.querySelector("#next"),
progressArea = wrapper.querySelector(".progress-area"),
progressBar = wrapper.querySelector(".progress-bar"), 
musicList = wrapper.querySelector(".music-list"), 
showMoreBtn = wrapper.querySelector("#more-music"),
hideMoreBtn = musicList.querySelector("#close"); 

let musicIndex = Math.floor((Math.random() * allMusic.length) + 1);

window.addEventListener("load", ()=> {
	loadMusic(musicIndex);//Funcion de llamada para las pistas
	playNuevo();
});

function loadMusic(IndexNumb){
	musicName.innerText = allMusic[IndexNumb - 1].name;
	musicArtist.innerText = allMusic[IndexNumb - 1].artista;
	musicImg.src = `imagenes/${allMusic[IndexNumb - 1].img}.jpg`;
	mainAudio.src = `musicas/${allMusic[IndexNumb - 1].src}.mp3`;
}

//Funcion para el play del Reproductor
function playMusic(){
	wrapper.classList.add("paused");
	playPauseBtn.querySelector("i").innerText = "pause";
	mainAudio.play();
}

//Funcion para la pausa del Reproductor
function pauseMusic(){
	wrapper.classList.remove("paused");
	playPauseBtn.querySelector("i").innerText = "play_arrow";
	mainAudio.pause();
}

//Boton siguiente del Reproductor
function nextMusic(){
	musicIndex++;
	//Si llega a la ultima cancion que vuelva al inicio
	musicIndex > allMusic.length ? musicIndex = 1 :musicIndex = musicIndex;
	loadMusic(musicIndex);
	playMusic();
	playNuevo();
}

//Boton atras del Reproductor
function prevMusic(){
	musicIndex--;
	//Linea que sirve para atrasar una pista de la seleccionada 
	musicIndex < 1 ? musicIndex = allMusic.length : musicIndex = musicIndex;
	loadMusic(musicIndex);
	playMusic();
	playNuevo();
}

//Boton de Play/Pause del Reproductor
playPauseBtn.addEventListener("click", ()=> {
	const isMusicpaused = wrapper.classList.contains("paused");
	//Si reproductor es verdadero llama a la musica
	isMusicpaused ? pauseMusic() : playMusic();
	playNuevo();
});


//Funcion para el Boton de adelantar
nextBtn.addEventListener("click", ()=>{
	nextMusic();//Linea de Codigo que llama a la funcion
});

//Funcion para el Boton de adelantar
prevBtn.addEventListener("click", ()=>{
	prevMusic();//Linea de Codigo que llama a la funcion
});


//Actulizacion de la linea de Tiempo
mainAudio.addEventListener("timeupdate", (e)=> {
	//console.log(e); para mostrar en consola el pregreso
	const currentTime = e.target.currentTime;//Muestra el Tiempo de la musica
	const duration = e.target.duration;//Muestra la duracion de la musica
	let progressWidth = (currentTime / duration) * 100;
	progressBar.style.width = `${progressWidth}%`;

	let musicCurrentTime = wrapper.querySelector(".current"),
	musicDuration = wrapper.querySelector(".duration");


	mainAudio.addEventListener("loadeddata", ()=>{

	    //Actualizacion del Tiempo de la Musica
	    let audioDuration = mainAudio.duration;
	    let totalMinutos = Math.floor(audioDuration / 60);
	    let totalSegundos = Math.floor(audioDuration % 60);
	    if(totalSegundos < 10){ //Pone a 0 el reproductor al poner otra pista
	    	totalSegundos = `0${totalSegundos}`;
	    }
	    musicDuration.innerText = `${totalMinutos}:${totalSegundos}`;

	});

	     //Actualizacion de la Hora de la Musica
	     let currentMinutos = Math.floor(currentTime / 60);
	     let currentSegundos = Math.floor(currentTime % 60);
	    if(currentSegundos < 10){ //Pone a 0 el reproductor al poner otra pista
	    	currentSegundos = `0${currentSegundos}`;
	    }
	    musicCurrentTime.innerText = `${currentMinutos}:${currentSegundos}`;
	});

//Actualizar la Linea de Tiempo del Reproductor
progressArea.addEventListener("click", (e)=>{
	let progressWidthVal = progressArea.clientWidth;//Cambiar el Tamaño de la linea
	let clickedOffSetx = e.offsetX;// Cambiar con el mause
	let songDuration =  mainAudio.duration;

	mainAudio.currentTime = (clickedOffSetx / progressWidthVal) * songDuration;
	playMusic();
});

//Codigo para programar el Boton de repetir
const repeatBtn = wrapper.querySelector("#repeat-plist");
repeatBtn.addEventListener("click", ()=>{
	//Primer icono mostrado al iniciar la pagina
	let getText = repeatBtn.innerText;//Cambiar el icono al selecionar
	//Codigo para poner el Icono siguiente
	switch(getText){ ///Codigo en funcion a un trigger
		case "repeat"://icono de repeat

		repeatBtn.innerText = "repeat_one";
		repeatBtn.setAttribute("title", "song looped");
		break;

		case "repeat_one"://si el icono esta en repeat_one lo cambia
		repeatBtn.innerText = "shuffle";
		repeatBtn.setAttribute("title", "playBack shuffle");
		break;

		case "shuffle"://si el icono esta en Shuffle lo cambia
		repeatBtn.innerText = "repeat";
		repeatBtn.setAttribute("title", "Playlist looped");
		break;

	}
});


//Programar la Funcion del Icono seleccionado
mainAudio.addEventListener("ended", ()=>{
	let getText = repeatBtn.innerText;

	//Codigo para poner el Icono siguiente
	switch(getText){ ///Codigo en funcion a un trigger
		case "repeat"://icono de repeat funcionando
		nextMusic();
		break;

		case "repeat_one"://si el icono esta Funcionando
		mainAudio.currentTime = 0;
		loadMusic(musicIndex);
		playMusic();
		break;

		case "shuffle"://si el icono esta en Shuffle lo cambia
		let randIndex = Math.floor((Math.random() * allMusic.length) + 1);
		do{
			randIndex = Math.floor((Math.random() * allMusic.length) + 1);
		}while(musicIndex == randIndex);
		musicIndex = randIndex;
		loadMusic(musicIndex);//llama a la Funcion
		playMusic();//llama a la funcion Play Music
		playNuevo();
		break;

	}

});


showMoreBtn.addEventListener("click", ()=>{
	musicList.classList.toggle("show");
});

hideMoreBtn.addEventListener("click", ()=>{
	showMoreBtn.click();
});

const ulTag = wrapper.querySelector("ul");

for (var i = 0; i < allMusic.length; i++) {
	let liTag = `<li li-index="${i + 1}">
	<div class="row">
	<span>${allMusic[i].name}</span>
	<p>${allMusic[i].artista}</p>
	</div>
	<audio class="${allMusic[i].src}" src="musicas/${allMusic[i].src}.mp3"></audio>
	<span id="${allMusic[i].src}" class="audio-duration">3:40</span>
	</li>`;

	ulTag.insertAdjacentHTML("beforeend", liTag);	

	let liAudioTagDuration = ulTag.querySelector(`#${allMusic[i].src}`);
	let liAudioTag = ulTag.querySelector(`.${allMusic[i].src}`);

	liAudioTag.addEventListener("loadeddata", ()=>{
	//Actualizacion  de la Musica
	let audioDuration = liAudioTag.duration;
	let totalMinutos = Math.floor(audioDuration / 60);
	let totalSegundos = Math.floor(audioDuration % 60);
	    if(totalSegundos < 10){ //Pone a 0 el reproductor al poner otra pista
	    	totalSegundos = `0${totalSegundos}`;
	    }
	    liAudioTagDuration.innerText = `${totalMinutos}:${totalSegundos}`;
	    liAudioTagDuration.setAttribute("t-duration", `${totalMinutos}:${totalSegundos}`);
	});
}


//Cambio de Musica al Seleccionar de la Lista
const allLiTags = ulTag.querySelectorAll("li");
//console.log(allLiTags);Mostrar los caracteres de la pista seleccionada
function playNuevo(){
	for (let j = 0; j < allLiTags.length; j++) {
		let audioTag = allLiTags[j].querySelector(".audio-duration");

		if(allLiTags[j].classList.contains("playing")){
			allLiTags[j].classList.remove("playing");
		//Darle valor al tiempo de la musica al seleccionar otra psita
		let adDuration = audioTag.getAttribute("t-duration");
		audioTag.innerText = adDuration;//Pasa el valor de los minutos al seleccionar otra pista
	}

	if(allLiTags[j].getAttribute("li-index") == musicIndex){
		allLiTags[j].classList.add("playing");
		audioTag.innerText = "Playing";
	}
	allLiTags[j].setAttribute("onclick", "clicked(this)");
}
}

function clicked(element){
	let getLiIndex = element.getAttribute("li-index");
	musicIndex = getLiIndex;
	loadMusic(musicIndex);
	playMusic();
	playNuevo();
}