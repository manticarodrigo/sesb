<?php
/**
* Functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
*/

/**
 * Enqueue scripts and styles.
 */

function scripts_styles() {
    // base CSS
    wp_enqueue_style('styles', get_template_directory_uri() . '/dist/app.min.css', false,
        filemtime(get_template_directory() . '/dist/app.min.css'));
    // base JS
    wp_enqueue_script('scripts', get_template_directory_uri() . '/dist/app.min.js', array('jquery'),
        filemtime(get_template_directory() . '/dist/app.min.js'), true);
}

add_action('wp_enqueue_scripts', 'scripts_styles');

function editor_styles()
{
    // base CSS
    wp_enqueue_style('editor-styles', get_template_directory_uri() . '/dist/app.min.css', false,
        filemtime(get_template_directory() . '/dist/app.min.css'));
}

add_action('enqueue_block_editor_assets', 'editor_styles' );

/**
 * Register blocks.
 */
function register_blocks() {
	if( ! function_exists('acf_register_block') )
        return;

    // Register hero block
    acf_register_block( array(
		'name'			=> 'hero',
		'title'			=> __( 'Hero', 'hero' ),
		'render_template'	=> 'template_parts/hero.php',
		'category'		=> 'formatting',
		'icon'			=> 'universal-access',
		'mode'			=> 'preview',
		'keywords'		=> array( 'banner' )
    ));

    // Register Two Column block
    acf_register_block( array(
		'name'			=> 'Two Column',
		'title'			=> __( 'Two Column', 'two-column' ),
		'render_template'	=> 'template_parts/two-column.php',
		'category'		=> 'formatting',
		'icon'			=> 'universal-access',
		'mode'			=> 'preview',
		'keywords'		=> array( 'layout' )
    ));

    // Register Two Column block Two
    acf_register_block( array(
      'name'			=> 'Two Column two',
      'title'			=> __( 'Two Column two', 'two-column two' ),
      'render_template'	=> 'template_parts/two-column2.php',
      'category'		=> 'formatting',
      'icon'			=> 'universal-access',
      'mode'			=> 'preview',
      'keywords'		=> array( 'layout' )
      ));

    // Register Partners Block
    acf_register_block( array(
      'name'			=> 'Partners',
      'title'			=> __( 'Partners', 'Partners' ),
      'render_template'	=> 'template_parts/partners.php',
      'category'		=> 'formatting',
      'icon'			=> 'universal-access',
      'mode'			=> 'preview',
      'keywords'		=> array( 'layout' )
    ));

    // Register Flexible Content Block
    acf_register_block( array(
      'name'			=> 'Flexible Content',
      'title'			=> __( 'Flexible Content', 'Flexible Content' ),
      'render_template'	=> 'template_parts/flexible-content.php',
      'category'		=> 'formatting',
      'icon'			=> 'universal-access',
      'mode'			=> 'preview',
      'keywords'		=> array( 'layout' )
    ));
      
}
add_action('acf/init', 'register_blocks' );

add_theme_support( 'align-wide' );

// Register Place Post Type
function place_post_type() {

	$labels = array(
		'name'                  => _x( 'Places', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Place', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Places', 'text_domain' ),
		'name_admin_bar'        => __( 'Place', 'text_domain' ),
		'archives'              => __( 'Place Archives', 'text_domain' ),
		'attributes'            => __( 'Place Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Place:', 'text_domain' ),
		'all_items'             => __( 'All Places', 'text_domain' ),
		'add_new_item'          => __( 'Add New Place', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Place', 'text_domain' ),
		'edit_item'             => __( 'Edit Place', 'text_domain' ),
		'update_item'           => __( 'Update Place', 'text_domain' ),
		'view_item'             => __( 'View Place', 'text_domain' ),
		'view_items'            => __( 'View Places', 'text_domain' ),
		'search_items'          => __( 'Search Place', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Place', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Place', 'text_domain' ),
		'items_list'            => __( 'Places list', 'text_domain' ),
		'items_list_navigation' => __( 'Places list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Places list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Place', 'text_domain' ),
		'description'           => __( 'SE South Bend Places', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'place', $args );

}
add_action( 'init', 'place_post_type', 0 );

?>
