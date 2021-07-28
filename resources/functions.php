<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);

add_theme_support( 'post-thumbnails' );

add_image_size( 'homepage-thumb', 480, 290, true );

function true_load_posts(){
 var_dump("fdafwerf");
 die;
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; 
	$args['post_status'] = 'publish';
 
	
	query_posts( $args );
	
	if( have_posts() ) :
 
		
		while( have_posts() ): the_post();
                $category = get_the_category();

                ?>

                <?php $category = get_the_category();?>
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
                
                <?php
		    endwhile;
        endwhile;
	   endif;
	die();
}
 
 
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');


//filter
function true_filter_function(){
 

    wp_register_script('afp_script', App\asset_path('scripts/routes/blog.js'), false, null, false);
    wp_enqueue_script('afp_script');

    wp_localize_script(
        'afp_script',
        'afp_vars',
        array(
        'afp_nonce' => wp_create_nonce('afp_nonce'),
        'afp_ajax_url' => admin_url('admin-ajax.php'),
      )
    );


	$args = array(
		'orderby' => 'date', 
		'order'	=> $_GET[ 'date' ],
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms' => $_GET['data'],
            ),
        ),
        // 'category_name' => 'Performance Marketing',
	);
 
	// for taxonomy
	// if( isset( $_POST[ 'categoryfilter' ] )) {
	// 	$args[ 'tax_query' ] = array(
	// 		array(
	// 			'taxonomy' => 'category',
	// 			'field' => 'id',
	// 			'terms' => $_POST[ 'categoryfilter' ],
    //             'category_name' => 'performance-marketing',
	// 		)
	// 	);
	// }

    // $query = new WP_Query( [ 'category_name' => 'performance-marketing'] );
 
 
	query_posts( $args );

 
	if ( have_posts() ) {
        $i = 0;
      		while ( have_posts() ) : the_post();
			
                        ?>

                <?php $category = get_the_category();
                $post_id = get_the_ID();?>
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
                            <p class="category"><?php echo $category[0]->name; ?> </p>
                            <h3 class="post-title"><?php the_title(); ?></h3>
                            <div class="post-text"><?php the_excerpt(); ?></div>
                            <div class="post-right-link">
                                <a class="post-link"href="<?php the_permalink(); ?>">Weiterlesen ></a>
                            </div>
                            <!-- <span> id: <?php echo $post_id ?> </span> -->
                        </div>
                    </div>
                
                <?php

		endwhile;
    
	} else {
		echo 'No posts...';
	}

	die();
}

add_action( 'wp_ajax_filter', 'true_filter_function' ); 
add_action( 'wp_ajax_nopriv_filter', 'true_filter_function' );




function ajax_filter_posts_scripts() {
    // Enqueue script
    wp_register_script('afp_script', get_template_directory_uri() . '/assets/scripts/loadmore.js', false, null, false);
    wp_enqueue_script('afp_script');
    wp_localize_script( 'afp_script', 'afp_vars', array(
          'afp_nonce' => wp_create_nonce( 'afp_nonce' ), // Create nonce which we later will use to verify AJAX request
          'afp_ajax_url' => admin_url( 'admin-ajax.php' ),
        )
    );
  }
  add_action('wp_enqueue_scripts', 'ajax_filter_posts_scripts', 100);

  add_filter( 'excerpt_length', function(){
	return 8;
} );

  add_filter('excerpt_more', function($more) {
    return '...';
});
