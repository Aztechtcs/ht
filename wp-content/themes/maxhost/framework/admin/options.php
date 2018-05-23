<?php

/* -----------------------------------------------------------------------------
 * Helper Function
 * -------------------------------------------------------------------------- */
function maxhost_get_option( $opt_name, $default = null ) {
	global $Redux_Options;
	return $Redux_Options->get( $opt_name, $default );
}
/* -----------------------------------------------------------------------------
 * Load Custom Fields
 * -------------------------------------------------------------------------- */
require_once( MAXHOST_ADMIN_PATH . 'custom-fields/field_font_upload/field_upload.php' );
require_once( MAXHOST_ADMIN_PATH . 'custom-fields/field_typography.php' );
require_once( MAXHOST_ADMIN_PATH . 'custom-fields/field_section_info.php' );
require_once( MAXHOST_ADMIN_PATH . 'custom-fields/field_sidebar_select.php' );
require_once( MAXHOST_ADMIN_PATH . 'custom-fields/field_color_scheme.php' );
require_once( MAXHOST_ADMIN_PATH . 'custom-fields/field_slider.php' );
require_once( MAXHOST_ADMIN_PATH . 'custom-fields/field_slides.php' );
/* -----------------------------------------------------------------------------
 * Initial Redux Framework
 * -------------------------------------------------------------------------- */


if(!class_exists('Redux_Options')) {
	//define('Redux_OPTIONS_URL', site_url('path the options folder'));
	require_once( MAXHOST_ADMIN_PATH . 'options/defaults.php' );
}
/*
 *
 * Most of your editing will be done in this section.
 *
 * Here you can override default values, uncomment args and change their values.
 * No $args are required, but they can be over ridden if needed.
 *
 */
