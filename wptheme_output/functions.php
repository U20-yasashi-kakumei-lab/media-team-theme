<?php

// Optimize the admin bar
function admin_bar() {
  echo '<style type="text/css">
  #wpadminbar {
   top: 0 !important;
  }
  section.menubar{
  top: 32px !important;
  }
  section#menuboard{
  top: 80px !important;
  }
  </style>';
}
add_action( 'wp_head', 'admin_bar' );

// Default config
$def_jsondata = '{
	"category": {
	"1": "black",
	"2": "green",
	"3": "darkblue"
	}
}';

// Define theme directory
$template_directory = get_template_directory();

// Get configratuon with JSON data
function get_config_json($string){
	// Define JSON
	$data = '{
	"category": {
	"1": "black",
	"2": "green",
	"3": "darkblue"
	}
	}';
	$res =  json_decode($data, true);
	if($string){
		$res = $res[$string];
	}
	return $res;
}

// Setup
function setup() {
	
	// Use thumbnail
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 750, 500, true );
	
	// Navigation menu
	register_nav_menu('primary', 'Primary Menu');
}
add_action( 'after_setup_theme', 'setup' );

// Customize the Read more
function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Sidebar
register_sidebar( array(
    'name' => __( 'Side Widget' ),
    'id' => 'side-widget',
    'before_widget' => '<div class="widget-container">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
) );


// Make category link and decoration
function make_category_link($cat, $mode){
	// Get color list from configration
	$con = get_config_json("category");
	
	// Mode 1: An only primary category
	if($mode == 1){
		// ID
		$catid = $cat[0]->cat_ID;
		// Get category color
		$catcol = $con[$catid];
		// Category name ( single )
		$catname = $cat[0]->name;
		// Category URL
		$link = get_category_link($catid);
		// Output
		echo '<span class="cat '.$catcol.'">'.$catname.'</span>';
	}else {
		
		// Get all set category
		foreach($cat as $val){
		
		// ID
		$catid = $val->cat_ID;
		// Get category color
		$catcol = $con[$catid];
		// Category name ( single )
		$catname = $val->name;
		// Category URL
		$link = get_category_link($catid);
			
    	// Get category URL
    	$cat_link = get_category_link( $catid );
			
		// Output
		echo '<a href="'.esc_url($cat_link).'" class="cat '.$catcol.'">'.$catname.'</a> ';
		}
	}
}

?>

<?php
// ---------------------------------------------------------------------------------
// Original Configration Page
// ---------------------------------------------------------------------------------
function register_yasashi_config_page() {
	add_menu_page('やさしい設定', 'やさしい設定', 'manage_options', 'theme_config', 'add_config_page', 'dashicons-welcome-learn-more', 3);
}
add_action( 'admin_menu', 'register_yasashi_config_page' );

// Add page
function add_config_page() {
	require TEMPLATEPATH.'/yasashi_config.php';
}