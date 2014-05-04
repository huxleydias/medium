<?php
/**
 * @package WordPress
 * @subpackage Medium WP
*/
require('functions/better-excerpts.php');

if ( function_exists( 'add_theme_support' ) )
	add_theme_support( 'post-thumbnails' );
	
if ( function_exists( 'add_image_size' ) ) {
	
	add_image_size( 'featured', 280, 260, true );
	add_image_size('archive-thumb', 100, 100, true);
// add nav menu
// register_nav_menus( array(
//     'menu_superior' => 'Menu Superior',
//     'menu_lateral_categorias' => 'Lateral Categorias',
//     'menu_ebricks' => 'Infeior',
// ) );	
// Limit Post Word Count
function new_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'new_excerpt_length');

//Replace Excerpt Link
function new_excerpt_more($more) {
       global $post;
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
}	
?>
