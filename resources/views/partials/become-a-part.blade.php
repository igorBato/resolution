<?php $become_a_part_title=get_field( "become_a_part_title" ); ?>
<?php $get_in_touch_button_text=get_field( "get_in_touch_button_text" ); ?>
<div class="get-in-touch-section lines-fullwidth"> 

  <div class="site-wrapper-boxed">

    <div class="get-in-touch-wrapper">
          
      <div class="get-in-touch-title-wrapper">  
        <h3 class="get-in-touch-title"><?php 
          $become_a_part_title = explode(" ", $become_a_part_title, 2);
          echo '<span class="orange-text">' . $become_a_part_title[0] . '</span> ' . $become_a_part_title[1];
        ?></h3>
      </div>

      <div class="get-in-touch-button-wrapper">
        <button class="get_in_touch_button"><?php echo $get_in_touch_button_text ?></p></button> 
      </div>

    </div>
      
  </div>

</div>
