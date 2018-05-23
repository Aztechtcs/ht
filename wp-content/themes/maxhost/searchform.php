		<form method="get" role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" id="searchform">
            <div class="input-group input-group-lg one divcenter newsletter" style="max-width:600px;">
			  <input id="s" type="text" placeholder="<?php esc_html_e('Search Here', 'maxhost'); ?>" class="form-control required email" name="s">
              <span class="input-group-btn">
              <button id="searchsubmit" type="submit" class="btn btn-default"><?php esc_html_e('Search', 'maxhost'); ?></button>
              </span> </div>
          </form>