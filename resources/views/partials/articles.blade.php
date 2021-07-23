<?php $slider_three=get_field( "slider_three" ); ?>
<?php $articles_title=get_field( "articles_title" ); ?>

<div class="articles-section lines-fullwidth"> 

  <div class="site-wrapper-boxed">

    <div class="articles-title-wrapper">
      <h2 class="h2 articles-title"><?php echo $articles_title ?></h2>
    </div>

    <div class="articles">
        <?php
        if(have_posts()) {
          while(have_posts()) {
            the_post();
          ?>

          <div class="post-card">
            <?php the_post_thumbnail('', $default_attr); ?>
            <div class="card-body">
              <h2 class="card-title"><?php the_title(); ?></h2>
              <p class="card-text"><?php the_content(); ?></p>
            </div>
            <div class="card-footer text-muted">
              <?php the_author(); ?>
              <?php the_date(); ?>
            </div>
          </div>
          <?php }
        }
      ?>
    </div>

  </div>

</div>
