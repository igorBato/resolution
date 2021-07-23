<?php $header_logo=get_field( "header_logo", 7 ); ?>

<div class="header-wrapper">

  <div class="header-wrapper-boxed">

    <header>

        <nav class="header-navigation">

            <div class="logo-wrapper">
              <img src="<?php echo $header_logo ?>" class="header-logotip" alt="resolution">
            </div>

            <div class="navigation">
              <?php wp_nav_menu( ); ?>
            </div>

        </nav>

    </header>

  </div>

</div>
