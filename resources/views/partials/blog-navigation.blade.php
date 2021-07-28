<?php $blog_title=get_field( "blog_title" ); ?>
<?php $blog_sub_title=get_field( "blog_sub_title" ); ?>

<div class="blog-section lines-fullwidth-blog">

<div class="black-plate"></div>

  <div class="site-wrapper-boxed">

    <div class="blog-navigation">
          
      <div class="blog-title-text">
        <div class="blog-sub-title-wrapper">
          <div class="orange-vertical-line"></div>
          <h2 class="h2 blog-sub-title"><?php echo $blog_sub_title ?></h2>
        </div>
        <h1 class="h1 blog-title"><?php echo $blog_title ?></h1>
      </div>

      <div class="navigation-line" id="select">

        <form>
        <input type="radio" name="radio" value="*" id="r"/>
        <label for="r">ALL</label>
<?php
        $categories = get_categories( [
	'taxonomy'     => 'category',
	'type'         => 'post',
	'child_of'     => 0,
	'parent'       => '',
	'orderby'      => 'name',
	'order'        => 'ASC',
	'hide_empty'   => 1,
	'hierarchical' => 1,
	'exclude'      => '',
	'include'      => '',
	'number'       => 0,
	'pad_counts'   => false,
] );

if( $categories ){
  $count=0;
	foreach( $categories as $cat ){?>
<?php $count++; ?>
      <input type="radio" name="radio" value="<?php echo $cat->slug?>" id="r<?php echo $count?>"/>
      <label for="r<?php echo $count?>"><?php echo $cat->slug?></label>
      <?php
    
		

	}
}

?>


          
        </form>

      </div>

    </div>

    

  </div>

</div>
