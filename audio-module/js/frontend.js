(function($){

	$(document).ready(function(){

    
    
    // Audio Players
		var sound = false;
		sound = document.createElement('audio');
		sound.id       = 'audio-player';
		sound.type     = 'audio/mpeg';

		$('.tia-fl-audio-module__play').click(function(e){
      
			e.preventDefault();

			var sound_src = $(this).attr('data-mp3');

			if ($(this).hasClass('active')) {

				if (sound.paused) {

					sound.play();

				} else {

					sound.pause();
          
          $( this ).removeClass('active');

				}
        
			} else {

				sound.src = sound_src;

				$('.tia-fl-audio-module__play').removeClass('active');
				$(this).addClass('active');

				sound.play();

			}

		});

		sound.addEventListener("ended", function(){

     		sound.currentTime = 0;
     		$('.tia-fl-audio-module__play').removeClass('active');

     		//console.log('ended');
		});

	}); //end document ready

}) (jQuery);