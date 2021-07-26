<?php $articles_title=get_field( "articles_title" ); ?>

<div class="articles-section lines-fullwidth"> 

  <div class="site-wrapper-boxed">

    <div class="articles-title-wrapper">
      <h2 class="h2 articles-title"><?php echo $articles_title ?></h2>
    </div>

    <div class="articles">
        <?php
              $args = array(
                // 'tag'            => 'small',
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'ASC',
                'meta_query' => [],
                'suppress_filters' => false
              );
              $q = new WP_Query($args);
            ?>

            <?php if ( $q->have_posts() ) : ?>

              <?php 
                $i = 0;
                while ( $q->have_posts() ) : $q->the_post(); $post_id = get_the_ID(); $category = get_the_category();?>
                <?php $i++;
                if( ($i % 2) == 0 ) { echo "<div class='post-announce-small-right'>";
	                } else {
		                echo "<div class='post-announce-small'>";
	              } ?>
                

                <?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array('class' => 'post-small-picture') ); ?>

                <div class="post-announce-small-text-wrapper">
                  <p class="category"><?php echo $category[0]->name; ?> </p>
                  <h3 class="post-title"><?php the_title(); ?></h3>
                  <div class="post-text"><?php the_excerpt(); ?></div>
                  <div class="post-right-link">
                    <a class="post-link"href="<?php the_permalink(); ?>">Weiterlesen ></a>
                  </div>
                  <!-- <span> id: <?php echo $post_id ?> </span> -->
                </div>


                
     </div>
                      <?php endwhile; ?>
                    <?php endif; ?>

                    <?php 
                    // wp_reset_postdata(); 
                    ?>
{!! do_shortcode( '[ajax_load_more id="loadmore" loading_style="grey" container_type="div" css_classes="articles" post_type="post" pause="true" scroll="false button_label="More articles >"]' ); !!}
        <!-- <div class="centered">
                    <?php  if (  $q->max_num_pages > 1 ) : ?>
                      <script>
                        var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                        var true_posts = '<?php echo serialize($q->query_vars); ?>';
                        var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
                        var max_pages = '<?php echo $q->max_num_pages; ?>';
                      </script>
                      <div class="opac-button-more" id="true_loadmore">
                        <div class="button-plate-more">
                          More articles >
                        </div>
                      </div>
                    <?php endif; ?>

            
            
            
          </div> -->

    </div>

  </div>

</div>
