<?php 
// add_editor_style();
add_action('after_setup_theme', 'maxhost_theme_setup');
function maxhost_theme_setup(){
	load_theme_textdomain( 'maxhost', get_template_directory() . '/languages' );

	$locale = get_locale();
	$locale_file = MAXHOST_LANGUAGE_PATH . "$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );
}

require_once( MAXHOST_ADMIN_PATH . 'options.php' ); // Load Options Framework
require_once( MAXHOST_INCLUDE_PATH . 'theme-functions.php' ); // Load Theme Functions
require_once( MAXHOST_INCLUDE_PATH . 'enqueue.php' ); // Enqueue JavaScripts & CSS
require_once( MAXHOST_INCLUDE_PATH . 'customcss.php' ); // Load Custom CSS
require_once( MAXHOST_INCLUDE_PATH . 'widgets.php' );

if ( class_exists( 'woocommerce' ) ) {
require_once( MAXHOST_INCLUDE_PATH . 'custom-woocommerce-functions.php' ); // Load WooCommerce Functions
}

if(class_exists('WPBakeryVisualComposerAbstract')) {
	include_once( MAXHOST_INCLUDE_PATH . 'vc-shortcodes.php' ); // Load Visual Composer Customizations
}

if ( is_admin() ) {
	require_once( MAXHOST_INIT_PATH . 'plugins.php' );
}