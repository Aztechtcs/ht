            <!--Right Sidebar-->
			<?php if ( is_active_sidebar( 'maxhost_sidebar' ) ) { ?>
            <div class="col-md-3 maxhost_sidebar">
                    <!--widget area-->
                    <?php dynamic_sidebar( 'maxhost_sidebar' ); ?>
                    <!--End widget area-->
            </div>
			<?php } ?>
            <!--End Right Sidebar-->