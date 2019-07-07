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
add_action('enqueue_block_editor_assets', 'scripts_styles' );

?>
