<?php $slider_twoo=get_field( "slider_twoo" ); ?>
<div class="slider-twoo-section lines-fullwidth"> 

  <div class="slider-twoo-image">

    <?php foreach($slider_twoo as $l): ?>

      <div class="slider-twoo-image-image">
        <img src="<?php echo $l["image"]; ?>" class="slider-twoo-image-img" alt="How we are">
      </div>

    <?php endforeach ?>

  </div>  

  <div class="black-plate-twoo-slider">

    <div class="slider-twoo-text">

      <?php foreach($slider_twoo as $l): ?>

      <div class="vertical-slide-text">

        <div class="slider-twoo-text-title-wrapper">
          <div class="orange-vertical-line"></div>
          <div class="slider-twoo-text-title"><?php echo $l["title"]; ?></div>
        </div>

        <div class="slider-twoo-text-text"><?php echo $l["text"]; ?></div>
      </div>

      <?php endforeach ?>

    </div>

  </div>

</div>
