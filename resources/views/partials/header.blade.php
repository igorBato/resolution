<?php $logo=get_field( "logo" ); ?>
<div class="header-wrapper">

  <div class="header-wrapper-boxed">

    <header>

        <nav class="header-navigation">

            <div class="logo-wrapper">
              <img src="<?php echo $logo ?>" class="header-logotip" alt="resolution">
            </div>

            <div class="navigation">
              <?php wp_nav_menu( ); ?>
            </div>

        </nav>

    </header>

  </div>

</div>
