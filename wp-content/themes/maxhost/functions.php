<?php
function maxhost_get_global_themedata() {
    global $maxhost_theme_data;
    return $maxhost_theme_data;
}
$maxhost_themes_data = maxhost_get_global_themedata();
$maxhost_themes_data = wp_get_theme( get_stylesheet_directory() . '/style.css' );

/* -----------------------------------------------------------------------------
 * Definations
 * -------------------------------------------------------------------------- */
if( !defined('MAXHOST_ADMIN_PATH') )
	define( 'MAXHOST_ADMIN_PATH', get_template_directory() . '/framework/admin/' );
if( !defined('MAXHOST_INIT_PATH') )
	define( 'MAXHOST_INIT_PATH', get_template_directory() . '/framework/' );
if( !defined('MAXHOST_INCLUDE_PATH') )
	define( 'MAXHOST_INCLUDE_PATH', get_template_directory() . '/inc/' );
if( !defined('MAXHOST_LANGUAGE_PATH') )
	define( 'MAXHOST_LANGUAGE_PATH', get_template_directory() . '/languages/' );

require_once( MAXHOST_INIT_PATH . 'init.php' );