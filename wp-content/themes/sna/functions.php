<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
//function awesome_script_enqueue() {
//	//css
	

function my_assets() {
    wp_enqueue_style('roboto', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i', array(), '', 'all');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all');
wp_enqueue_style('uikit', get_template_directory_uri() . '/css/uikit.css', array(), '', 'all');
//wp_enqueue_style('uikit_slideshow', get_template_directory_uri() . '/css/slideshow.min.css', array(), '', 'all');


wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
//	//js
	//wp_enqueue_script('my_jquery', get_template_directory_uri() . '/js/jquery-1.12.3.min.js', array(), '1.12.3', true);
//	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.js', array(), '3.3.6', true);
	wp_enqueue_script('UiKit', get_template_directory_uri() . '/js/uikit.js', array(), '1.0.0', true);
        wp_enqueue_script('UiKit_grid', get_template_directory_uri() . '/js/grid.min.js', array(), '1.0.0', true);
	wp_enqueue_script('knob', get_template_directory_uri() . '/js/jquery.knob.min.js', array(), '1.0.0', true);
	wp_enqueue_script('uikit_lightbox', get_template_directory_uri() . '/js/lightbox.min.js', array(), '1.0.0', true);
        wp_enqueue_script('TweenMax', get_template_directory_uri() . '/js/TweenMax.min.js', array(), '1.0.0', true);
        wp_enqueue_script('parallax', get_template_directory_uri() . '/js/parallax.min.js', array(), '1.0.0', true);
        //wp_enqueue_script('parallax_jquery', get_template_directory_uri() . '/js/jquery.parallax.min.js', array(), '1.0.0', true);

//	/************* My script *****************/
	wp_enqueue_script('myscript_js', get_template_directory_uri() . '/js/script.js', array(), '1', true);
	wp_localize_script('myscript_js', 'ajaxurl', admin_url( 'admin-ajax.php' ));
        wp_localize_script('myscript_js', 'urlimage', get_bloginfo('stylesheet_directory').'/images/');

        wp_enqueue_script('maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDS23LOuwI9Ar-5m08oB9qf8kqXw4PbEOs&callback=initMap', array(), '1', true);
//
}
add_action( 'wp_enqueue_scripts', 'my_assets' );

/*
	==========================================
	 Activate menus
	==========================================
*/
function awesome_theme_setup() {
	
	add_theme_support('menus');	
	/*register_nav_menu('left', 'Left Navigation');
	register_nav_menu('right', 'Right Navigation');
	register_nav_menu('bottom', 'Bottom Navigation');*/
	
}

add_action('init', 'awesome_theme_setup');

/*
	==========================================
	 Create Post type Femmes, Hommes, Dons-Events, Produits
	==========================================
*/

function create_post_type() {
	
	
	
	
	register_post_type( 'products',
		array(
		  'labels' => array(
		    'name' => __( 'Produits' )
		  ),
		  'public' => true,
		  'supports' => array('title', 'editor', 'thumbnail'),
		  'hierarchical' => false,
		)
	);
        register_post_type( 'gallery',
		array(
		  'labels' => array(
		    'name' => __( 'Gallerie' )
		  ),
		  'public' => true,
		  'supports' => array('title','thumbnail'),
		  'hierarchical' => false,
		)
	);
         register_post_type( 'news',
		array(
		  'labels' => array(
		    'name' => __( 'Actualite' )
		  ),
		  'public' => true,
		  'supports' => array('title','editor','thumbnail'),
		  'hierarchical' => false,
		)
	);
	/*register_post_type( 'Produits',
		array(
		  'labels' => array(
		    'name' => __( 'Produits' )
		  ),
		  'public' => true,
		  'supports' => array('title', 'editor', 'thumbnail'),
		  'taxonomies' => array('category'),
		)
	);*/
}
add_action( 'init', 'create_post_type' );
add_theme_support( 'post-thumbnails', array( 'products', 'page', 'gallery', 'news' ) );
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
     add_post_type_support( 'products', 'excerpt' );
     //add_post_type_support( 'news', 'excerpt' );
}
//set_post_thumbnail_size( 300, 300 );

