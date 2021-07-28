

<div class="blog-articles-section lines-fullwidth-blog"> 

  <div class="site-wrapper-boxed">


    <div class="blog-articles">
        <?php
              $args = array(
                // 'tag'            => 'small',
                'post_type'      => 'post',
                'posts_per_page' => -1,
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
                <?php $i++;
                if($i==1) {echo "<div class='post-announce-big'>";}
                else{
                if( ($i % 2) == 0 ) { echo "<div class='post-announce-small-right'>";
	                } else {
		                echo "<div class='post-announce-small'>";
	              } 
                }?>
                

                <?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array('class' => 'post-small-picture') ); ?>

                <div class="post-announce-small-text-wrapper">
                  <p class="category" style="background-color: <?php echo $category_color ;?>;"><?php echo $category[0]->name; ?> </p>
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
        

    </div>

  </div>

</div>
