<?php $what_title=get_field( "what_title" ); ?>
<?php $what_text=get_field( "what_text" ); ?>
<div class="slider-section"> 

  <div class="site-wrapper-boxed">

    <div class="slider-one-wrapper">

      <div class="slider-one">

            <?php
        $categories = get_categories(array(
          'orderby' => 'name',
          'order' => 'ASC'
        ));
        foreach( $categories as $category ){

          echo '<div><p>Category: <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p><p> Description:'. $category->description . '</p><p> Post Count: '. $category->count . '</p></div>';
         
        }
        ?>
      </div>  

    </div>

  </div>

</div>
