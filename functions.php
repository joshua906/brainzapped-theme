<?php 
//pagination

function wpbeginner_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}

add_action('init', 'wpbeginner_numeric_posts_nav');

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
		'wp_list_categories' => '<div class="category-layout">',
		'class'			=> 'category-layout'
		
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
			'id'=> 122,
			'has_archive' => false,
			'show_in_nav_menus' => true,
			'rewrite' => array(
				'slug' => 'products-page'
				),
			)
		);

	register_post_type('termsofuse',
		array(
			'labels' => array(
				'name' => _('terms of use'),
				'singular_name' => _('termsofuse')
				),
			'public'=> true,
			'has_archive' => false,
			'show_in_nav_menus' => true,
			'rewrite' => array(
				'slug' => 'terms-of-use'
				),
			)
		);
}

add_action('init', 'create_custom_post_types');

//post formats

add_theme_support('post-formats',array('aside','image','video'));


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
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '3.3.7', 'all' );
	
	wp_enqueue_script( 'bz', get_template_directory_uri() . '/resources/scripts/bz.js', array(), '1.0.0', true );
	


   
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );

    wp_enqueue_script( 'bootstrap-js' );
    wp_enqueue_style( 'bootstrap-css' );

	/*wp_enqueue_style( 'bz', get_template_directory_uri() . '/resources/css/bz.css' );*/
}

add_action('wp_enqueue_scripts', 'bz_theme_styles');


function bz_js() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'modernizer', get_template_directory_uri() . '/js/modernizr.js' );
	wp_enqueue_script( 'brainzapped-jquery', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.2', true );
	wp_enqueue_script( 'typeit', get_template_directory_uri() . '/js/typeit.js', array('jquery'), '4.3.0', true);

	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), '3.3.7', true );
	wp_enqueue_script( 'masonry' );
	wp_enqueue_script( 'masonry', '//cdnjs.cloudflare.com/ajax/libs/masonry/3.1.2/masonry.pkgd.js' );
	wp_enqueue_script( 'typeit', '//cdnjs.cloudflare.com/ajax/libs/typeit/4.2.3/typeit.min.js' );
	
}

add_action('wp_enqueue_scripts', 'bz_js');



?>