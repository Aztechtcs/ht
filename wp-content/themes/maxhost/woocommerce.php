<?php
/**
 * The default woocommerce template of this theme
 */
get_header(); ?>
  <div class="page-header three" <?php if(maxhost_get_option('maxhost_page_header_img') != '') { ?>style="background: rgba(0, 0, 0, 0) url('<?php echo esc_url( maxhost_get_option('maxhost_page_header_img') ); ?>') no-repeat scroll center top;"<?php } ?>>
    <div class="container">
      <div class="col-md-6 left-padd0 m-bottom2">
	  
		<h2 class="uppercase font-thin font-white font30 m-bottom1"><?php woocommerce_page_title(); ?></h2>
		<h4 class="font-white font18"><?php
										$paged    = max( 1, $wp_query->get( 'paged' ) );
										$per_page = $wp_query->get( 'posts_per_page' );
										$total    = $wp_query->found_posts;
										$first    = ( $per_page * $paged ) - $per_page + 1;
										$last     = min( $total, $wp_query->get( 'posts_per_page' ) * $paged );

										if ( $total <= $per_page || -1 === $per_page ) {
											printf( _n( 'Showing the single result', 'Showing all %d results', $total, 'maxhost' ), $total );
										} else {
											printf( _nx( 'Showing the single result', 'Showing %1$d&ndash;%2$d of %3$d results', $total, '%1$d = first, %2$d = last, %3$d = total', 'maxhost' ), $first, $last, $total );
										}
									  ?>
		</h4>

      </div>
      <div class="col-md-6">
        <?php if (function_exists('woocommerce_breadcrumb')) woocommerce_breadcrumb(); ?>
      </div>
    </div>
  </div>
  
  <section class="page-content shop-page-content shop-with-sidebar">
    <div class="container">
	  <?php if(maxhost_get_option('maxhost_woocommerce_sidebar_switch') == '2') { ?>
			<!--WooCommerce Sidebar-->
			<?php if ( is_active_sidebar( 'maxhost_woocommerce_sidebar' ) ) { ?>
            <aside class="sidebar col-md-3 col-sm-4 col-bordered-left" style="margin-left: 0; padding-left: 0;">
                    <!--widget area-->
                    <?php dynamic_sidebar( 'maxhost_woocommerce_sidebar' ); ?>
                    <!--End widget area-->
			<hr class="visible-xs lg">
            </aside>
			<?php } ?>
            <!--End WooCommerce Sidebar-->
			<?php } ?>
      <div class="<?php if(maxhost_get_option('maxhost_woocommerce_sidebar_switch') == '1') { ?>col-md-8 left-padd0<?php } elseif(maxhost_get_option('maxhost_woocommerce_sidebar_switch') == '2') { ?>col-md-8 fl-right<?php } else { ?>col-md-12 left-padd0<?php } ?>">
				<?php woocommerce_content(); ?>
        
      </div>
			<?php if(maxhost_get_option('maxhost_woocommerce_sidebar_switch') == '1') { ?>
			<!--WooCommerce Sidebar-->
			<?php if ( is_active_sidebar( 'maxhost_woocommerce_sidebar' ) ) { ?>
            <aside class="sidebar col-md-3 col-sm-4 col-md-offset-1 col-bordered">
			 <hr class="visible-xs lg">
                    <!--widget area-->
                    <?php dynamic_sidebar( 'maxhost_woocommerce_sidebar' ); ?>
                    <!--End widget area-->
            </aside>
			<?php } ?>
            <!--End WooCommerce Sidebar-->
			<?php } ?>

  </div>
  </div>
<?php get_footer(); ?>