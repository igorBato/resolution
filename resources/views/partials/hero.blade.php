<?php $hero_image=get_field( "hero_image" ); ?>
<?php $hero_title=get_field( "hero_title" ); ?>
<?php $hero_sub_title=get_field( "hero_sub_title" ); ?>
<div class="hero-section">

  <div class="black-plate"></div>

  <div class="site-wrapper-boxed">

    <div class="hero">
          
      <div class="hero-title-text">
        <h2 class="h2 hero-title"><?php echo $hero_sub_title ?></h2>
        <h1 class="h1 hero-sub-title"><?php echo $hero_title ?></h1>
      </div>

      <div class="hero-image">
        <img src="<?php echo $hero_image ?>" class="header-logotip" alt="hero image">
      </div>


    </div>

    

  </div>

</div>
