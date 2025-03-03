<?php

/**********************************************************************
* R.One Creative Wordpress Theme
*
* File name:
*      functions.php
* Brief:
*      Wordpress functions
* Author:
*      R.One Creative
* Author URI:
*      http://r1creative.net
* Contact:
*      info@r1creative.net
***********************************************************************/

/* ==  WARNING! DO NOT EDIT THIS FILE! (PLEASE)  ==============================
*
*	  If you know what you're doing and would like to add your own custom
*     functions to this theme, DO NOT EDIT THIS FILE. Instead, use the
*     custom-functions.php file to defin e custom functions. Adding your
*     custom functions there will make it much easier to upgrade to a newer
*	  version of this theme without losing any of your customizations.
*
* ============================================================================*/

class _NP_Theme{
    public function __construct(){
        // Add some constants
		$this->constants();

        // Additional Init Functions
		$this->include_action_hook();
    }
    /**
	 * Define some constants variables
	 */
	public function constants(){
		define( '_NP_THEME_DIR', get_stylesheet_directory() );
		define( '_NP_THEME_URI', get_stylesheet_directory_uri() );
	}
    /**
	 * Include action hooks
	 */
	public function include_action_hook(){
		// Enqueue style and javascripts
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_script_and_styles' ) );

        add_action( 'init', 'wpdocs_codex_product_init' );

        
    }
    /**
	 * Enqueue style and javascripts
	 */
    public function enqueue_script_and_styles(){
        // Load the Stylesheet
        wp_enqueue_style( 'r1-theme-style', _NP_THEME_URI.'/style.css', array(), time() );
        wp_enqueue_style( 'r1-font-awesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css', array(), '');
        wp_enqueue_style( 'r1-bootstrap5-style', _NP_THEME_URI. '/assets/css/bootstrap.min.css', array(), '' );
        // wp_enqueue_style( 'ad-animate-style', _NP_THEME_URI. '/assets/css/animate.css', array(), false );
        wp_enqueue_style( 'r1-main-style', _NP_THEME_URI. '/assets/css/app.css', array(), false );

        // Load the Scripts
        // wp_enqueue_script( 'ad-wow-script', _NP_THEME_URI .'/assets/js/wow.js', array( 'jquery' ), time() );
        wp_enqueue_script( 'r1-fontawesome-script', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js', array(), '', true );
        wp_enqueue_script( 'r1-bootstrap-script', _NP_THEME_URI . '/assets/js/bootstrap.bundle.min.js', array(), '', true );
        wp_enqueue_script( 'r1-main-scripts', _NP_THEME_URI . '/assets/js/app.js', array('jquery'), time(), true);

        wp_localize_script( 'proof-main-scripts', 'ad_vars', array(
            'ajax_url' => admin_url( 'admin-ajax.php' ),
            'theme_uri' => _NP_THEME_URI,
            'theme_dir' => _NP_THEME_DIR,
            'site_url' => get_bloginfo('url')
        ));
    }
}

new _NP_Theme();

/**
 * Register ACF
**/
if( function_exists('acf_add_options_page') ) {
    // add parent
    $parent = acf_add_options_page(array(
        'page_title' 	=> 'Theme Options',
        'menu_title' 	=> 'Theme Options',
        'redirect' 		=> false
    ));
}
/**
 * Register Menu
**/
register_nav_menus( array(
    'primary_nav' => 'Primary Menu'
) );
/**
 * Theme Support
**/
add_theme_support( 'post-thumbnails' );
// add_image_size('product-thumb-size', 376, 350, true);

/**
 * Register a custom post type
**/
function wpdocs_codex_product_init() {
	$labels = array(
		'name'                  => 'Products',
		'singular_name'         => 'Product',
		'add_new'               => 'Add New',
		'add_new_item'          => 'Add New Product',
		'edit_item'             => 'Edit Product',
		'new_item'              => 'New Product',
		'all_items'             => 'All Products',
		'view_item'             => 'View Product',
		'search_items'          => 'Search Products',
		'not_found'             => 'No products found.',
		'not_found_in_trash'    => 'No products found in Trash.',
		'parent_item_colon'     => 'Parent Products:',
        'menu_name'             => 'Products', 'Admin Menu text',
		'featured_image'        => 'Product Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'product' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => null,
        'show_in_rest' => true,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', ),
	);

	register_post_type( 'product', $args );
}
/**
 * Register taxonomies for post type
**/
add_action('init', 'create_taxonomies');

function create_taxonomies(){
    register_taxonomy(
        'product-category', 'product', [
        'label' => __('Product Category'),
        'rewrite' => ['slug' => 'product-category'],
        'hierarchical' => true
	,
    ]);
}
/**
 * Log Error
**/
if (!function_exists('write_log')) {
	function write_log($log) {
		if (true === WP_DEBUG) {
			if (is_array($log) || is_object($log)) {
				error_log(var_export($log, true));
			} else {
				error_log($log);
			}
		}
	}
}
