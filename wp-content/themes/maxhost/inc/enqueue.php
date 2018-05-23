<?php
function maxhost_scripts_basic() {  

	/* ------------------------------------------------------------------------ */
	/* Enqueue Scripts */
	/* ------------------------------------------------------------------------ */
	/* Pre-Loader */
	if(maxhost_get_option('maxhost_preloader') == '1') {
	wp_enqueue_script('maxhost-pre-loader', get_template_directory_uri() . '/js/pageloader.js', array( 'jquery' ), '1.0.0', true);
	}
	/* Custom */
	wp_enqueue_script('maxhost-main', get_template_directory_uri() . '/js/maxhost-main.js', array( 'jquery' ), '1.0.0', true);
	/* Bootstrap */
	wp_enqueue_script('bootstrap.min.js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.0.0', true);
	/* Easing */
	wp_enqueue_script('jquery.easing.min.js', get_template_directory_uri() . '/js/jquery.easing.min.js', array( 'jquery' ), '1.0.0', true);
	/* Animations */
	wp_enqueue_script('animations.min.js', get_template_directory_uri() . '/js/animations/animations.min.js', array( 'jquery' ), '1.0.0', true);
	wp_enqueue_script('appear.min.js', get_template_directory_uri() . '/js/animations/appear.min.js', array( 'jquery' ), '1.0.0', true);
	/* Cubeportfolio */
	wp_enqueue_script('jquery.cubeportfolio.min.js', get_template_directory_uri() . '/js/cubeportfolio/jquery.cubeportfolio.min.js', array( 'jquery' ), '1.0.0', true);
	if( !is_page( array( 'about-us', 'about', 'faq', 'faqs', 'frequently-asked-question', 'frequently-asked-questions', 'qa', 'q-a', 'accordion', 'accordions' ) ) ){
	if(maxhost_get_option('portfolio_columns') == '4') {
	wp_enqueue_script('maxhost-cubeportfolio-main5', get_template_directory_uri() . '/js/cubeportfolio/main5.js', array( 'jquery' ), '1.0.0', true);
	} if(maxhost_get_option('portfolio_columns') == '3') {
	wp_enqueue_script('maxhost-cubeportfolio-main3', get_template_directory_uri() . '/js/cubeportfolio/main3.js', array( 'jquery' ), '1.0.0', true);
	} if(maxhost_get_option('portfolio_columns') == '2') {
	wp_enqueue_script('maxhost-cubeportfolio-main7', get_template_directory_uri() . '/js/cubeportfolio/main7.js', array( 'jquery' ), '1.0.0', true);
	}
	}
	if( is_page( array( 'about-us', 'about', 'faq', 'faqs', 'frequently-asked-question', 'frequently-asked-questions', 'qa', 'q-a', 'accordion', 'accordions' ) ) ){
	wp_enqueue_script('maxhost-cubeportfolio-main6', get_template_directory_uri() . '/js/cubeportfolio/main6.js', array( 'jquery' ), '1.0.0', true);
	}
	/* Fixied Sticky */
	wp_enqueue_script('maxhost-menusticky', get_template_directory_uri() . '/js/mainmenu/sticky.js', array( 'jquery' ), '1.0.0', true);
	/* Owl Carousel */
	wp_enqueue_script('owl.carousel.js', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.js', array( 'jquery' ), '1.0.0', true);
	wp_enqueue_script('maxhost-owl-two', get_template_directory_uri() . '/js/owl-carousel/custom.js', array( 'jquery' ), '1.0.0', true);
	/* Scroll Up */
	if(maxhost_get_option('maxhost_smooth_scroll') == '1') {
	wp_enqueue_script('maxhost-totop', get_template_directory_uri() . '/js/scrolltotop/smooth-totop.js', array( 'jquery' ), '1.0.0', true);
	} else {
	wp_enqueue_script('maxhost-totop', get_template_directory_uri() . '/js/scrolltotop/totop.js', array( 'jquery' ), '1.0.0', true);
	}
	/* Smooth scroll */
	if(maxhost_get_option('maxhost_smooth_scroll') == '1') {
	wp_enqueue_script('maxhost-TweenMax.min.js', get_template_directory_uri() . '/js/custom_scroll/TweenMax.min.js', array( 'jquery' ), '1.0.0', true);		
	wp_enqueue_script('maxhost-ScrollToPlugin.js', get_template_directory_uri() . '/js/custom_scroll/ScrollToPlugin.js', array( 'jquery' ), '1.0.0', true);			
	wp_enqueue_script('maxhost-custom_smooth_scroll.js', get_template_directory_uri() . '/js/custom_scroll/custom_smooth_scroll.js', array( 'jquery' ), '1.0.0', true);
	}
	
	if ( is_singular() ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_localize_script( 'maxhost-main', 'prefix_object_name', array(
		'error_while_ajax_request' => esc_html__( 'Error while ajax request', 'maxhost' ),
		'thank_you_your_email_has_been_sent' => esc_html__( 'Thank you, your email has been sent', 'maxhost' ),
		'please_try_again' => esc_html__( 'Please, fill in the required fields correctly!', 'maxhost' )
	) );
}
add_action( 'wp_enqueue_scripts', 'maxhost_scripts_basic' ); 

function maxhost_styles_basic()  {  
	
	/* ------------------------------------------------------------------------ */
	/* Enqueue Stylesheets */
	/* ------------------------------------------------------------------------ */
	/* Fonts */
	wp_enqueue_style( 'maxhost-fonts', get_template_directory_uri() . '/css/webfonts/webfonts.css');
	/* Bootstrap */
	wp_enqueue_style( 'bootstrap.min.css', get_template_directory_uri() . '/css/bootstrap.min.css');
	/* CSS STYLES */
	wp_enqueue_style( 'maxhost-background', get_template_directory_uri() . '/css/background.css');
	wp_enqueue_style( 'maxhost-stylesheet', get_template_directory_uri() . '/style.css'); // Main Stylesheet
	wp_enqueue_style( 'maxhost-reset', get_template_directory_uri() . '/css/reset.css');
	wp_enqueue_style( 'font-awesome.min.css', get_template_directory_uri() . '/css/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style( 'simple-line-icons.css', get_template_directory_uri() . '/css/Simple-Line-Icons-Webfont/simple-line-icons.css');
	wp_enqueue_style( 'et-line-font.css', get_template_directory_uri() . '/css/et-line-font/et-line-font.css');
	/* responsive-leyouts */
	wp_enqueue_style( 'maxhost-responsive-leyouts', get_template_directory_uri() . '/css/responsive-leyouts.css');
	/* Mega Menu */
	wp_enqueue_style( 'maxhost-mega-menu', get_template_directory_uri() . '/js/mainmenu/menu.css');
	/* Sky Form */
	wp_enqueue_style( 'maxhost-sky-form', get_template_directory_uri() . '/js/form/css/sky-forms.css');
	/* Animations */
	wp_enqueue_style( 'animations.min.css', get_template_directory_uri() . '/js/animations/css/animations.min.css');
	/* cubeportfolio */
	wp_enqueue_style( 'cubeportfolio.min.css', get_template_directory_uri() . '/js/cubeportfolio/css/cubeportfolio.min.css');
	/* color-options */
	if(maxhost_get_option('ten_colors') == '2') {
	wp_enqueue_style( 'maxhost-red', get_template_directory_uri() . '/css/colors/red.css');
	} if(maxhost_get_option('ten_colors') == '3') {
	wp_enqueue_style( 'maxhost-orange', get_template_directory_uri() . '/css/colors/orange.css');
	} if(maxhost_get_option('ten_colors') == '4') {
	wp_enqueue_style( 'maxhost-bluesea', get_template_directory_uri() . '/css/colors/bluesea.css');
	} if(maxhost_get_option('ten_colors') == '5') {
	wp_enqueue_style( 'maxhost-green', get_template_directory_uri() . '/css/colors/green.css');
	} if(maxhost_get_option('ten_colors') == '6') {
	wp_enqueue_style( 'maxhost-lightorange', get_template_directory_uri() . '/css/colors/lightorange.css');
	} if(maxhost_get_option('ten_colors') == '7') {
	wp_enqueue_style( 'maxhost-lightred', get_template_directory_uri() . '/css/colors/lightred.css');
	} if(maxhost_get_option('ten_colors') == '8') {
	wp_enqueue_style( 'maxhost-sea', get_template_directory_uri() . '/css/colors/sea.css');
	} if(maxhost_get_option('ten_colors') == '9') {
	wp_enqueue_style( 'maxhost-lightblue', get_template_directory_uri() . '/css/colors/lightblue.css');
	} if(maxhost_get_option('ten_colors') == '10') {
	wp_enqueue_style( 'maxhost-lightgreen', get_template_directory_uri() . '/css/colors/lightgreen.css');
	} if(maxhost_get_option('ten_colors') == '11') {
	wp_enqueue_style( 'maxhost-blue', get_template_directory_uri() . '/css/colors/blue.css');
	}
}  
add_action( 'wp_enqueue_scripts', 'maxhost_styles_basic', 1 );
?>