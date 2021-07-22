<?php $what_title=get_field( "what_title" ); ?>
<?php $what_text=get_field( "what_text" ); ?>
<div class="slider-section lines-fullwidth"> 

  <div class="site-wrapper-boxed">

    <div class="slider-one-wrapper">

      <div class="slider-one">

<?php
        $categories = get_categories(array(
          'orderby' => 'name',
          'order' => 'ASC'
        ));
        foreach( $categories as $category ){
          $queried_object = get_queried_object(); 
          $category_image=get_field("category_image", $category);
          $category_icon=get_field("category_icon", $category);

          echo '<div class="custom-slide">
                  <img src="'. $category_image .'" class="category-image" alt="category">
                  <img src="'. $category_icon .'" class="category-icon" alt="category icon">
                  <div class="custom-category">
                      <h3>' . $category->name.'</h3>
                  </div>
                  <div class="custom-description">
                    <div class="animated-text">
                      <span>Description:'. $category->description . '<span>
                    </div>
                  </div>

                  <div class="custom-category-link">
                      <a class="category-link" href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>Tell me more</a>
                  </div>

                </div>';
        }
        ?>

      </div>        

    </div>

  </div>

</div>
