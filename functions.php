<?php
/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );
/*
* Add post thumbnails
*/
add_theme_support( 'post-thumbnails' );
/*
* Excerpt for pages
*/
// add_post_type_support( 'page', 'excerpt' );
/*
* This theme uses wp_nav_menu() in two locations.
*/
register_nav_menus(
	array(
		'header' => __( 'Header Menu', 'TEXTDOMAIN' ),
		'footer' => __( 'Footer Menu', 'TEXTDOMAIN' ),
	)
);

/*
* Add classes to the li items in the wp_nav_menu
*/
add_filter( 'nav_menu_css_class', 'special_nav_class', 10, 3 );
function special_nav_class( $classes, $item, $args ) {
    if ( 'header' === $args->theme_location ) {
        $classes[] = 'navigation__list__item';
	}
	if ( 'footer' === $args->theme_location ) {
        $classes[] = 'footer__navigation__list__item';
    }
    return $classes;
}
/*
 * Load Scripts and Styles
 */
function TEXTDOMAIN_scripts() {
    wp_enqueue_style('app', get_template_directory_uri() . '/dist/style.css', array(), '0.1.2', 'all' );
    wp_enqueue_script('app', get_template_directory_uri() . '/dist/app.js', array(), '0.1.2', 'true' );
  
}
add_action( 'wp_enqueue_scripts', 'TEXTDOMAIN_scripts' );

/*
* Add SVG Support
*/
function TEXTDOMAIN_svg ( $svg_mime ){
	$svg_mime['svg'] = 'image/svg+xml';
	return $svg_mime;
}
add_filter( 'upload_mimes', 'TEXTDOMAIN_svg' );
/*
* Remove DNS Prefetch (DSGVO)
*/ 
add_action( 'init', 'remove_dns_prefetch' ); 
function  remove_dns_prefetch () {      
   remove_action( 'wp_head', 'wp_resource_hints', 2, 99 ); 
} 
/*
* Remove rsd and manifest link
*/ 
remove_action ('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');
/*
* Remove WordPress version number
*/ 
function TEXTDOMAIN_remove_version() {
	return '';
}
add_filter('the_generator', 'TEXTDOMAIN_remove_version');


/**
 * Disable the emoji's (DSGVO)
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	// Remove from TinyMCE
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );
/**
 * Filter out the tinymce emoji plugin.
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
/*
* Remove Gutenberg Styles
*/
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
    wp_dequeue_style( 'wp-block-library' );
}
/*
 * Add native lazy loading to every image element
 */
add_filter( 'wp_get_attachment_image_attributes', 'add_native_lazyloading_images', 10, 3 );
function add_native_lazyloading_images( $attr, $attachment, $size ) {
    $attr['loading'] = 'lazy';   
    return $attr;
}

/*
* CPT FAQs
*/
 
function custom_post_type_faqs() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'FAQs', 'Post Type General Name', 'TEXTDOMAIN' ),
        'singular_name'       => _x( 'FAQ', 'Post Type Singular Name', 'TEXTDOMAIN' ),
        'menu_name'           => __( 'FAQs', 'TEXTDOMAIN' ),
        'parent_item_colon'   => __( 'Übergeordnete FAQs', 'TEXTDOMAIN' ),
        'all_items'           => __( 'Alle FAQs', 'TEXTDOMAIN' ),
        'view_item'           => __( 'FAQs ansehen', 'TEXTDOMAIN' ),
        'add_new_item'        => __( 'FAQ hinzufügen', 'TEXTDOMAIN' ),
        'add_new'             => __( 'Neue FAQ hinzufügen', 'TEXTDOMAIN' ),
        'edit_item'           => __( 'FAQ bearbeiten', 'TEXTDOMAIN' ),
        'update_item'         => __( 'FAQ ändern', 'TEXTDOMAIN' ),
        'search_items'        => __( 'FAQ suchen', 'TEXTDOMAIN' ),
        'not_found'           => __( 'Not Found', 'TEXTDOMAIN' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'TEXTDOMAIN' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'faqs', 'TEXTDOMAIN' ),
        'description'         => __( 'FAQs', 'TEXTDOMAIN' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array(),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'menu_icon'           => 'dashicons-media-document',
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'faqs', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
// add_action( 'init', 'custom_post_type_faqs', 0 );

function faqs_categories_taxonomy() {
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
  $faq_cats = array(
    'name' => _x( 'FAQ Kategorien', 'taxonomy general name' ),
    'singular_name' => _x( 'FAQ Kategorie', 'taxonomy singular name' ),
    'search_items' =>  __( 'Durchsuche FAQ Kategorien' ),
    'all_items' => __( 'Alle FAQ Kategorien' ),
    'parent_item' => __( 'Übergeordnete FAQ Kategorie' ),
    'parent_item_colon' => __( 'Übergeordnete FAQ Kategorien:' ),
    'edit_item' => __( 'Bearbeite FAQ Kategorien' ), 
    'update_item' => __( 'Update FAQ Kategorien' ),
    'add_new_item' => __( 'Neue FAQ Kategorien' ),
    'new_item_name' => __( 'Neue FAQ Kategorie' ),
    'menu_name' => __( 'FAQ Kategorien' ),
  );    
// Now register the taxonomy. Replace the parameter portfolios withing the array by the name of your custom post type.
  register_taxonomy('faq_categories',array('faqs'), array(
    'hierarchical' => true,
    'labels' => $faq_cats,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'jobs categories' ),
  ));
}
// add_action( 'init', 'faqs_categories_taxonomy', 0 );

/*
* remove p tags from cform 7
*/
add_filter('wpcf7_autop_or_not', '__return_false');
/*
* remove cform 7 scripts and styles
*/
add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

/*
* Add Options Page
*/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}
//* Remove type tag from script and style
add_filter('style_loader_tag', 'codeless_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'codeless_remove_type_attr', 10, 2);
add_filter('autoptimize_html_after_minify', 'codeless_remove_type_attr', 10, 2);
function codeless_remove_type_attr($tag, $handle)
{
    return preg_replace("/type=['\"]text\/(javascript|css)['\"]/", '', $tag);
}
/*
* Open Graph Tags
*/
add_action( 'wp_head', 'TEXTDOMAIN_load_open_graph' );
 
function TEXTDOMAIN_load_open_graph() {

    global $post;
     
    // standard image for pages without post thumbnail
    $TEXTDOMAIN_site_logo = get_stylesheet_directory_uri() . '/assets/img/logo.svg';
     
    // if homepage
    if ( is_front_page() ) { 
        echo '<meta property="og:type" content="website" />';
        echo '<meta property="og:url" content="' . get_bloginfo( 'url' ) . '" />';
        echo '<meta property="og:title" content="' . esc_attr( get_bloginfo( 'name' ) ) . '" />';
        echo '<meta property="og:image" content="' . $TEXTDOMAIN_site_logo . '" />';
        echo '<meta property="og:description" content="' . esc_attr( get_bloginfo( 'description' ) ) . '" />';
    }
     
    // if single
    elseif ( is_singular() ) {
        echo '<meta property="og:type" content="article" />';
        echo '<meta property="og:url" content="' . get_permalink() . '" />';
        echo '<meta property="og:title" content="' . esc_attr( get_the_title() ) . '" />';
        if ( has_post_thumbnail( $post->ID ) ) {
            $kb_thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
            echo '<meta property="og:image" content="' . esc_attr( $kb_thumbnail[0] ) . '" />';
        } else
            echo '<meta property="og:image" content="' . $TEXTDOMAIN_site_logo . '" />';
            echo '<meta property="og:description" content="' . esc_attr( get_the_excerpt() ) . '" />';
        }
}

/*
* Disable Gutenberg
*/
add_filter('use_block_editor_for_post', '__return_false', 10);

/*
* Disable Comments on media
*/
function filter_media_comment_status( $open, $post_id ) {
    $post = get_post( $post_id );
    if( $post->post_type == 'attachment' ) {
        return false;
    }
    return $open;
}
add_filter( 'comments_open', 'filter_media_comment_status', 10 , 2 );

/*
* Remove unnecessary scripts and styles
*/
/*
add_action( 'wp_print_styles', 'TEXTDOMAIN_deregister_styles', 100 );
function TEXTDOMAIN_deregister_styles() {
    wp_dequeue_style( handle );
}
add_action( 'wp_print_scripts', 'TEXTDOMAIN_dequeue_script', 100 );
function TEXTDOMAIN_dequeue_script() {
    wp_dequeue_script( handle );
}
*/

/*
* Hide Admin Bar for all users
*/
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar() {
    show_admin_bar(false);
}
?>