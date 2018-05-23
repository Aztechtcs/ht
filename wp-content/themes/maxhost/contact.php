<?php
/**
 * Template name: Contact
 */
if( !defined('MAXHOST_CONTACT_PATH') )
	define( 'MAXHOST_CONTACT_PATH', get_template_directory_uri() . '/subscribe/' );
get_header(); ?>
  <div class="page-header three">
    <div class="container">
      <div class="col-md-6 left-padd0 m-bottom2">
        <h2 class="uppercase font-thin font-white font30 m-bottom1"><?php esc_html_e('Contact Us', 'maxhost'); ?></h2>
        <h4 class="font-grey-light font18 "><?php esc_html_e('Get in Touch with Us', 'maxhost'); ?></h4>
      </div>
      <div class="col-md-6">
        <?php if (function_exists('maxhost_wordpress_breadcrumbs')) maxhost_wordpress_breadcrumbs(); ?>
      </div>
    </div>
  </div>
  
  <div class="section-lg m-top8 m-bottom7">
    <div class="container">
      <div class="row">
	<div class="col-md-4">
        <div class="address-info">
          <h2 class="uppercase m-bottom2"><?php esc_html_e('Address Info', 'maxhost'); ?></h2>
          <p><?php echo maxhost_get_option('cosonix_about_info'); ?></p>
        </div>
        <!-- end section -->
        
        <?php if((maxhost_get_option('cosonix_address_info') != '') || (maxhost_get_option('cosonix_phn_number') != '')) { ?>
		<div class="address-info m-top4">
          <h4 class="uppercase m-bottom2 font-bold"><?php esc_html_e('Reach Us', 'maxhost'); ?></h4>
          <ul class="address-info map">
            <li><i class="fa fa-map-marker"></i> <?php echo maxhost_get_option('cosonix_address_info'); ?></li>
			<?php if(maxhost_get_option('cosonix_phn_number') != '') { ?>
            <li><i class="fa fa-phone"></i> <?php echo maxhost_get_option('cosonix_phn_number'); ?></li>
			<?php } if(maxhost_get_option('cosonix_email_id') != '') { ?>
            <li><i class="fa fa-envelope"></i> <?php echo maxhost_get_option('cosonix_email_id'); ?></li>
			<?php } ?>
          </ul>
        </div>
		<?php } ?>
        <!-- end section --> 
      </div>
	  <div class="col-md-8">
      <h2 class="uppercase"><?php esc_html_e('send us a message', 'maxhost');?></h2>
        <form class="sky-form" id="contact-form" method="post" action="<?php echo MAXHOST_CONTACT_PATH . 'contact-form.php' ?>">
          
          <fieldset>
            <div class="row">
              <div class="section col col-6">
                <label class="label"><?php esc_html_e('Name', 'maxhost');?></label>
                <label class="input"> <i class="icon-append fa fa-user"></i>
                  <input type="text" name="contact-name" id="contact-name">
                </label>
              </div>
              <div class="section col col-6">
                <label class="label"><?php esc_html_e('E-mail', 'maxhost');?></label>
                <label class="input"> <i class="icon-append fa fa-envelope-o"></i>
                  <input type="email" name="contact-email" id="contact-email">
                </label>
              </div>
            </div>
            <div class="section">
              <label class="label"><?php esc_html_e('Subject', 'maxhost');?></label>
              <label class="input"> <i class="icon-append fa fa-tags"></i>
                <input type="text" name="contact-subject" id="contact-subject">
              </label>
            </div>
            <div class="section">
              <label class="label"><?php esc_html_e('Message', 'maxhost');?></label>
              <label class="textarea"> <i class="icon-append fa fa-comment"></i>
                <textarea name="contact-msg" id="contact-msg" rows="4"></textarea>
              </label>
            </div>
            <div class="section" style="float:left;">
              <input type="hidden" name="contact-submit" id="contact-submit" value="true" />
            </div>
          </fieldset>
          <footer>
            <button class="button" name="submit" id="submit" type="submit"><?php esc_html_e('Send message', 'maxhost');?></button>
          </footer>
		  <span class="spinner spinner-style"><?php esc_html_e('Sending...', 'maxhost');?></span>
		  <div id="contactsMsgs"></div>
        </form>
      </div>
	  
	  </div>
    </div>
  </div>

	<?php if(maxhost_get_option('maxhost_google_map') != '') { ?>
	<div class="section-lg">
	  <div class="content-container embed-container maps">
		<?php echo maxhost_get_option('maxhost_google_map'); ?>
	  </div>
	</div>
	<?php } ?>

<!--MAIN CONTENT END-->
<?php get_footer(); ?>