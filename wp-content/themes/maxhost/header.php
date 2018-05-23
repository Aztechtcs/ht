<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<!-- Favicon -->
	<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
    <link rel="shortcut icon" href="<?php echo maxhost_get_option('cosonix_favicon'); ?>">
	<?php } ?>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if(maxhost_get_option('maxhost_preloader') == '1') { ?>
<div class="preloader">
  <div class="preloader_status"></div>
</div>
<?php } ?>
<!-- end page loader -->

<div class="site_wrapper"> 
  
    <!-- COPY START FROM THIS LINE TO PLACE THIS INTO THE HEADER.TPL OF WHMCS Maxhost-alt TEMPLATE -->
	<?php if(maxhost_get_option('header_styles') == '1') { ?>
	<!-- Top header bar -->
	<?php if(maxhost_get_option('top_bar_section') == '1') { ?>
    <div class="header-top">
      <div class="container">
        <div class="row">
			<div class="col-md-6 col-sm-6 no-dis-phone">
            <ul class="social-icons style-two">
              <?php if(maxhost_get_option('social_facebook') != '') { ?>
			  <li><a href="<?php echo esc_url( maxhost_get_option('social_facebook') ); ?>"><i class="fa fa-facebook"></i></a></li>
			  <?php } if(maxhost_get_option('social_twitter') != '') { ?>
			  <li><a href="<?php echo esc_url( maxhost_get_option('social_twitter') ); ?>"><i class="fa fa-twitter"></i></a></li>
			  <?php } if(maxhost_get_option('social_googleplus') != '') { ?>
			  <li><a href="<?php echo esc_url( maxhost_get_option('social_googleplus') ); ?>"><i class="fa fa-google-plus"></i></a></li>
			  <?php } if(maxhost_get_option('social_linkedin') != '') { ?>
			  <li><a href="<?php echo esc_url( maxhost_get_option('social_linkedin') ); ?>"><i class="fa fa-linkedin"></i></a></li>
			  <?php } if(maxhost_get_option('social_flickr') != '') { ?>
			  <li><a href="<?php echo esc_url( maxhost_get_option('social_flickr') ); ?>"><i class="fa fa-flickr"></i></a></li>
			  <?php } if(maxhost_get_option('social_utube') != '') { ?>
			  <li><a href="<?php echo esc_url( maxhost_get_option('social_utube') ); ?>"><i class="fa fa-youtube"></i></a></li>
			  <?php } ?>
            </ul>
			</div>
            <div class="col-md-6 col-sm-6 text-right font-bold">
			  <?php if(maxhost_get_option('cosonix_phn_number') != '') { ?>
			  <i class="fa fa-phone"></i> <a href="tel:<?php echo maxhost_get_option('cosonix_phn_number'); ?>"><?php echo maxhost_get_option('cosonix_phn_number'); ?></a><?php } ?>
			  <?php if(maxhost_get_option('cosonix_email_id') != '') { ?>
			  <span>/</span><a href="mailto:<?php echo maxhost_get_option('cosonix_email_id'); ?>"><?php esc_html_e('Email Us', 'maxhost'); ?></a>
			  <?php } if(maxhost_get_option('cosonix_login') != '') { ?>
			  <span>/</span><a href="<?php echo esc_url( maxhost_get_option('cosonix_login') ); ?>"><?php esc_html_e('Login', 'maxhost'); ?></a>
			  <?php } if(maxhost_get_option('cosonix_register') != '') { ?>
			  <span>/</span><a href="<?php echo esc_url( maxhost_get_option('cosonix_register') ); ?>"><?php esc_html_e('Register', 'maxhost'); ?></a>
			  <?php } ?>
            </div>
        </div>
      </div>
    </div>
	<?php } ?>
    <!-- end top navigation -->
    
    <header class="header whitebg headr-style-1">
    <div class="container">
      <div class="row"> 
        <!-- Menu -->
        <div class="navbar yamm navbar-default">
          <div class="container">
            <div class="navbar-header <?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) : ?>p-i-top2<?php endif; ?>">
              <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
              <?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) : ?>
				<?php maxhost_the_custom_logo(); ?>
			  <?php else: ?>
			  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand logo"></a> 
			  <?php endif; ?>
			</div>
            <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right dark-color nopadding">
              <?php
				if (has_nav_menu('maxhost_primary_menu')) {
                wp_nav_menu( array(
					'theme_location'    => 'maxhost_primary_menu',
					'container'     => 'nav',
					'container_id'      => '',
					'conatiner_class'   => '',
					'menu_class'        => 'nav navbar-nav menu-even', 
					'echo'          => true,
					'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'         => 10, 
					'walker'        => new maxhost_walker_nav_menu
				) );
				}
				?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end Header style 1--> 
  <?php } if(maxhost_get_option('header_styles') == '2') { ?>
	<!-- Top header bar -->
	<?php if(maxhost_get_option('top_bar_section') == '1') { ?>
    <div class="header-top black-bg">
      <div class="container">
        <div class="row">
			<div class="col-md-6 col-sm-6 no-dis-phone">
            <ul class="social-icons style-two">
              <?php if(maxhost_get_option('social_facebook') != '') { ?>
			  <li><a href="<?php echo esc_url( maxhost_get_option('social_facebook') ); ?>"><i class="fa fa-facebook"></i></a></li>
			  <?php } if(maxhost_get_option('social_twitter') != '') { ?>
			  <li><a href="<?php echo esc_url( maxhost_get_option('social_twitter') ); ?>"><i class="fa fa-twitter"></i></a></li>
			  <?php } if(maxhost_get_option('social_googleplus') != '') { ?>
			  <li><a href="<?php echo esc_url( maxhost_get_option('social_googleplus') ); ?>"><i class="fa fa-google-plus"></i></a></li>
			  <?php } if(maxhost_get_option('social_linkedin') != '') { ?>
			  <li><a href="<?php echo esc_url( maxhost_get_option('social_linkedin') ); ?>"><i class="fa fa-linkedin"></i></a></li>
			  <?php } if(maxhost_get_option('social_flickr') != '') { ?>
			  <li><a href="<?php echo esc_url( maxhost_get_option('social_flickr') ); ?>"><i class="fa fa-flickr"></i></a></li>
			  <?php } if(maxhost_get_option('social_utube') != '') { ?>
			  <li><a href="<?php echo esc_url( maxhost_get_option('social_utube') ); ?>"><i class="fa fa-youtube"></i></a></li>
			  <?php } ?>
            </ul>
			</div>
            <div class="col-md-6 col-sm-6 text-right">
			  <?php if(maxhost_get_option('cosonix_phn_number') != '') { ?>
			  <i class="fa fa-phone"></i> <a href="tel:<?php echo maxhost_get_option('cosonix_phn_number'); ?>"><?php echo maxhost_get_option('cosonix_phn_number'); ?></a>
			  <?php } if(maxhost_get_option('cosonix_email_id') != '') { ?>
			  <span>/</span><a href="mailto:<?php echo maxhost_get_option('cosonix_email_id'); ?>"><?php esc_html_e('Email Us', 'maxhost'); ?></a>
			  <?php } if(maxhost_get_option('cosonix_login') != '') { ?>
			  <span>/</span><a href="<?php echo esc_url( maxhost_get_option('cosonix_login') ); ?>"><?php esc_html_e('Login', 'maxhost'); ?></a>
			  <?php } if(maxhost_get_option('cosonix_register') != '') { ?>
			  <span>/</span><a href="<?php echo esc_url( maxhost_get_option('cosonix_register') ); ?>"><?php esc_html_e('Register', 'maxhost'); ?></a>
			  <?php } ?>
            </div>
        </div>
      </div>
    </div>
	<?php } ?>
    <!-- end top navigation -->
    
    <header class="header bg-texture headr-style-1 font-white">
    <div class="container">
      <div class="row"> 
        <!-- Menu -->
        <div class="navbar yamm navbar-default">
          <div class="container">
            <div class="navbar-header <?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) : ?>p-i-top2<?php endif; ?>">
              <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
              <?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) : ?>
				<?php maxhost_the_custom_logo(); ?>
			  <?php else: ?>
			  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand logo logo-white"></a> 
			  <?php endif; ?>
			</div>
            <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right dark-color nopadding">
              <?php
				if (has_nav_menu('maxhost_primary_menu')) {
                wp_nav_menu( array(
					'theme_location'    => 'maxhost_primary_menu',
					'container'     => 'nav',
					'container_id'      => '',
					'conatiner_class'   => '',
					'menu_class'        => 'nav navbar-nav menu-even', 
					'echo'          => true,
					'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'         => 10, 
					'walker'        => new maxhost_walker_nav_menu
				) );
				}
				?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end Header style 2-->
  <?php } if(maxhost_get_option('header_styles') == '3') { ?>
  <?php if(maxhost_get_option('top_bar_section') == '1') { ?>
  <div class="header-top header-top-home3 bg-color-plain">
    <div class="container">
      <div class="col-md-6 col-sm-6 nopadding no-dis-phone">
		<?php if(maxhost_get_option('flag_images') == '1') { ?>
        <div class="btn-group" role="group" aria-label="...">
          <div class="btn-group" role="group">
            <button type="button" class="c-lang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php if(maxhost_get_option('flag_img1') != '') { ?><img src="<?php echo maxhost_get_option('flag_img1'); ?>" alt=""><?php } else { ?><img src="<?php echo esc_url( get_template_directory_uri() ).'/images/'; ?>flag.jpg" alt=""><?php } ?> <i class="fa fa-angle-down"></i> </button>
            <span>/</span>
            <ul class="dropdown-menu c-lang-box">
			  <?php if(maxhost_get_option('flag_img2') != '') { ?>
              <li><?php if(maxhost_get_option('flag_img2') != '') { ?><a href="<?php echo esc_url( maxhost_get_option('flag_img2_url') ); ?>"><img src="<?php echo maxhost_get_option('flag_img2'); ?>" alt=""></a><?php } else { ?><a href=""><img src="<?php echo esc_url( get_template_directory_uri() ).'/images/'; ?>flag1.jpg" alt=""></a><?php } ?></li>
			  <?php } if(maxhost_get_option('flag_img3') != '') { ?>
              <li><?php if(maxhost_get_option('flag_img3') != '') { ?><a href="<?php echo esc_url( maxhost_get_option('flag_img3_url') ); ?>"><img src="<?php echo maxhost_get_option('flag_img3'); ?>" alt=""></a><?php } else { ?><a href=""><img src="<?php echo esc_url( get_template_directory_uri() ).'/images/'; ?>flag2.jpg" alt=""></a><?php } ?>
				</li>
			  <?php } if(maxhost_get_option('flag_img4') != '') { ?>
              <li><?php if(maxhost_get_option('flag_img4') != '') { ?><a href="<?php echo esc_url( maxhost_get_option('flag_img4_url') ); ?>"><img src="<?php echo maxhost_get_option('flag_img4'); ?>" alt=""></a><?php } else { ?><a href=""><img src="<?php echo esc_url( get_template_directory_uri() ).'/images/'; ?>flag3.jpg" alt=""></a><?php } ?>
				</li>
			  <?php } if(maxhost_get_option('flag_img5') != '') { ?>
              <li><?php if(maxhost_get_option('flag_img5') != '') { ?><a href="<?php echo esc_url( maxhost_get_option('flag_img5_url') ); ?>"><img src="<?php echo maxhost_get_option('flag_img5'); ?>" alt="" class="last"></a><?php } else { ?><a href=""><img src="<?php echo esc_url( get_template_directory_uri() ).'/images/'; ?>flag4.jpg" alt="" class="last"></a><?php } ?>
				</li>
			  <?php } ?>
            </ul>
          </div>
        </div>
		<?php } ?>
        <small><?php esc_html_e('Welcome Guest!', 'maxhost'); ?></small> </div>
      <div class="col-md-6 col-sm-6 nopadding text-right font-bold"> <?php if(maxhost_get_option('cosonix_phn_number') != '') { ?>
			  <i class="fa fa-phone"></i> <a href="tel:<?php echo maxhost_get_option('cosonix_phn_number'); ?>"><?php echo maxhost_get_option('cosonix_phn_number'); ?></a>
			  <?php } if(maxhost_get_option('cosonix_email_id') != '') { ?>
			  <span>/</span><a href="mailto:<?php echo maxhost_get_option('cosonix_email_id'); ?>"><?php esc_html_e('Email Us', 'maxhost'); ?></a>
			  <?php } if(maxhost_get_option('cosonix_login') != '') { ?>
			  <span>/</span><a href="<?php echo esc_url( maxhost_get_option('cosonix_login') ); ?>"><?php esc_html_e('Login', 'maxhost'); ?></a>
			  <?php } if(maxhost_get_option('cosonix_register') != '') { ?>
			  <span>/</span><a href="<?php echo esc_url( maxhost_get_option('cosonix_register') ); ?>"><?php esc_html_e('Register', 'maxhost'); ?></a>
			  <?php } ?>
			  </div>
    </div>
  </div>
  <?php } ?>
  <header class="header whitebg headr-style-1">
    <div class="container">
      <div class="row"> 
        <!-- Menu -->
        <div class="navbar yamm navbar-default">
          <div class="container">
            <div class="navbar-header <?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) : ?>p-i-top2<?php endif; ?>">
              <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
              <?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) : ?>
				<?php maxhost_the_custom_logo(); ?>
			  <?php else: ?>
			  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand logo"></a> 
			  <?php endif; ?>
			</div>
            <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right dark-color nopadding">
              <?php
				if (has_nav_menu('maxhost_primary_menu')) {
                wp_nav_menu( array(
					'theme_location'    => 'maxhost_primary_menu',
					'container'     => 'nav',
					'container_id'      => '',
					'conatiner_class'   => '',
					'menu_class'        => 'nav navbar-nav menu-even', 
					'echo'          => true,
					'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'         => 10, 
					'walker'        => new maxhost_walker_nav_menu
				) );
				}
				?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end Header style 3-->
  <?php } if(maxhost_get_option('header_styles') == '4') { ?>
  <?php if(maxhost_get_option('top_bar_section') == '1') { ?>
  <div class="header-top black-bg">
    <div class="container">
      <div class="col-md-6 col-sm-6 nopadding no-dis-phone">
		<?php if(maxhost_get_option('flag_images') == '1') { ?>
        <div class="btn-group" role="group" aria-label="...">
          <div class="btn-group" role="group">
            <button type="button" class="c-lang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php if(maxhost_get_option('flag_img1') != '') { ?><img src="<?php echo maxhost_get_option('flag_img1'); ?>" alt=""><?php } else { ?><img src="<?php echo esc_url( get_template_directory_uri() ).'/images/'; ?>flag.jpg" alt=""><?php } ?> <i class="fa fa-angle-down"></i> </button>
            <span>/</span>
            <ul class="dropdown-menu c-lang-box">
			  <?php if(maxhost_get_option('flag_img2') != '') { ?>
              <li><?php if(maxhost_get_option('flag_img2') != '') { ?><a href="<?php echo esc_url( maxhost_get_option('flag_img2_url') ); ?>"><img src="<?php echo maxhost_get_option('flag_img2'); ?>" alt=""></a><?php } else { ?><a href=""><img src="<?php echo esc_url( get_template_directory_uri() ).'/images/'; ?>flag1.jpg" alt=""></a><?php } ?></li>
			  <?php } if(maxhost_get_option('flag_img3') != '') { ?>
              <li><?php if(maxhost_get_option('flag_img3') != '') { ?><a href="<?php echo esc_url( maxhost_get_option('flag_img3_url') ); ?>"><img src="<?php echo maxhost_get_option('flag_img3'); ?>" alt=""></a><?php } else { ?><a href=""><img src="<?php echo esc_url( get_template_directory_uri() ).'/images/'; ?>flag2.jpg" alt=""></a><?php } ?>
				</li>
			  <?php } if(maxhost_get_option('flag_img4') != '') { ?>
              <li><?php if(maxhost_get_option('flag_img4') != '') { ?><a href="<?php echo esc_url( maxhost_get_option('flag_img4_url') ); ?>"><img src="<?php echo maxhost_get_option('flag_img4'); ?>" alt=""></a><?php } else { ?><a href=""><img src="<?php echo esc_url( get_template_directory_uri() ).'/images/'; ?>flag3.jpg" alt=""></a><?php } ?>
				</li>
			  <?php } if(maxhost_get_option('flag_img5') != '') { ?>
              <li><?php if(maxhost_get_option('flag_img5') != '') { ?><a href="<?php echo esc_url( maxhost_get_option('flag_img5_url') ); ?>"><img src="<?php echo maxhost_get_option('flag_img5'); ?>" alt="" class="last"></a><?php } else { ?><a href=""><img src="<?php echo esc_url( get_template_directory_uri() ).'/images/'; ?>flag4.jpg" alt="" class="last"></a><?php } ?>
				</li>
			  <?php } ?>
            </ul>
          </div>
        </div>
		<?php } ?>
        <small><?php esc_html_e('Welcome Guest!', 'maxhost'); ?></small> </div>
      <div class="col-md-6 col-sm-6 nopadding text-right"> <?php if(maxhost_get_option('cosonix_phn_number') != '') { ?>
			  <i class="fa fa-phone"></i> <a href="tel:<?php echo maxhost_get_option('cosonix_phn_number'); ?>"><?php echo maxhost_get_option('cosonix_phn_number'); ?></a>
			  <?php } if(maxhost_get_option('cosonix_email_id') != '') { ?>
			  <span>/</span><a href="mailto:<?php echo maxhost_get_option('cosonix_email_id'); ?>"><?php esc_html_e('Email Us', 'maxhost'); ?></a>
			  <?php } if(maxhost_get_option('cosonix_login') != '') { ?>
			  <span>/</span><a href="<?php echo esc_url( maxhost_get_option('cosonix_login') ); ?>"><?php esc_html_e('Login', 'maxhost'); ?></a>
			  <?php } if(maxhost_get_option('cosonix_register') != '') { ?>
			  <span>/</span><a href="<?php echo esc_url( maxhost_get_option('cosonix_register') ); ?>"><?php esc_html_e('Register', 'maxhost'); ?></a>
			  <?php } ?>
			  </div>
    </div>
  </div>
  <?php } ?>
  <header class="header headr-style font-white">
    <div class="container">
      <div class="row"> 
        <!-- Menu -->
        <div class="navbar yamm navbar-default">
          <div class="container">
            <div class="navbar-header <?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) : ?>p-i-top2<?php endif; ?>">
              <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
              <?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) : ?>
				<?php maxhost_the_custom_logo(); ?>
			  <?php else: ?>
			  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand logo logo-white"></a> 
			  <?php endif; ?>
			</div>
            <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right dark-color nopadding">
              <?php
				if (has_nav_menu('maxhost_primary_menu')) {
                wp_nav_menu( array(
					'theme_location'    => 'maxhost_primary_menu',
					'container'     => 'nav',
					'container_id'      => '',
					'conatiner_class'   => '',
					'menu_class'        => 'nav navbar-nav menu-even', 
					'echo'          => true,
					'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'         => 10, 
					'walker'        => new maxhost_walker_nav_menu
				) );
				}
				?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- end Header style 4-->
  <!-- COPY END TILL THIS LINE TO PLACE THIS INTO THE HEADER.TPL OF WHMCS Maxhost-alt TEMPLATE -->
  <?php } ?>