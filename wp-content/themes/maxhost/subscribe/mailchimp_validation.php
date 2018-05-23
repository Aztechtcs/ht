<?php
if( !defined('MAXHOST_CONTACT_PATH') )
	define( 'MAXHOST_CONTACT_PATH', get_template_directory_uri() . '/subscribe/' );
$subscribefile = MAXHOST_CONTACT_PATH . 'subscribe.php';
?>
<script type='text/javascript' src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js'></script>
<script type="text/javascript">
		jQuery(document).ready(function($) {
			// jQuery Validation
			$("#footer_signup").validate({
				// if valid, post data via AJAX
				submitHandler: function() {
					var subscribefile="<?php echo esc_url( $subscribefile ); ?>";
					$.post(subscribefile, { email: $("#email").val() }, function(data) {
						$('#footer_response').html(data);
					});
				},
				// all fields are required
				rules: {
					email: {
						required: true,
						email: true
					}
				}
			});
		});
</script>