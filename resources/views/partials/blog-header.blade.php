<?php $blog_header_logo=get_field( "blog_header_logo",163 ); ?>
<div class="header-wrapper ">

  <div class="header-wrapper-boxed">

    <header>

        <nav class="header-navigation">

            <div class="logo-wrapper">
              <a href="<?php echo home_url(); ?>">
                <img src="<?php echo $blog_header_logo ?>" class="header-logotip" alt="resolution">
              </a>
            </div>

            <div class="navigation">
              <?php wp_nav_menu( [ 'menu' => 'blog-header-menu' ]); ?>
            </div>

        </nav>

    </header>

  </div>

</div>
