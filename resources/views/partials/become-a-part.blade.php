<?php $become_a_part_title=get_field( "become_a_part_title" ); ?>
<?php $get_in_touch_button_text=get_field( "get_in_touch_button_text" ); ?>
<div class="get-in-touch-section padding-top-helper lines-fullwidth"> 

  <div class="site-wrapper-boxed">

    <div class="get-in-touch-wrapper">
          
      <div class="get-in-touch-title-wrapper">  
        <h3 class="get-in-touch-title"><?php echo  $become_a_part_title?>
      </h3>
      </div>

      <div class="get-in-touch-button-wrapper">
        <button id="sendmail2" class="get_in_touch_button">
        <?php echo $get_in_touch_button_text ?>
        <img class="button-arrow"
     src="<?php echo get_template_directory_uri() ?>/assets/images/button-arrow.svg"
     alt="arrow">
        </button> 
      </div>

    </div>
      
  </div>

</div>