function maxhost_setup_framework_options() {
	$args = array();

	$args['std_show'] = true; // If true, it shows the std value

	// Set the class for the dev mode tab icon.
	// This is ilicered unless $args['icon_type'] = 'iconfont'
	// Default: null
	$args['dev_mode_icon_class'] = 'icon-large';

	// Setup custom links in the footer for share icons
	$args['share_icons']['twitter'] = array(
		'link' => 'http://twitter.com/ghost1227',
		'title' => esc_html__('Follow me on Twitter', 'maxhost'),
		'img' => Redux_OPTIONS_URL . 'img/social/Twitter.png'
	);
	$args['share_icons']['linked_in'] = array(
		'link' => 'http://www.linkedin.com/profile/view?id=52559281',
		'title' => esc_html__('Find me on LinkedIn', 'maxhost'),
		'img' => Redux_OPTIONS_URL . 'img/social/LinkedIn.png'
	);

	// Set the class for the import/export tab icon.
	// This is ilicered unless $args['icon_type'] = 'iconfont'
	// Default: null
	$args['import_icon_class'] = 'icon-large';

	// Set a custom option name. Don't forget to replace spaces with underscores!
	$args['opt_name'] = 'maxhost_theme_options';

	// Set a custom title for the options page.
	// Default: Options
	$args['menu_title'] = esc_html__('Theme Options', 'maxhost');

	// Set a custom page title for the options page.
	// Default: Options
	$args['page_title'] = esc_html__('Theme Options', 'maxhost');

	// Set a custom page slug for options page (wp-admin/themes.php?page=***).
	// Default: redux_options
	$args['page_slug'] = 'redux_options';

	// Set the menu type. Set to "menu" for a top level menu, or "submenu" to add below an existing item.
	// Default: menu
	$args['page_type'] = 'menu';

	// Set the parent menu.
	// Default: themes.php
	$args['page_parent'] = 'themes.php';

	// Set the icon type. Set to "iconfont" for Font Awesome, or "image" for traditional.
	// Redux no longer ships with standard icons!
	// Default: iconfont
	//$args['icon_type'] = 'image';
	$args['dev_mode_icon_type'] = 'iconfont';
	$args['import_icon_type'] = 'iconfont';
	$allowed_html_array = array(
    'p' => array(),
    'h4' => array(),
	'strong' => array(),
	);
	$args['intro_text'] = wp_kses( __( '<h4>Theme Settings Information for Maxhost Theme</h4>', 'maxhost' ), $allowed_html_array );

	$sections = array();
	
	//section for General-logo, favicon, ratina, custom css
	$sections[] = array(
						'icon_type' => 'iconfont',
						'icon' => 'globe',
						'icon_class' => 'icon-large',
						'title' => esc_html__('General', 'maxhost'),
						'desc' => wp_kses( __('<p class="description">This is the general options.</p>', 'maxhost'), $allowed_html_array ),
						'fields' => array(
										    array(
												'id' => 'logo_url',
												'type' => 'upload',
												'title' => esc_html__('Upload Main Logo', 'maxhost'),
												'sub_desc' => esc_html__('This is the main logo', 'maxhost'),
											),
											
											array(
												'id' => 'cosonix_favicon',
												'type' => 'upload',
												'title' => esc_html__('Upload Favicon', 'maxhost'),
												'sub_desc' => esc_html__('This is favicon. Upload 64x64 favicon icon.', 'maxhost'),
											),
											
											array(
												'id' => 'header_styles',
												'type' => 'radio',
												'title' => esc_html__('Website Header Styles', 'maxhost'), 
												'sub_desc' => esc_html__('Choose a Header Style for your Website', 'maxhost'),
												'options' => array('1' => 'Header Style 1', '2' => 'Header Style 2', '3' => 'Header Style 3', '4' => 'Header Style 4'), // Must provide key => value pairs for radio options
												'std' => '1'
											),
											
											array(
												'id' => 'ten_colors',
												'type' => 'radio',
												'title' => esc_html__('Website Ready-Made Colors', 'maxhost'), 
												'sub_desc' => esc_html__('Choose a Global Color for your Website', 'maxhost'),
												'options' => array('2' => 'Red', '3' => 'Orange', '4' => 'Blue Sea', '5' => 'Green', '6' => 'Light Orange', '7' => 'Light Red', '8' => 'Sea', '9' => 'Light Blue', '10' => 'Light Green', '11' => 'Blue'), // Must provide key => value pairs for radio options
												'std' => '5'
											),

											array(
												'id' => 'custom_color',
												'type' => 'color',
												'title' => esc_html__('Website Custom Color', 'maxhost'), 
												'sub_desc' => esc_html__('Choose Global Custom Color from here', 'maxhost'),
												'desc' => esc_html__('Keep it empty if you like to use the one of the above instead of this custom color', 'maxhost'),
												'std' => ''
											),											

											array(
												'id' => 'maxhost_site_width',
												'type' => 'checkbox_hide_below',
												'title' => esc_html__('Switch On for Boxed Style', 'maxhost'), 
												'sub_desc' => esc_html__('Want to disable Full-Width and enable Boxed Style for your website?', 'maxhost'),
												'desc' => esc_html__('Check this if you want to have Boxed Style', 'maxhost'),
												'switch' => true,
												'std' => '0' // 1 = checked | 0 = unchecked
											),
											
											array(
												'id' => 'maxhost_bg_Pattern',
												'type' => 'radio',
												'title' => esc_html__('Choose Background Pattern', 'maxhost'), 
												'options' => array('1' => 'Default', '2' => 'Pattern - 1', '3' => 'Pattern - 2', '4' => 'Pattern - 3', '5' => 'Pattern - 4', '6' => 'Pattern - 5', '7' => 'Pattern - 6', '8' => 'Pattern - 7', '9' => 'Pattern - 8', '10' => 'Pattern - 9', '11' => 'Pattern - 10', '12' => 'Pattern - 11', '13' => 'Pattern - 12'), // Must provide key => value pairs for radio options
												'std' => '1'
											),
											
											array( 
												"title" => esc_html__("Custom CSS", 'maxhost'),
												"sub_desc" => esc_html__("Advanced CSS options. Paste your CSS code and it will override existing code style.", 'maxhost'),
												"id" => "textarea_csscode",
												"std" => "",
												"type" => "textarea"
											),

										)
	);
	
		//section for Social icon url
	$sections[] = array(
					'icon_type' => 'iconfont',
					'icon' => 'group',
					'icon_class' => 'icon-large',
					'title' => esc_html__('Social Media', 'maxhost'),
					'desc' => wp_kses( __('<p class="description">This is options for setting up the social media of website. Do not forget to use http:// for any social urls.</p>', 'maxhost'), $allowed_html_array ),
					'fields' => array(
                                                    array(
																'id' => 'social_facebook',
																'type' => 'text',
																'title' => esc_html__('Facebook URL', 'maxhost'), 
																'sub_desc' => esc_html__('The URL to your account page', 'maxhost'),
																'std' => '',
													),
													
													array(
                                                                'id' => 'social_twitter',
                                                                'type' => 'text',
                                                                'title' => esc_html__('Twitter URL', 'maxhost'),
                                                                'sub_desc' => esc_html__('The URL to your account page', 'maxhost'),
                                                                'std' => '',
                                                    ),
													
													array(
                                                                'id' => 'social_linkedin',
                                                                'type' => 'text',
                                                                'title' => esc_html__('Linkedin URL', 'maxhost'),
                                                                'sub_desc' => esc_html__('The URL to your account page', 'maxhost'),
                                                                'std' => '',
                                                    ),

													array(
																'id' => 'social_googleplus',
																'type' => 'text',
																'title' => esc_html__('GooglePlus URL', 'maxhost'), 
																'sub_desc' => esc_html__('The URL to your account page', 'maxhost'),
																'std' => '',
													),													
													
													array(
																'id' => 'social_flickr',
																'type' => 'text',
																'title' => esc_html__('Flicker URL', 'maxhost'), 
																'sub_desc' => esc_html__('The URL to your account page', 'maxhost'),
																'std' => '',
													),
													
													array(
																'id' => 'social_utube',
																'type' => 'text',
																'title' => esc_html__('YouTube URL', 'maxhost'), 
																'sub_desc' => esc_html__('The URL to your account page', 'maxhost'),
																'std' => '',
													),
							)
				);
		
		//section for top bar
	$sections[] = array(
					'icon_type' => 'iconfont',
					'icon' => 'eye-open',
					'icon_class' => 'icon-large',
					'title' => esc_html__('Top Bar', 'maxhost'),
					'desc' => wp_kses( __('<p class="description">This is options for setting up the top bar of your website.</p>', 'maxhost'), $allowed_html_array ),
					'fields' => array(
                                            array(
												'id' => 'top_bar_section',
												'type' => 'checkbox',
												'title' => esc_html__('Top Bar Section', 'maxhost'),
												'sub_desc' => esc_html__('Show/Hide Top Bar Section.', 'maxhost'),
												'switch' => true,
												'std' => '1' // 1 = checked | 0 = unchecked
											),
											
											array(
												'id' => 'flag_images',
												'type' => 'checkbox',
												'title' => esc_html__('Flag Images for Translated Pages', 'maxhost'),
												'sub_desc' => esc_html__('Show/Hide Flag Images.', 'maxhost'),
												'switch' => true,
												'std' => '1' // 1 = checked | 0 = unchecked
											),
											
											array(
												'id' => 'flag_img1',
												'type' => 'upload',
												'title' => esc_html__('Upload Flag Image - 1', 'maxhost'),
												'sub_desc' => esc_html__('This is flag image for Multilingual service. Upload 16x10 flag image.', 'maxhost'),
											),
											
											array(
												'id' => 'flag_img2',
												'type' => 'upload',
												'title' => esc_html__('Upload Flag Image - 2', 'maxhost'),
												'sub_desc' => esc_html__('This is flag image for Multilingual service. Upload 16x10 flag image.', 'maxhost'),
											),
											
											array(
												'id' => 'flag_img2_url',
												'type' => 'text',
												'title' => esc_html__('The URL of Above Language Translated Page', 'maxhost'), 
												'sub_desc' => '',
												'std' => '',
											),
											
											array(
												'id' => 'flag_img3',
												'type' => 'upload',
												'title' => esc_html__('Upload Flag Image - 3', 'maxhost'),
												'sub_desc' => esc_html__('This is flag image for Multilingual service. Upload 16x10 flag image.', 'maxhost'),
											),
											
											array(
												'id' => 'flag_img3_url',
												'type' => 'text',
												'title' => esc_html__('The URL of Above Language Translated Page', 'maxhost'), 
												'sub_desc' => '',
												'std' => '',
											),
											
											array(
												'id' => 'flag_img4',
												'type' => 'upload',
												'title' => esc_html__('Upload Flag Image - 4', 'maxhost'),
												'sub_desc' => esc_html__('This is flag image for Multilingual service. Upload 16x10 flag image.', 'maxhost'),
											),
											
											array(
												'id' => 'flag_img4_url',
												'type' => 'text',
												'title' => esc_html__('The URL of Above Language Translated Page', 'maxhost'), 
												'sub_desc' => '',
												'std' => '',
											),
											
											array(
												'id' => 'flag_img5',
												'type' => 'upload',
												'title' => esc_html__('Upload Flag Image - 5', 'maxhost'),
												'sub_desc' => esc_html__('This is flag image for Multilingual service. Upload 16x10 flag image.', 'maxhost'),
											),
											
											array(
												'id' => 'flag_img5_url',
												'type' => 'text',
												'title' => esc_html__('The URL of Above Language Translated Page', 'maxhost'), 
												'sub_desc' => '',
												'std' => '',
											),
											
											array(
												'id' => 'login_register',
												'type' => 'checkbox',
												'title' => esc_html__('Login and Register Link', 'maxhost'),
												'sub_desc' => esc_html__('Show/Hide Login and Register Link.', 'maxhost'),
												'switch' => true,
												'std' => '1' // 1 = checked | 0 = unchecked
											),
											
											array(
												'id' => 'cosonix_login',
												'type' => 'text',
												'title' => esc_html__('User Login Page URL', 'maxhost'), 
												'sub_desc' => esc_html__('The URL to user login page. Example: http://yourdomain.com/wp-login.php', 'maxhost'),
												'std' => '',
											),
											
											array(
												'id' => 'cosonix_register',
												'type' => 'text',
												'title' => esc_html__('User Registration Page URL', 'maxhost'), 
												'sub_desc' => esc_html__('The URL to user registration page. Example: http://yourdomain.com/wp-login.php?action=register', 'maxhost'),
												'std' => '',
											),
							)
				);

						
		//section for Footer
					$sections[] = array(
							'icon_type' => 'iconfont',
							'icon' => 'columns',
							'icon_class' => 'icon-large',
							'title' => esc_html__('Footer/Contact', 'maxhost'),
							'desc' => wp_kses( __('<p class="description">This is options for Footer and Contact.</p>', 'maxhost'), $allowed_html_array ),
							'fields' => array(
											
											array(
												'id' => 'footer_styles',
												'type' => 'radio',
												'title' => esc_html__('Website Footer Styles', 'maxhost'), 
												'sub_desc' => esc_html__('Choose a Footer Style for your Website', 'maxhost'),
												'options' => array('1' => 'Footer Style 1', '2' => 'Footer Style 2', '3' => 'Footer Style 3', '4' => 'Footer Style 4', '5' => 'Footer Style 5'), // Must provide key => value pairs for radio options
												'std' => '1'
											),
											
											array(
												'id' => 'hide_footer_column1',
												'type' => 'checkbox',
												'title' => esc_html__('Hide Footer Columns', 'maxhost'), 
												'sub_desc' => esc_html__('Check columns you want to hide from Footer', 'maxhost'),
												'options' => array('1' => 'No Column', '2' => '1st Column', '3' => '2nd Column', '4' => '3rd Column', '5' => '4th Column'), // Must provide key => value pairs for radio options
												'std' => array(
															'1' => '1',
														)
											),
											
											array(
												'id' => 'maxhost_acompany_title',
												'type' => 'text',
												'title' => esc_html__('1st Column - About Company Title', 'maxhost'), 
												'sub_desc' => esc_html__('Enter your 1st Column Title Here.', 'maxhost'),
												'std' => '',
											),
											
											array(
												'id' => 'cosonix_about_info',
												'type' => 'textarea',
												'title' => esc_html__('About Company Text', 'maxhost'),
												'sub_desc' => esc_html__('Enter your company info here. This will be visible in Footer and Contact page.', 'maxhost'),
												'std' => '',
											),
											
											array(
												'id' => 'cosonix_address_info',
												'type' => 'text',
												'title' => esc_html__('Your Company Address', 'maxhost'), 
												'sub_desc' => esc_html__('Enter your company info here. This will be visible in Footer and Contact page.', 'maxhost'),
												'std' => '',
											),
											
											array(
												'id' => 'cosonix_phn_number',
												'type' => 'text',
												'title' => esc_html__('Your Contact Phone Number', 'maxhost'), 
												'sub_desc' => esc_html__('Enter your company info here. This will be visible in Footer and Contact page.', 'maxhost'),
												'std' => '',
											),
											
											array(
												'id' => 'cosonix_email_id',
												'type' => 'text',
												'title' => esc_html__('Your Contact Email ID', 'maxhost'), 
												'sub_desc' => esc_html__('Enter your company info here. This will be visible in Footer and Contact page.', 'maxhost'),
												'std' => '',
											),

											array(
												'id' => 'maxhost_support_ft',
												'type' => 'text',
												'title' => esc_html__('Quick Links Heading - 1', 'maxhost'), 
												'sub_desc' => '',
												'std' => '',
											),
											
											array(
												'id' => 'maxhost_resources_ft',
												'type' => 'text',
												'title' => esc_html__('Quick Links Heading - 2', 'maxhost'), 
												'sub_desc' => '',
												'std' => '',
											),
											
											array(
												'id' => 'maxhost_account_ft',
												'type' => 'text',
												'title' => esc_html__('Quick Links Heading - 3', 'maxhost'), 
												'sub_desc' => '',
												'std' => '',
											),
											
											array(
												'id' => 'maxhost_find_us_ft_show',
												'type' => 'checkbox',
												'title' => esc_html__('Show/Hide Bottom Left Find Us Section', 'maxhost'),
												'sub_desc' => esc_html__('Show/Hide Bottom Left Corner Section of Footer .', 'maxhost'),
												'switch' => true,
												'std' => '1' // 1 = checked | 0 = unchecked
											),
											
											array(
												'id' => 'maxhost_find_us_ft',
												'type' => 'text',
												'title' => esc_html__('Bottom Left Section Title', 'maxhost'), 
												'sub_desc' => '',
												'std' => '',
											),

											array(
												'id' => 'maxhost_find_img_one',
												'type' => 'upload',
												'title' => esc_html__('Upload 1st Image for Bottom Left Section', 'maxhost'),
												'sub_desc' => '',
											),
											
											array(
												'id' => 'maxhost_find_img_one_url',
												'type' => 'text',
												'title' => esc_html__('Link URL of 1st Image for Bottom Left Section', 'maxhost'), 
												'sub_desc' => '',
												'std' => '',
											),
											
											array(
												'id' => 'maxhost_find_img_two',
												'type' => 'upload',
												'title' => esc_html__('Upload 2nd Image for Bottom Left Section', 'maxhost'),
												'sub_desc' => ''
											),
											
											array(
												'id' => 'maxhost_find_img_two_url',
												'type' => 'text',
												'title' => esc_html__('Link URL of 2nd Image for Bottom Left Section', 'maxhost'), 
												'sub_desc' => '',
												'std' => '',
											),
											
											array(
												'id' => 'footer_newsletter',
												'type' => 'checkbox',
												'title' => esc_html__('Show/Hide Newsletter Form', 'maxhost'),
												'sub_desc' => esc_html__('Show/Hide Newsletter Form of Footer .', 'maxhost'),
												'switch' => true,
												'std' => '1' // 1 = checked | 0 = unchecked
											),
											
											array(
												'id' => 'maxhost_newsletter_title',
												'type' => 'text',
												'title' => esc_html__('Newsletter Form Title', 'maxhost'), 
												'sub_desc' => '',
												'std' => 'Sign up for Special Offers!',
											),
											
											array(
												'id' => 'maxhost_newsletter_emailfield',
												'type' => 'text',
												'title' => esc_html__('Newsletter E-mail field Place-holder', 'maxhost'), 
												'sub_desc' => '',
												'std' => 'Enter your E-mail',
											),
											
											array(
												'id' => 'maxhost_newsletter_submit',
												'type' => 'text',
												'title' => esc_html__('Newsletter Submit Button Label', 'maxhost'), 
												'sub_desc' => '',
												'std' => 'Submit',
											),
											
											array(
												'id' => 'maxhost_google_map',
												'type' => 'text',
												'title' => esc_html__('Google Map URL', 'maxhost'), 
												'sub_desc' => 'Input google map embed code here if you want to use google map in the Contact Us page.',
												'std' => '',
											),
											
											array(
												'id' => 'copy_text',
												'type' => 'textarea',
												'title' => esc_html__('Copyright Text', 'maxhost'),
												'sub_desc' => esc_html__('Enter your Copyright text here', 'maxhost'),
												'std' => '',
											),
											
							)
						);
						
		//section for aweber
					$sections[] = array(
							'icon_type' => 'iconfont',
							'icon' => 'cog',
							'icon_class' => 'icon-large',
							'title' => esc_html__('MailChimp/Aweber', 'maxhost'),
							'desc' => wp_kses( __('<p class="description">MailChimp and/or Aweber settings for subscriber forms of Maxhost</p>', 'maxhost'), $allowed_html_array ),
							'fields' => array(

													array(
																'id' => 'mailchimp_apikey',
																'type' => 'text',
																'title' => esc_html__('MailChimp API Key', 'maxhost'), 
																'sub_desc' => esc_html__('The unique API Key of your MailChimp account', 'maxhost'),
																'std' => '',
													),
													array(
																'id' => 'mailchimp_listid',
																'type' => 'text',
																'title' => esc_html__('MailChimp List ID', 'maxhost'), 
																'sub_desc' => esc_html__('The unique List ID of your MailChimp account', 'maxhost'),
																'std' => '',
													),
													array(
																'id' => '123',
																'type' => 'info',
																'desc' => wp_kses( __('<p class="description">If you want to use Aweber instead of MailChimp use the settings below and keep the above MailChimp fields empty.</p>', 'maxhost'), $allowed_html_array )
													),
													array(
																'id' => 'maxhost_shortcodes_aweber_listid',
																'type' => 'text',
																'title' => esc_html__('Aweber List ID', 'maxhost'), 
																'sub_desc' => esc_html__('The unique List ID of Aweber account', 'maxhost'),
																'std' => '',
													),
													array(
																'id' => 'aweber_redirectpage',
																'type' => 'text',
																'title' => esc_html__('Redirect Page URL', 'maxhost'), 
																'sub_desc' => esc_html__('Redirect page url after submission of Aweber form', 'maxhost'),
																'std' => '',
													),
													array(
																'id' => 'aweber_redirectpage_old',
																'type' => 'text',
																'title' => esc_html__('Redirect Page URL for already subscribed users', 'maxhost'), 
																'sub_desc' => esc_html__('Redirect page url for already subscribed users of Aweber', 'maxhost'),
																'std' => '',
													),
							)
						);

		//section for page
					$sections[] = array(
							'icon_type' => 'iconfont',
							'icon' => 'cogs',
							'icon_class' => 'icon-large',
							'title' => esc_html__('Other Settings', 'maxhost'),
							'desc' => wp_kses( __('<p class="description">Other Settings</p>', 'maxhost'), $allowed_html_array ),
							'fields' => array(
																						
											array(
												'id' => 'maxhost_preloader',
												'type' => 'checkbox',
												'title' => esc_html__('On/Off Page Loader GIF', 'maxhost'),
												'sub_desc' => esc_html__('On/Off Page Loader GIF', 'maxhost'),
												'switch' => true,
												'std' => '1' // 1 = checked | 0 = unchecked
											),
											
											array(
												'id' => 'maxhost_smooth_scroll',
												'type' => 'checkbox',
												'title' => esc_html__('On/Off Smooth Scroll', 'maxhost'),
												'sub_desc' => esc_html__('On/Off Smooth Scroll', 'maxhost'),
												'switch' => true,
												'std' => '0' // 1 = checked | 0 = unchecked
											),
											
											array(
												'id' => 'maxhost_tawk_livechat',
												'type' => 'textarea',
												'title' => esc_html__('Your Tawk.To Account Widget Code', 'maxhost'),
												'sub_desc' => esc_html__('Visit twak.to and open a free account there and get your chat widget code and paste the code here', 'maxhost'),
												'std' => '',
											),
											
											array(
												'id' => 'maxhost_woocommerce_sidebar_switch',
												'type' => 'radio',
												'title' => esc_html__('WooCommerce Pages Sidebar', 'maxhost'),
												'options' => array('1' => 'Right Sidebar', '2' => 'Left Sidebar', '3' => 'No Sidebar'), // Must provide key => value pairs for radio options
												'std' => '1'
											),
											
											array(
												'id' => 'maxhost_page_header_img',
												'type' => 'upload',
												'title' => esc_html__('Page Header Background Image', 'maxhost'),
												'sub_desc' => esc_html__('Upload Header Background Image for General Pages and Posts', 'maxhost'),
											),											
											
											array(
												'id' => 'portfolio_columns',
												'type' => 'radio',
												'title' => esc_html__('Portfolio Columns', 'maxhost'),
												'options' => array('4' => 'Four Columns', '3' => 'Three Columns', '2' => 'Two Columns'), // Must provide key => value pairs for radio options
												'std' => '4'
											),
											
											array(
																'id' => 'maxhost_indexpage_title',
																'type' => 'text',
																'title' => esc_html__('Blog Page Title', 'maxhost'), 
																'sub_desc' => esc_html__('Default Title is: Blog Archives', 'maxhost'),
																'std' => '',
													),
													
											array(
																'id' => 'maxhost_indexpage_subtitle',
																'type' => 'text',
																'title' => esc_html__('Blog Page Sub-Title', 'maxhost'), 
																'sub_desc' => esc_html__('Default Sub-Title is: Latest News from Our Blog', 'maxhost'),
																'std' => '',
													),
							)
						);						

                        

	$tabs = array();

		$theme_data = wp_get_theme();
		$item_uri = $theme_data->get('ThemeURI');
		$description = $theme_data->get('Description');
		$author = $theme_data->get('Author');
		$author_uri = $theme_data->get('AuthorURI');
		$version = $theme_data->get('Version');
		$tags = $theme_data->get('Tags');

	
	$item_info = '<div class="redux-opts-section-desc">';
	$item_info .= '<p class="redux-opts-item-data description item-uri">' . wp_kses( __('<strong>Theme URL:</strong> ', 'maxhost'), $allowed_html_array ) . '<a href="' . esc_url( $item_uri ) . '" target="_blank">' . $item_uri . '</a></p>';
	$item_info .= '<p class="redux-opts-item-data description item-author">' . wp_kses( __('<strong>Author:</strong> ', 'maxhost'), $allowed_html_array ) . ($author_uri ? '<a href="' . esc_url( $author_uri ) . '" target="_blank">' . $author . '</a>' : $author) . '</p>';
	$item_info .= '<p class="redux-opts-item-data description item-version">' . wp_kses( __('<strong>Version:</strong> ', 'maxhost'), $allowed_html_array ) . $version . '</p>';
	$item_info .= '<p class="redux-opts-item-data description item-description">' . $description . '</p>';
	$item_info .= '<p class="redux-opts-item-data description item-tags">' . wp_kses( __('<strong>Tags:</strong> ', 'maxhost'), $allowed_html_array ) . implode(', ', $tags) . '</p>';
	$item_info .= '</div>';

	global $Redux_Options;
	$Redux_Options = new Redux_Options($sections, $args, $tabs);
}
add_action('init', 'maxhost_setup_framework_options', 0);