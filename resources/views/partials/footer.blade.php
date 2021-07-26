<?php $footer_logo=get_field( "footer_logo",7 ); ?>
<?php $footer_menu_one_title=get_field( "footer_menu_one_title",7  ); ?>
<?php $footer_menu_twoo_title=get_field( "footer_menu_twoo_title",7  ); ?>
<?php $footer_menu_block_twoo=get_field( "footer_menu_block_twoo",7  ); ?>
<?php $footer_menu_three_title=get_field( "footer_menu_three_title",7  ); ?>
<?php $footer_menu_block_three=get_field( "footer_menu_block_three",7  ); ?>
<?php $footer_copyright=get_field( "footer_copyright",7  ); ?>


<div class="footer-section"> 

  <div class="site-wrapper-boxed">

    <footer>

      <div class="footer-top">

        <div class="footer-logo">

          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo $footer_logo ?>" class="footer-logotip" alt="resolution">
          </a>

        </div>

        <div class="footer-navigation">

          <div class="navigation-wrapper">
            <h3 class="footer-menu-title"><?php echo $footer_menu_one_title ?></h3>
            <?php wp_nav_menu( ); ?>
          </div>

          <div class="navigation-wrapper">
            <h3 class="footer-menu-title"><?php echo $footer_menu_twoo_title ?></h3>
              <?php foreach($footer_menu_block_twoo as $u): ?>
                
                  <a href="<?php echo $u["link"]; ?>"><?php echo $u["link_text"]; ?></a>
                
              <?php endforeach ?>
          </div>

          <div class="navigation-wrapper">
            <h3 class="footer-menu-title"><?php echo $footer_menu_three_title ?></h3>
              <?php foreach($footer_menu_block_three as $n): ?>
  
                <a href="<?php echo $n["link"]; ?>" target="_blank"><?php echo $n["link_text"]; ?></a>

              <?php endforeach ?>
          </div>

        </div>

      </div>

      <div class="footer-bottom">
        <p class="footer-copyright"><?php echo $footer_copyright ?></p>
      </div>

    </footer>

  </div>

</div>
