jQuery(document).ready(function() {
	
	var loading;
	var results;
	var display;

		jQuery("div[id='domain-form']").on("submit", function(){	
			var form = this;
		
			if(jQuery("input[name='domain']",form).val() == "")
				{alert('please enter your domain');return false;}

			var domain = jQuery("input[name='domain']",form).val();
			var domainext = jQuery( "#domainext" ).val();
			var url = jQuery("input[name='url']",form).val();
			var purchase_btn_name = jQuery("input[name='purchase_btn_name']",form).val();
			jQuery("div[id='results']",form).css('display','none');
			jQuery("div[id='results']",form).html('');
			jQuery("div[id='loading']",form).css('display','table');
			jQuery("div[id='loading']",form).css('width','auto');
			var data = {
		      		'action': 'maxhost_display',
		      		'domain': domain,
		      		'domainext': domainext,
		      		'url': url,
		      		'purchase_btn_name': purchase_btn_name,
		      		'security' : maxhost_ajax.maxhost_nonce
		    		};
			jQuery.post(maxhost_ajax.ajaxurl, data, function(response) {
			var x = JSON.parse(response);
				if(x.status == 1){
					display = x.text;
					link = '';
				}else if(x.status == 0) {
					display = x.text;
				}else{
					display = "Error occured.";
				}
			jQuery("div[id='results']",form).css('display','block');
			jQuery("div[id='loading']",form).css('display','none');
			jQuery("div[id='results']",form).html(unescape(display));

		});
		return false;
	});
	
});