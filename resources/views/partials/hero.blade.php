<?php $hero_image=get_field( "hero_image" ); ?>
<?php $hero_title=get_field( "hero_title" ); ?>
<?php $hero_sub_title=get_field( "hero_sub_title" ); ?>

<div class="hero-section lines-fullwidth">

  <div class="black-plate"></div>

  <div class="site-wrapper-boxed">

    <div class="hero">
          
      <div class="hero-title-text">
        <div class="hero-sub-title-wrapper overflow-is-hidden">
          <div class="orange-vertical-line animation-incoming-from-left"></div>
          <h2 class="h2 hero-sub-title animation-incoming-from-left"><?php echo $hero_sub_title ?></h2>
        </div>
        <h1 class="h1 hero-title animation-clippath-text element-animation"><?php echo $hero_title ?></h1>
      </div>

      <div class="hero-image-wrapper">
        <img src="<?php echo $hero_image ?>" class="hero-image" alt="hero image">
        <div class="orange-plate"></div>
      </div>

      <div class="square-dots">
        <div class="square-dots-row">
          <div class="square-dot"></div>
          <div class="square-dot"></div>
          <div class="square-dot orange-dot"></div>
          <div class="square-dot green-dot"></div>
        </div>

        <div class="square-dots-row">
          <div class="square-dot"></div>
          <div class="square-dot"></div>
          <div class="square-dot green-dot"></div>
          <div class="square-dot green-dot"></div>
        </div>

        <div class="square-dots-row">
          <div class="square-dot orange-dot"></div>
          <div class="square-dot grey-dot"></div>
          <div class="square-dot orange-dot"></div>
          <div class="square-dot green-dot"></div>
        </div>

        <div class="square-dots-row">
          <div class="square-dot black-dot"></div>
          <div class="square-dot grey-dot"></div>
          <div class="square-dot green-dot"></div>
          <div class="square-dot orange-dot"></div>
        </div>
        
      </div>

    </div>

    

  </div>

</div>
