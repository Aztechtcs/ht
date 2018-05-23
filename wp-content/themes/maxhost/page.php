<?php
/**
 * The default page template of this theme
 */
get_header(); ?>
  <div class="page-header three" <?php if(maxhost_get_option('maxhost_page_header_img') != '') { ?>style="background: rgba(0, 0, 0, 0) url('<?php echo esc_url( maxhost_get_option('maxhost_page_header_img') ); ?>') no-repeat scroll center top;"<?php } ?>>
    <div class="container">
      <div class="col-md-6 left-padd0 m-bottom2">
        <h2 class="uppercase font-thin font-white font30 m-bottom1"><?php if (have_posts()) :  while (have_posts()) : the_post(); $maxhost_global_post = maxhost_get_global_post(); $postid = $maxhost_global_post->ID; echo wp_html_excerpt (get_the_title($postid), 20); ?>...<?php endwhile; endif; ?></h2>
        <h4 class="font-white font18"><?php if (have_posts()) :  while (have_posts()) : the_post(); the_title(); endwhile; endif; ?></h4>
      </div>
      <div class="col-md-6">
        <?php if (function_exists('maxhost_wordpress_breadcrumbs')) maxhost_wordpress_breadcrumbs(); ?>
      </div>
    </div>
  </div>
  
  <div class="section-lg m-top8">
    <div class="container">
    <div class="row">
      <div class="col-md-12 left-padd0">
				<?php if (have_posts()) :  while (have_posts()) : the_post(); 
					$maxhost_global_post = maxhost_get_global_post();
					$postid = $maxhost_global_post->ID;
					$get_image = esc_url( wp_get_attachment_url( get_post_thumbnail_id($postid) ) ); 
					$title = get_the_title();
				?>

        <div class="col-md-12"> <?php if ( has_post_thumbnail()) : ?><a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( $get_image ); ?>" alt="" class="img-responsive"></a><?php endif; ?>
          <?php if ( has_post_thumbnail()) : ?>
		  <div class="m-top2">
		  <?php endif; ?>
		  <?php the_content(); ?>
		  <?php if ( has_post_thumbnail()) : ?>
		  </div>
		  <?php endif; ?>
        </div>

		<div class="pagenation-blog">
            <?php wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'maxhost' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						) );
					?>
        </div>
		<?php endwhile; endif; ?>
		<div id="comments" class="col-md-12">
		<?php comments_template( '', true ); ?>
		</div>
        
      </div>

    </div>
  </div>
  </div>
<?php get_footer(); ?>