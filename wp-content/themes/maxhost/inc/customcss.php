<?php
function maxhost_styles_custom() {
?>

<!-- Custom CSS Codes
========================================================= -->
<?php
	// **********************************************************************// 
// ! Customizing number of columns in shop page
// **********************************************************************//
	if(maxhost_get_option('maxhost_woocommerce_sidebar_switch') != '3') {
	add_filter( 'loop_shop_columns', 'wc_loop_shop_columns', 1, 10 );
	/*
	* Return a new number of maximum columns for shop archives
	* @param int Original value
	* @return int New number of columns
	*/
	function wc_loop_shop_columns( $number_columns ) {
	return 3;
	}
	} else {
	add_filter( 'loop_shop_columns', 'wc_loop_shop_columns', 1, 10 );
	/*
	* Return a new number of maximum columns for shop archives
	* @param int Original value
	* @return int New number of columns
	*/
	function wc_loop_shop_columns( $number_columns ) {
	return 4;
	}
	}
	?>
<style id="custom-style">
	<?php if(maxhost_get_option('maxhost_tawk_livechat') != '') { ?>
	.scrollup{bottom:52px;}
	<?php } ?>
	/* Logo ------------------------------------------------------------------------ */
	<?php if(maxhost_get_option('logo_url') != '') { ?>
	.navbar-brand.logo {
	background: url(<?php echo esc_url( maxhost_get_option('logo_url') ); ?>) no-repeat scroll left 21px !important;
	}
	<?php } if ( is_admin_bar_showing() ) { ?>
	.compact .header {
	top:32px;
	}
	<?php } ?>
	<?php if (maxhost_get_option('maxhost_site_width') == '1') { ?>
	.site_wrapper {
	background:#FFF;
	margin:auto;
	width:1170px;
	overflow:visible;
	}
	ul.social-icons.style-two, .navbar-header, footer .container .row, footer .container .nopadding, .copyrights .container .row{
	padding-left: 15px !important;
	}
	.navbar-collapse{
	padding-right: 15px !important;
	}
	.col-md-6.col-sm-6.text-right.font-bold{
	padding-right: 30px !important;
	}
	footer{
	margin-top: 0 !important;
	}
	<?php } else { ?>
	.site_wrapper {
	background:#FFF;
	margin:auto;
	width:100%;
	overflow:hidden;
	}
	<?php } if(maxhost_get_option('header_styles') == '4') { ?>
	.header {
    background-color: #000;
    height: auto;
    top: 0;
	}
	<?php } // **********************************************************************// 
// ! Customizing number of columns in shop page
// **********************************************************************// ?>
	<?php if(maxhost_get_option('maxhost_woocommerce_sidebar_switch') != '3') { ?>
	.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{
	width: 30%;
	margin: 0 3% 2.992em 0;
	}
	 @media only screen and (max-width: 639px) {
	 .woocommerce ul.products li.product, .woocommerce-page ul.products li.product{
	width: 100%;
	margin: auto;
	}
	 }
	<?php } ?>
	<?php if ( (get_the_title()=='Markup: HTML Tags and Formatting') || (get_the_title()=='Template: Comments') || (get_the_title()=='Edge Case: Nested And Mixed Lists') || (get_the_title()=='Page Markup And Formatting') ) { ?>
	ul, ol{
	padding-left: 30px;
	}
	ul li{
	list-style-type: disc;
	}
	ul li ul{
	list-style-type: square;
	}
	ul li ul li{
	list-style-type: circle;
	}
	ul li ol li{
	list-style-type: decimal;
	}
	ul li ol li ul li{
	list-style-type: disc;
	}
	ol li ul li ol li{
	list-style-type: decimal;
	}
	ol{
	list-style-type: decimal !important;
	}
	ol li{
	list-style-type: decimal !important;
	}
	.top_nav ul.right-nav li{
	list-style-type: none !important;
	}
	.navbar ul.social_icons li{
	list-style-type: none !important;
	}
	.bl_pagenation_holder ul.page-numbers li{
	list-style-type: none !important;
	}
	#comments ul li, #comments ul li ul li{
	list-style-type: none !important;
	}
	.yamm-content ul li, .dropdown ul li{
	list-style-type: none !important;
	}
	footer ul li {
    list-style-type: none !important;
	}
	dt{font-weight: bold;}
	dd{padding-left: 30px;}
	dd a{color: #272727;}
	dd a:hover{color: #119EE7;}
	.maxhost_sidebar ul li{
	list-style-type: none !important;
	}
	h1{
	font-size: 36px;
    padding-top: 10px;
	padding-bottom: 5px;
	}
	h2{
	font-size: 33px;
    padding-top: 10px;
	padding-bottom: 5px;
	}
	h3{
	font-size: 29px;
    padding-top: 10px;
	padding-bottom: 5px;
	}
	h4{
	font-size: 26px;
    padding-top: 10px;
	padding-bottom: 5px;
	}
	h5{
	font-size: 23px;
    padding-top: 10px;
	padding-bottom: 5px;
	}
	h6{
	font-size: 20px;
    padding-bottom: 10px;
	padding-bottom: 5px;
	}
	.maxhost_sidebar h4{
	padding: 0;
	font-size: 16px;
	}
	<?php } ?>
	<?php if (get_the_title()=='Page Image Alignment') { ?>
	.wp-caption.aligncenter{
	margin-top:60px;
	}
	<?php } ?>
	
	<?php // **********************************************************************// 
	// ! Adding options to hide desired columns from footer
	// **********************************************************************// ?>
	<?php if(maxhost_get_option('hide_footer_column1') == '2') { ?>
	.footer-bg .fcol1.col-md-3.m-top5{
		visibility: hidden;
	}​

	<?php } if(maxhost_get_option('hide_footer_column1') == '3') { ?>
	.footer-bg .fcol2.col-md-3.m-top5{
		visibility: hidden;
	}​

	<?php } if(maxhost_get_option('hide_footer_column1') == '4') { ?>
	.footer-bg .fcol3.col-md-3.m-top5{
		visibility: hidden;
	}​

	<?php } if(maxhost_get_option('hide_footer_column1') == '5') { ?>
	.footer-bg .fcol4.col-md-3.m-top5{
		visibility: hidden;
	}​
	<?php } ?>
	<?php // **********************************************************************// 
	// ! Customizing Global color of the theme
	// **********************************************************************// ?>
	<?php if(maxhost_get_option('custom_color') != '') { //Global color start ?>
		.list-unstyled a:hover, .dropdown-menu>li>a:hover, .font-color, .iconbox, .navbar-default .navbar-nav > li > a:focus, .navbar-default .navbar-nav > li > a:hover,
	.icon-boxed.wide90, .view-links a, .sky-form a, .sky-form .checkbox input + i::after,
	.section-lg.m-top5.m-bottom5 .available, .section-lg.m-top0.domain-search.white-bg .available{
		color:<?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.fea-col-box.active, .ms-layer.btn3, .orange-button, .fea-col:hover .iconbox, .iconbox:hover, .iconbox.active, .orange-button.one, .title-line, .blue-button,
	.fea-sce-col:hover .icon-boxed, .fea-sce-col.active .icon-boxed, .carousel-indicators .active, .small-circle-no, .orange-button.two, ul.social-icons li a:hover,
	.pricing-box.style-1 div.price, .samll-grey-button:hover, .pricing-box.style-1:hover .samll-grey-button, .pricing-box.style-1.active .samll-grey-button, .sky-form .button.seven, .header-top.black-bg-light a.register-btn, .button a.boxed-color-sm.orange, .button a.boxed-color-xs.orange, .sec-col-left h2 span, .sec-col-right h2 span, .color-bg, .service-title-color, form .submit-btn, .header.headr-style-2 .navbar-default, .compact .header.olivebg, h2.bg-color span, .team-thumb:hover .team-col .team-overlay, .team-thumb.active .team-col .team-overlay, .sky-form .button, .sec-title h2::before, .fea-col-box:hover, .tab-style .nav-tabs > li.active > a, .tab-style .nav-tabs > li.active > a:focus, .tab-style .nav-tabs > li.active > a:hover, .tab-style .nav-tabs > li > a:hover, .new-domin-list li,
	.carousel-indicators .active, .carousel-indicators.white-color .active, .price-info-circle, .pricing-box-home2 h2, .pricing-box-home2 .order,
	.collaps-style-2 .panel-default > .panel-heading, .bg-color-plain, .tab-style-1 .nav-tabs > li.active > a, .tab-style-1 .nav-tabs > li.active > a:focus, .tab-style-1 .nav-tabs > li.active > a:hover, .tab-style-1 .nav-tabs > li > a:hover, .small-circle-commet, .pricing-box-home5 h2, .pricing-box-home5:hover .price, .pricing-box-home5.active .price, .pricing-box-home5:hover .order-now, .pricing-box-home5.active .order-now, .two-color-boxes-multi{
		background:<?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.orange-button, .blue-button, .samll-grey-button:hover, .pricing-box.style-1:hover .samll-grey-button, .pricing-box.style-1.active .samll-grey-button, .col-fea-box-white::before{
		border:solid 1px <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.domain-search {
		background:<?php echo esc_html( maxhost_get_option('custom_color') ); ?> url(../../images/clouds-white.png) repeat-x center bottom;
	}
	.service-title {
		background: <?php echo esc_html( maxhost_get_option('custom_color') ); ?> url(../../images/clouds-white-small.png) no-repeat scroll left bottom;
	}
	.sky-form .radio input:checked + i, .sky-form .checkbox input:checked + i, .sky-form .toggle input:checked + i{
		border-color:<?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}

	.button-shop {
		background: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
		border: 1px solid <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
		color: #fff;
	}

	.button-shop:hover {
		background: #222;
		color: #fff;
		border: 1px solid #222;
	}

	.dlink, .zoom {
	  color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?> !important;
	}

	.dlink:hover, .zoom:hover {
	  color: #fff !important;
	  background-color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?> !important;
	}

	.products .product .onsale {
	  background: <?php echo esc_html( maxhost_get_option('custom_color') ); ?> !important;
	}

	.pagination-button {
	  padding: 10px !important;
	  color: #fff !important;
	  background-color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	  border: none;
	}

	.amount {
		color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?> !important;
	}

	.star-rating span {
	  color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?> !important;
	}

	.shop-page .list ul li:before {
	  position: relative;
		top: 0;
		left: 0;
		content: "\f0da";
		font-family: 'FontAwesome';
		font-size: 14px;
		color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
		margin-right: 10px;
		font-style: normal;
		font-weight: normal;
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
	}


	/* scroll up */
	.scrollup {
		background: <?php echo esc_html( maxhost_get_option('custom_color') ); ?> url(<?php bloginfo('template_url'); ?>/images/scroll-top-arrow.png) no-repeat 15px 14px;
	}
	/* Shop */
	.pagination-custom .pagination-button:hover {
		background-color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
		border-color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.product_meta > span > a,
	.single-prodcut .tabs .nav-tabs > li.active > a, 
	.tabbed-widget .tabs .nav-tabs > li.active > a,
	.shop-with-sidebar .widget .title > a,
	.shopping-cart .cart-table tbody > tr > td > a,
	.shop-checkout .cart-table a,
	.shop-checkout .panel-group .panel-body label span,
	.page-shop-login label span {
		color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.single-prodcut .tabs .nav-tabs > li.active > a:after,
	.tabbed-widget .tabs .nav-tabs > li.active > a:after
	.shop-checkout .panel-group .panel-title > a, .features_table_new .table-list3 th {
		background-color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.woocommerce-message .button.wc-forward{
		background: <?php echo esc_html( maxhost_get_option('custom_color') ); ?> none repeat scroll 0 0;
	}
	.summary.entry-summary ul li:before, .woocommerce-tabs.wc-tabs-wrapper ul li:before {
		color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.woocommerce div.product form.cart .button, .coupon input.button, .checkout_coupon input.button, .login input.button, .login input.button:hover,
	.cart .actions input.button, .woocommerce div.product form.cart .button:hover, .coupon input.button:hover, .checkout_coupon input.button:hover,
	.cart .actions input.button:hover, #review_form footer button, .woocommerce-tabs ul.tabs li.active, .woocommerce-tabs ul.tabs li:hover,
	.woocommerce .product ul.tabs li.active a, .woocommerce .product ul.tabs li:hover a, .tags li a:hover, .tagcloud a:hover{
		background-color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.pagination-button {
	  background-color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.dlink, .zoom {
	  color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?> !important;
	}
	.dlink:hover, .zoom:hover {
	  background-color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?> !important;
	}
	.products .product .onsale {
	  background: <?php echo esc_html( maxhost_get_option('custom_color') ); ?> !important;
	}
	.amount {
	  color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?> !important;
	}
	.star-rating span {
	  color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?> !important;
	}
	.list ul li:before {
		color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.product_meta > span > a {
	  color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.button-shop {
		background: <?php echo esc_html( maxhost_get_option('custom_color') ); ?> none repeat scroll 0 0;
		border: 1px solid <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.pagination-custom .pagination-button:hover {
		background-color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
		border-color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.shop-with-sidebar .widget .title > a {
		color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.single-prodcut .tabs .nav-tabs > li.active > a:after,
	.tabbed-widget .tabs .nav-tabs > li.active > a:after {
	  background: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.single-prodcut .tabs .nav-tabs > li.active > a,
	.tabbed-widget .tabs .nav-tabs > li.active > a {
	  color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.shopping-cart .cart-table tbody > tr > td > a {
		color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.shop-checkout .panel-group .panel-title > a  {
		background-color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.shop-checkout .cart-table a {
		color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.shop-checkout .panel-group .panel-body label span {
		color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.page-shop-login label span {
		color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?>;
	}
	.woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle {
		background-color: <?php echo esc_html( maxhost_get_option('custom_color') ); ?> !important;
	}
	<?php } ?>
	<?php echo maxhost_get_option('textarea_csscode'); //Load Custom CSS from Theme-Options ?>
	
</style>
<?php if(maxhost_get_option('maxhost_site_width') == '1') { ?>
<?php if(maxhost_get_option('maxhost_bg_Pattern') == '1') { ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css'; ?>/bg-patterns/pattern-default.css" />
<?php } if(maxhost_get_option('maxhost_bg_Pattern') == '2') { ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css'; ?>/bg-patterns/pattern-one.css" />
<?php } if(maxhost_get_option('maxhost_bg_Pattern') == '3') { ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css'; ?>/bg-patterns/pattern-two.css" />
<?php } if(maxhost_get_option('maxhost_bg_Pattern') == '4') { ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css'; ?>/bg-patterns/pattern-three.css" />
<?php } if(maxhost_get_option('maxhost_bg_Pattern') == '5') { ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css'; ?>/bg-patterns/pattern-four.css" />
<?php } if(maxhost_get_option('maxhost_bg_Pattern') == '6') { ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css'; ?>/bg-patterns/pattern-five.css" />
<?php } if(maxhost_get_option('maxhost_bg_Pattern') == '7') { ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css'; ?>/bg-patterns/pattern-six.css" />
<?php } if(maxhost_get_option('maxhost_bg_Pattern') == '8') { ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css'; ?>/bg-patterns/pattern-seven.css" />
<?php } if(maxhost_get_option('maxhost_bg_Pattern') == '9') { ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css'; ?>/bg-patterns/pattern-eight.css" />
<?php } if(maxhost_get_option('maxhost_bg_Pattern') == '10') { ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css'; ?>/bg-patterns/pattern-nine.css" />
<?php } if(maxhost_get_option('maxhost_bg_Pattern') == '11') { ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css'; ?>/bg-patterns/pattern-ten.css" />
<?php } if(maxhost_get_option('maxhost_bg_Pattern') == '12') { ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css'; ?>/bg-patterns/pattern-eleven.css" />
<?php } if(maxhost_get_option('maxhost_bg_Pattern') == '13') { ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css'; ?>/bg-patterns/pattern-twelve.css" />
<?php } }?>
<?php }
add_action( 'wp_head', 'maxhost_styles_custom', 100 );
?>