

<div class="blog-articles-section lines-fullwidth-blog"> 

  <div class="site-wrapper-boxed">


    <div class="blog-articles">
        <?php
              $args = array(
                // 'tag'            => 'small',
                'post_type'      => 'post',
                'posts_per_page' => 5,
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
                while ( $q->have_posts() ) : $q->the_post(); $post_id = get_the_ID(); $category = get_the_category(); $category_color=get_field( "category_color" );?>
                
                

                
                      <?php endwhile; ?>
                      
                    <?php endif; ?>

                    <?php 
                    // wp_reset_postdata(); 
                    ?>

<?php
		echo do_shortcode('[ajax_load_more id="loadmore" loading_style="grey" posts_per_page="4" container_type="div" order="ASC" css_classes="articles" post_type="post" pause="false" scroll="false" button_label="More articles >"]');
	?>       

    </div>

  </div>

</div>
