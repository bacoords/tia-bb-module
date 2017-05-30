<?php

/**
 * This file should be used to render each module instance.
 * You have access to two variables in this file: 
 * 
 * $module An instance of your module class.
 * $settings The module's settings.
 *
 * Example: 
 */

?>
<div class="tia-fl-audio-module">
   
  <div class="tia-fl-audio-module__image">
   
    <img src="<?php echo $settings->photo_src; ?>">
    
  </div>
  
  <div class="tia-fl-audio-module__text">
    
    <?php echo $settings->text; ?>
    
  </div>    
        
  <a href="#" data-mp3="<?php echo $settings->audio; ?>" class="tia-fl-audio-module__play">
    <i class="fa fa-play"></i>
  </a>
  
</div>