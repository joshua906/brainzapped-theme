<?php 
//pagination




//enable popular post function and view count
function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}

function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;    
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

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
		'wp_list_categories' => '<ul class="category-layout>',
		
	) );
}
add_action( 'widgets_init', 'bz_widgets_init' );
//theme support
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'audio', 'quote', 'link', 'gallery',
	) );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'video-playlist' );
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
			'show_in_nav_menus' => true,
			'rewrite' => array(
				'slug' => 'contact-bios'
				),
			)
		);

	register_post_type('products_page',
		array(
			'labels' => array(
				'name' => _('Product Page'),
				'singular_name' => _('Product Page')
				),
			'public'=> true,
			'has_archive' => false,
			'show_in_nav_menus' => true,
			'rewrite' => array(
				'slug' => 'products-page'
				),
			)
		);
}

add_action('init', 'create_custom_post_types');




///menu

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