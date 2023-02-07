<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.9.82' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

    wp_enqueue_style( 'astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all' );

}

/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

    define('ABSPATH', dirname(__FILE__) . '/');

if( ! defined( 'CONCATENATE_SCRIPTS' ) ) {
    define('CONCATENATE_SCRIPTS', false);
}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );