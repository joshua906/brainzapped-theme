<?php 



add_theme_support('menus');

function bz_register_theme_menus(){
	register_nav_menus(
		array(
			'primary-menu'=>__('Primary Menu'),
		)
		);
}
add_action('init', 'bz_register_theme_menus');


function bz_theme_styles() {

	wp_enqueue_style( 'bz', get_template_directory_uri() . '/resources/css/bz.css' );
}

add_action('wp_enqueue_scripts', 'bz_theme_styles');


/*function bz_theme_scripts() {

	wp_enqueue_scripts('bz', get_template_directory_uri() . '/resources/scripts/bz.js');
}

add_action('wp_enqueue_scripts', 'bz_theme_scripts');
*/

?>