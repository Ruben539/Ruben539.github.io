
   
 


document.addEventListener('DOMContentLoaded', () => {
	const imgLightBox = document.querySelectorAll('.materialboxed');
	M.Materialbox.init(imgLightBox, {
		inDuration: 500,
		outDuration: 500
	});
    
});

document.addEventListener('mousemove', function(e) {
    
    let body = document.querySelector('html');
    let hearts = document.createElement('span');
    let x = e.offsetX;
    let y = e.offsetY;
    hearts.style.left = x + 'px';
    hearts.style.top = y + 'px';

    let size = Math.random() * 80;
    hearts.style.width = 20 +size + 'px';
    hearts.style.height = 20 +size + 'px';

    let trasnformValue = Math.random() * 360;
    hearts.style.transform = 'rotate(' + trasnformValue + 'deg)';
    


    body.appendChild(hearts);
    

    setTimeout(function() {
        hearts.remove();
        
    },1000);

});

const playSound = function() {
    let element = document.createElement('div');
    element.setAttribute('style', 'display: none');
    element.innerHTML = `
      <audio autoplay loop>
        
        <source src="musica.mp3" type="audio/mpeg">
      </audio>
    `;
    document.body.appendChild(element);
    document.removeEventListener('click', playSound);
}

document.addEventListener('click', playSound);
   



