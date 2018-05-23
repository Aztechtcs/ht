<?php
function maxhost_load_styles() {
	wp_enqueue_style( 'maxhost-dc-styles', plugins_url( 'main.css', __FILE__ ) );
	wp_enqueue_script( 'maxhost-dc-script', plugins_url( 'script.js', __FILE__ ), array('jquery'));
 	wp_localize_script( 'maxhost-dc-script', 'maxhost_ajax', array(
        'ajaxurl'       => admin_url( 'admin-ajax.php' ),
        'maxhost_nonce'     => wp_create_nonce( 'maxhost_nonce' ))
    );
  
}
add_action( 'wp_enqueue_scripts', 'maxhost_load_styles' );
add_action( 'admin_enqueue_scripts', 'maxhost_load_styles' );


function maxhost_display_func(){
	check_ajax_referer( 'maxhost_nonce', 'security' );

if(isset($_POST['domain']))
{	
	$url = $_POST['url'];
	$domainext = $_POST['domainext'];
	$domainname = $_POST['domain'].$_POST['domainext'];
	$purchase_btn_name = $_POST['purchase_btn_name'];
	if($domainext){
		$domain = str_replace(array('www.', 'http://'), NULL, $domainname);
	}else{
		$domain = str_replace(array('www.', 'http://'), NULL, $_POST['domain']);
	}

	
	if($purchase_btn_name){
	if($url){
		$purchasedomain = '<br/> <a href="'.$url.$domain.'" class="btn btn-success">'.$purchase_btn_name.'</a></div>';
	}else{
		$purchasedomain = '<br/> <a href="" class="btn btn-success">'.$purchase_btn_name.'</a></div>';
	}
	}
	$split = explode('.', $domain);

		if(count($split) == 1) {
			$domain = $domain.".com";
		}
	$domain = preg_replace("/[^-a-zA-Z0-9.]+/", "", $domain);
	if(strlen($domain) > 0)
	{

		include ('DomainAvailability.php');  
		$Domains = new DomainAvailability();
		$available = $Domains->is_available($domain);
		$custom_found_result_text = __('Congratulations! <b>'.$domain.'</b> is available!', 'maxhost');
    	$custom_not_found_result_text = __('Sorry! <b>'.$domain.'</b> is already taken!', 'maxhost');
		
		if ($available == '1') {
				$result = array('status'=>1,'domain'=>$domain, 'text'=> '<div class="available">'.$custom_found_result_text.' '.$purchasedomain.' ');
		    	echo json_encode($result);
		} elseif ($available == '0') {
				$result = array('status'=>0,'domain'=>$domain, 'text'=> '<div class="not-available">'.$custom_not_found_result_text.'</div>');
		    	echo json_encode($result);
		}elseif ($available == '2'){
				$result = array('status'=>0,'domain'=>$domain, 'text'=> '<div class="not-available">WHOIS server not found for that TLD</div>');
		    	echo json_encode($result);
		}
		
	}
	else
	{
		echo 'Please enter the domain name';
	}
}
die();
}

add_action('wp_ajax_maxhost_display','maxhost_display_func');
add_action('wp_ajax_nopriv_maxhost_display','maxhost_display_func');