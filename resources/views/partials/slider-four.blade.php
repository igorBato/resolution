<?php $slider_four=get_field( "slider_four", 7 ); ?>
<?php $slider_four_title=get_field( "slider_four_title",7 ); ?>

<div class="slider-four-section"> 

  <div class="site-wrapper-boxed">

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
