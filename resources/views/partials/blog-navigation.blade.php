<?php $blog_title=get_field( "blog_title" ); ?>
<?php $blog_sub_title=get_field( "blog_sub_title" ); ?>

<div class="blog-section lines-fullwidth-blog">


  <div class="site-wrapper-boxed">

    <div class="blog-navigation">
          
      <div class="blog-title-text">
        <div class="blog-sub-title-wrapper">
          <div class="orange-vertical-line"></div>
          <h2 class="h2 blog-sub-title"><?php echo $blog_sub_title ?></h2>
        </div>
        <h1 class="h1 blog-title"><?php echo $blog_title ?></h1>
      </div>

      <div class="navigation-line">

        <a href="#" class="blog-navigation-all-categories">ALL</a>
      
        <?php $args = array(
            'show_option_all'    => '',
            'show_option_none'   => __('No categories'),
            'orderby'            => 'name',
            'order'              => 'ASC',
            'style'              => 'list',
            'show_count'         => 0,
            'hide_empty'         => 1,
            'use_desc_for_title' => 0,
            'child_of'           => 0,
            'feed'               => '',
            'feed_type'          => '',
            'feed_image'         => '',
            'exclude'            => '',
            'exclude_tree'       => '',
            'include'            => '',
            'hierarchical'       => true,
            'title_li'           => 0,
            'number'             => NULL,
            'echo'               => 1,
            'depth'              => 0,
            'current_category'   => 0,
            'pad_counts'         => 0,
            'taxonomy'           => 'category',
            'walker'             => 'Walker_Category',
            'hide_title_if_empty' => false,
            'separator'          => '<br />',
          );

          echo '<ul>';
            wp_list_categories( $args );
          echo '</ul>';
          ?>
      </div>

    </div>

    

  </div>

</div>
