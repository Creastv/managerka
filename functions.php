<?php
if ( ! function_exists( 'crea_setup' ) ) :
	function crea_setup() {
	global $cap, $content_width;
		add_editor_style();
		add_post_type_support( 'page', 'excerpt' );

		add_theme_support( 'post-thumbnails' );
		add_theme_support( "title-tag" );
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'post-thumb', 580, 320, array( 'center', 'center' ) );
		add_image_size( 'box', 100, 100,  array( 'center', 'center' ) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'post-formats', array( 'aside', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video', 'audio' ) );
		register_nav_menus( array(
			'primary'  => __( 'Header menu', 'crea' ),
			'secundary'  => __( 'Footer menu', 'crea' ),
			'tirary'  => __( 'Footer leczymy', 'crea' ),
		) );
	}
	endif;
add_action( 'after_setup_theme', 'crea_setup' );

function cr_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'cr' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Sidebar 2', 'cr' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 1', 'cr' ),
		'id'            => 'footer-1',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2', 'cr' ),
		'id'            => 'footer-2',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 3', 'cr' ),
		'id'            => 'footer-3',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 4', 'cr' ),
		'id'            => 'footer-4',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'cr_widgets_init' );
/**
 * wszystkie scrypty
*/
function cr_scripts() {
	// load cr styles
	wp_enqueue_style( 'cr-style', get_stylesheet_uri() );
	// custome.style
	wp_enqueue_style( 'cr_custome-style', get_template_directory_uri().'/src/css/main.css' ); 
	// aos
	wp_enqueue_style( 'cr_aos-style', 'https://unpkg.com/aos@2.3.1/dist/aos.css' ); 
	// Google fonts
	wp_enqueue_style( 'cr_awsomefonts', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
    // bootstrap js
	wp_enqueue_script('cr_aos_js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array( 'jquery' ),'2', true );
	// load aos js
	wp_enqueue_script('cr-main', get_template_directory_uri().'/src/js/main.js', array( 'jquery' ),'3', true );
    
	if(get_field('wlacz_sekcje_pozostale_uslugi', 'options')) : 
		wp_enqueue_style( 'cr_swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
        wp_enqueue_script('cr-swiper_js', 'https://unpkg.com/swiper/swiper-bundle.min.js',  array(), '20130456', true );
        wp_enqueue_script( 'cr-uslugi', get_template_directory_uri() . '/src/js/poz-uslugi.js', array(), '20130457', true );
	endif;
}
add_action( 'wp_enqueue_scripts', 'cr_scripts' );

// gutenberg editor
function add_block_editor_assets(){
  wp_enqueue_style('block_editor_css', get_template_directory_uri().'/src/css/admin.min.css');
  wp_enqueue_style( 'cr_awsomefonts', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
}
add_action('enqueue_block_editor_assets','add_block_editor_assets',10,0);

/**
* wordpress nav walker
*/
require get_template_directory() . '/src/wp-nav.php';
require get_template_directory() . '/blocks/blocks.php';

/**
* Fukcja usuwa komunikaty o update
*/
function remove_update_notifications( $value ) {

    if ( isset( $value ) && is_object( $value ) ) {
        unset( $value->response[ 'advanced-custom-fields-pro/acf.php' ] );
    }
    return $value;
}
add_filter( 'site_transient_update_plugins', 'remove_update_notifications' );

/**
* ACF pola - edycja
*/
function remove_acf_menu(){
	global $current_user;
	if ($current_user->user_login!='admin'){
	  remove_menu_page( 'edit.php?post_type=acf-field-group' );
	}
  }
add_action( 'admin_menu', 'remove_acf_menu', 100 );
 
function filter_plugin_updates( $value ) {
	$plugins = array(
	  'search-filter-pro/search-filter-pro.php',
	  'advanced-custom-fields-pro/acf.php'
	);
	foreach( $plugins as $plugin ) {
	  if ( isset( $value->response[$plugin] ) ) {
		unset( $value->response[$plugin] );
	  }
	}
	return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );
/**
* Dodanie zakłądki Opcje szablonu
*/
function my_acf_op_init() {
    if( function_exists('acf_add_options_page') ) {
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Opcje i ustawienia szablonu'),
            'menu_title'    => __('Ustawienia szablonu'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
		));	
		
	}
}
add_action('acf/init', 'my_acf_op_init');

// // ////////////////////////////////////////////////////Disable Emoticons
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
// Remove RSD Links
remove_action( 'wp_head', 'rsd_link' ) ;
// Remove Shortlink
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
// Hide WordPress Version
remove_action( 'wp_head', 'wp_generator' ) ;
// Disable Self Pingback
function no_self_ping( &$links ) {
    $home = get_option( 'home' );
    foreach ( $links as $l => $link )
        if ( 0 === strpos( $link, $home ) )
            unset($links[$l]);
}
add_action( 'pre_ping', 'no_self_ping' );

// // ////////////////////////////////////////Disable Dashicons on Front-end
function wpdocs_dequeue_dashicon() {
	if (current_user_can( 'update_core' )) {
		return;
	}
	wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );
// Disable XML-RPC
add_filter('xmlrpc_enabled', '__return_false');

// ///////////////////////////////// /////////////////////Remove Query Strings
function remove_cssjs_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
	 $src = remove_query_arg( 'ver', $src );
	return $src;
	}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

////////////////////////////////////////////// wp_nav_menu remove class and id from li
function remove_css_id_filter($var) {
    return is_array($var) ? array_intersect($var, array('current-menu-item', 'btn', 'btn-main')) : '';
} 
add_filter( 'page_css_class', 'remove_css_id_filter', 100, 1);
add_filter( 'nav_menu_item_id', 'remove_css_id_filter', 100, 1);
// add_filter( 'nav_menu_css_class', 'remove_css_id_filter', 100, 1);

add_action( 'init', function() {
    // Remove the REST API endpoint.
    remove_action('rest_api_init', 'wp_oembed_register_route');

    // Turn off oEmbed auto discovery.
    // Don't filter oEmbed results.
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

    // Remove oEmbed discovery links.
    remove_action('wp_head', 'wp_oembed_add_discovery_links');

    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action('wp_head', 'wp_oembed_add_host_js');
}, PHP_INT_MAX - 1 );

function itsme_disable_feed() {
	wp_redirect( home_url() );
    die;
   }
   
   add_action('do_feed', 'itsme_disable_feed', 1);
   add_action('do_feed_rdf', 'itsme_disable_feed', 1);
   add_action('do_feed_rss', 'itsme_disable_feed', 1);
   add_action('do_feed_rss2', 'itsme_disable_feed', 1);
   add_action('do_feed_atom', 'itsme_disable_feed', 1);
   add_action('do_feed_rss2_comments', 'itsme_disable_feed', 1);
   add_action('do_feed_atom_comments', 'itsme_disable_feed', 1);

   remove_action( 'wp_head', 'feed_links_extra', 3 );
   remove_action( 'wp_head', 'feed_links', 2 );

function sv_move_jp_sharing( $content ) {
	
	if ( is_singular( 'page' ) && function_exists( 'sharing_display' ) ) {
		remove_filter( 'the_content', 'sharing_display', 19 );
	}
	return $content;
}
add_filter( 'the_content', 'sv_move_jp_sharing' );
//** *Enable upload for webp image files.*/
function webp_upload_mimes($existing_mimes) {
    $existing_mimes['webp'] = 'image/webp';
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');


  add_action( 'pre_get_posts', 'my_change_sort_order'); 
    function my_change_sort_order($query){
        if(is_archive()):
           $query->set( 'order', 'ASC' );
           $query->set( 'orderby', 'title' );
        endif;    
    };

function wpdocs_custom_excerpt_length( $length ) {
    return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// //////////////////////////////////////////////////////////////Case study
function cr_casestudy_post_types() {

	$labels = array(
		'name'               => 'Case study',
		'singular_name'      => 'Case study',
		'menu_name'          => 'Case study',
		'name_admin_bar'     => 'Case study',
		'add_new'            => 'Dodaj',
		'add_new_item'       => 'Dodaj ',
		'new_item'           => 'Nowy',
		'edit_item'          => 'Edytuj ',
		'view_item'          => 'Zobacz ',
		'all_items'          => 'Case study',
		'search_items'       => 'Szukaj',
		'parent_item_colon'  => 'Parent :',
		'not_found'          => 'Nie znaleziono',
		'not_found_in_trash' => 'Nie znaleziono',
		
	);
	$args = array( 
	    'public' => true,
		'has_archive' => false,
		'show_in_rest' => true,
		'hierarchical'      => true,
		'menu_icon'     => 'dashicons-businessman',
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'publicly_queryable' => true,
		'show_in_rest' => true,
		// "rewrite"             => array( "slug" => "inwestycje", "with_front" => true ),
		'supports'      => array( 'title', 'page-attributes', 'thumbnail', 'editor' ),
	);
    	register_post_type( 'case-study', $args );

}
add_action( 'init', 'cr_casestudy_post_types' );

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
  }
  add_filter('upload_mimes', 'cc_mime_types');
  
// Usunąć kategorie z loop
function remove_home_category( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        // $query->set( 'cat', '-28, -26, -38, -79, -34, -80' );
		$category_id = get_cat_ID( 'publikacje' ); //change to the actual name of the category you are filtering with
        $query->set( 'cat', $category_id );
    }
}
add_action( 'pre_get_posts', 'remove_home_category' );

function pagination_bars() {
    global $wp_query;
 
    $total_pages = $wp_query->max_num_pages;
	$big = 999999999; // need an unlikely integer
    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));
		echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
}