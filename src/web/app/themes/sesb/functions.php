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
		'keywords'		=> array( 'cta' )
    ));
}
add_action('acf/init', 'register_blocks' );

add_theme_support( 'align-wide' )

?>
