<?php $who_we_are_title=get_field( "who_we_are_title" ); ?>
<?php $who_we_are_text=get_field( "who_we_are_text" ); ?>
<?php $who_we_are_image=get_field( "who_we_are_image" ); ?>
<div class="who-we-are-section lines-fullwidth"> 

  

  <div class="site-wrapper-boxed">

    <div class="who-we-are-wrapper" id="we">
          
      <div class="who-we-are-title-wrapper">  
        <h2 class="who-we-are-title element-animation">
          <?php echo $who_we_are_title?>
        </h2>
      </div>

      <div class="who-we-are-text-wrapper">
        <p class="who-we-are-text"><?php echo $who_we_are_text?></p>
      </div>

      <div class="square-dots">
        <div class="square-dots-row">
          <div class="square-dot black-dot"></div>
          <div class="square-dot grey-dot"></div>
          <div class="square-dot "></div>
          <div class="square-dot "></div>
        </div>

        <div class="square-dots-row">
          <div class="square-dot grey-dot"></div>
          <div class="square-dot grey-dot"></div>
          <div class="square-dot "></div>
          <div class="square-dot "></div>
        </div>

        <div class="square-dots-row">
          <div class="square-dot grey-dot"></div>
          <div class="square-dot orange-dot"></div>
          <div class="square-dot grey-dot"></div>
          <div class="square-dot grey-dot"></div>
        </div>

        <div class="square-dots-row">
          <div class="square-dot orange-dot"></div>
          <div class="square-dot grey-dot"></div>
          <div class="square-dot grey-dot"></div>
          <div class="square-dot black-dot"></div>
        </div>
        
      </div>

    </div>

    

  </div>

  <div class="who-we-are-image-wrapper">
        <img src="<?php echo $who_we_are_image ?>" class="who-we-are-image" alt="who we are">
  </div>

</div>
