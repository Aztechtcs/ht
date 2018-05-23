<?php
/**
 * 404 page
 */
get_header(); ?>
  <div class="page-header three" <?php if(maxhost_get_option('maxhost_page_header_img') != '') { ?>style="background: rgba(0, 0, 0, 0) url('<?php echo esc_url( maxhost_get_option('maxhost_page_header_img') ); ?>') no-repeat scroll center top;"<?php } ?>>
    <div class="container">
      <div class="col-md-6 left-padd0 m-bottom2">
        <h2 class="uppercase font-thin font-white font30 m-bottom1"><?php esc_html_e('404 Error', 'maxhost'); ?></h2>
        <h4 class="font-white font18"><?php esc_html_e('opps.! Page not Found', 'maxhost'); ?></h4>
      </div>
      <div class="col-md-6">
        <?php if (function_exists('maxhost_wordpress_breadcrumbs')) maxhost_wordpress_breadcrumbs(); ?>
      </div>
    </div>
  </div>
  
  <div class="section-lg m-top6">
  <div class="container">
    <div class="row">
      <div class="error_404">
        <h1 class="uppercase font80 font-color"><?php esc_html_e('404', 'maxhost'); ?></h1>
        <h2 class="font-thin font35"><?php esc_html_e('Oops... Page Not Found!', 'maxhost'); ?></h2>
        <p class="m-bottom4 m-top2"><?php esc_html_e('Sorry the Page Could not be Found here. Try using the button below to go to main page of the site', 'maxhost'); ?></p>
        <div class="m-bottom4">
          <div class="input-group input-group-lg one divcenter newsletter">
            <span class="input-group-btn">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-default uppercase"><?php esc_html_e('Go', 'maxhost'); ?></a>
            </span> </div>
        </div>
      </div>
      
    </div>
  </div>
  </div>

<!--MAIN CONTENT END-->
<?php get_footer(); ?>