<?php
/*************************
Start Latest Posts widget
*************************/
class maxhost_popular_Widget extends WP_Widget {

       function __construct() {
    parent::__construct(
      'maxhost_popular_Widget', // Base ID
      esc_html__('Maxhost -Latest Posts Widget', 'maxhost'), // Name
      array( 'description' => esc_html__( 'Displays the Most Recent Posts with image', 'maxhost' ), ) // Args
    );
  }
/* Front-end display of widget. */
public function widget( $args, $instance ) {

		  $maxhost_imgpath = get_template_directory_uri(); ?>
          <div class="cat-title white font-bold uppercase"><i class="fa fa-pencil"></i> <?php esc_html_e('Latest Posts', 'maxhost'); ?></div>
										<?php			
										$args = array(
										'posts_per_page'   => 3,
										'orderby'          => 'post_date',
										'order'            => 'DESC',
										'post_type'        => 'post',
										'post_status'      => 'publish',
										); 

										$ft_latestpost = new WP_Query( $args );
										if ($ft_latestpost->have_posts()) :
										while($ft_latestpost->have_posts()) : $ft_latestpost->the_post() ;
										global $post;
										?>
          <div class="c-post one">
		  <?php if ( has_post_thumbnail() ) { ?>
										<div class="c-post-img"><?php echo get_the_post_thumbnail( $post->ID, array( 65, 60) ); ?></div>
										<?php } else { ?>
										<div class="c-post-img"><img class="img-responsive" style="width: 65px; height: 60px;" alt="" src="<?php echo esc_url( $maxhost_imgpath ); ?>/images/avatars/thumbnail.png"></div>
										<?php } ?>

            <div class="c-post-content">
              <h4 class="c-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <p class="c-text">
                <span><?php _e('By', 'maxhost'); ?> <?php the_author_posts_link(); ?> / <?php echo get_the_time('M, j'); ?></span></p>
            </div>
          </div>
		  <?php endwhile; ?>
		<?php endif; ?>
		
				
	  <?php						
}
}//end of class

// register popular_Widget widget
function maxhost_register_popular_Widget() {
  register_widget( 'maxhost_popular_Widget' );
}
add_action( 'widgets_init', 'maxhost_register_popular_Widget' );