const musicContainer = document.querySelector('.music-container');
const playBtn = document.querySelector('#play');
const prevBtn = document.querySelector('#prev');
const nextBtn = document.querySelector('#next');
const audio = document.querySelector('#audio');
const progress = document.querySelector('.progreso');
const progressContainer = document.querySelector('.progreso-container');
const titulo = document.querySelector('#titulo');
const cover = document.querySelector('#cover');

//titulos de las musicas
const songs = ['music-1', 'music-2', 'music-3','music-4','music-5',
'music-6','music-7','music-8','music-9','music-10','music-11','music-12',
'music-13','music-14','music-15','music-16','music-17'];

//Realizar un seguimineto a las Musicas
let songIndex = 1

//Inicializacion de reproduccion de las musicas
loadSong(songs [songIndex] )

//Actualizar detalle del Reproductor
function loadSong(song) {
	titulo.innerText = song
	audio.src = `musicas/${song}.mp3`
	cover.src = `imagenes/${song}.jpg`
}

function playSong() {
	musicContainer.classList.add('play')
	playBtn.querySelector('i.fas').classList.remove('fa-play')
	playBtn.querySelector('i.fas').classList.add('fa-pause')

	audio.play()
}

function pauseSong() {
	musicContainer.classList.remove('play')
	playBtn.querySelector('i.fas').classList.add('fa-play')
	playBtn.querySelector('i.fas').classList.remove('fa-pause')

	audio.pause()
}

function prevSong() {
	songIndex--

	if (songIndex < 0){
		songIndex = songs.length -1
	}

	loadSong(songs[songIndex])

	playSong()
}

function nextSong() {
	songIndex++

	if (songIndex > songs.length -1){
		songIndex = 0
	}

	loadSong(songs[songIndex])

	playSong()

}

//Codigo para mostrar el proceso de la Reproduccion

function updateProgress(e) {
	//console.log(e.srcElement.currentTime)
	//console.log(e.srcElement.duration)
  const {duration, currentTime} = e.srcElement
  const progressPorcent = (currentTime / duration) * 100
  progress.style.width = `${progressPorcent}%` 

}

//Codigo para Adelantar o Atrasar con la linea  la Reproduccion
function setProgress(e) {
	const width = this.clientWidth
	//console.log(width)
	const clickX = e.offsetX
	//console.log(clickX)
	const duration = audio.duration

	audio.currentTime = (clickX / width) * duration
}

//Evento Listerners del Click
playBtn.addEventListener('click', () => {
	const isPlay = musicContainer.classList.contains('play')

	if (isPlay) {
		pauseSong()
	}else{
		playSong()
	}
})


//cambio de Musica
prevBtn.addEventListener('click', prevSong)
nextBtn.addEventListener('click', nextSong)

//Codigo para mostrar el proceso de la Reproduccion
audio.addEventListener('timeupdate', updateProgress)

progressContainer.addEventListener('click', setProgress)

//Codigo para que suene otro al terminar
audio.addEventListener('ended', nextSong)



