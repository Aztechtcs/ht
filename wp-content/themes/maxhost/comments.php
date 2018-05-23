<?php
/**
 * The template for displaying Comments.
 */

if ( post_password_required() )
	return;
?>


	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<br>
		<h4 class="m-bottom3 font-thin font20"><?php comments_number(esc_html__('There Is No Comment Yet', 'maxhost'), esc_html__('There Is 1 Comment', 'maxhost'), esc_html__('There Are % Comments', 'maxhost') );?></h4>					
				<div>
					<?php wp_list_comments( array( 'callback' => 'maxhost_comment', 'style' => 'div' ) ); ?>
				</div><!-- .commentlist -->
				<div class="clearfix"></div>
				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
				<div class="pagenation-blog">
					<ul class="pagenation-list">
					  <li><?php esc_url( previous_comments_link( '<i class="fa fa-angle-left"></i>' ) ) ?></li>
					  <li><?php esc_url( next_comments_link( '<i class="fa fa-angle-right"></i>', 0 ) ) ?></li>
					</ul>
                </div>
				<?php endif; ?>
				<?php
				/* If there are no comments and comments are closed, let's leave a note.
				 * But we only want the note on posts and pages that had comments in the first place.
				 */
				if ( ! comments_open() ) : ?>
					<h4 class="m-top2"><?php esc_html_e( 'Comments are closed.' , 'maxhost' ); ?></h4>
				<?php endif; ?>
			 
	<?php endif; // have_comments() ?>
	<?php if ( comments_open() ) : ?>
		<div class="clearfix"></div>
		<div class="review_form_holders">
            <div class="cforms">
				<div class="sky-form">
			<?php comment_form(array(
			'title_reply' => esc_html_e( 'Post Your Comment' , 'maxhost' ),
			)); ?>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	<?php endif; ?>
