<?php $get_in_touch_title=get_field( "get_in_touch_title" ); ?>
<?php $get_in_touch_button_text=get_field( "get_in_touch_button_text" ); ?>
<div class="get-in-touch-section lines-fullwidth"> 

  <div class="site-wrapper-boxed">

    <div class="get-in-touch-wrapper">
          
      <div class="get-in-touch-title-wrapper">  
        <h3 class="get-in-touch-title"><?php 
          $get_in_touch_title = explode(" ", $get_in_touch_title, 2);
          echo '<span class="orange-text">' . $get_in_touch_title[0] . '</span> ' . $get_in_touch_title[1];
        ?></h3>
      </div>

      <div class="get-in-touch-button-wrapper">
        <button class="get_in_touch_button"><?php echo $get_in_touch_button_text ?></p></button> 
      </div>

    </div>
      
  </div>

</div>
