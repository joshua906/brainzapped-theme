<?php 

//enable widget area
function bz_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'bz' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your blog sidebar.', 'bz' ),
		'before_widget' => '',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="text-transform">',
		'after_title'   => '</h4>',
		'wp_list_categories' => '<ul class="category-layout',
	) );
}
add_action( 'widgets_init', 'bz_widgets_init' );
//theme support
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );

//Custom Post type

function create_custom_post_types() {

	register_post_type('contact_bio',
		array(
			'labels' => array(
				'name' => _('Contact Bio'),
				'singular_name' => _('Contact Bio')
				),
			'public'=> true,
			'has_archive' => false,
			'rewrite' => array(
				'slug' => 'contact-bios'
				),
			)
		);
}

add_action('init', 'create_custom_post_types');


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