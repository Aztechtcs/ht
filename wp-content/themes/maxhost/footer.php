<!-- COPY START FROM THIS LINE TO PLACE THIS INTO THE FOOTER.TPL OF WHMCS Maxhost-alt TEMPLATE -->
<?php
if( !defined('MAXHOST_CONTACT_PATH') )
	define( 'MAXHOST_CONTACT_PATH', get_template_directory_uri() . '/subscribe/' );
?>
<footer class="<?php if(maxhost_get_option('footer_styles') == '1') { ?>footer-bg m-top4
<?php } if(maxhost_get_option('footer_styles') == '2') { ?>footer-bg home2 m-top3
<?php } if(maxhost_get_option('footer_styles') == '3') { ?>footer-bg home3 m-top7
<?php } if(maxhost_get_option('footer_styles') == '4') { ?>footer-bg style-white-bg m-top3
<?php } if(maxhost_get_option('footer_styles') == '5') { ?>footer-bg texture1 m-top5<?php } ?>">
    <div class="container">
      <div class="row">
        <div class="fcol1 col-md-3 col-sm-12 m-top5 <?php if( (maxhost_get_option('footer_styles') == '1') || (maxhost_get_option('footer_styles') == '2') || (maxhost_get_option('footer_styles') == '3')) { ?>font-white<?php } if( maxhost_get_option('footer_styles') == '5' ) { ?>font-grey<?php } ?>">
          <h4 class="font16 font-thin uppercase <?php if( maxhost_get_option('footer_styles') == '5' ) { ?>font-white<?php } ?>"><?php if(maxhost_get_option('maxhost_acompany_title') != '') { ?><?php echo maxhost_get_option('maxhost_acompany_title'); ?><?php } else { ?><?php esc_html_e('About Company', 'maxhost'); ?><?php } ?></h4>
          <div class="title-line color"></div>
          <p class="m-bottom3"><?php echo maxhost_get_option('cosonix_about_info'); ?></p>
          <ul class="address-info listitems">
			<?php if(maxhost_get_option('cosonix_address_info') != '') { ?>
            <li><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo maxhost_get_option('cosonix_address_info'); ?></li>
			<?php } if(maxhost_get_option('cosonix_phn_number') != '') { ?>
            <li><i class="fa fa-phone"></i>&nbsp;&nbsp;<?php echo maxhost_get_option('cosonix_phn_number'); ?></li>
			<?php } if(maxhost_get_option('cosonix_email_id') != '') { ?>
            <li><i class="fa fa-envelope"></i>&nbsp;&nbsp;<?php echo maxhost_get_option('cosonix_email_id'); ?></li>
			<?php } ?>
          </ul>
        </div>
		
        <div class="fcol2 col-md-3 col-sm-12 m-top5 <?php if( (maxhost_get_option('footer_styles') == '1') || (maxhost_get_option('footer_styles') == '2') || (maxhost_get_option('footer_styles') == '3')) { ?>font-white<?php } if( maxhost_get_option('footer_styles') == '5' ) { ?>font-grey<?php } ?>">
          <h4 class="font16 font-thin uppercase <?php if( maxhost_get_option('footer_styles') == '5' ) { ?>font-white<?php } ?>"><?php if(maxhost_get_option('maxhost_support_ft') != '') { ?><?php echo maxhost_get_option('maxhost_support_ft'); ?><?php } else { ?><?php esc_html_e('Support', 'maxhost'); ?><?php } ?></h4>
          <div class="title-line color"></div>
          <ul class="<?php if(maxhost_get_option('footer_styles') != '4') { ?>listitems<?php } ?> left-padd0">
            <?php
			if (has_nav_menu('maxhost_menu_footer_one')) {
				wp_nav_menu(array(
				'theme_location' 	=>'maxhost_menu_footer_one', 'container' => '', 'items_wrap' => '%3$s', 'before' => '<i class="fa fa-angle-right"></i>&nbsp;',
				));
			}
			?>
          </ul>
        </div>
        <div class="fcol3 col-md-3 col-sm-12 m-top5 <?php if( (maxhost_get_option('footer_styles') == '1') || (maxhost_get_option('footer_styles') == '2') || (maxhost_get_option('footer_styles') == '3')) { ?>font-white<?php } if( maxhost_get_option('footer_styles') == '5' ) { ?>font-grey<?php } ?>">
          <h4 class="font16 font-thin uppercase <?php if( maxhost_get_option('footer_styles') == '5' ) { ?>font-white<?php } ?>"><?php if(maxhost_get_option('maxhost_resources_ft') != '') { ?><?php echo maxhost_get_option('maxhost_resources_ft'); ?><?php } else { ?><?php esc_html_e('Resources', 'maxhost'); ?><?php } ?></h4>
          <div class="title-line color"></div>
          <ul class="<?php if(maxhost_get_option('footer_styles') != '4') { ?>listitems<?php } ?> left-padd0">
            <?php
			if (has_nav_menu('maxhost_menu_footer_two')) {
				wp_nav_menu(array(
				'theme_location' 	=>'maxhost_menu_footer_two', 'container' => '', 'items_wrap' => '%3$s', 'before' => '<i class="fa fa-angle-right"></i>&nbsp;',
				));
			}
			?>
          </ul>
        </div>
        <div class="fcol4 col-md-3 col-sm-12 m-top5 <?php if( (maxhost_get_option('footer_styles') == '1') || (maxhost_get_option('footer_styles') == '2') || (maxhost_get_option('footer_styles') == '3')) { ?>font-white<?php } if( maxhost_get_option('footer_styles') == '5' ) { ?>font-grey<?php } ?>">
          <h4 class="font16 font-thin uppercase <?php if( maxhost_get_option('footer_styles') == '5' ) { ?>font-white<?php } ?>"><?php if(maxhost_get_option('maxhost_account_ft') != '') { ?><?php echo maxhost_get_option('maxhost_account_ft'); ?><?php } else { ?><?php esc_html_e('Account', 'maxhost'); ?><?php } ?></h4>
          <div class="title-line color"></div>
          <ul class="<?php if(maxhost_get_option('footer_styles') != '4') { ?>listitems<?php } ?> left-padd0">
            <?php
			if (has_nav_menu('maxhost_menu_footer_three')) {
				wp_nav_menu(array(
				'theme_location' 	=>'maxhost_menu_footer_three', 'container' => '', 'items_wrap' => '%3$s', 'before' => '<i class="fa fa-angle-right"></i>&nbsp;',
				));
			}
			?>
          </ul>
        </div>
      </div>
    </div>
    <div class="container">
	  <?php if(maxhost_get_option('maxhost_find_us_ft_show') != '') { ?>
      <div class="col-md-6 nopadding m-top5">
        <h5 class="<?php if(maxhost_get_option('footer_styles') != '4') { ?>font-white<?php } else { ?>font-color<?php } ?> m-bottom1"><?php if(maxhost_get_option('maxhost_find_us_ft') != '') { ?><?php echo maxhost_get_option('maxhost_find_us_ft'); ?><?php } ?></h5>
        <?php if(maxhost_get_option('maxhost_find_img_one') != '') { ?>
		<a href="<?php echo maxhost_get_option('maxhost_find_img_one_url'); ?>"><img src="<?php echo maxhost_get_option('maxhost_find_img_one'); ?>" alt=""></a>
		<?php } if(maxhost_get_option('maxhost_find_img_two') != '') { ?>
		<a href="<?php echo maxhost_get_option('maxhost_find_img_two_url'); ?>"><img src="<?php echo maxhost_get_option('maxhost_find_img_two'); ?>" alt=""></a>
		<?php } ?>
	  </div>
	  <?php } ?>
	  <?php if(maxhost_get_option('footer_newsletter') == '1') { ?>
      <div class="col-md-6 nopadding m-top5">
        <h5 class="<?php if(maxhost_get_option('footer_styles') != '4') { ?>font-white<?php } else { ?>font-color<?php } ?> m-bottom1"><?php echo maxhost_get_option('maxhost_newsletter_title'); ?></h5>
        <?php if(maxhost_get_option('ft_aweber_listid') != '') { ?>
		  <form method="post" action="https://www.aweber.com/scripts/addlead.pl">
			<input type="hidden" name="redirect" value="<?php esc_url( maxhost_get_option('aweber_redirectpage') ) ?>" />
			<input type="hidden" name="meta_redirect_onlist" value="<?php esc_url( maxhost_get_option('aweber_redirectpage_old') ) ?>" />
			<input type="hidden" name="meta_message" value="1" /> 
			<input type="hidden" name="meta_required" value="email" />
			<input type="text" name="email" class="input-text newsfield" id="samplees" placeholder="<?php echo maxhost_get_option('maxhost_newsletter_emailfield'); ?>" value="" />
            <input type="submit" class="btn orange-button two uppercase font-bold" value="<?php echo maxhost_get_option('maxhost_newsletter_submit'); ?>" name="submit">
        </form>
		  <?php } elseif (maxhost_get_option('mailchimp_apikey') != ''){ ?>
		  <form id="footer_signup" action="<?php echo MAXHOST_CONTACT_PATH . 'subscribe.php' ?>" method="post">
							<input class="input-text newsfield" name="email" id="email" placeholder="<?php echo maxhost_get_option('maxhost_newsletter_emailfield'); ?>" type="email"/>
							<input class="btn orange-button two uppercase font-bold" value="<?php echo maxhost_get_option('maxhost_newsletter_submit'); ?>" type="submit"/>
						</form>
		  <?php } else { ?>
		<form method="post" action="javascript:void(0)">
			<input type="hidden" name="redirect" value="<?php esc_url( maxhost_get_option('aweber_redirectpage') ) ?>" />
			<input type="hidden" name="meta_redirect_onlist" value="<?php esc_url( maxhost_get_option('aweber_redirectpage_old') ) ?>" />
			<input type="hidden" name="meta_message" value="1" /> 
			<input type="hidden" name="meta_required" value="email" />
			<input type="text" name="email" class="input-text newsfield" id="samplees" placeholder="<?php echo maxhost_get_option('maxhost_newsletter_emailfield'); ?>" value="" />
            <input type="submit" class="btn orange-button two uppercase font-bold" value="<?php echo maxhost_get_option('maxhost_newsletter_submit'); ?>" name="submit">
        </form>
		<?php } ?>
		<div id="footer_response" class="m-top2"></div>
      </div>
	  <?php } ?>
    </div>
  </footer>
  <div class="copyrights">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-top1 m-bottom1 <?php if(maxhost_get_option('footer_styles') == '4') { ?>font-white<?php } ?>"> <?php if(maxhost_get_option('copy_text') != '') { ?><?php echo maxhost_get_option('copy_text'); ?><?php } else { ?><?php esc_html_e('Copyright &copy; 2016 yourdomian. All rights reserved.', 'maxhost'); ?><?php } ?></div>
        <div class="col-md-6">
          <ul class="social-icons style-three">
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
      </div>
    </div>
  </div>
  <!-- end footer --> 
  <!-- COPY END TILL THIS LINE TO PLACE THIS INTO THE FOOTER.TPL OF WHMCS Maxhost-alt TEMPLATE -->
</div>
<!-- site wrapper end --> 
<a href="#" class="scrollup"></a>
<!-- end scroll to top of the page-->
<?php
if (maxhost_get_option('mailchimp_apikey') != ''){
get_template_part( 'subscribe/mailchimp_validation' );
} 
?>
<?php if(maxhost_get_option('maxhost_tawk_livechat') != '') { ?>
<?php echo maxhost_get_option('maxhost_tawk_livechat'); ?>
<?php } ?>
	<?php
		/* Always have wp_footer() just before the closing </body>
		* tag of your theme, or you will break many plugins, which
		* generally use this hook to reference JavaScript files.
		*/

		wp_footer();	
	?>
</body>
</html>