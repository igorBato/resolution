<?php $slider_three=get_field( "slider_three" ); ?>
<?php $how_we_do_title=get_field( "how_we_do_title" ); ?>

<div class="slider-three-section lines-fullwidth"> 

  <div class="site-wrapper-boxed">

  <div class="how-we-do-title-wrapper" id="do">  
        <h2 class="how-we-do-title"><?php 
          $how_we_do_title = explode(" ", $how_we_do_title, 3);
          echo $how_we_do_title[0] . "\n" . $how_we_do_title[1] . "\n" . '<span class="orange-text">'. $how_we_do_title[2] . '</span> ';
        ?></h2>
      </div>

    <div class="slider-three-image" dir="rtl">

      <?php foreach($slider_three as $t): ?>

        <div class="slider-three-image-image">
          <img src="<?php echo $t["image"]; ?>" class="slider-three-image-img" alt="How we are">
        </div>

      <?php endforeach ?>

    </div>  

    <div class="black-plate-three-slider">

      <div class="slider-three-text">

        <?php foreach($slider_three as $t): ?>

        <div class="vertical-slide-text">

          <div class="slider-three-text-title-wrapper">

            <div class="slider-three-text-helper-wrapper">

              <div class="orange-vertical-line"></div>
              <div class="slider-three-text-title"><?php echo $t["title"]; ?></div>
              <div class="slider-three-text-subtitle"><?php echo $t["subtitle"]; ?></div>

            </div>

            <img src="<?php echo $t["logotip"]; ?>" class="slider-three-logotip" alt="how we do">
            

          </div>

          <div class="slider-three-text-text"><?php echo $t["text"]; ?></div>
        </div>

        <?php endforeach ?>

      </div>

    </div>

  </div>

</div>
