<?php
/**
 * Template Name: Page Without Header Image
 */
get_header(); ?>
  
    <div class="container">
		<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; ?><?php endif; ?>
	</div>
<?php get_footer(); ?>