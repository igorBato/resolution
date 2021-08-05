<?php $slider_four=get_field( "slider_four", 7 ); ?>
<?php $slider_four_title=get_field( "slider_four_title",7 ); ?>

<div class="slider-four-section"> 

  <div class="site-wrapper-boxed">

    <div class="nav-four-wrapper">
      <div class="four-arrow-prev"></div>
      <div class="four-prev">01</div>
        <div class="progress-four" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
      <div class="four-next">02</div>
      <div class="four-arrow-next"></div>
    </div>

    <div class="slider-four-title-wrapper">  
      <h2 class="slider-four-title"><?php echo $slider_four_title ?></h2>
    </div>

    <div class="slider-four-image">

      <?php foreach($slider_four as $k): ?>

        <div class="slider-four-image-image">
          <a href="<?php echo $k["link"]; ?>" target="_blank">
            <img src="<?php echo $k["image"]; ?>" class="slider-four-image-img" alt="partner">
          </a>
        </div>

      <?php endforeach ?>

    </div>  

  </div>

</div>
