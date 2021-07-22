<?php $logos=get_field( "logos" ); ?>

<div class="logotips-section lines-fullwidth"> 

  <div class="site-wrapper-boxed">

    <div class="logotips-wrapper">

        <?php foreach($logos as $f): ?>

          <div class="logo-wrapper">

            <a href="<?php echo $f["link"]; ?>" target="_blank">

            <img src="<?php echo $f["image"]; ?>" class="partners-logo" alt="partners_logo">

            </a>

          </div>

        <?php endforeach ?>

    </div>
      
  </div>

</div>
