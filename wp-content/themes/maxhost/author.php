<?php
/**
 * The template for displaying Author pages
 */
get_header(); ?>
  <div class="page-header three" <?php if(maxhost_get_option('maxhost_page_header_img') != '') { ?>style="background: rgba(0, 0, 0, 0) url('<?php echo esc_url( maxhost_get_option('maxhost_page_header_img') ); ?>') no-repeat scroll center top;"<?php } ?>>
    <div class="container">
      <div class="col-md-6 left-padd0 m-bottom2">
        <h2 class="uppercase font-thin font-white font30 m-bottom1"><?php echo esc_html_e( 'Author Archives', 'maxhost' ); ?></h2>
        <h4 class="font-white font18"><?php esc_html_e('Articles Posted by ', 'maxhost'); ?><?php the_author(); ?></h4>
      </div>
      <div class="col-md-6">
        <?php if (function_exists('maxhost_wordpress_breadcrumbs')) maxhost_wordpress_breadcrumbs(); ?>
      </div>
    </div>
  </div>
 
	<div class="section-lg m-top8">
    <div class="container">
    <div class="row">
      <div class="col-md-9 left-padd0">
				<?php if (have_posts()) :  while (have_posts()) : the_post(); 
					$maxhost_global_post = maxhost_get_global_post();
					$postid = $maxhost_global_post->ID;
					$get_image = esc_url( wp_get_attachment_url( get_post_thumbnail_id($postid) ) ); 
					$title = get_the_title();
				?>
		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
        <div class="col-md-12"> <?php if ( has_post_thumbnail()) : ?><a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( $get_image ); ?>" alt="" class="img-responsive"></a><?php endif; ?>
          <h3 class="<?php if ( !empty( $title ) ) { ?>m-bottom2<?php } ?> font-thin font30<?php if ( has_post_thumbnail()) : ?> m-top4<?php endif; ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php if ( has_post_format( 'video' ) ) : ?>
					<?php the_content(); ?>
					<?php else: ?>
					<?php the_excerpt(); ?>
					<?php endif; ?>
          <div class="post-info m-top2 m-bottom5"><i class="fa fa-user"></i> <?php esc_html_e('By', 'maxhost'); ?> <?php the_author_posts_link(); ?> <?php esc_html_e('on', 'maxhost'); ?> <a href="<?php the_permalink(); ?>"><?php echo get_the_time('j M Y'); ?></a> <span class="left-padd3"><i class="fa fa-comments"></i> <a href="#"><?php echo get_comments_number(); ?></a></span> <?php if ( has_category() ) { ?><span class="left-padd3"><i class="fa fa-folder-open-o"></i> <?php esc_html_e('Categories / ', 'maxhost'); ?> <?php the_category( ', ' ); ?></span> <?php } if ( has_tag() ) { ?><span class="left-padd3"><i class="fa fa-tags"></i> <?php the_tags(); ?></span><?php } ?> </div>
        </div>
		</div>
		<?php endwhile; endif; ?>
        <div class="pagenation-blog">
            <?php maxhost_custom_pagination(); ?>
        </div>
      </div>
	  
	  <!--Sidebar-->
			<?php get_sidebar(); ?>
	  <!--Sidebar end-->

    </div>
  </div>
  </div>
<!--MAIN CONTENT END-->
<?php get_footer(); ?>