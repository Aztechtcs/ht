<?php
/*-----------------------------------------------------------------------------------*/
/* Creating Shortcodes in order to use in the Visual Composer Page builder plugin */
/*-----------------------------------------------------------------------------------*/

/************
Accordion - 1
************/
function maxhost_accordion_one_shortcode($atts, $content = null) {

   $a = shortcode_atts(array(
        'number_of_tabs' => ''
    ),$atts);

	$output ='<div class="m-top4">
          <div aria-multiselectable="true" role="tablist" id="accordion10" class="panel-group collaps collaps-style-1">';
	$i=1;
	$c=0;
	while ($i<=$a['number_of_tabs']){
	$c++;
	$b = shortcode_atts(array(
		'title'.$c.'' => '',
        'text'.$c.'' => ''
    ),$atts);
	$title =$b['title'.$c.''];
	$text =$b['text'.$c.''];

	$output .='<div class="panel panel-default">
              <div id="heading10'.$c.'" role="tab" class="panel-heading">
                <h4 class="panel-title uppercase"> <a '; if ( $c != 1 ) { $output .= 'aria-expanded="false"'; } else { $output .= 'aria-expanded="true"'; } $output .=' aria-controls="collapse10'.$c.'" href="#collapse10'.$c.'" data-parent="#accordion10" data-toggle="collapse" role="button" '; if ( $c != 1 ) { $output .= 'class="collapsed"'; } $output .='>'.esc_attr( $title ).'</a> </h4>
              </div>
              <div '; if ( $c != 1 ) { $output .= 'style="height: 0px;" aria-expanded="false"'; } else { $output .= 'style="" aria-expanded="true"'; } $output .=' aria-labelledby="heading10'.$c.'" role="tabpanel" class="panel-collapse collapse '; if ( $c == 1 ) { $output .= 'in'; } $output .='" id="collapse10'.$c.'">
                <div class="panel-body">
                  <p>'.$text.'</p>
                </div>
              </div>
            </div>';
$i++;
}
	$output .='	</div>
		   </div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_accordion_one','maxhost_accordion_one_shortcode');

/************
Accordion - 2
************/
function maxhost_accordion_two_shortcode($atts, $content = null) {

   $a = shortcode_atts(array(
        'number_of_tabs' => ''
    ),$atts);

	$output ='<div class="m-top3">
          <div aria-multiselectable="true" role="tablist" id="accordion20" class="panel-group collaps collaps-style-2">';
	$i=1;
	$c=0;
	while ($i<=$a['number_of_tabs']){
	$c++;
	$b = shortcode_atts(array(
		'title'.$c.'' => '',
        'text'.$c.'' => ''
    ),$atts);
	$title =$b['title'.$c.''];
	$text =$b['text'.$c.''];

	$output .='<div class="panel panel-default">
              <div id="heading20'.$c.'" role="tab" class="panel-heading">
                <h4 class="panel-title uppercase"> <a '; if ( $c != 1 ) { $output .= 'aria-expanded="false"'; } else { $output .= 'aria-expanded="true"'; } $output .=' aria-controls="collapse20'.$c.'" href="#collapse20'.$c.'" data-parent="#accordion20" data-toggle="collapse" role="button" '; if ( $c != 1 ) { $output .= 'class="collapsed"'; } $output .='>'.esc_attr( $title ).'</a> </h4>
              </div>
              <div '; if ( $c != 1 ) { $output .= 'style="height: 0px;" aria-expanded="false"'; } else { $output .= 'style="" aria-expanded="true"'; } $output .=' aria-labelledby="heading20'.$c.'" role="tabpanel" class="panel-collapse collapse '; if ( $c == 1 ) { $output .= 'in'; } $output .='" id="collapse20'.$c.'">
                <div class="panel-body">
                  <p>'.$text.'</p>
                </div>
              </div>
            </div>';
$i++;
}
	$output .='	</div>
		   </div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_accordion_two','maxhost_accordion_two_shortcode');

/************
Accordion - 3
************/
function maxhost_accordion_three_shortcode($atts, $content = null) {

   $a = shortcode_atts(array(
        'number_of_tabs' => ''
    ),$atts);

	$output ='<div class="m-top4">
          <div aria-multiselectable="true" role="tablist" id="accordion30" class="panel-group collaps">';
	$i=1;
	$c=0;
	while ($i<=$a['number_of_tabs']){
	$c++;
	$b = shortcode_atts(array(
		'title'.$c.'' => '',
        'text'.$c.'' => ''
    ),$atts);
	$title =$b['title'.$c.''];
	$text =$b['text'.$c.''];

	$output .='<div class="panel panel-default">
              <div id="heading30'.$c.'" role="tab" class="panel-heading">
                <h4 class="panel-title uppercase"> <a '; if ( $c != 1 ) { $output .= 'aria-expanded="false"'; } else { $output .= 'aria-expanded="true"'; } $output .=' aria-controls="collapse30'.$c.'" href="#collapse30'.$c.'" data-parent="#accordion30" data-toggle="collapse" role="button" '; if ( $c != 1 ) { $output .= 'class="collapsed"'; } $output .='>'.esc_attr( $title ).'</a> </h4>
              </div>
              <div '; if ( $c != 1 ) { $output .= 'style="height: 0px;" aria-expanded="false"'; } else { $output .= 'style="" aria-expanded="true"'; } $output .=' aria-labelledby="heading30'.$c.'" role="tabpanel" class="panel-collapse collapse '; if ( $c == 1 ) { $output .= 'in'; } $output .='" id="collapse30'.$c.'">
                <div class="panel-body">
                  <p>'.$text.'</p>
                </div>
              </div>
            </div>';
$i++;
}
	$output .='	</div>
		   </div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_accordion_three','maxhost_accordion_three_shortcode');

/************
Accordion - 4
************/
function maxhost_accordion_four_shortcode($atts, $content = null) {

   $a = shortcode_atts(array(
        'number_of_tabs' => ''
    ),$atts);

	$output ='<div class="m-top4">
          <div id="js-grid-faq" class="cbp cbp-l-grid-faq">';
	$i=1;
	$c=0;
	while ($i<=$a['number_of_tabs']){
	$c++;
	$b = shortcode_atts(array(
		'title'.$c.'' => '',
		'icon'.$c.'' => '',
        'text'.$c.'' => ''
    ),$atts);
	$title =$b['title'.$c.''];
	$icon =$b['icon'.$c.''];
	$text =$b['text'.$c.''];

	$output .='<div class="cbp-item buying">
              <div class="cbp-caption">
                <div class="cbp-caption-defaultWrap"> <i class="fa fa-'.esc_attr( $icon ).'"></i> '.esc_attr( $title ).'</div>
                <div class="cbp-caption-activeWrap">
                  <div class="cbp-l-caption-body font15">'.$text.'</div>
                </div>
              </div>
            </div>';
$i++;
}
	$output .='	</div>
		   </div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_accordion_four','maxhost_accordion_four_shortcode');

/***********
Ad Block - 1
***********/
function maxhost_ad_block_one_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'heading1' => '',
	'heading2' => '',
	'price_title' => '',
	'price' => '',
	'price_duration' => '',
	'font_color' => '',
	'maxhost_shortcodes_bg' => '',
	'features_one' => '',
	'button_label' => '',
	'button_url' => '',
	), $atts ) );

	if(!empty($features_one)){
      $out_one = '<ul class="listitems m-top2">';
      $features_one = !empty($features_one) ? explode("\n", trim($features_one)) : array(); 
      foreach($features_one as $feature_one) {
        $out_one .= '<li class="font-white"><i class="fa font-color fa-check-square"></i> '.htmlspecialchars_decode($feature_one).'</li>';
      }
      $out_one .= '</ul>';
      $content_one = $out_one;
    }
	
	$output = '<div class="maxad-col m-bottom4" '; if ( $maxhost_shortcodes_bg != '' ) { $output .= 'style="background: rgba(0, 0, 0, 0) url('.esc_url( $maxhost_shortcodes_bg ).') no-repeat scroll center top;" '; } $output .= '>
            '; if ( $price_title != '' ) { $output .= '<div class="best-price '; if ( $font_color != '' ) { $output .=''.$font_color.''; } else { $output .='font-black-dark'; } $output .='"> <span class="'; if ( $font_color == 'font-white' ) { $output .='offer-best-white'; } else { $output .='offer-best'; } $output .=' uppercase">'.esc_attr( $price_title ).'</span><br> <span class="font-bold">'.esc_attr( $price ).'</span><br> <span>'.esc_attr( $price_duration ).'</span> </div>'; } $output .= '
            <h2 class="font-white font25 m-top5">'; if ( $heading1 != '' ) { $output .=''.esc_attr( $heading1 ).'<br>'; } $output .='
              '.esc_attr( $heading2 ).'</h2>
            '.do_shortcode($content_one).'
            <div class="button m-top2"><a href="'.esc_url( $button_url ).'" class="btn boxed-color-xs orange uppercase">'.esc_attr( $button_label ).' <i class="fa fa-arrow-circle-right"></i></a></div>
          </div>';
	
	return $output;
}
add_shortcode('maxhost_ad_block_one', 'maxhost_ad_block_one_shortcode');

/************
Blog Post - 1
************/
function maxhost_blog_post_one_shortcode( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'heading1'      => '',
	'heading2'      => '',
    'num_post'      => 2,
    ), $atts));

	$args = array(
			'posts_per_page'   => $num_post,
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'post_status'      => 'publish',
			); 
	$my_query = new WP_Query($args );
	$out = '<div class="m-top7">
          <h4 class="font-black font-bold font15 uppercase">'.esc_attr( $heading1 ).'</h4>
          <h2 class="font-black font-bold font30 m-bottom3 uppercase">'.esc_attr( $heading2 ).'</h2>';
          while ( $my_query->have_posts() ) : $my_query->the_post();
						$get_image = wp_get_attachment_url( get_post_thumbnail_id() );
	$out .= '<div class="blog-post">
            <div class="row">';
			if ( has_post_thumbnail()) {
	$out .= '
              <div class="col-md-4 col-sm-6 m-bottom3"> <a href="'.get_permalink().'"><img src="'.$get_image.'" alt="" class="img-responsive"></a> </div>';
              }
			if ( has_post_thumbnail()) {
	$out .= '<div class="col-md-8 col-sm-6 m-bottom3">';
			  } else {
	$out .= '<div class="col-md-12 col-sm-12 m-bottom3">';
			}
    $out .= '            <h3 class="font-thin font20 m-bottom1"><a href="'.get_permalink().'">'.get_the_title().'</a></h3>
                <p class="m-bottom1 font14 font-grey"><i class="fa fa-calendar"></i> '.get_the_time('d, M, Y').' &nbsp;&nbsp;&nbsp;<i class="fa fa-comments"></i> '.get_comments_number().'</p>
                <p>'.wp_html_excerpt (get_the_excerpt(), 150, '...').'</p>
              </div>
            </div>
          </div>';
			endwhile;
    wp_reset_query();
	$out .= '
        </div>';
    return $out;
}
add_shortcode('maxhost_shortcodes_blog_post_one', 'maxhost_blog_post_one_shortcode');

/************
Blog Post - 2
************/
function maxhost_blog_post_two_shortcode( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'heading1'      => '',
	'heading2'      => '',
    'num_post'      => 3,
	'maxhost_shortcodes_parallax_bg' => '',
	'crossed_top'      => '',
	'crossed_bottom'      => '',
    ), $atts));

	$args = array(
			'posts_per_page'   => $num_post,
			'orderby'          => 'post_date',
			'order'            => 'DESC',
			'post_status'      => 'publish',
			); 
	$my_query = new WP_Query($args );
	$out = '<div '; if ( $maxhost_shortcodes_parallax_bg != '' ) { $out .= 'style="background: rgba(0, 0, 0, 0) url('.esc_url( $maxhost_shortcodes_parallax_bg ).') no-repeat fixed center top / cover ;" '; } $out .= 'class="section-lg bg-parallax-15 m-top0">
    '; if ( $crossed_top != false ) { $out .='<div class="shape-cross-top"></div>'; } $out .='
    <div class="container '; if ( $crossed_top != true ) { $out .='p-top7 '; } if ( $crossed_bottom != true ) { $out .='p-bottom7'; } $out .='">
      <div class="row">
        <h4 class="font-color font15 uppercase m-top2 text-center">'.esc_attr( $heading1 ).'</h4>
        <h2 class="font-white font-thin-xs font40 m-bottom4 uppercase text-center">'.esc_attr( $heading2 ).'</h2>';
          while ( $my_query->have_posts() ) : $my_query->the_post();
						$get_image = wp_get_attachment_url( get_post_thumbnail_id() );
	$out .= '       
		<div class="col-md-4 col-sm-3 m-bottom3"> <a href="'.get_permalink().'"><img class="img-responsive" alt="" src="'.$get_image.'"></a>
          <div class="post-info-box">
            <h3 class="font-thin font20 m-bottom1"><a href="'.get_permalink().'">'.get_the_title().'</a></h3>
            <p class="m-bottom1 font14 font-grey"><i class="fa fa-calendar"></i> '.get_the_time('d, M, Y').' &nbsp;&nbsp;&nbsp;<i class="fa fa-comments"></i> '.get_comments_number().'</p>
            <p>'.wp_html_excerpt (get_the_excerpt(), 150, '...').'</p>
          </div>
        </div>';
			endwhile;
    wp_reset_query();
	$out .= '
      </div>
    </div>
    '; if ( $crossed_bottom != false ) { $out .='<div class="shape-cross-bottom"></div>'; } $out .='
  </div>';
    return $out;
}
add_shortcode('maxhost_shortcodes_blog_post_two', 'maxhost_blog_post_two_shortcode');

/************
Bullet Points
************/
function maxhost_bullet_points_one_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'bullets' => '',
	'section_style' => '',
	), $atts ) );
				
	if(!empty($bullets)){
      $out = '<ul class="'.$section_style.'">';
      $bullets = !empty($bullets) ? explode("\n", trim($bullets)) : array(); 
      foreach($bullets as $bullet) {
        $out .= '<li';if ( $section_style == 'list-group' ) { $out .=' class="list-group"'; } $out .= '><i class="';if ( $section_style == 'list-group' ) { $out .='fa fa-check'; } else { $out .='fa fa-arrow-circle-right'; } $out .='"></i> '.htmlspecialchars_decode($bullet).'</li>';
      }
      $out .= '</ul>';
      $content = $out;
    }
	$output = ''.do_shortcode($content).'';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_bullet_points_one', 'maxhost_bullet_points_one_shortcode');

/*************
Call To Action
*************/
function maxhost_call_to_action_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'heading1_1st' => '',
	'heading1_2nd' => '',
	'heading2' => '',
	'text' => '',
	'button_label' => '',
	'button_url' => '',
	'maxhost_shortcodes_parallax_bg' => '',
	), $atts ) );
	
	$output = '<div '; if ( $maxhost_shortcodes_parallax_bg != '' ) { $output .= 'style="background: rgba(0, 0, 0, 0) url('.esc_url( $maxhost_shortcodes_parallax_bg ).') no-repeat fixed center top / cover ;" '; } $output .= 'class="section-lg bg-parallax-6 m-top3">
    <div class="container">
      <div class="">
        <h2 class="font-thin-xs uppercase font45 text-center font-white m-bottom3"><span class="font-color font-bold">'.esc_attr( $heading1_1st ).'</span> '.esc_attr( $heading1_2nd ).'<br>
          '.esc_attr( $heading2 ).'</h2>
        <div class="col-md-11 sec-auto-margin font-thin-xs font25 text-center m-bottom6 font-white">'.$text.'</div>
        <div data-anim-delay="100" data-anim-type="fade-in-up" class="button text-center"><a href="'.esc_url( $button_url ).'" class="btn whte-border font20 font-thin">'.esc_attr( $button_label ).'</a></div>
      </div>
    </div>
  </div>';
	
	return $output;
}
add_shortcode('maxhost_call_to_action', 'maxhost_call_to_action_shortcode');

/************
Clients Block
************/
function maxhost_clients_block_one_shortcode( $atts ) {
	$output = $image_one = $image_two = $image_three = $image_four = $image_five = $image_six = $image_seven = '';
	extract( shortcode_atts( array(
	'image_one' => $image_one,
	'image_two' => $image_two,
	'image_three' => $image_three,
	'image_four' => $image_four,
	'image_five' => $image_five,
	'image_six' => $image_six,
	'image_seven' => $image_seven,
	'heading1' => '',
	'heading2' => '',
	'pt_bg' => '',
	), $atts ) );
	
	$img_one_id = preg_replace( '/[^\d]/', '', $image_one );
	$img_two_id = preg_replace( '/[^\d]/', '', $image_two );
	$img_three_id = preg_replace( '/[^\d]/', '', $image_three );
	$img_four_id = preg_replace( '/[^\d]/', '', $image_four );
	$img_five_id = preg_replace( '/[^\d]/', '', $image_five );
	$img_six_id = preg_replace( '/[^\d]/', '', $image_six );
	$img_seven_id = preg_replace( '/[^\d]/', '', $image_seven );
	
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_one = wpb_getImageBySize( array( 'attach_id' => $img_one_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_one = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_two = wpb_getImageBySize( array( 'attach_id' => $img_two_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_two = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_three = wpb_getImageBySize( array( 'attach_id' => $img_three_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_three = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_four = wpb_getImageBySize( array( 'attach_id' => $img_four_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_four = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_five = wpb_getImageBySize( array( 'attach_id' => $img_five_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_five = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_six = wpb_getImageBySize( array( 'attach_id' => $img_six_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_six = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_seven = wpb_getImageBySize( array( 'attach_id' => $img_seven_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_seven = '';
				}

	$output = '<div class="section-lg '; if ( $pt_bg != false ) { $output .='bg-texture-1  m-top8'; } $output .='">
    <div class="container">
	'; if ( $img_seven != '' ) { $output .='
      <div class="col-md-6 col-sm-6 m-bottom3"> '.$img_seven['thumbnail'].' </div>
	'; } $output .='
	'; if ( $img_seven != '' ) { $output .='<div class="col-md-6 col-sm-6">'; } else { $output .='<div class="col-md-12 col-sm-12">'; } $output .='
        '; if ( $heading1 != '' ) { $output .='<h4 class="font-black font-bold font15 uppercase">'.esc_attr( $heading1 ).'</h4>'; } $output .='
        '; if ( $heading2 != '' ) { $output .='<h2 class="font-black font-bold font30 m-bottom3 uppercase">'.esc_attr( $heading2 ).'</h2>'; } $output .='
		'; if ( $img_one != '' ) { $output .='
		<div class="'; if ( $img_seven != '' ) { $output .='col-md-4 col-sm-6 col-xs-6'; } else { $output .='col-md-2 col-sm-3 col-xs-3'; } $output .=' text-center m-bottom2 left-padd0"> '.$img_one['thumbnail'].' </div>
		'; } if ( $img_two != '' ) { $output .='
        <div class="'; if ( $img_seven != '' ) { $output .='col-md-4 col-sm-6 col-xs-6'; } else { $output .='col-md-2 col-sm-3 col-xs-3'; } $output .=' text-center m-bottom2 left-padd0"> '.$img_two['thumbnail'].' </div>
		'; } if ( $img_three != '' ) { $output .='
        <div class="'; if ( $img_seven != '' ) { $output .='col-md-4 col-sm-6 col-xs-6'; } else { $output .='col-md-2 col-sm-3 col-xs-3'; } $output .=' text-center m-bottom2 left-padd0"> '.$img_three['thumbnail'].' </div>
		'; } if ( $img_four != '' ) { $output .='
        <div class="'; if ( $img_seven != '' ) { $output .='col-md-4 col-sm-6 col-xs-6'; } else { $output .='col-md-2 col-sm-3 col-xs-3'; } $output .=' text-center m-bottom2 left-padd0"> '.$img_four['thumbnail'].' </div>
		'; } if ( $img_five != '' ) { $output .='
        <div class="'; if ( $img_seven != '' ) { $output .='col-md-4 col-sm-6 col-xs-6'; } else { $output .='col-md-2 col-sm-3 col-xs-3'; } $output .=' text-center m-bottom2 left-padd0"> '.$img_five['thumbnail'].' </div>
		'; } if ( $img_six != '' ) { $output .='
        <div class="'; if ( $img_seven != '' ) { $output .='col-md-4 col-sm-6 col-xs-6'; } else { $output .='col-md-2 col-sm-3 col-xs-3'; } $output .=' text-center m-bottom2 left-padd0"> '.$img_six['thumbnail'].' </div>
		'; } $output .='
       </div>
    </div>
  </div>';
	
	return $output;
}
add_shortcode('maxhost_clients_block_one', 'maxhost_clients_block_one_shortcode');

/***********************
Content With Image Block
***********************/
function maxhost_content_with_image_shortcode( $atts ) {
	$output = $image_one = '';
	extract( shortcode_atts( array(
	'image_one' => $image_one,
	'heading1' => '',
	'text' => '',
	'button_url' => '',
	'button_label' => '',
	), $atts ) );
	
	$img_one_id = preg_replace( '/[^\d]/', '', $image_one );
	
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_one = wpb_getImageBySize( array( 'attach_id' => $img_one_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_one = '';
				}
	
	$output = '<div class="m-top6">
        <div>
          <h2 class="font-color font30 font-bold uppercase m-bottom2">'.esc_attr( $heading1 ).'</h2>
          <div class="post-img m-bottom2"> '.$img_one['thumbnail'].' </div>
          <p>'.$text.'</p>
          <div class="button m-top2"><a class="uppercase font13" href="'.esc_url( $button_url ).'">'.esc_attr( $button_label ).' <i class="fa fa-arrow-circle-right"></i></a></div>
        </div>
      </div>';
	
	return $output;
}
add_shortcode('maxhost_shortcode_content_with_image', 'maxhost_content_with_image_shortcode');

/*************************
Content With Bullet Points
*************************/
function maxhost_content_with_bullets_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'section_style' => '',
	'bullets' => '',
	'heading1' => '',
	'text' => '',
	'button_url' => '',
	'button_label' => '',
	), $atts ) );
	
	if(!empty($bullets)){
      $out = '<ul class="'.$section_style.'">';
      $bullets = !empty($bullets) ? explode("\n", trim($bullets)) : array(); 
      foreach($bullets as $bullet) {
        $out .= '<li';if ( $section_style == 'list-group' ) { $out .=' class="list-group"'; } $out .= '><i class="';if ( $section_style == 'list-group' ) { $out .='fa fa-check'; } else { $out .='fa fa-arrow-circle-right'; } $out .='"></i> '.htmlspecialchars_decode($bullet).'</li>';
      }
      $out .= '</ul>';
      $content = $out;
    }
	$output = '<div class="m-bottom4">
          <h2 class="font-black m-bottom2">'.esc_attr( $heading1 ).'</h2>
          <p class="m-bottom2">'.$text.'</p>';
		  if(!empty($bullets)){
    $output .= ''.do_shortcode($content).'';
		  }
    $output .= '<div class="button m-top3"><a href="'.esc_url( $button_url ).'" class="btn grey-border uppercase font13">'.esc_attr( $button_label ).'</a></div>
        </div>';
	
	return $output;
}
add_shortcode('maxhost_shortcode_content_with_bullets', 'maxhost_content_with_bullets_shortcode');

/******
Counter
******/
function maxhost_counter_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'heading' => '',
	'bottom_text' => '',
	'counter_title1' => '',
	'counter_number1' => '',
	'counter_title2' => '',
	'counter_number2' => '',
	'counter_title3' => '',
	'counter_number3' => '',
	'counter_title4' => '',
	'counter_number4' => '',
	), $atts ) );
	
	$output = '<div class="section-lg m-top6">
    <div class="container">
      <div class="row">
        <div class="title1 text-center">
          <h2 class="uppercase font-bold font18 one"><span class="line blueline"></span> '.esc_attr( $heading ).'</h2>
        </div>
        <div class="col-sm-3 font-center counters text-center m-bottom3"> <span id="target" class="font100 font-black">'.esc_attr( $counter_number1 ).'</span>
          <p class="font-grey m-top-2">'.esc_attr( $counter_title1 ).'</p>
          <i class="fa fa-plus font-color font20 plus-icon"></i> </div>
        <div class="col-sm-3 font-center counters text-center m-bottom3"> <span id="target2" class="font100 font-black">'.esc_attr( $counter_number2 ).'</span>
          <p class="font-grey m-top-2">'.esc_attr( $counter_title2 ).'</p>
          <i class="fa fa-plus font-color font20 plus-icon"></i> </div>
        <div class="col-sm-3 font-center counters text-center m-bottom3"> <span id="target3" class="font100 font-black">'.esc_attr( $counter_number3 ).'</span>
          <p class="font-grey m-top-2">'.esc_attr( $counter_title3 ).'</p>
          <i class="fa fa-plus font-color font20 plus-icon"></i> </div>
        <div class="col-sm-3 font-center counters lst text-center m-bottom3"> <span id="target4" class="font100 font-black">'.esc_attr( $counter_number4 ).'</span>
          <p class="font-grey m-top-2">'.esc_attr( $counter_title4 ).'</p>
        </div>
        <div class="col-sm-12 font-color font-thin font20 text-center">'.$bottom_text.'</div>
      </div>
    </div>
  </div>

  <script>
  (function($) {
 "use strict";

(function(d){var p=function(b){return b.split("").reverse().join("")},l={numberStep:function(b,a){var e=Math.floor(b);d(a.elem).text(e)}},h=function(b){var a=b.elem;a.nodeType&&a.parentNode&&(a=a._animateNumberSetter,a||(a=l.numberStep),a(b.now,b))};d.Tween&&d.Tween.propHooks?d.Tween.propHooks.number={set:h}:d.fx.step.number=h;d.animateNumber={numberStepFactories:{append:function(b){return function(a,e){var k=Math.floor(a);d(e.elem).prop("number",a).text(k+b)}},separator:function(b,a){b=b||" ";a=
a||3;return function(e,k){var c=Math.floor(e).toString(),s=d(k.elem);if(c.length>a){for(var f=c,g=a,l=f.split("").reverse(),c=[],m,q,n,r=0,h=Math.ceil(f.length/g);r<h;r++){m="";for(n=0;n<g;n++){q=r*g+n;if(q===f.length)break;m+=l[q]}c.push(m)}f=c.length-1;g=p(c[f]);c[f]=p(parseInt(g,10).toString());c=(void 0).join(b);c=p(c)}s.prop("number",e).text(c)}}}};d.fn.animateNumber=function(){for(var b=arguments[0],a=d.extend({},l,b),e=d(this),k=[a],c=1,h=arguments.length;c<h;c++)k.push(arguments[c]);if(b.numberStep){var f=
this.each(function(){this._animateNumberSetter=b.numberStep}),g=a.complete;a.complete=function(){f.each(function(){delete this._animateNumberSetter});g&&g.apply(this,arguments)}}return e.animate.apply(e,k)}})(jQuery);

$("#target").animateNumber(
    {
      number: '.esc_attr( $counter_number1 ).',

      numberStep: function(now, tween) {
        var floored_number = Math.floor(now),
            target = $(tween.elem);
        
        target.text(floored_number);
      }
    },
    10000
  )
  $("#target2").animateNumber(
    {
      number: '.esc_attr( $counter_number2 ).',

      numberStep: function(now, tween) {
        var floored_number = Math.floor(now),
            target = $(tween.elem);
        
        target.text(floored_number);
      }
    },
    10000
  )
   $("#target3").animateNumber(
    {
      number: '.esc_attr( $counter_number3 ).',

      numberStep: function(now, tween) {
        var floored_number = Math.floor(now),
            target = $(tween.elem);
        
        target.text(floored_number);
      }
    },
    7000
  )
    $("#target4").animateNumber(
    {
      number: '.esc_attr( $counter_number4 ).',

      numberStep: function(now, tween) {
        var floored_number = Math.floor(now),
            target = $(tween.elem);
        
        target.text(floored_number);
      }
    },
    10000
  )	
})(jQuery); 
  </script>';
	
	return $output;
}
add_shortcode('maxhost_counter', 'maxhost_counter_shortcode');

/*****************
Domain Package Box
*****************/
function maxhost_domains_package_box_shortcode( $atts ) {
	$output = $image_one = '';
	extract( shortcode_atts( array(
	'image_one' => $image_one,
	'text' => '',
	'price' => '',
	'button_url' => '',
	'button_label' => '',
	), $atts ) );
	
	$img_one_id = preg_replace( '/[^\d]/', '', $image_one );
	
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_one = wpb_getImageBySize( array( 'attach_id' => $img_one_id, 'thumb_size' => '75x30') );
				} else {
				$img_one = '';
				}
	
	$output = '<div class="m-top1 m-bottom4">
          <div class="domin-plan text-center">
            <div class="m-bottom2">'.$img_one['thumbnail'].'</div>
            <p class="m-top2">'.$text.'</p>
            <div class="font-bold font35 font-red">'.esc_attr( $price ).'</div>
            <div class="button m-top2"><a href="'.esc_url( $button_url ).'" class="btn boxed-color-sm orange uppercase">'.esc_attr( $button_label ).' <i class="fa fa-arrow-circle-right"></i></a></div>
          </div>
        </div>';
	
	return $output;
}
add_shortcode('maxhost_domain_package_box', 'maxhost_domains_package_box_shortcode');

/*********************
Domains Register Block
*********************/
function maxhost_domains_register_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'heading1' => '',
	'domain1' => '',
	'domain2' => '',
	'domain3' => '',
	'domain4' => '',
	'domain5' => '',
	'register_url' => '',
	), $atts ) );
	
	$output = '<div class="m-top8 m-bottom3">
          <h2 class="font-bold font20 font-white color-bg one uppercase">'.esc_attr( $heading1 ).'</h2>';
		if ( $domain1 != '' ) {
        $output .= '<div class="domain-list"><span class="font-bold font20">'.esc_attr( $domain1 ).'</span><a class="pull-right" href="'.esc_url( $register_url ).'">'.__('REGISTER', 'maxhost').'</a></div>';
		} if ( $domain2 != '' ) {
		$output .= '<div class="domain-list"><span class="font-bold font20">'.esc_attr( $domain2 ).'</span><a class="pull-right" href="'.esc_url( $register_url ).'">'.__('REGISTER', 'maxhost').'</a></div>';
		} if ( $domain3 != '' ) {
		$output .= '<div class="domain-list"><span class="font-bold font20">'.esc_attr( $domain3 ).'</span><a class="pull-right" href="'.esc_url( $register_url ).'">'.__('REGISTER', 'maxhost').'</a></div>';
		} if ( $domain4 != '' ) {
		$output .= '<div class="domain-list"><span class="font-bold font20">'.esc_attr( $domain4 ).'</span><a class="pull-right" href="'.esc_url( $register_url ).'">'.__('REGISTER', 'maxhost').'</a></div>';
		} if ( $domain5 != '' ) {
		$output .= '<div class="domain-list"><span class="font-bold font20">'.esc_attr( $domain5 ).'</span><a class="pull-right" href="'.esc_url( $register_url ).'">'.__('REGISTER', 'maxhost').'</a></div>';
		} $output .= '
		</div>';
	
	return $output;
}
add_shortcode('maxhost_domains_register', 'maxhost_domains_register_shortcode');

/**********************
Domain Search Block - 1
**********************/
function maxhost_domain_search_block_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'section_style' => '',
	'section_heading1' => '',
	'search_pholder' => '',
	'domain' => '',
	'sample_domain1' => '',
	'sample_domain1_pricing' => '',
	'sample_domain2' => '',
	'sample_domain2_pricing' => '',
	'sample_domain3' => '',
	'sample_domain3_pricing' => '',
	'sample_domain4' => '',
	'sample_domain4_pricing' => '',
	'sample_domain5' => '',
	'sample_domain5_pricing' => '',
	'small_note' => '',
	'button_label' => '',
	'purchase_btn_name' => '',
	'search_action_url' => '',
	'view_domain_url' => '',
	'bulk_domain_url' => '',
	'transfer_domain_url' => '',
	'ajax_search' => '',
	), $atts ) );

	if ( $ajax_search != false ) {
	//If Ajax Domain Checker Selected
	$output = '
  <div class="section-lg '.$section_style.'">
    <div class="container">
      ';if ( $section_style != 'domain-page-header m-top0' ) { $output .='<div class="row">'; } $output .='
		'; if ( $section_style == 'domain-page-header m-top0' ) { $output .='
		<h2 class="uppercase font35 font-bold font-white text-center m-bottom3">'.esc_attr( $section_heading1 ).'</h2>
		'; } $output .='
		'; if (( $section_style == 'm-top5 m-bottom5' ) || ( $section_style == 'm-top0 domain-search' )) { $output .='
		<div class="col-md-4">
          <h2 class="'; if ( $section_style == 'm-top0 domain-search' ) { $output .='font-white '; } $output .='font-thin font30 m-bottom1">'.esc_attr( $section_heading1 ).'</h2>
          <h5 class="'; if ( $section_style == 'm-top0 domain-search' ) { $output .='font-white font-thin '; } $output .='font16">'.esc_attr( $small_note ).'</h5>
        </div>
		'; } 
		$output .='
        <div id="domain-form" class="'; if (( $section_style == 'm-top0 domain-search shape-white' ) || ( $section_style == 'm-top0 domain-search white-bg' ) || ( $section_style == 'domain-page-header m-top0' )) { $output .='col-md-12'; } if (( $section_style == 'm-top5 m-bottom5' ) || ( $section_style == 'm-top0 domain-search' )) { $output .='col-md-8'; } $output .='">
          '; $output .='
				<form method="post" action="./" id="form" class="pure-form">
            <input class="input-text '; if (( $section_style == 'm-top0 domain-search white-bg' ) || ( $section_style == 'domain-page-header m-top0' )) { $output .='wide-input'; } if ( $section_style == 'm-top0 domain-search shape-white' ) { $output .='dsearch-sty1'; } if (( $section_style == 'm-top5 m-bottom5' ) || ( $section_style == 'm-top0 domain-search' )) { $output .='dsearch-home2'; } $output .='" id="Search" name="domain" value="" placeholder="'.esc_attr( $search_pholder ).'" type="text" />
			<input type="hidden" name="url" value="'.esc_url( $search_action_url ).'"/>
			'; if(!empty($purchase_btn_name)){ $output .='
			<input type="hidden" name="purchase_btn_name" value="'.esc_html( $purchase_btn_name ).'"/>
			'; } 
		   if (( $section_style != 'm-top0 domain-search white-bg' ) && ( $section_style != 'domain-page-header m-top0' )) { 
				if(!empty($domain)){
                    $output1 = '<select id="domainext" class="selectpicker '; if ( $section_style == 'm-top0 domain-search shape-white' ) { $output1 .='sty1'; } if ( $section_style == 'm-top5 m-bottom5' ) { $output1 .='selectpicker-home2'; } $output1 .='" name="domainext" data-style="btn-primary">';
					 $domain = !empty($domain) ? explode("\n", trim($domain)) : array();
                      foreach ( $domain as $label ) {
                       if( $label ) { 
						$extvalue = str_replace(array('<br />'), '', $label);
                         $output1 .= '<option value="'.$extvalue.'">'.htmlspecialchars_decode($label).'</option>';
                       }
                      }
                    $output1 .= '</select>';
					$content = $output1;
                  }
				  if(!empty($domain)){
				  $output .= do_shortcode($content);
				  }
			}
				  if ($button_label=='Transfer') { $output .='
							<input class="btn '; if (( $section_style == 'm-top5 m-bottom5' ) || ( $section_style == 'm-top0 domain-search white-bg' ) || ( $section_style == 'domain-page-header m-top0' )) { $output .='blue-button uppercase'; } if (( $section_style == 'm-top0 domain-search shape-white' ) || ( $section_style == 'm-top0 domain-search' )) { $output .='black-button uppercase'; } $output .='" id="submit" value="'.esc_attr( $button_label ).'" type="submit" name="transfer" />'; }
							else { $output .='<input class="btn '; if (( $section_style == 'm-top5 m-bottom5' ) || ( $section_style == 'm-top0 domain-search white-bg' ) || ( $section_style == 'domain-page-header m-top0' )) { $output .='blue-button uppercase'; } if (( $section_style == 'm-top0 domain-search shape-white' ) || ( $section_style == 'm-top0 domain-search' )) { $output .='black-button uppercase'; } $output .='" id="submit" value="'.esc_attr( $button_label ).'" type="submit" />'; }
							$output .='
							
          </form>
		  <div id="loading"><b class="domaincheckerloading">Loading...</b></div>
		 <div id="results" class="result"></div>
        </div>
		'; 
		$output .='<p><div id="results" class="result"></div></p>';
		if ( $section_style == 'm-top0 domain-search shape-white' ) { $output .='
        <div class="col-md-12 font-bold font20 text-center font-white domin-list m-top3">
		'; if ( $sample_domain1 != '' ) { $output .=''.esc_attr( $sample_domain1 ).' <span class="font-thin">'.esc_attr( $sample_domain1_pricing ).'</span> <span class="space-pad"></span>'; } $output .='
					'; if ( $sample_domain2 != '' ) { $output .=''.esc_attr( $sample_domain2 ).' <span class="font-thin">'.esc_attr( $sample_domain2_pricing ).'</span> <span class="space-pad"></span>'; } $output .='
					'; if ( $sample_domain3 != '' ) { $output .=''.esc_attr( $sample_domain3 ).' <span class="font-thin">'.esc_attr( $sample_domain3_pricing ).'</span> <span class="space-pad"></span>'; } $output .='
					'; if ( $sample_domain4 != '' ) { $output .=''.esc_attr( $sample_domain4 ).' <span class="font-thin">'.esc_attr( $sample_domain4_pricing ).'</span> <span class="space-pad"></span>'; } $output .='
					'; if ( $sample_domain5 != '' ) { $output .=''.esc_attr( $sample_domain5 ).' <span class="font-thin">'.esc_attr( $sample_domain5_pricing ).'</span> <span class="space-pad"></span>'; } $output .='
			'; if ( $small_note != '' ) { $output .='<small class="font13 font-thin">'.esc_attr( $small_note ).'</small>'; } $output .='
		</div>
		'; } $output .='
		'; if (( $section_style == 'm-top0 domain-search white-bg' ) || ( $section_style == 'domain-page-header m-top0' )) { $output .='
		<div class="col-md-6 font-bold domin-list m-top3 m-bottom4'; if ( $section_style == 'domain-page-header m-top0' ) { $output .=' font-white'; } $output .='">
		'; if ( $sample_domain1 != '' ) { $output .=''.esc_attr( $sample_domain1 ).' <span class="font-color">'.esc_attr( $sample_domain1_pricing ).'</span> <small class="font-red">*</small> <span class="space-pad"></span>'; } $output .='
					'; if ( $sample_domain2 != '' ) { $output .=''.esc_attr( $sample_domain2 ).' <span class="font-color">'.esc_attr( $sample_domain2_pricing ).'</span> <small class="font-red">*</small> <span class="space-pad"></span>'; } $output .='
					'; if ( $sample_domain3 != '' ) { $output .=''.esc_attr( $sample_domain3 ).' <span class="font-color">'.esc_attr( $sample_domain3_pricing ).'</span> <small class="font-red">*</small> <span class="space-pad"></span>'; } $output .='
					'; if ( $sample_domain4 != '' ) { $output .=''.esc_attr( $sample_domain4 ).' <span class="font-color">'.esc_attr( $sample_domain4_pricing ).'</span> <small class="font-red">*</small> <span class="space-pad"></span>'; } $output .='
					'; if ( $sample_domain5 != '' ) { $output .=''.esc_attr( $sample_domain5 ).' <span class="font-color">'.esc_attr( $sample_domain5_pricing ).'</span> <span class="space-pad"></span>'; } $output .='
		</div>
		<div class="col-md-6 m-top3 text-right m-bottom4'; if ( $section_style == 'domain-page-header m-top0' ) { $output .=' view-links'; } $output .='"> 
			'; if ( $view_domain_url != '' ) { $output .='<a href="'.esc_url( $view_domain_url ).'">'.__('View Domain Price List', 'maxhost').'</a> <span>-</span>'; } $output .='
			'; if ( $bulk_domain_url != '' ) { $output .='<a href="'.esc_url( $bulk_domain_url ).'">'.__('Bulk Domain Search', 'maxhost').'</a> <span>-</span>'; } $output .='
			'; if ( $transfer_domain_url != '' ) { $output .='<a href="'.esc_url( $transfer_domain_url ).'">'.__('Transfer Domain', 'maxhost').'</a>'; } $output .='
		</div>
		'; } $output .='
      ';if ( $section_style != 'domain-page-header m-top0' ) { $output .='</div>'; } $output .='
    </div>
  </div>';
  
  //If Ajax Domain Checker Not Selected
  } else {
  $output = '
  <div class="section-lg '.$section_style.'">
    <div class="container">
      ';if ( $section_style != 'domain-page-header m-top0' ) { $output .='<div class="row">'; } $output .='
		'; if ( $section_style == 'domain-page-header m-top0' ) { $output .='
		<h2 class="uppercase font35 font-bold font-white text-center m-bottom3">'.esc_attr( $section_heading1 ).'</h2>
		'; } $output .='
		'; if (( $section_style == 'm-top5 m-bottom5' ) || ( $section_style == 'm-top0 domain-search' )) { $output .='
		<div class="col-md-4">
          <h2 class="'; if ( $section_style == 'm-top0 domain-search' ) { $output .='font-white '; } $output .='font-thin font30 m-bottom1">'.esc_attr( $section_heading1 ).'</h2>
          <h5 class="'; if ( $section_style == 'm-top0 domain-search' ) { $output .='font-white font-thin '; } $output .='font16">'.esc_attr( $small_note ).'</h5>
        </div>
		'; }
		$output .='
        <div class="'; if (( $section_style == 'm-top0 domain-search shape-white' ) || ( $section_style == 'm-top0 domain-search white-bg' ) || ( $section_style == 'domain-page-header m-top0' )) { $output .='col-md-12'; } if (( $section_style == 'm-top5 m-bottom5' ) || ( $section_style == 'm-top0 domain-search' )) { $output .='col-md-8'; } $output .='">
          '; if ( $search_action_url != '' ) { $output .='
				<form method="POST" id="domain-searchform" action="'.esc_url( $search_action_url ).'">
				'; } else { $output .='
				<form method="POST" id="domain-searchform" action="javascript:void(0)">
				'; } $output .='
            <input class="input-text '; if (( $section_style == 'm-top0 domain-search white-bg' ) || ( $section_style == 'domain-page-header m-top0' )) { $output .='wide-input'; } if ( $section_style == 'm-top0 domain-search shape-white' ) { $output .='dsearch-sty1'; } if (( $section_style == 'm-top5 m-bottom5' ) || ( $section_style == 'm-top0 domain-search' )) { $output .='dsearch-home2'; } $output .='" name="domain" id="dsearch" value="" placeholder="'.esc_attr( $search_pholder ).'" type="text" />';
            if (( $section_style != 'm-top0 domain-search white-bg' ) && ( $section_style != 'domain-page-header m-top0' )) { 
				if(!empty($domain)){
                    $output1 = '<select class="selectpicker '; if ( $section_style == 'm-top0 domain-search shape-white' ) { $output1 .='sty1'; } if ( $section_style == 'm-top5 m-bottom5' ) { $output1 .='selectpicker-home2'; } $output1 .='" name="ext" data-style="btn-primary">';
					 $domain = !empty($domain) ? explode("\n", trim($domain)) : array();
                      foreach ( $domain as $label ) {
                       if( $label ) {    
                         $output1 .= '<option>'.htmlspecialchars_decode($label).'</option>';
                       }
                      }
                    $output1 .= '</select>';
					$content = $output1;
                  }
				  if(!empty($domain)){
				  $output .= do_shortcode($content);
				  }
			}
				  if ($button_label=='Transfer') { $output .='
							<input class="btn '; if (( $section_style == 'm-top5 m-bottom5' ) || ( $section_style == 'm-top0 domain-search white-bg' ) || ( $section_style == 'domain-page-header m-top0' )) { $output .='blue-button uppercase'; } if (( $section_style == 'm-top0 domain-search shape-white' ) || ( $section_style == 'm-top0 domain-search' )) { $output .='black-button uppercase'; } $output .='" id="submit" value="'.esc_attr( $button_label ).'" type="submit" name="transfer" />'; }
							else { $output .='<input class="btn '; if (( $section_style == 'm-top5 m-bottom5' ) || ( $section_style == 'm-top0 domain-search white-bg' ) || ( $section_style == 'domain-page-header m-top0' )) { $output .='blue-button uppercase'; } if (( $section_style == 'm-top0 domain-search shape-white' ) || ( $section_style == 'm-top0 domain-search' )) { $output .='black-button uppercase'; } $output .='" id="submit" value="'.esc_attr( $button_label ).'" type="submit" />'; }
							$output .='
          </form>
        </div>
		'; if ( $section_style == 'm-top0 domain-search shape-white' ) { $output .='
        <div class="col-md-12 font-bold font20 text-center font-white domin-list m-top3">
		'; if ( $sample_domain1 != '' ) { $output .=''.esc_attr( $sample_domain1 ).' <span class="font-thin">'.esc_attr( $sample_domain1_pricing ).'</span> <span class="space-pad"></span>'; } $output .='
					'; if ( $sample_domain2 != '' ) { $output .=''.esc_attr( $sample_domain2 ).' <span class="font-thin">'.esc_attr( $sample_domain2_pricing ).'</span> <span class="space-pad"></span>'; } $output .='
					'; if ( $sample_domain3 != '' ) { $output .=''.esc_attr( $sample_domain3 ).' <span class="font-thin">'.esc_attr( $sample_domain3_pricing ).'</span> <span class="space-pad"></span>'; } $output .='
					'; if ( $sample_domain4 != '' ) { $output .=''.esc_attr( $sample_domain4 ).' <span class="font-thin">'.esc_attr( $sample_domain4_pricing ).'</span> <span class="space-pad"></span>'; } $output .='
					'; if ( $sample_domain5 != '' ) { $output .=''.esc_attr( $sample_domain5 ).' <span class="font-thin">'.esc_attr( $sample_domain5_pricing ).'</span> <span class="space-pad"></span>'; } $output .='
			'; if ( $small_note != '' ) { $output .='<small class="font13 font-thin">'.esc_attr( $small_note ).'</small>'; } $output .='
		</div>
		'; } $output .='
		'; if (( $section_style == 'm-top0 domain-search white-bg' ) || ( $section_style == 'domain-page-header m-top0' )) { $output .='
		<div class="col-md-6 font-bold domin-list m-top3 m-bottom4'; if ( $section_style == 'domain-page-header m-top0' ) { $output .=' font-white'; } $output .='">
		'; if ( $sample_domain1 != '' ) { $output .=''.esc_attr( $sample_domain1 ).' <span class="font-color">'.esc_attr( $sample_domain1_pricing ).'</span> <small class="font-red">*</small> <span class="space-pad"></span>'; } $output .='
					'; if ( $sample_domain2 != '' ) { $output .=''.esc_attr( $sample_domain2 ).' <span class="font-color">'.esc_attr( $sample_domain2_pricing ).'</span> <small class="font-red">*</small> <span class="space-pad"></span>'; } $output .='
					'; if ( $sample_domain3 != '' ) { $output .=''.esc_attr( $sample_domain3 ).' <span class="font-color">'.esc_attr( $sample_domain3_pricing ).'</span> <small class="font-red">*</small> <span class="space-pad"></span>'; } $output .='
					'; if ( $sample_domain4 != '' ) { $output .=''.esc_attr( $sample_domain4 ).' <span class="font-color">'.esc_attr( $sample_domain4_pricing ).'</span> <small class="font-red">*</small> <span class="space-pad"></span>'; } $output .='
					'; if ( $sample_domain5 != '' ) { $output .=''.esc_attr( $sample_domain5 ).' <span class="font-color">'.esc_attr( $sample_domain5_pricing ).'</span> <span class="space-pad"></span>'; } $output .='
		</div>
		<div class="col-md-6 m-top3 text-right m-bottom4'; if ( $section_style == 'domain-page-header m-top0' ) { $output .=' view-links'; } $output .='"> 
			'; if ( $view_domain_url != '' ) { $output .='<a href="'.esc_url( $view_domain_url ).'">'.__('View Domain Price List', 'maxhost').'</a> <span>-</span>'; } $output .='
			'; if ( $bulk_domain_url != '' ) { $output .='<a href="'.esc_url( $bulk_domain_url ).'">'.__('Bulk Domain Search', 'maxhost').'</a> <span>-</span>'; } $output .='
			'; if ( $transfer_domain_url != '' ) { $output .='<a href="'.esc_url( $transfer_domain_url ).'">'.__('Transfer Domain', 'maxhost').'</a>'; } $output .='
		</div>
		'; } $output .='
      ';if ( $section_style != 'domain-page-header m-top0' ) { $output .='</div>'; } $output .='
    </div>
  </div>';
  }
	
	return $output;
}
add_shortcode('hosting_domain_search', 'maxhost_domain_search_block_shortcode');

/********************
Features with Icons-1
********************/
function maxhost_iconic_features_one_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'icon' => '',
	'fawesome' => '',
	'title' => '',
	'text' => '',
	'active' => '',
	), $atts ) );

	$output ='<div class="m-bottom4 fea-col-box '; if ( $active != false ) { $output .='active'; } $output .='">
                <div class="icon-boxed wide80 box-round">'; if ( $fawesome != false ) { $output .='<span class="fa fa-'.esc_attr( $icon ).' font30"></span>'; } else { $output .='<span class="icon-'.esc_attr( $icon ).' font30"></span>'; } $output .='</div>
                <div class="left-padd10">
                  <h2 class="font-thin m-bottom1">'.esc_attr( $title ).'</h2>
                  <p>'.$text.'</p>
                </div>
              </div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_iconic_features_one', 'maxhost_iconic_features_one_shortcode');

/********************
Features with Icons-2
********************/
function maxhost_iconic_features_two_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'icon' => '',
	'fawesome' => '',
	'title' => '',
	'text' => '',
	'active' => '',
	'font_color' => '',
	), $atts ) );

	$output ='<div class="m-bottom5 fea-sce-col '; if ( $active != false ) { $output .='active'; } $output .='">
				<div class="iconbox-left">'; if ( $fawesome != false ) { $output .='<span class="fa fa-'.esc_attr( $icon ).' font60 font-color"></span>'; } else { $output .='<span class="icon-'.esc_attr( $icon ).' font60 font-color"></span>'; } $output .='</div>
				<div class="left-padd8 '; if ( $font_color != '' ) { $output .=''.$font_color.''; } else { $output .=''; } $output .='">
				  <h2 class="font-thin m-bottom1 '; if ( $font_color != '' ) { $output .=''.$font_color.''; } else { $output .=''; } $output .='">'.esc_attr( $title ).'</h2>
				  <p>'.$text.'</p>
				</div>
			  </div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_iconic_features_two', 'maxhost_iconic_features_two_shortcode');

/********************
Features with Icons-3
********************/
function maxhost_iconic_features_three_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'icon' => '',
	'fawesome' => '',
	'title' => '',
	'text' => '',
	'active' => '',
	'font_color' => '',
	), $atts ) );

	$output ='	<div class="fea-col text-center m-bottom4">
				  <div class="iconbox '; if ( $active != false ) { $output .='active'; } $output .='">'; if ( $fawesome != false ) { $output .='<span class="fa fa-'.esc_attr( $icon ).' font30"></span>'; } else { $output .='<span class="icon-'.esc_attr( $icon ).' font30"></span>'; } $output .='</div>
				  <h2 class="font-thin font20 m-top2 '; if ( $font_color != '' ) { $output .=''.$font_color.''; } else { $output .=''; } $output .='">'.esc_attr( $title ).'</h2>
				  <p class="m-top1 '; if ( $font_color != '' ) { $output .=''.$font_color.''; } else { $output .=''; } $output .='">'.$text.'</p>
				</div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_iconic_features_three', 'maxhost_iconic_features_three_shortcode');

/********************
Features with Icons-4
********************/
function maxhost_iconic_features_four_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'icon' => '',
	'fawesome' => '',
	'title' => '',
	'text' => '',
	'active' => '',
	'font_color' => '',
	), $atts ) );

	$output ='	<div class="fea-sce-col m-bottom3 '; if ( $active != false ) { $output .='active'; } $output .='">
					<div class="icon-boxed">'; if ( $fawesome != false ) { $output .='<span class="fa fa-'.esc_attr( $icon ).' font30"></span>'; } else { $output .='<span class="icon-'.esc_attr( $icon ).' font30"></span>'; } $output .='</div>
					<div class="left-padd8 '; if ( $font_color != '' ) { $output .=''.$font_color.''; } else { $output .=''; } $output .='">
					  <h2 class="font-thin m-bottom1 '; if ( $font_color != '' ) { $output .=''.$font_color.''; } else { $output .=''; } $output .='">'.esc_attr( $title ).'</h2>
					  '.$text.'</div>
				  </div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_iconic_features_four', 'maxhost_iconic_features_four_shortcode');

/********************
Features with Icons-5
********************/
function maxhost_iconic_features_five_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'icon' => '',
	'fawesome' => '',
	'title' => '',
	'text' => '',
	'font_color' => '',
	), $atts ) );

	$output ='	<div class="fea-col text-left m-bottom4">
				  <div class="font-color">'; if ( $fawesome != false ) { $output .='<span class="fa fa-'.esc_attr( $icon ).' font30"></span>'; } else { $output .='<span class="icon-'.esc_attr( $icon ).' font30"></span>'; } $output .='</div>
				  <h2 class="font-thin font20 m-top2 '; if ( $font_color != '' ) { $output .=''.$font_color.''; } else { $output .=''; } $output .='">'.esc_attr( $title ).'</h2>
				  <p class="m-top2 '; if ( $font_color != '' ) { $output .=''.$font_color.''; } else { $output .=''; } $output .='">'.$text.'</p>
				</div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_iconic_features_five', 'maxhost_iconic_features_five_shortcode');

/********************
Features with Icons-6
********************/
function maxhost_iconic_features_six_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'icon' => '',
	'fawesome' => '',
	'title' => '',
	'text' => '',
	'active' => '',
	), $atts ) );

	$output ='<div class="col-md-12 text-left m-bottom5">
            <div class="fea-sce-col '; if ( $active != false ) { $output .='active'; } $output .='">
              <div class="icon-boxed wide90">'; if ( $fawesome != false ) { $output .='<span class="fa fa-'.esc_attr( $icon ).' font30"></span>'; } else { $output .='<span class="icon-'.esc_attr( $icon ).' font30"></span>'; } $output .='</div>
              <div class="left-padd11">
                <h2 class="font-thin m-bottom1">'.esc_attr( $title ).'</h2>
                <p>'.$text.'</p>
              </div>
            </div>
          </div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_iconic_features_six', 'maxhost_iconic_features_six_shortcode');

/********************
Features with Icons-7
********************/
function maxhost_iconic_features_seven_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'icon' => '',
	'fawesome' => '',
	'title' => '',
	'text' => '',
	'active' => '',
	), $atts ) );

	$output ='<div class="col-md-12 text-left m-bottom5">
            <div class="fea-sce-col '; if ( $active != false ) { $output .='active'; } $output .='">
              <div class="icon-boxed wide90 box-round">'; if ( $fawesome != false ) { $output .='<span class="fa fa-'.esc_attr( $icon ).' font30"></span>'; } else { $output .='<span class="icon-'.esc_attr( $icon ).' font30"></span>'; } $output .='
			  </div>
              <div class="left-padd11">
                <h2 class="font-thin m-bottom1">'.esc_attr( $title ).'</h2>
                <p>'.$text.'</p>
              </div>
            </div>
          </div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_iconic_features_seven', 'maxhost_iconic_features_seven_shortcode');

/*****************
Features Block - 1
*****************/
function maxhost_features_block_one_shortcode( $atts ) {
	$output = $image_one = '';
	extract( shortcode_atts( array(
	'image_one' => $image_one,
	'left_heading1' => '',
	'left_heading2' => '',
	'right_heading1' => '',
	'right_heading2' => '',
	'domain_name1' => '',
	'domain_name2' => '',
	'domain_name3' => '',
	'domain_name4' => '',
	'domain_name5' => '',
	'button_label1' => '',
	'button_label2' => '',
	'button_label3' => '',
	'button_label4' => '',
	'button_label5' => '',
	'button_url1' => '',
	'button_url2' => '',
	'button_url3' => '',
	'button_url4' => '',
	'button_url5' => '',
	'maxhost_shortcodes_parallax_bg' => '',
	'features_one' => '',
	'crossed_top' => '',
	'crossed_bottom' => '',
	), $atts ) );
	
	$img_one_id = preg_replace( '/[^\d]/', '', $image_one );
	
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_one = wpb_getImageBySize( array( 'attach_id' => $img_one_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_one = '';
				}

	if(!empty($features_one)){
      $out_one = '<ul class="font-white nopadding line-height">';
      $features_one = !empty($features_one) ? explode("\n", trim($features_one)) : array(); 
      foreach($features_one as $feature_one) {
        $out_one .= '<li><i class="fa  fa-check-square"></i> '.htmlspecialchars_decode($feature_one).'</li>';
      }
      $out_one .= '</ul>';
      $content_one = $out_one;
    }
	
	$output = '<div '; if ( $maxhost_shortcodes_parallax_bg != '' ) { $output .= 'style="background: rgba(0, 0, 0, 0) url('.esc_url( $maxhost_shortcodes_parallax_bg ).') no-repeat fixed center top / cover ;" '; } $output .= 'class="section-lg bg-parallax-11 m-top7 '; if ( $crossed_top != false ) { $output .='p-top_ulta7 '; } if ( $crossed_bottom != false ) { $output .='p-bottom_ulta7'; } $output .='">
    '; if ( $crossed_top != false ) { $output .='<div class="shape-cross-top"></div>'; } $output .='
	<div class="container '; if ( $crossed_top != false ) { $output .='p-top3 '; } $output .='">
      <div class="col-md-6 nopadding m-bottom4">
        <div class="col-fea-box">
          '; if ( $left_heading1 != '' ) { $output .='<h4 class="font-white font-bold font15 text-center uppercase">'.esc_attr( $left_heading1 ).'</h4>'; } $output .='
          <h2 class="font-white font-bold font30 text-center m-bottom3 uppercase">'.esc_attr( $left_heading2 ).'</h2>
          '; if ( $img_one != '' ) { $output .='
		  <div class="col-md-6 col-sm-6 m-bottom2"> '.$img_one['thumbnail'].' </div>
		  '; } $output .='
		  '; if ( $img_one != '' ) { $output .='
          <div class="col-md-6 col-sm-6 m-bottom2">
		  '; } else { $output .='
		  <div class="col-md-12 col-sm-12 m-bottom2">
		  '; } $output .='
            '.do_shortcode($content_one).'
          </div>
        </div>
      </div>
      <div class="col-md-6 nopadding m-bottom4">
        <div class="col-fea-box-white">
          '; if ( $right_heading1 != '' ) { $output .='<h4 class="font-black font-bold font15 text-center uppercase">'.esc_attr( $right_heading1 ).'</h4>'; } $output .='
          <h2 class="font-black font-bold font30 text-center m-bottom3 uppercase">'.esc_attr( $right_heading2 ).'</h2>
          <div class="col-md-12">
            <ul class="new-domin-list nopadding">
			  '; if ( $domain_name1 != '' ) { $output .='
              <li><span>'.esc_attr( $domain_name1 ).'</span> <a href="'.esc_url( $button_url1 ).'" class="pull-right">'.esc_attr( $button_label1 ).'</a></li>
			  '; } if ( $domain_name2 != '' ) { $output .='
              <li><span>'.esc_attr( $domain_name2 ).'</span> <a href="'.esc_url( $button_url2 ).'" class="pull-right">'.esc_attr( $button_label2 ).'</a></li>
              '; } if ( $domain_name3 != '' ) { $output .='
			  <li><span>'.esc_attr( $domain_name3 ).'</span> <a href="'.esc_url( $button_url3 ).'" class="pull-right">'.esc_attr( $button_label3 ).'</a></li>
              '; } if ( $domain_name4 != '' ) { $output .='
			  <li><span>'.esc_attr( $domain_name4 ).'</span> <a href="'.esc_url( $button_url4 ).'" class="pull-right">'.esc_attr( $button_label4 ).'</a></li>
              '; } if ( $domain_name5 != '' ) { $output .='
			  <li><span>'.esc_attr( $domain_name5 ).'</span> <a href="'.esc_url( $button_url5 ).'" class="pull-right">'.esc_attr( $button_label5 ).'</a></li>
			  '; } $output .='
            </ul>
          </div>
        </div>
      </div>
    </div>
	'; if ( $crossed_bottom != false ) { $output .='<div class="shape-cross-bottom"></div>'; } $output .='
  </div>';
	
	return $output;
}
add_shortcode('maxhost_features_block_one', 'maxhost_features_block_one_shortcode');

/*****************
Features Block - 2
*****************/
function maxhost_features_block_two_shortcode( $atts ) {
	$output = $image_one = $image_two = '';
	extract( shortcode_atts( array(
	'image_one' => $image_one,
	'image_two' => $image_two,
	'heading1' => '',
	'heading2' => '',
	'text' => '',
	'maxhost_shortcodes_parallax_bg' => '',
	'features_one' => '',
	'crossed_top' => '',
	'crossed_bottom' => '',
	), $atts ) );
	
	$img_one_id = preg_replace( '/[^\d]/', '', $image_one );
	$img_two_id = preg_replace( '/[^\d]/', '', $image_two );
	
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_one = wpb_getImageBySize( array( 'attach_id' => $img_one_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_one = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_two = wpb_getImageBySize( array( 'attach_id' => $img_two_id, 'thumb_size' => 'full' ) );
				} else {
				$img_two = '';
				}

	if(!empty($features_one)){
      $out_one = '<ul class="listitems font-white m-bottom5">';
      $features_one = !empty($features_one) ? explode("\n", trim($features_one)) : array(); 
      foreach($features_one as $feature_one) {
        $out_one .= '<li><i class="fa fa-arrow-circle-right"></i> '.htmlspecialchars_decode($feature_one).'</li>';
      }
      $out_one .= '</ul>';
      $content_one = $out_one;
    }
	
	$output = '<div '; if ( $maxhost_shortcodes_parallax_bg != '' ) { $output .= 'style="background: rgba(0, 0, 0, 0) url('.esc_url( $maxhost_shortcodes_parallax_bg ).') no-repeat fixed center top / cover ;" '; } $output .= 'class="section-lg bg-parallax-14 m-top3 '; if ( $crossed_top != true ) { $output .='p-top7 '; } if ( $crossed_bottom != true ) { $output .='p-bottom7'; } $output .='">
    '; if ( $crossed_top != false ) { $output .='<div class="shape-cross-top"></div>'; } $output .='
    <div class="container">
      '; if ( $heading1 != '' ) { $output .='<h4 class="font-color font15 uppercase m-top2">'.esc_attr( $heading1 ).'</h4>'; } $output .='
      <h2 class="font-white font-thin-xs font40 m-bottom3 uppercase">'.esc_attr( $heading2 ).'</h2>
      '; if ( $img_one != '' ) { $output .='
          <div class="col-md-4 m-bottom3 left-padd0">
		  '; } else { $output .='
		  <div class="col-md-12 m-bottom3 left-padd0">
		  '; } $output .='
	  
        <p class="font-white m-bottom2">'.$text.'</p>
        '.do_shortcode($content_one).'
        '; if ( $img_two != '' ) { $output .='
		<figure>'.$img_two['thumbnail'].'</figure>
		'; } $output .='
      </div>
	  '; if ( $img_one != '' ) { $output .='
      <div class="col-md-8">
        <figure class="nomargin">'.$img_one['thumbnail'].'</figure>
      </div>
	  '; } $output .='
    </div>
    '; if ( $crossed_bottom != false ) { $output .='<div class="shape-cross-bottom"></div>'; } $output .='
  </div>';
	
	return $output;
}
add_shortcode('maxhost_features_block_two', 'maxhost_features_block_two_shortcode');

/*****************
Features Block - 3
*****************/
function maxhost_features_block_three_shortcode( $atts ) {
	$output = $image_one = $image_two = $image_three = $image_four = $image_five = $image_six = $image_seven = $image_eight = $image_nine = $image_ten = '';
	extract( shortcode_atts( array(
	'image_one' => $image_one,
	'image_two' => $image_two,
	'image_three' => $image_three,
	'image_four' => $image_four,
	'image_five' => $image_five,
	'image_six' => $image_six,
	'image_seven' => $image_seven,
	'image_eight' => $image_eight,
	'image_nine' => $image_nine,
	'image_ten' => $image_ten,
	'left_heading1' => '',
	'left_heading2' => '',
	'right_heading1' => '',
	'right_heading2' => '',
	'price_title' => '',
	'price' => '',
	'price_duration' => '',
	'maxhost_shortcodes_parallax_bg' => '',
	'features_one' => '',
	'crossed_top' => '',
	'crossed_bottom' => '',
	), $atts ) );
	
	$img_one_id = preg_replace( '/[^\d]/', '', $image_one );
	$img_two_id = preg_replace( '/[^\d]/', '', $image_two );
	$img_three_id = preg_replace( '/[^\d]/', '', $image_three );
	$img_four_id = preg_replace( '/[^\d]/', '', $image_four );
	$img_five_id = preg_replace( '/[^\d]/', '', $image_five );
	$img_six_id = preg_replace( '/[^\d]/', '', $image_six );
	$img_seven_id = preg_replace( '/[^\d]/', '', $image_seven );
	$img_eight_id = preg_replace( '/[^\d]/', '', $image_eight );
	$img_nine_id = preg_replace( '/[^\d]/', '', $image_nine );
	$img_ten_id = preg_replace( '/[^\d]/', '', $image_ten );
	
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_one = wpb_getImageBySize( array( 'attach_id' => $img_one_id, 'thumb_size' => 'full', 'class' => 'img-responsive pull-left m-top2 right-padd4' ) );
				} else {
				$img_one = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_two = wpb_getImageBySize( array( 'attach_id' => $img_two_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_two = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_three = wpb_getImageBySize( array( 'attach_id' => $img_three_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_three = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_four = wpb_getImageBySize( array( 'attach_id' => $img_four_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_four = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_five = wpb_getImageBySize( array( 'attach_id' => $img_five_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_five = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_six = wpb_getImageBySize( array( 'attach_id' => $img_six_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_six = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_seven = wpb_getImageBySize( array( 'attach_id' => $img_seven_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_seven = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_eight = wpb_getImageBySize( array( 'attach_id' => $img_eight_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_eight = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_nine = wpb_getImageBySize( array( 'attach_id' => $img_nine_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_nine = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_ten = wpb_getImageBySize( array( 'attach_id' => $img_ten_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_ten = '';
				}

	if(!empty($features_one)){
      $out_one = '<ul class="listitems font-white">';
      $features_one = !empty($features_one) ? explode("\n", trim($features_one)) : array(); 
      foreach($features_one as $feature_one) {
        $out_one .= '<li><i class="icon-check"></i> '.htmlspecialchars_decode($feature_one).'</li>';
      }
      $out_one .= '</ul>';
      $content_one = $out_one;
    }
	
	$output = '<div '; if ( $maxhost_shortcodes_parallax_bg != '' ) { $output .= 'style="background: rgba(0, 0, 0, 0) url('.esc_url( $maxhost_shortcodes_parallax_bg ).') no-repeat fixed center top / cover ;" '; } $output .= 'class="section-lg bg-parallax-16 m-top2 '; if ( $crossed_top != false ) { $output .='p-top_ulta7 '; } if ( $crossed_bottom != false ) { $output .='p-bottom_ulta7'; } $output .='">
    '; if ( $crossed_top != false ) { $output .='<div class="shape-cross-top"></div>'; } $output .='
	<div class="container '; if ( $crossed_top != false ) { $output .='p-top3'; } $output .='">
      <div class="row">
		<div class="col-md-6 m-bottom4">
        <h3 class="font-bold font-white font15 uppercase">'.esc_attr( $left_heading1 ).'</h3>
        <h2 class="font-bold font-white font30 uppercase m-bottom3">'.esc_attr( $left_heading2 ).'</h2> 
        
        <h3 class="font-thin font-white font25 m-bottom2">'.esc_attr( $price_title ).' <span class="font40">'.esc_attr( $price ).'</span>'.esc_attr( $price_duration ).'</h3>
        '; if ( $img_one != '' ) { $output .=''.$img_one['thumbnail'].''; } $output .='
        '.do_shortcode($content_one).'
        </div>
        <div class="col-md-6 m-bottom4">
        <h3 class="font-bold font-white font15 uppercase">'.esc_attr( $right_heading1 ).'</h3>
        <h2 class="font-bold font-white font30 uppercase m-bottom3">'.esc_attr( $right_heading2 ).'</h2>
		'; if ( $img_two != '' ) { $output .='
        <div class="col-md-4 col-sm-4 col-xs-6 text-center m-bottom2 left-padd0"> '.$img_two['thumbnail'].' </div>
		'; } if ( $img_three != '' ) { $output .='
        <div class="col-md-4 col-sm-4 col-xs-6 text-center m-bottom2 left-padd0"> '.$img_three['thumbnail'].' </div>
		'; } if ( $img_four != '' ) { $output .='
        <div class="col-md-4 col-sm-4 col-xs-6 text-center m-bottom2 left-padd0"> '.$img_four['thumbnail'].' </div>
		'; } if ( $img_five != '' ) { $output .='
        <div class="col-md-4 col-sm-4 col-xs-6 text-center m-bottom2 left-padd0"> '.$img_five['thumbnail'].' </div>
		'; } if ( $img_six != '' ) { $output .='
        <div class="col-md-4 col-sm-4 col-xs-6 text-center m-bottom2 left-padd0"> '.$img_six['thumbnail'].' </div>
		'; } if ( $img_seven != '' ) { $output .='
        <div class="col-md-4 col-sm-4 col-xs-6 text-center m-bottom2 left-padd0"> '.$img_seven['thumbnail'].' </div>
		'; } if ( $img_eight != '' ) { $output .='
        <div class="col-md-4 col-sm-4 col-xs-6 text-center m-bottom2 left-padd0"> '.$img_eight['thumbnail'].' </div>
		'; } if ( $img_nine != '' ) { $output .='
        <div class="col-md-4 col-sm-4 col-xs-6 text-center m-bottom2 left-padd0"> '.$img_nine['thumbnail'].' </div>
		'; } if ( $img_ten != '' ) { $output .='
        <div class="col-md-4 col-sm-4 col-xs-6 text-center m-bottom2 left-padd0"> '.$img_ten['thumbnail'].' </div>
		'; } $output .='
        </div>	
      </div>
    </div>
	'; if ( $crossed_bottom != false ) { $output .='<div class="shape-cross-bottom"></div>'; } $output .='
  </div>';
	
	return $output;
}
add_shortcode('maxhost_features_block_three', 'maxhost_features_block_three_shortcode');

/*****************
Features Block - 4
*****************/
function maxhost_features_block_four_shortcode( $atts ) {
	$output = $image_one = '';
	extract( shortcode_atts( array(
	'image_one' => $image_one,
	'heading1' => '',
	'heading2' => '',
	'text' => '',
	'features_one' => '',
	'price_title' => '',
	'price' => '',
	'price_duration' => '',
	), $atts ) );
	
	$img_one_id = preg_replace( '/[^\d]/', '', $image_one );
	
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_one = wpb_getImageBySize( array( 'attach_id' => $img_one_id, 'thumb_size' => 'full', 'class' => 'img-responsive pull-right' ) );
				} else {
				$img_one = '';
				}

	if(!empty($features_one)){
      $out_one = '<ul class="listitems half">';
      $features_one = !empty($features_one) ? explode("\n", trim($features_one)) : array(); 
      foreach($features_one as $feature_one) {
        $out_one .= '<li><i class="fa fa-check"></i> '.htmlspecialchars_decode($feature_one).'</li>';
      }
      $out_one .= '</ul>';
      $content_one = $out_one;
    }
	
	$output = '<div class="section-lg m-top5">
    <div class="container">
      <div class="row">
	    '; if ( $img_one != '' ) { $output .='
          <div class="col-md-7 m-bottom4">
		  '; } else { $output .='
		  <div class="col-md-12 m-bottom4">
		  '; } $output .='       
          '; if ( $heading1 != '' ) { $output .='<h3 class="font-color font16 uppercase">'.esc_attr( $heading1 ).'</h3>'; } $output .='
          <h2 class="font40 font-thin-xs m-bottom2">'.esc_attr( $heading2 ).'</h2>
          <p class="m-bottom3">'.$text.'</p>
          '.do_shortcode($content_one).'
          <h3 class="font25 font-thin m-top2">'.esc_attr( $price_title ).' <span class="font-bold font-color">'.esc_attr( $price ).'</span>'.esc_attr( $price_duration ).'</h3>
        </div>
		'; if ( $img_one != '' ) { $output .='
        <div class="col-md-5"> '.$img_one['thumbnail'].' </div>
		'; } $output .='
      </div>
    </div>
  </div>';
	
	return $output;
}
add_shortcode('maxhost_features_block_four', 'maxhost_features_block_four_shortcode');

/*****************
Features Block - 5
*****************/
function maxhost_features_block_five_shortcode( $atts ) {
	$output = $image_one = $image_two = '';
	extract( shortcode_atts( array(
	'image_one' => $image_one,
	'image_two' => $image_two,
	'heading1' => '',
	'heading2' => '',
	'text' => '',
	'features_one' => '',
	'price_title' => '',
	'price' => '',
	'price_duration' => '',
	'active' => '',
	), $atts ) );
	
	$img_one_id = preg_replace( '/[^\d]/', '', $image_one );
	$img_two_id = preg_replace( '/[^\d]/', '', $image_two );
	
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_one = wpb_getImageBySize( array( 'attach_id' => $img_one_id, 'thumb_size' => 'full', 'class' => 'img-responsive pull-right' ) );
				} else {
				$img_one = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_two = wpb_getImageBySize( array( 'attach_id' => $img_two_id, 'thumb_size' => 'full', 'class' => 'background-image' ) );
				} else {
				$img_two = '';
				}

	if(!empty($features_one)){
      $out_one = '<ul class="listitems">';
      $features_one = !empty($features_one) ? explode("\n", trim($features_one)) : array(); 
      foreach($features_one as $feature_one) {
        $out_one .= '<li><i class="fa fa-check"></i> '.htmlspecialchars_decode($feature_one).'</li>';
      }
      $out_one .= '</ul>';
      $content_one = $out_one;
    }
	
	$output = '<div class="section-lg '; if ( $active != true ) { $output .='m-top7'; } $output .='">
    <div class="side-image">
      <div class="image-container col-simg">
        <div class="background-image-holder">'.$img_two['thumbnail'].' </div>
      </div>
      
      <div class="col-scon-info">
        <div class="container pull-left">
        <div class="col-md-7">
          <h3 class="font-color font16 uppercase">'.esc_attr( $heading1 ).'</h3>
          '.$img_one['thumbnail'].'
          <h2 class="font40 font-thin-xs m-bottom2">'.esc_attr( $heading2 ).'</h2>
          <p class="m-bottom2">'.$text.'</p>
          '.do_shortcode($content_one).'
          <h3 class="font25 font-thin m-top3">'.esc_attr( $price_title ).' <span class="font-bold font-color">'.esc_attr( $price ).'</span>'.esc_attr( $price_duration ).'</h3>
        </div>
      </div>
      </div>
    </div>
  </div>';
	
	return $output;
}
add_shortcode('maxhost_features_block_five', 'maxhost_features_block_five_shortcode');

/*****************
Features Block - 6
*****************/
function maxhost_features_block_six_shortcode( $atts ) {
	$output = $image_one = '';
	extract( shortcode_atts( array(
	'image_one' => $image_one,
	'heading1' => '',
	'heading2_1st' => '',
	'heading2_2nd' => '',
	'heading2_3rd' => '',
	'heading3' => '',
	'text' => '',
	'button_label' => '',
	'button_url' => '',
	'maxhost_shortcodes_parallax_bg' => '',
	'crossed_top' => '',
	'crossed_bottom' => '',
	), $atts ) );
	
	$img_one_id = preg_replace( '/[^\d]/', '', $image_one );
	
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_one = wpb_getImageBySize( array( 'attach_id' => $img_one_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_one = '';
				}
	
	$output = '<div '; if ( $maxhost_shortcodes_parallax_bg != '' ) { $output .= 'style="background: rgba(0, 0, 0, 0) url('.esc_url( $maxhost_shortcodes_parallax_bg ).') no-repeat fixed center top / cover ;" '; } $output .= 'class="section-lg bg-parallax-4 m-top5 '; if ( $crossed_top != false ) { $output .='p-top_ulta7 '; } if ( $crossed_bottom != false ) { $output .='p-bottom_ulta7'; } $output .='">
    '; if ( $crossed_top != false ) { $output .='<div class="shape-cross-top"></div>'; } $output .='
	<div class="container '; if ( $crossed_top != false ) { $output .='p-top3 '; } $output .='">
      <div class="row">
        '; if ( $img_one != '' ) { $output .='
		<div class="col-md-6 m-bottom3"> '.$img_one['thumbnail'].' </div>
		'; } $output .='
		'; if ( $img_one != '' ) { $output .='
        <div class="col-md-6 m-bottom3">
		'; } else { $output .='
		<div class="col-md-12 m-bottom3">
		'; } $output .='
          <h2 class="font-bold font18 font-white m-bottom1">'.esc_attr( $heading1 ).'</h2>
          <h2 class="font-thin font15 font-white m-bottom1">'.esc_attr( $heading2_1st ).' <span class="font-bold font50 font-color">'.esc_attr( $heading2_2nd ).'</span> '.esc_attr( $heading2_3rd ).'</h2>
          <p class="font-color">'.esc_attr( $heading3 ).'</p>
          <p class="font-white m-top2">'.$text.'</p>
          <div class="button m-top3"><a href="'.esc_url( $button_url ).'" class="btn boxed-color-sm font18 orange">'.esc_attr( $button_label ).' <i class="fa fa-arrow-circle-right"></i></a></div>
        </div>
      </div>
    </div>
	'; if ( $crossed_bottom != false ) { $output .='<div class="shape-cross-bottom"></div>'; } $output .='
  </div>';
	
	return $output;
}
add_shortcode('maxhost_features_block_six', 'maxhost_features_block_six_shortcode');

/*****************
Features Block - 7
*****************/
function maxhost_features_block_seven_shortcode( $atts ) {
	$output = $image_one = $image_two = '';
	extract( shortcode_atts( array(
	'image_one' => $image_one,
	'image_two' => $image_two,
	'heading1' => '',
	'heading2' => '',
	'text' => '',
	'text2' => '',
	'features_one' => '',
	'features_two' => '',
	'price_title' => '',
	'price_title2' => '',
	'price' => '',
	'price2' => '',
	'price_duration' => '',
	'price_duration2' => '',
	'button_label' => '',
	'button_label2' => '',
	'button_url' => '',
	'button_url2' => '',
	), $atts ) );
	
	$img_one_id = preg_replace( '/[^\d]/', '', $image_one );
	$img_two_id = preg_replace( '/[^\d]/', '', $image_two );
	
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_one = wpb_getImageBySize( array( 'attach_id' => $img_one_id, 'thumb_size' => 'full', 'class' => 'pull-left right-padd3' ) );
				} else {
				$img_one = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_two = wpb_getImageBySize( array( 'attach_id' => $img_two_id, 'thumb_size' => 'full', 'class' => 'pull-left right-padd3' ) );
				} else {
				$img_two = '';
				}

	if(!empty($features_one)){
      $out_one = '<ul class="listitems font-white">';
      $features_one = !empty($features_one) ? explode("\n", trim($features_one)) : array(); 
      foreach($features_one as $feature_one) {
        $out_one .= '<li><i class="fa fa-angle-right"></i> '.htmlspecialchars_decode($feature_one).'</li>';
      }
      $out_one .= '</ul>';
      $content_one = $out_one;
    }
	
	if(!empty($features_two)){
      $out_two = '<ul class="listitems font-white">';
      $features_two = !empty($features_two) ? explode("\n", trim($features_two)) : array(); 
      foreach($features_two as $feature_two) {
        $out_two .= '<li><i class="fa fa-angle-right"></i> '.htmlspecialchars_decode($feature_two).'</li>';
      }
      $out_two .= '</ul>';
      $content_two = $out_two;
    }
	
	$output = '<div class="section-lg">
  <div class="two-color-boxes-dark">
	<div class="container">
	<div class="col-md-6 no-left-padd right-padd4 m-bottom3">
        <h2 class="font-thin font-white font25 m-bottom3 bg-color"><span>'.esc_attr( $heading1 ).'</span></h2>
        <h4 class="m-bottom3 font20 font-thin font-white">'.$text.'</h4>
        '.$img_one['thumbnail'].'
		'.do_shortcode($content_one).'
        <div class="button m-top4 text-right"><span class="font-thin font25 font-white">'.esc_attr( $price_title ).' <span class="font-bold font-color">'.esc_attr( $price ).'</span>'.esc_attr( $price_duration ).'</span> &nbsp;&nbsp;&nbsp;&nbsp; <a href="'.esc_url( $button_url ).'" class="btn boxed-color-sm orange uppercase">'.esc_attr( $button_label ).' <i class="fa fa-arrow-circle-right"></i></a></div>
      </div>
    <div class="col-md-6 no-right-padd left-padd4 m-bottom3">
        <h2 class="font-thin font-white font25 m-bottom3 bg-color"><span>'.esc_attr( $heading2 ).'</span></h2>
        <h4 class="m-bottom3 font20 font-thin font-white">'.$text2.'</h4>
        '.$img_two['thumbnail'].'
        '.do_shortcode($content_two).'
        <div class="button m-top5 text-right"><span class="font-thin font25 font-white">'.esc_attr( $price_title2 ).' <span class="font-bold font-color">'.esc_attr( $price2 ).'</span>'.esc_attr( $price_duration2 ).'</span> &nbsp;&nbsp;&nbsp;&nbsp; <a href="'.esc_url( $button_url2 ).'" class="btn boxed-color-sm orange uppercase">'.esc_attr( $button_label2 ).' <i class="fa fa-arrow-circle-right"></i></a></div>
      </div>

</div>
</div>
</div>';
	
	return $output;
}
add_shortcode('maxhost_features_block_seven', 'maxhost_features_block_seven_shortcode');

/*****************
Features Block - 8
*****************/
function maxhost_features_block_eight_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'heading1' => '',
	'heading2' => '',
	'text' => '',
	'text2' => '',
	'icon_one' => '',
	'fawesome1' => '',
	'icon_two' => '',
	'fawesome2' => '',
	'button_label' => '',
	'button_label2' => '',
	'button_url' => '',
	'button_url2' => '',
	), $atts ) );
	
	$output = '<div class="section-lg">
    <div class="two-color-boxes-multi">
      <div class="container">
        <div class="col-md-6 no-left-padd right-padd4">
          <div class="sea text-center">'; if ( $fawesome1 != false ) { $output .='<span class="fa fa-'.esc_attr( $icon_one ).' font100 font-white m-bottom3"></span>'; } else { $output .='<span class="icon-'.esc_attr( $icon_one ).' font100 font-white m-bottom3"></span>'; } $output .='
            <h2 class="font-thin-xs font-white font35 m-bottom3">'.esc_attr( $heading1 ).'</h2>
            <p class="m-bottom3 font-white">'.$text.'</p>
            <div class="button m-top4 m-bottom3"><a href="'.esc_url( $button_url ).'" class="btn whte-box-border uppercase">'.esc_attr( $button_label ).' <i class="fa fa-arrow-circle-right"></i></a></div>
          </div>
        </div>
        <div class="col-md-6 no-right-padd left-padd4">
          <div class="orange text-center">'; if ( $fawesome2 != false ) { $output .='<span class="fa fa-'.esc_attr( $icon_two ).' font100 font-white m-bottom3"></span>'; } else { $output .='<span class="icon-'.esc_attr( $icon_two ).' font100 font-white m-bottom3"></span>'; } $output .='
            <h2 class="font-thin-xs font-white font35 m-bottom3">'.esc_attr( $heading2 ).'</h2>
            <p class="m-bottom3 font-white">'.$text2.'</p>
            <div class="button m-top4 m-bottom3"><a href="'.esc_url( $button_url2 ).'" class="btn whte-box-border uppercase">'.esc_attr( $button_label2 ).' <i class="fa fa-arrow-circle-right"></i></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>';
	
	return $output;
}
add_shortcode('maxhost_features_block_eight', 'maxhost_features_block_eight_shortcode');

/*****************
Features Block - 9
*****************/
function maxhost_features_block_nine_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'heading1' => '',
	'heading2' => '',
	'text' => '',
	'features_one' => '',
	'price_title' => '',
	'price' => '',
	'price_duration' => '',
	), $atts ) );

	if(!empty($features_one)){
      $out_one = '<ul class="listitems half">';
      $features_one = !empty($features_one) ? explode("\n", trim($features_one)) : array(); 
      foreach($features_one as $feature_one) {
        $out_one .= '<li><i class="fa fa-check"></i> '.htmlspecialchars_decode($feature_one).'</li>';
      }
      $out_one .= '</ul>';
      $content_one = $out_one;
    }
	
	$output = '<div class="col-md-12 m-bottom3">
          <h4 class="font15 font-color uppercase">'.esc_attr( $heading1 ).'</h4>
          <h2 class="font-black font-thin-xs font40 m-bottom2 uppercase">'.esc_attr( $heading2 ).'</h2>
          <p class="m-bottom2">'.$text.'</p>
        '.do_shortcode($content_one).'
          <h3 class="font25 font-thin m-top2">'.esc_attr( $price_title ).' <span class="font-bold font-color">'.esc_attr( $price ).'</span>'.esc_attr( $price_duration ).'</h3> 
        </div>';
	
	return $output;
}
add_shortcode('maxhost_features_block_nine', 'maxhost_features_block_nine_shortcode');

/*************
Features Table
*************/
function maxhost_features_table_shortcode( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'features1' => '',
	'features2' => '',
	'features3' => '',
	'features4' => '',
	'features5' => '',
	'features6' => '',
	'features7' => '',
	'features8' => '',
	'features9' => '',
	'features10' => '',
	'features11' => '',
	'features11' => '',
	'features12' => '',
	'features13' => '',
	'features14' => '',
	'features15' => '',
	'features16' => '',
	'features17' => '',
	'features18' => '',
	'features19' => '',
	'features20' => '',
	'features21' => '',
	'features21' => '',
	'features22' => '',
	'features23' => '',
	'features24' => '',
	'features25' => '',
	'features26' => '',
	'features27' => '',
	'features28' => '',
	'features29' => '',
	'features30' => '',
    ), $atts));

    if(!empty($features1)){
      $output = '<tr>';
      $features1 = !empty($features1) ? explode("\n", trim($features1)) : array(); 
      foreach($features1 as $feature1) {
        $output .= '<th>'.htmlspecialchars_decode($feature1).'</th>';
      }
      $output .= '</tr>';
      $content1 = $output;
    }
	
	if(!empty($features2)){
      $output = '<tr>';
      $features2 = !empty($features2) ? explode("\n", trim($features2)) : array(); 
      foreach($features2 as $feature2) {
        $output .= '<td>'.htmlspecialchars_decode($feature2).'</td>';
      }
      $output .= '</tr>';
      $content2 = $output;
    }
	
	if(!empty($features3)){
      $output = '<tr>';
      $features3 = !empty($features3) ? explode("\n", trim($features3)) : array(); 
      foreach($features3 as $feature3) {
        $output .= '<td class="hilit">'.htmlspecialchars_decode($feature3).'</td>';
      }
      $output .= '</tr>';
	  $content3 = $output;
    }
	
	if(!empty($features4)){
      $output = '<tr>';
      $features4 = !empty($features4) ? explode("\n", trim($features4)) : array(); 
      foreach($features4 as $feature4) {
        $output .= '<td>'.htmlspecialchars_decode($feature4).'</td>';
      }
      $output .= '</tr>';
	  $content4 = $output;
    }
	
	if(!empty($features5)){
      $output = '<tr>';
      $features5 = !empty($features5) ? explode("\n", trim($features5)) : array(); 
      foreach($features5 as $feature5) {
        $output .= '<td class="hilit">'.htmlspecialchars_decode($feature5).'</td>';
      }
      $output .= '</tr>';
	  $content5 = $output;
    }
	
	if(!empty($features6)){
      $output = '<tr>';
      $features6 = !empty($features6) ? explode("\n", trim($features6)) : array(); 
      foreach($features6 as $feature6) {
        $output .= '<td>'.htmlspecialchars_decode($feature6).'</td>';
      }
      $output .= '</tr>';
	  $content6 = $output;
    }
	
	if(!empty($features7)){
      $output = '<tr>';
      $features7 = !empty($features7) ? explode("\n", trim($features7)) : array(); 
      foreach($features7 as $feature7) {
        $output .= '<td class="hilit">'.htmlspecialchars_decode($feature7).'</td>';
      }
      $output .= '</tr>';
	  $content7 = $output;
    }
	
	if(!empty($features8)){
      $output = '<tr>';
      $features8 = !empty($features8) ? explode("\n", trim($features8)) : array(); 
      foreach($features8 as $feature8) {
        $output .= '<td>'.htmlspecialchars_decode($feature8).'</td>';
      }
      $output .= '</tr>';
	  $content8 = $output;
    }
	
	if(!empty($features9)){
      $output = '<tr>';
      $features9 = !empty($features9) ? explode("\n", trim($features9)) : array(); 
      foreach($features9 as $feature9) {
        $output .= '<td class="hilit">'.htmlspecialchars_decode($feature9).'</td>';
      }
      $output .= '</tr>';
	  $content9 = $output;
    }
	
	if(!empty($features10)){
      $output = '<tr>';
      $features10 = !empty($features10) ? explode("\n", trim($features10)) : array(); 
      foreach($features10 as $feature10) {
        $output .= '<td>'.htmlspecialchars_decode($feature10).'</td>';
      }
      $output .= '</tr>';
	  $content10 = $output;
    }
	
	if(!empty($features11)){
      $output = '<tr>';
      $features11 = !empty($features11) ? explode("\n", trim($features11)) : array(); 
      foreach($features11 as $feature11) {
        $output .= '<td class="hilit">'.htmlspecialchars_decode($feature11).'</td>';
      }
      $output .= '</tr>';
	  $content11 = $output;
    }
	
	if(!empty($features12)){
      $output = '<tr>';
      $features12 = !empty($features12) ? explode("\n", trim($features12)) : array(); 
      foreach($features12 as $feature12) {
        $output .= '<td>'.htmlspecialchars_decode($feature12).'</td>';
      }
      $output .= '</tr>';
      $content12 = $output;
    }
	
	if(!empty($features13)){
      $output = '<tr>';
      $features13 = !empty($features13) ? explode("\n", trim($features13)) : array(); 
      foreach($features13 as $feature13) {
        $output .= '<td class="hilit">'.htmlspecialchars_decode($feature13).'</td>';
      }
      $output .= '</tr>';
	  $content13 = $output;
    }
	
	if(!empty($features14)){
      $output = '<tr>';
      $features14 = !empty($features14) ? explode("\n", trim($features14)) : array(); 
      foreach($features14 as $feature14) {
        $output .= '<td>'.htmlspecialchars_decode($feature14).'</td>';
      }
      $output .= '</tr>';
	  $content14 = $output;
    }
	
	if(!empty($features15)){
      $output = '<tr>';
      $features15 = !empty($features15) ? explode("\n", trim($features15)) : array(); 
      foreach($features15 as $feature15) {
        $output .= '<td class="hilit">'.htmlspecialchars_decode($feature15).'</td>';
      }
      $output .= '</tr>';
	  $content15 = $output;
    }
	
	if(!empty($features16)){
      $output = '<tr>';
      $features16 = !empty($features16) ? explode("\n", trim($features16)) : array(); 
      foreach($features16 as $feature16) {
        $output .= '<td>'.htmlspecialchars_decode($feature16).'</td>';
      }
      $output .= '</tr>';
	  $content16 = $output;
    }
	
	if(!empty($features17)){
      $output = '<tr>';
      $features17 = !empty($features17) ? explode("\n", trim($features17)) : array(); 
      foreach($features17 as $feature17) {
        $output .= '<td class="hilit">'.htmlspecialchars_decode($feature17).'</td>';
      }
      $output .= '</tr>';
	  $content17 = $output;
    }
	
	if(!empty($features18)){
      $output = '<tr>';
      $features18 = !empty($features18) ? explode("\n", trim($features18)) : array(); 
      foreach($features18 as $feature18) {
        $output .= '<td>'.htmlspecialchars_decode($feature18).'</td>';
      }
      $output .= '</tr>';
	  $content18 = $output;
    }
	
	if(!empty($features19)){
      $output = '<tr>';
      $features19 = !empty($features19) ? explode("\n", trim($features19)) : array(); 
      foreach($features19 as $feature19) {
        $output .= '<td class="hilit">'.htmlspecialchars_decode($feature19).'</td>';
      }
      $output .= '</tr>';
	  $content19 = $output;
    }
	
	if(!empty($features20)){
      $output = '<tr>';
      $features20 = !empty($features20) ? explode("\n", trim($features20)) : array(); 
      foreach($features20 as $feature20) {
        $output .= '<td>'.htmlspecialchars_decode($feature20).'</td>';
      }
      $output .= '</tr>';
	  $content20 = $output;
    }
	
	if(!empty($features21)){
      $output = '<tr>';
      $features21 = !empty($features21) ? explode("\n", trim($features21)) : array(); 
      foreach($features21 as $feature21) {
        $output .= '<td class="hilit">'.htmlspecialchars_decode($feature21).'</td>';
      }
      $output .= '</tr>';
	  $content21 = $output;
    }
	
	if(!empty($features22)){
      $output = '<tr>';
      $features22 = !empty($features22) ? explode("\n", trim($features22)) : array(); 
      foreach($features22 as $feature22) {
        $output .= '<td>'.htmlspecialchars_decode($feature22).'</td>';
      }
      $output .= '</tr>';
      $content22 = $output;
    }
	
	if(!empty($features23)){
      $output = '<tr>';
      $features23 = !empty($features23) ? explode("\n", trim($features23)) : array(); 
      foreach($features23 as $feature23) {
        $output .= '<td class="hilit">'.htmlspecialchars_decode($feature23).'</td>';
      }
      $output .= '</tr>';
	  $content23 = $output;
    }
	
	if(!empty($features24)){
      $output = '<tr>';
      $features24 = !empty($features24) ? explode("\n", trim($features24)) : array(); 
      foreach($features24 as $feature24) {
        $output .= '<td>'.htmlspecialchars_decode($feature24).'</td>';
      }
      $output .= '</tr>';
	  $content24 = $output;
    }
	
	if(!empty($features25)){
      $output = '<tr>';
      $features25 = !empty($features25) ? explode("\n", trim($features25)) : array(); 
      foreach($features25 as $feature25) {
        $output .= '<td class="hilit">'.htmlspecialchars_decode($feature25).'</td>';
      }
      $output .= '</tr>';
	  $content25 = $output;
    }
	
	if(!empty($features26)){
      $output = '<tr>';
      $features26 = !empty($features26) ? explode("\n", trim($features26)) : array(); 
      foreach($features26 as $feature26) {
        $output .= '<td>'.htmlspecialchars_decode($feature26).'</td>';
      }
      $output .= '</tr>';
	  $content26 = $output;
    }
	
	if(!empty($features27)){
      $output = '<tr>';
      $features27 = !empty($features27) ? explode("\n", trim($features27)) : array(); 
      foreach($features27 as $feature27) {
        $output .= '<td class="hilit">'.htmlspecialchars_decode($feature27).'</td>';
      }
      $output .= '</tr>';
	  $content27 = $output;
    }
	
	if(!empty($features28)){
      $output = '<tr>';
      $features28 = !empty($features28) ? explode("\n", trim($features28)) : array(); 
      foreach($features28 as $feature28) {
        $output .= '<td>'.htmlspecialchars_decode($feature28).'</td>';
      }
      $output .= '</tr>';
	  $content28 = $output;
    }
	
	if(!empty($features29)){
      $output = '<tr>';
      $features29 = !empty($features29) ? explode("\n", trim($features29)) : array(); 
      foreach($features29 as $feature29) {
        $output .= '<td class="hilit">'.htmlspecialchars_decode($feature29).'</td>';
      }
      $output .= '</tr>';
	  $content29 = $output;
    }
	
	if(!empty($features30)){
      $output = '<tr>';
      $features30 = !empty($features30) ? explode("\n", trim($features30)) : array(); 
      foreach($features30 as $feature30) {
        $output .= '<td>'.htmlspecialchars_decode($feature30).'</td>';
      }
      $output .= '</tr>';
	  $content30 = $output;
    }
	
	$out = '<div class="features_table_new">
			<div class="table-style">
            <table class="table-list3">
              <tbody>'; if(!empty($features1)){ $out .='
				'.do_shortcode($content1).'
				'; } if(!empty($features2)){ $out .='
				'.do_shortcode($content2).'
				'; } if(!empty($features3)){ $out .='
				'.do_shortcode($content3).'
				'; } if(!empty($features4)){ $out .='
				'.do_shortcode($content4).'
				'; } if(!empty($features5)){ $out .='
				'.do_shortcode($content5).'
				'; } if(!empty($features6)){ $out .='
				'.do_shortcode($content6).'
				'; } if(!empty($features7)){ $out .='
				'.do_shortcode($content7).'
				'; } if(!empty($features8)){ $out .='
				'.do_shortcode($content8).'
				'; } if(!empty($features9)){ $out .='
				'.do_shortcode($content9).'
				'; } if(!empty($features10)){ $out .='
				'.do_shortcode($content10).'
				'; } if(!empty($features11)){ $out .='
				'.do_shortcode($content11).'
				'; } if(!empty($features12)){ $out .='
				'.do_shortcode($content12).'
				'; } if(!empty($features13)){ $out .='
				'.do_shortcode($content13).'
				'; } if(!empty($features14)){ $out .='
				'.do_shortcode($content14).'
				'; } if(!empty($features15)){ $out .='
				'.do_shortcode($content15).'
				'; } if(!empty($features16)){ $out .='
				'.do_shortcode($content16).'
				'; } if(!empty($features17)){ $out .='
				'.do_shortcode($content17).'
				'; } if(!empty($features18)){ $out .='
				'.do_shortcode($content18).'
				'; } if(!empty($features19)){ $out .='
				'.do_shortcode($content19).'
				'; } if(!empty($features20)){ $out .='
				'.do_shortcode($content20).'
				'; } if(!empty($features21)){ $out .='
				'.do_shortcode($content21).'
				'; } if(!empty($features22)){ $out .='
				'.do_shortcode($content22).'
				'; } if(!empty($features23)){ $out .='
				'.do_shortcode($content23).'
				'; } if(!empty($features24)){ $out .='
				'.do_shortcode($content24).'
				'; } if(!empty($features25)){ $out .='
				'.do_shortcode($content25).'
				'; } if(!empty($features26)){ $out .='
				'.do_shortcode($content26).'
				'; } if(!empty($features27)){ $out .='
				'.do_shortcode($content27).'
				'; } if(!empty($features28)){ $out .='
				'.do_shortcode($content28).'
				'; } if(!empty($features29)){ $out .='
				'.do_shortcode($content29).'
				'; } if(!empty($features30)){ $out .='
				'.do_shortcode($content30).'
				'; } $out .='
			   </tbody>
			</table>
			</div>
			</div>';
    return $out;
}
add_shortcode('maxhost_shortcodes_features_table', 'maxhost_features_table_shortcode');

/*****************
Heading-1
*****************/
function maxhost_ztitle_one_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'left_text' => '',
	'right_text' => '',
	), $atts ) );
				
	$output = '<div class="sec-title m-top4">
          <div class="col-lg-4 col-md-4 col-xs-12 text-right">
            <h2 class="font-bold font30 font-black text-uppercase">'.$left_text.'</h2>
          </div>
          <div class="col-lg-8 col-md-8 col-xs-12 m-bottom4">
            <p class="left-padd3">'.$right_text.'</p>
          </div>
        </div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_title_one', 'maxhost_ztitle_one_shortcode');

/********
Heading-2
********/
function maxhost_ztitle_two_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'heading1' => '',
	'heading2' => '',
	), $atts ) );
				
	$output = ''; if ( $heading1 != '' ) { $output .='
				<h3 class="font-color font16 uppercase">'.esc_attr( $heading1 ).'</h3>
				'; } $output .='
				<h2 class="font40 font-thin-xs m-bottom2">'.esc_attr( $heading2 ).'</h2>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_title_two', 'maxhost_ztitle_two_shortcode');

/********
Heading-3
********/
function maxhost_ztitle_three_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'heading1' => '',
	'heading2' => '',
	'font_color' => '',
	), $atts ) );
				
	$output = '<div class="title1 text-center">
				'; if ( $heading1 != '' ) { $output .='
				  <h3 class="uppercase font16 font-color">'.esc_attr( $heading1 ).'</h3>
				  '; } $output .='
				  <h2 class="font40 font-'; if ( $font_color != '' ) { $output .=''.$font_color.''; } else { $output .='black'; } $output .=' font-thin-xs">'.esc_attr( $heading2 ).'</h2>
				</div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_title_three', 'maxhost_ztitle_three_shortcode');

/********
Heading-4
********/
function maxhost_ztitle_four_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'heading1' => '',
	'font_color' => '',
	), $atts ) );
				
	$output = '<h2 class="font-bold font-'; if ( $font_color != '' ) { $output .=''.$font_color.''; } else { $output .='black-dark'; } $output .=' uppercase m-bottom3">'.esc_attr( $heading1 ).'</h2>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_title_four', 'maxhost_ztitle_four_shortcode');

/********
Heading-5
********/
function maxhost_ztitle_five_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'heading1' => '',
	'heading2' => '',
	'font_color' => '',
	), $atts ) );
				
	$output = ''; if ( $heading1 != '' ) { $output .='
				<h3 class="text-center font-bold font-'; if ( $font_color != '' ) { $output .=''.$font_color.''; } else { $output .='black'; } $output .=' font15 uppercase">'.esc_attr( $heading1 ).'</h3>
				'; } $output .='
				<h2 class="text-center font-bold font-'; if ( $font_color != '' ) { $output .=''.$font_color.''; } else { $output .='black'; } $output .=' font30 uppercase">'.esc_attr( $heading2 ).'</h2>
				<div class="title-line-shape m-bottom3"></div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_title_five', 'maxhost_ztitle_five_shortcode');

/********
Heading-6
********/
function maxhost_ztitle_six_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'heading1' => '',
	'heading2' => '',
	'font_color' => '',
	), $atts ) );
				
	$output = ''; if ( $heading1 != '' ) { $output .='
				<h3 class="font-bold font-'; if ( $font_color != '' ) { $output .=''.$font_color.''; } else { $output .='black'; } $output .=' font15 uppercase">'.esc_attr( $heading1 ).'</h3>
				'; } $output .='
				<h2 class="font-bold font-'; if ( $font_color != '' ) { $output .=''.$font_color.''; } else { $output .='black'; } $output .=' font30 uppercase m-bottom3">'.esc_attr( $heading2 ).'</h2>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_title_six', 'maxhost_ztitle_six_shortcode');

/********
Heading-7
********/
function maxhost_ztitle_seven_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'heading1' => '',
	), $atts ) );
				
	$output = '<h2 class="font-color font30 font-bold uppercase m-bottom1">'.esc_attr( $heading1 ).'</h2>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_title_seven', 'maxhost_ztitle_seven_shortcode');

/********
Heading-8
********/
function maxhost_ztitle_eight_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'heading1' => '',
	'heading2' => '',
	'text' => '',
	'font_color' => '',
	), $atts ) );
				
	$output = '<h2 class="font-'; if ( $font_color != '' ) { $output .=''.$font_color.''; } else { $output .='grey'; } $output .=' font-thin-xs font35 m-bottom2">'; if ( $heading1 != '' ) { $output .='<span class="font-bold font-color">'.esc_attr( $heading1 ).'</span> '; } $output .=''.esc_attr( $heading2 ).'</h2>
				<p class="m-bottom2">'.$text.'</p>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_title_eight', 'maxhost_ztitle_eight_shortcode');

/********
Heading-9
********/
function maxhost_ztitle_nine_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'heading1' => '',
	'heading2' => '',
	'text' => '',
	'font_color' => '',
	), $atts ) );
				
	$output = '<h2 class="font-'; if ( $font_color != '' ) { $output .=''.$font_color.''; } else { $output .='black'; } $output .=' font-thin-xs uppercase font45 text-center m-bottom2">'; if ( $heading1 != '' ) { $output .='<span class="font-bold font-color">'.esc_attr( $heading1 ).'</span> '; } $output .=''.esc_attr( $heading2 ).'</h2>
				<div class="col-md-11 sec-auto-margin font-thin-xs font25 text-center m-bottom3">'.$text.'</div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_title_nine', 'maxhost_ztitle_nine_shortcode');

/**********
Heading Top
**********/
function maxhost_heading_top_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'heading1' => '',
	'heading2' => '',
	), $atts ) );
				
	$output = '<div class="section-lg gery-bg one m-top0">
    <div class="container">
    <div class="text-center">
      <h2 class="font30 font-thin m-bottom2">'.esc_attr( $heading1 ).'</h2>
      <p class="font20 font-thin">'.$heading2.'</p>
  </div>
  </div>
  </div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_heading_top', 'maxhost_heading_top_shortcode');

/****************
Horizontal Tabs-1
****************/
function maxhost_htab_shortcode($atts, $content = null) {

   $a = shortcode_atts(array(
        'number_of_tabs' => '',
		'shape_top' => ''
    ),$atts);

	$output ='<div class="section-lg bg-parallax-10 m-top1">
    '; if ( $a['shape_top'] != false ) { $output .='<div class="shape-top"></div>'; } $output .='
    <div class="container '; if ( $a['shape_top'] == false ) { $output .='p-top3'; } $output .='">
        <div class="tab-style"> <ul class="nav nav-tabs" role="tablist">';
	$i=1;
	$c=0;
	while ($i<=$a['number_of_tabs']){
	$c++;
	$b = shortcode_atts(array(
		'title'.$c.'' => '',
		'icon'.$c.'' => ''
    ),$atts);
	$title =$b['title'.$c.''];
	$icon =$b['icon'.$c.''];
			$output .='<li role="presentation" class="uppercase '; if ($c==1){$output .='active';} $output .='"><a href="#tab'.$c.'" aria-controls="tab'.$c.'" role="tab" data-toggle="tab"><span class="icon-'.esc_attr( $icon ).' font45"></span>'.esc_attr( $title ).'</a></li>';			
	$i++;
	}
	$output .='	</ul>';
			  
	$output .='<div class="tab-content m-top5">';

	$i=1;
	$c=0;
	while ($i<=$a['number_of_tabs']){
	$c++;
	$b = shortcode_atts(array(
		'image'.$c.'' => '',
		'title_one'.$c.'' => '',
		'title_two'.$c.'' => '',
        'text'.$c.'' => '',
		'bullets'.$c.'' => '',
		'bottom_note'.$c.'' => '',
    ),$atts);
	$image =$b['image'.$c.''];
	$title_one =$b['title_one'.$c.''];
	$title_two =$b['title_two'.$c.''];
	$bullets =$b['bullets'.$c.''];
	$text =$b['text'.$c.''];
	$bottom_note =$b['bottom_note'.$c.''];
	
	$img_id = preg_replace( '/[^\d]/', '', $image );

			if(class_exists('WPBakeryVisualComposerAbstract')) {
			$img = wpb_getImageBySize( array( 'attach_id' => $img_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
			} else {
			$img = '';
			}

	$output .='<div role="tabpanel" class="tab-pane '; if ($c==1){$output .='active';} $output .='" id="tab'.$c.'">
              '; if ( $img != '' ) { $output .='
			  <div class="col-md-6 col-sm-12 m-bottom4">
                <figure class="nomargin">'.$img['thumbnail'].'</figure>
              </div>
			  '; } $output .='
              <div class="'; if ( $img != '' ) { $output .='col-md-6'; } else { $output .='col-md-12'; } $output .=' col-sm-12 m-bottom4">
                <h2 class="font35 font-bold font-color m-bottom2">'.esc_attr( $title_one ).' <span class="font-thin-xs font-white">'.esc_attr( $title_two ).'</span></h2>
                <p class="m-bottom3 font-white">'.$text.'</p>';
				if(!empty($bullets)){
      $out = '<ul class="listitems half font-white">';
      $bullets = !empty($bullets) ? explode("\n", trim($bullets)) : array(); 
      foreach($bullets as $bullet) {
        $out .= '<li><i class="fa fa-check"></i> '.htmlspecialchars_decode($bullet).'</li>';
      }
      $out .= '</ul>';
      $content = $out;
    }
    $output .=' '; if(!empty($bullets)) { $output .=''.do_shortcode($content).''; } $output .='<h3 class="font25 font-thin m-top2 font-white">'.esc_attr( $bottom_note ).'</h3>
              </div>
            </div>';
$i++;
}
	$output .='</div></div>
    </div>
    <div class="shape-bottom"></div>
  </div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_htab','maxhost_htab_shortcode');

/****************
Horizontal Tabs-2
****************/
function maxhost_htab_two_shortcode($atts, $content = null) {

   $a = shortcode_atts(array(
        'number_of_tabs' => ''
    ),$atts);

	$output ='<div class="tab-style-1">
          <ul class="nav nav-tabs" role="tablist">';
	$i=1;
	$c=0;
	while ($i<=$a['number_of_tabs']){
	$c++;
	$b = shortcode_atts(array(
		'title'.$c.'' => '',
    ),$atts);
	$title =$b['title'.$c.''];
			$output .='<li role="presentation" '; if ($c==1){$output .='class="active"';} $output .='><a href="#tab_two'.$c.'" aria-controls="tab_two'.$c.'" role="tab" data-toggle="tab">'.esc_attr( $title ).'</a></li>';			
	$i++;
	}
	$output .='	</ul>';
			  
	$output .='<div class="tab-content">';

	$i=1;
	$c=0;
	while ($i<=$a['number_of_tabs']){
	$c++;
	$b = shortcode_atts(array(
		'image'.$c.'' => '',
        'text'.$c.'' => '',
    ),$atts);
	$image =$b['image'.$c.''];
	$text =$b['text'.$c.''];
	
	$img_id = preg_replace( '/[^\d]/', '', $image );

			if(class_exists('WPBakeryVisualComposerAbstract')) {
			$img = wpb_getImageBySize( array( 'attach_id' => $img_id, 'thumb_size' => 'full', 'class' => 'img-responsive display-inline' ) );
			} else {
			$img = '';
			}

	$output .='<div role="tabpanel" class="tab-pane '; if ($c==1){$output .='active';} $output .='" id="tab_two'.$c.'">
                <p>'.$text.'</p>
				'; if ( $img != '' ) { $output .=''.$img['thumbnail'].''; } $output .='
            </div>';
$i++;
}
	$output .='
    </div>
  </div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_htab_two','maxhost_htab_two_shortcode');

/*************
Image Carousel
*************/
function maxhost_image_carousel_shortcode($atts, $content = null) {

   $a = shortcode_atts(array(
        'number_of_tabs' => '',
		'section_heading' => '',
    ),$atts);

	$output ='<div class="m-bottom5">
          <h2 class="font-bold font-black-dark uppercase m-bottom3">'.$a['section_heading'].'</h2>
          <div id="carousel-example-generic8" class="carousel slide" data-ride="carousel"> 
            <ol class="carousel-indicators">';
	$i=1;
	$c=-1;
	while ($i<=$a['number_of_tabs']){
	$c++;
			$output .='<li data-target="#carousel-example-generic8" '; if ($c==0){$output .='class="active"';} $output .=' data-slide-to="'.$c.'"></li>';			
	$i++;
	}
	$output .='	</ol>';
			  
	$output .='<div class="carousel-inner" role="listbox">';

	$i=1;
	$c=-1;
	while ($i<=$a['number_of_tabs']){
	$c++;
	$b = shortcode_atts(array(
		'image'.$c.'' => '',
    ),$atts);
	$image =$b['image'.$c.''];

	$output .='
              <div class="item '; if ($c==0){$output .='active';} $output .='"> <img src="'.esc_url( $image ).'" alt="" class="img-responsive"> </div>';
$i++;
}
	$output .='
            </div>
          </div>
        </div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_image_carousel','maxhost_image_carousel_shortcode');

/************
Mega Menu - 1
************/
function maxhost_megamenu_shortcode_one( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'col_width' => '',
	'menu_title' => '',
	'number_of_menus' => '',
	'menu1' => '',
	'icon1' => '',
	'menu1_url' => '',
	'menu2' => '',
	'icon2' => '',
	'menu2_url' => '',
	'menu3' => '',
	'icon3' => '',
	'menu3_url' => '',
	'menu4' => '',
	'icon4' => '',
	'menu4_url' => '',
	'menu5' => '',
	'icon5' => '',
	'menu5_url' => '',
	'menu6' => '',
	'icon6' => '',
	'menu6_url' => '',
	'menu7' => '',
	'icon7' => '',
	'menu7_url' => '',
	'menu8' => '',
	'icon8' => '',
	'menu8_url' => '',
	'menu9' => '',
	'icon9' => '',
	'menu9_url' => '',
	'menu10' => '',
	'icon10' => '',
	'menu10_url' => '',
	'font_color' => '',
	), $atts ) );
				
	$output = '				<ul class="list-unstyled preview_font">
                              '; if(!empty($menu_title)){ $output .='
							  <li>
                                <span class="'; if (( $font_color == '' ) || ( $font_color == 'font-white' )) { $output .='font-white'; } else { $output .='font-black'; } $output .='"> '.esc_attr( $menu_title ).' </span>
                              </li>
							  '; } if(!empty($menu1)){ $output .='
                              <li><a href="'.esc_url( $menu1_url ).'">'; if(!empty($icon1)){ $output .='<i class="fa fa-'.esc_attr( $icon1 ).'"></i>'; } $output .=' '.esc_attr( $menu1 ).'</a> </li>
							  '; } if(!empty($menu2)){ $output .='
                              <li><a href="'.esc_url( $menu2_url ).'">'; if(!empty($icon2)){ $output .='<i class="fa fa-'.esc_attr( $icon2 ).'"></i>'; } $output .=' '.esc_attr( $menu2 ).'</a> </li>
							  '; } if(!empty($menu3)){ $output .='
                              <li><a href="'.esc_url( $menu3_url ).'">'; if(!empty($icon3)){ $output .='<i class="fa fa-'.esc_attr( $icon3 ).'"></i>'; } $output .=' '.esc_attr( $menu3 ).'</a> </li>
							  '; } if(!empty($menu4)){ $output .='
                              <li><a href="'.esc_url( $menu4_url ).'">'; if(!empty($icon4)){ $output .='<i class="fa fa-'.esc_attr( $icon4 ).'"></i>'; } $output .=' '.esc_attr( $menu4 ).'</a> </li>
							  '; } if(!empty($menu5)){ $output .='
                              <li><a href="'.esc_url( $menu5_url ).'">'; if(!empty($icon5)){ $output .='<i class="fa fa-'.esc_attr( $icon5 ).'"></i>'; } $output .=' '.esc_attr( $menu5 ).'</a> </li>
							  '; } if(!empty($menu6)){ $output .='
                              <li><a href="'.esc_url( $menu6_url ).'">'; if(!empty($icon6)){ $output .='<i class="fa fa-'.esc_attr( $icon6 ).'"></i>'; } $output .=' '.esc_attr( $menu6 ).'</a> </li>
							  '; } if(!empty($menu7)){ $output .='
                              <li><a href="'.esc_url( $menu7_url ).'">'; if(!empty($icon7)){ $output .='<i class="fa fa-'.esc_attr( $icon7 ).'"></i>'; } $output .=' '.esc_attr( $menu7 ).'</a> </li>
							  '; } if(!empty($menu8)){ $output .='
                              <li><a href="'.esc_url( $menu8_url ).'">'; if(!empty($icon8)){ $output .='<i class="fa fa-'.esc_attr( $icon8 ).'"></i>'; } $output .=' '.esc_attr( $menu8 ).'</a> </li>
							  '; } if(!empty($menu9)){ $output .='
                              <li><a href="'.esc_url( $menu9_url ).'">'; if(!empty($icon9)){ $output .='<i class="fa fa-'.esc_attr( $icon9 ).'"></i>'; } $output .=' '.esc_attr( $menu9 ).'</a> </li>
							  '; } if(!empty($menu10)){ $output .='
                              <li><a href="'.esc_url( $menu10_url ).'">'; if(!empty($icon10)){ $output .='<i class="fa fa-'.esc_attr( $icon10 ).'"></i>'; } $output .=' '.esc_attr( $menu10 ).'</a> </li>
							  '; } $output .='
                            </ul>';
							$content = $output;
	$output1 = '  <div class="'.$col_width.'">
						'.do_shortcode($content).'
					</div>';
	
	return $output1;
}

add_shortcode('maxhost_shortcodes_megamenu_one', 'maxhost_megamenu_shortcode_one');

/************
Mega Menu - 2
************/
function maxhost_megamenu_shortcode_two( $atts, $content = null ) {
	$output = $image_one = '';
	extract( shortcode_atts( array(
	'col_width' => '',
	'menu_title' => '',
	'image_one' => $image_one,
	'image_one_hp' => '',
	'font_color' => '',
	), $atts ) );
	
	$img_one_id = preg_replace( '/[^\d]/', '', $image_one );
	
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_one = wpb_getImageBySize( array( 'attach_id' => $img_one_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_one = '';
				}
				
	$output = '				<div class="list-unstyled preview_font"> 
                            <!-- Wrapper for slides -->
                            <ul class="list-unstyled">
                              <li><span class="'; if (( $font_color == '' ) || ( $font_color == 'font-white' )) { $output .='font-white'; } else { $output .='font-black'; } $output .='"><strong>'.esc_attr( $menu_title ).'</strong></span></li>
                            </ul>
                            <a href="'.esc_url( $image_one_hp ).'">'.$img_one['thumbnail'].'</a>
							</div>';
							$content = $output;
	$output1 = '  <div class="'.$col_width.'">
						'.do_shortcode($content).'
					</div>';
	
	return $output1;
}

add_shortcode('maxhost_shortcodes_megamenu_two', 'maxhost_megamenu_shortcode_two');

/************
Mega Menu - 3
************/
function maxhost_megamenu_shortcode_three( $atts, $content = null ) {
	$output = $image_one = '';
	extract( shortcode_atts( array(
	'col_width' => '',
	'menu_title' => '',
	'text' => '',
	'font_color' => '',
	), $atts ) );
				
	$output = '				<div class="list-unstyled preview_font">
                            <ul class="list-unstyled">
                              <li><span class="'; if (( $font_color == '' ) || ( $font_color == 'font-white' )) { $output .='font-white'; } else { $output .='font-black'; } $output .='"><strong>'.esc_attr( $menu_title ).'</strong></span></li>
                            </ul>
                            <p class="'; if (( $font_color == '' ) || ( $font_color == 'font-white' )) { $output .='font-white'; } else { $output .='font-black'; } $output .='">'.$text.'</p>
                          </div>';
							$content = $output;
	$output1 = '  <div class="'.$col_width.'">
						'.do_shortcode($content).'
					</div>';
	
	return $output1;
}

add_shortcode('maxhost_shortcodes_megamenu_three', 'maxhost_megamenu_shortcode_three');

/********************
Offers Carousel Block
********************/
function maxhost_offers_carousel_shortcode( $atts ) {
	$a = shortcode_atts(array(
        'number_of_tabs' => '',
		'heading1' => '',
		'heading2' => '',
		'maxhost_shortcodes_parallax_bg' => '',
		'crossed_top' => '',
		'crossed_bottom' => '',
		'no_white_font' => '',
    ),$atts);
	
	$output = '<div '; if ( $a['maxhost_shortcodes_parallax_bg'] != '' ) { $output .= 'style="background: rgba(0, 0, 0, 0) url('.esc_url( $a['maxhost_shortcodes_parallax_bg'] ).') no-repeat fixed center top / cover ;" '; } $output .= 'class="section-lg bg-parallax-13 m-top0 '; if ( $a['crossed_top'] != true ) { $output .='p-top7 '; } if ( $a['crossed_bottom'] != true ) { $output .='p-bottom7'; } $output .='">
    '; if ( $a['crossed_top'] != false ) { $output .='<div class="shape-cross-top"></div>'; } $output .='
    <div class="container">
	<div class="row">
      '; if ( $a['heading1'] != '' ) { $output .='<h4 class="font-color font15 text-center uppercase m-top2">'.esc_attr( $a['heading1'] ).'</h4>'; } $output .='
      <h2 class="font-white font-thin-xs font40 text-center m-bottom4 uppercase"'; if ( $a['no_white_font'] != false ) { $output .=' style="color:#333333 !important;"'; } $output .='>'.esc_attr( $a['heading2'] ).'</h2>
	  <div id="carousel-example-generic5" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">';
	$i=1;
	$c=-1;
	while ($i<=$a['number_of_tabs']){
	$c++;
			$output .='<li data-target="#carousel-example-generic5" '; if ($c==0){$output .='class="active"';} $output .=' data-slide-to="'.$c.'"></li>';			
	$i++;
	}
	$output .='	</ol>
	  <div class="carousel-inner" role="listbox">';
	  $i=1;
	$c=-1;
	while ($i<=$a['number_of_tabs']){
	$c++;
	$b = shortcode_atts(array(
        'text'.$c.'' => '',
		'text_heading_bold'.$c.'' => '',
		'text_heading_thin'.$c.'' => '',
		'price_title'.$c.'' => '',
		'price'.$c.'' => '',
		'price_duration'.$c.'' => '',
		'features_one'.$c.'' => '',
		'image'.$c.'' => '',
    ),$atts);
	$text =$b['text'.$c.''];
	$text_heading_bold =$b['text_heading_bold'.$c.''];
	$text_heading_thin =$b['text_heading_thin'.$c.''];
	$price_title =$b['price_title'.$c.''];
	$price =$b['price'.$c.''];
	$price_duration =$b['price_duration'.$c.''];
	$features_one =$b['features_one'.$c.''];
	$image =$b['image'.$c.''];
	 
	if(!empty($features_one)){
      $out_one = '<ul class="listitems half font-white"'; if ( $a['no_white_font'] != false ) { $out_one .=' style="color:#333333 !important;"'; } $out_one .='>';
      $features_one = !empty($features_one) ? explode("\n", trim($features_one)) : array(); 
      foreach($features_one as $feature_one) {
        $out_one .= '<li><i class="fa fa-check"></i> '.htmlspecialchars_decode($feature_one).'</li>';
      }
      $out_one .= '</ul>';
      $content_one = $out_one;
    }
	
	$output .='	 <div class="item '; if ($c==0){$output .='active';} $output .='">
	  '; if ( $image != '' ) { $output .='
	  <div class="col-md-6 col-sm-12 m-bottom4">
		<div class="price-info-circle">'.esc_attr( $price_title ).'<br>
                  <span class="blue font-bold">'.esc_attr( $price ).'</span>'.esc_attr( $price_duration ).'</div>
        <figure class="nomargin"><img src="'.esc_url( $image ).'" alt="" class="img-responsive"></figure>
      </div>
	  '; } $output .='
      '; if ( $image != '' ) { $output .='
          <div class="col-md-6 col-sm-12 m-bottom4">
		  '; } else { $output .='
		  <div class="col-md-12 col-sm-12 m-bottom4">
		  '; } $output .='
		  <h2 class="font25 '; if ( $a['no_white_font'] != true ) { $output .='font-white '; } $output .='font-color m-bottom2">'.esc_attr( $text_heading_bold ).' <span class="font-thin-xs font-white"'; if ( $a['no_white_font'] != false ) { $output .=' style="color:#333333 !important;"'; } $output .='>'.esc_attr( $text_heading_thin ).'</span></h2>
                <p class="m-bottom3 font-white"'; if ( $a['no_white_font'] != false ) { $output .=' style="color:#333333 !important;"'; } $output .='>'.$text.'</p>
                '.do_shortcode($content_one).'
      
    </div>
	</div>';
$i++;
}
  $output .='
  </div>
  </div>
  </div>
  </div>';
  if ( $a['crossed_bottom'] != false ) { $output .='<div class="shape-cross-bottom"></div>'; }
  $output .='
  </div>';
	
	return $output;
}
add_shortcode('maxhost_offers_carousel', 'maxhost_offers_carousel_shortcode');

/**********
Page Header
**********/
function maxhost_page_header_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'heading1' => '',
	'heading2' => '',
	'maxhost_shortcodes_parallax_bg' => '',
	'breadcrumb' => '',
	), $atts ) );
	
	$output = '<div '; if ( $maxhost_shortcodes_parallax_bg != '' ) { $output .= 'style="background: rgba(0, 0, 0, 0) url('.esc_url( $maxhost_shortcodes_parallax_bg ).') no-repeat scroll center top;" '; } $output .= 'class="page-header three">
    <div class="container">
      <div class="col-md-6 left-padd0 m-bottom2">
        <h2 class="uppercase font-thin font-white font30 m-bottom1">'.esc_attr( $heading1 ).'</h2>
        <h4 class="font-grey-light font18 ">'.esc_attr( $heading2 ).'</h4>
      </div>
	  '; if ( $breadcrumb != false ) { $output .='
      <div class="col-md-6">';
	  ob_start();
        if (function_exists('maxhost_wordpress_breadcrumbs')) maxhost_wordpress_breadcrumbs();
	$output .= ob_get_clean();
$output .= '
		</div>
		'; } $output .='
    </div>
  </div>';
	
	return $output;
}
add_shortcode('maxhost_shortcode_page_header', 'maxhost_page_header_shortcode');

/*****************
Portfolio Standard
*****************/
function maxhost_portfolio_one_shortcode( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'features' => '',
	'number_of_items' => '',
	'section_style' => '',
    ), $atts));

    if(!empty($features)){
      $output = '<div id="js-filters-awesome-work" class="cbp-l-filters-work">
					<div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> '.__('SHOW ALL', 'maxhost').' </div>';
      $features = !empty($features) ? explode("\n", trim($features)) : array();
      foreach($features as $feature) {
		$feature = strip_tags($feature);
        $output .= ' <div data-filter=".'.$feature.'" class="cbp-filter-item"> '.htmlspecialchars_decode($feature).'
						<div class="cbp-filter-counter"></div>
					  </div>';
      }
      $output .= '</div>';
      $content = $output;
    }
	
	$out = '<div class="section-lg m-top8">
    <div class="container">';
	if($section_style != 3) {
    $out .= '  '.do_shortcode($content).'';
	}
    if($section_style != 3) {
	$out .= '<div id="js-grid-awesome-work" class="cbp cbp-l-grid-work">';
	} else {
	$out .= '<div id="js-grid-lightbox-gallery" class="cbp">';
	}
							$i=1;
							$c=0;
							while ($i <= $number_of_items){
							$c++;
							$b = shortcode_atts(array(
								'item_img'.$c.'' => '',
								'item_title'.$c.'' => '',
								'item_cat'.$c.'' => '',
								'item_features'.$c.'' => '',
								'item_feature'.$c.'' => '',
								'more_url'.$c.'' => '',
							),$atts);
								
							$item_img =$b['item_img'.$c.''];
							$item_title =$b['item_title'.$c.''];
							$item_cat =$b['item_cat'.$c.''];
							$item_features =$b['item_features'.$c.''];
							$more_url =$b['more_url'.$c.''];							

	$out .='
        <div class="cbp-item '.esc_attr( $item_features ).'"> <a href="'.esc_url( $more_url ).'" class="cbp-caption" rel="nofollow">
          <div class="cbp-caption-defaultWrap"> <img src="'.esc_url( $item_img ).'" alt=""> </div>
          <div class="cbp-caption-activeWrap"></div>
          </a> <a href="'.esc_url( $more_url ).'" class="cbp-l-grid-work-title" rel="nofollow">'.esc_attr( $item_title ).'</a>
          <div class="cbp-l-grid-work-desc">'.esc_attr( $item_cat ).'</div>
        </div>';
	$i++; } $out .='
      </div>
    </div>
  </div>';
    return $out;
}
add_shortcode('maxhost_shortcodes_portfolio_one', 'maxhost_portfolio_one_shortcode');

/***************
Portfolio Single
***************/
function maxhost_portfolio_single_shortcode( $atts ) {
	$output = $image_one = $image_two = $image_three = $image_four = $image_five = '';
	extract( shortcode_atts( array(
	'image_one' => $image_one,
	'image_two' => $image_two,
	'image_three' => $image_three,
	'image_four' => $image_four,
	'image_five' => $image_five,
	'heading1' => '',
	'text' => '',
	'heading2' => '',
	'date' => '',
	'author' => '',
	'features' => '',
	'button_label' => '',
	'button_url' => '',
	), $atts ) );
	
	$img_one_id = preg_replace( '/[^\d]/', '', $image_one );
	$img_two_id = preg_replace( '/[^\d]/', '', $image_two );
	$img_three_id = preg_replace( '/[^\d]/', '', $image_three );
	$img_four_id = preg_replace( '/[^\d]/', '', $image_four );
	$img_five_id = preg_replace( '/[^\d]/', '', $image_five );
	
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_one = wpb_getImageBySize( array( 'attach_id' => $img_one_id, 'thumb_size' => 'full' ) );
				} else {
				$img_one = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_one_thumb = wpb_getImageBySize( array( 'attach_id' => $img_one_id, 'thumb_size' => '130x80' ) );
				} else {
				$img_one_thumb = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_two = wpb_getImageBySize( array( 'attach_id' => $img_two_id, 'thumb_size' => 'full' ) );
				} else {
				$img_two = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_two_thumb = wpb_getImageBySize( array( 'attach_id' => $img_two_id, 'thumb_size' => '130x80' ) );
				} else {
				$img_two_thumb = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_three = wpb_getImageBySize( array( 'attach_id' => $img_three_id, 'thumb_size' => 'full' ) );
				} else {
				$img_three = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_three_thumb = wpb_getImageBySize( array( 'attach_id' => $img_three_id, 'thumb_size' => '130x80' ) );
				} else {
				$img_three_thumb = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_four = wpb_getImageBySize( array( 'attach_id' => $img_four_id, 'thumb_size' => 'full' ) );
				} else {
				$img_four = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_four_thumb = wpb_getImageBySize( array( 'attach_id' => $img_four_id, 'thumb_size' => '130x80' ) );
				} else {
				$img_four_thumb = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_five = wpb_getImageBySize( array( 'attach_id' => $img_five_id, 'thumb_size' => 'full' ) );
				} else {
				$img_five = '';
				}
				
				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_five_thumb = wpb_getImageBySize( array( 'attach_id' => $img_five_id, 'thumb_size' => '130x80' ) );
				} else {
				$img_five_thumb = '';
				}
	
	$output .= '<link rel="stylesheet" href="'.esc_url( get_template_directory_uri() ).'/js/owl-carousel/owl.carousel.css" type="text/css" media="all" />
	<link rel="stylesheet" href="'.esc_url( get_template_directory_uri() ).'/js/owl-carousel/owl.theme.css" type="text/css" media="all" />
	<link rel="stylesheet" href="'.esc_url( get_template_directory_uri() ).'/js/owl-carousel/owl.transitions.css" type="text/css" media="all" />
	<div class="section-lg m-top8">
					<div class="container">
					<div class="carousel_holder">
						  <div id="sync1" class="owl-carousel">
							';	if ( $img_one != '' ) { $output .= '	
							<div class="item fullwide">'.$img_one['thumbnail'].'</div>
							';	} if ( $img_two != '' ) { $output .= '
							<div class="item fullwide">'.$img_two['thumbnail'].'</div>
							';	} if ( $img_three != '' ) { $output .= '
							<div class="item fullwide">'.$img_three['thumbnail'].'</div>
							';	} if ( $img_four != '' ) { $output .= '
							<div class="item fullwide">'.$img_four['thumbnail'].'</div>
							';	} if ( $img_five != '' ) { $output .= '
							<div class="item fullwide">'.$img_five['thumbnail'].'</div>
							';	} $output .= '
						  </div>
						  <div id="sync2" class="owl-carousel">
							
							';	if ( $img_one_thumb != '' ) { $output .= '	
							<div class="item">'.$img_one_thumb['thumbnail'].'</div>
							';	} if ( $img_two_thumb != '' ) { $output .= '
							<div class="item">'.$img_two_thumb['thumbnail'].'</div>
							';	} if ( $img_three_thumb != '' ) { $output .= '
							<div class="item">'.$img_three_thumb['thumbnail'].'</div>
							';	} if ( $img_four_thumb != '' ) { $output .= '
							<div class="item">'.$img_four_thumb['thumbnail'].'</div>
							';	} if ( $img_five_thumb != '' ) { $output .= '
							<div class="item">'.$img_five_thumb['thumbnail'].'</div>
							';	} $output .= '

						  </div>
						</div>
						<div>&nbsp;</div>
						<!-- end item -->

						 <div class="cbp-l-project-container">
							  <div class="cbp-l-project-desc">
								<div class="cbp-l-project-desc-title font20">'.esc_attr( $heading1 ).'</div>
								<div class="cbp-l-project-desc-text">'.$text.'</div>
							  </div>
					
							  <div class="cbp-l-project-details">
								<div class="cbp-l-project-details-title font20">'.esc_attr( $heading2 ).'</div>
								<ul class="cbp-l-project-details-list">
								  '; if ( $author != '' ) { $output .= '
								  <li><strong>'.__('Client', 'maxhost').'</strong>'.esc_attr( $author ).'</li>
								  '; } if ( $date != '' ) { $output .= '
								  <li><strong>'.__('Date', 'maxhost').'</strong>'.esc_attr( $date ).'</li>
								  '; } if ( $features != '' ) { $output .= '
								  <li><strong>'.__('Categories', 'maxhost').'</strong>'.esc_attr( $features ).'</li>
								  '; } $output .= '
								</ul>
								'; if ( $button_label != '' ) { $output .= '
								<a href="'.esc_url( $button_url ).'" target="_blank" class="cbp-l-project-details-visit">'.esc_attr( $button_label ).'</a>
								'; } $output .= '
							  </div>
						 </div>
					 <!-- end item -->
					</div>
				</div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_portfolio_single', 'maxhost_portfolio_single_shortcode');

/******************
Pricing Table - One
******************/
function maxhost_pricing_one_shortcode( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'plane_name'      => '',
	'price'      => '',
	'duration'      => '',
	'button_text'      => '',
    'button_url'      => '',
    'features' => '',
	'active' => '',
    ), $atts));

    if(!empty($features)){
      $output = '<ul class="fea-lists">';
      $features = !empty($features) ? explode("\n", trim($features)) : array(); 
      foreach($features as $feature) {
        $output .= '<li>'.htmlspecialchars_decode($feature).'</li>';
      }
      $output .= '</ul>';
      $content = $output;
    }
	
	$out = '<div class="m-bottom4">
		  <div class="pricing-box style-1 text-center '; if ( $active != false ) { $out .='active'; } $out .='">
            <div class="font-thin font20 font-black uppercase">'.esc_attr( $plane_name ).'</div>
            <div class="price font-thin-xs font45 font-white">'.esc_attr( $price ).''; if ( $duration != '' ) { $out .= '<span class="font18"> / '.esc_attr( $duration ).'</span>'; } $out .= '</div>
            '.do_shortcode($content).'
            <div class="button m-top2"><a href="'.esc_url( $button_url ).'" class="btn samll-grey-button uppercase">'.esc_attr( $button_text ).' <i class="fa fa-arrow-circle-right"></i></a></div>
          </div>
		  </div>';
    return $out;
}
add_shortcode('maxhost_shortcodes_pricing_one', 'maxhost_pricing_one_shortcode');

/******************
Pricing Table - Two
******************/
function maxhost_pricing_two_shortcode( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'plane_name'      => '',
	'price'      => '',
	'duration'      => '',
	'button_text'      => '',
    'button_url'      => '',
    'features' => '',
	'active' => '',
    ), $atts));

    if(!empty($features)){
      $output = '<ul class="plan-list">';
      $features = !empty($features) ? explode("\n", trim($features)) : array(); 
      foreach($features as $feature) {
        $output .= '<li><i class="fa fa-check-square"></i>'.htmlspecialchars_decode($feature).'</li>';
      }
      $output .= '</ul>';
      $content = $output;
    }
	
	$out = '
		<div class="m-bottom4">
          <div class="pricing-box">
            <div class="service-title">
              <h2 class="font20 font-bold font-white uppercase">'.esc_attr( $plane_name ).'</h2>
            </div>
            <div class="price"><span class="font-color font-bold font60">'.esc_attr( $price ).'</span> '; if ( $duration != '' ) { $out .= '<small class="left-padd1">/ '.esc_attr( $duration ).'</small>'; } $out .= ''; if ( $active != false ) { $out .='<img src="'.esc_url( get_template_directory_uri() ).'/images/badge.png" alt="" class="badge-tag">'; } $out .='</div>
            '.do_shortcode($content).'
            <div class="button orange-button one"><a class="font20 font-white" href="'.esc_url( $button_url ).'">'.esc_attr( $button_text ).' <i class="fa fa-arrow-circle-right"></i></a></div>
          </div>
        </div>';
    return $out;
}
add_shortcode('maxhost_shortcodes_pricing_two', 'maxhost_pricing_two_shortcode');

/********************
Pricing Table - Three
********************/
function maxhost_pricing_three_shortcode( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'plane_name'      => '',
	'price'      => '',
	'duration'      => '',
	'button_text'      => '',
    'button_url'      => '',
    'features' => '',
	'currency' => '',
    ), $atts));

    if(!empty($features)){
      $output = '<ul class="fea-lists">';
      $features = !empty($features) ? explode("\n", trim($features)) : array(); 
      foreach($features as $feature) {
        $output .= '<li>'.htmlspecialchars_decode($feature).'</li>';
      }
      $output .= '</ul>';
      $content = $output;
    }
	
	$out = '<div class="m-bottom3">
          <div class="pricing-box-home2 text-center">
            <h2 class="font-bold font15 font-white uppercase">'.esc_attr( $plane_name ).'</h2>
            <div class="price font60 font-black-dark"><small class="font25">'.esc_attr( $currency ).'</small>'.esc_attr( $price ).'<br>
              '; if ( $duration != '' ) { $out .= '<span class="font18"> '.esc_attr( $duration ).'</span>'; } $out .= ' </div>
            '.do_shortcode($content).'
            <div class="order m-top1"><a class="font16" href="'.esc_url( $button_url ).'">'.esc_attr( $button_text ).' <i class="fa fa-arrow-circle-right"></i></a></div>
          </div>
        </div>';
    return $out;
}
add_shortcode('maxhost_shortcodes_pricing_three', 'maxhost_pricing_three_shortcode');

/*******************
Pricing Table - Four
*******************/
function maxhost_pricing_four_shortcode( $atts, $content = null ) {
    extract(shortcode_atts(array(
    'plane_name'      => '',
	'price'      => '',
	'duration'      => '',
	'button_text'      => '',
    'button_url'      => '',
    'features' => '',
    ), $atts));

    if(!empty($features)){
      $output = '<ul class="plan-list one font-white">';
      $features = !empty($features) ? explode("\n", trim($features)) : array(); 
      foreach($features as $feature) {
        $output .= '<li><i class="fa fa-check-square"></i>'.htmlspecialchars_decode($feature).'</li>';
      }
      $output .= '</ul>';
      $content = $output;
    }
	
	$out = '
		<div class="m-bottom4">
          <div class="pricing-box-grey">
            <div class="service-title-color">
              <h2 class="font25 font-this font-white uppercase">'.esc_attr( $plane_name ).'</h2>
            </div>
            <div class="price-black-bg font-white"><span class="font-bold font55">'.esc_attr( $price ).'</span> '; if ( $duration != '' ) { $out .= '<small class="font20 font-thin">/ '.esc_attr( $duration ).'</small>'; } $out .= '</div>
            '.do_shortcode($content).'
            <div class="button order-now one"><a class="font20 font-color font-bold" href="'.esc_url( $button_url ).'">'.esc_attr( $button_text ).' <i class="fa fa-arrow-circle-right"></i></a></div>
          </div>
        </div>';
    return $out;
}
add_shortcode('maxhost_shortcodes_pricing_four', 'maxhost_pricing_four_shortcode');

/***********
Skills Block
***********/
function maxhost_skills_shortcode( $atts ) {
	extract( shortcode_atts( array(
	'section_heading' => '',
	'heading1' => '',
	'heading2' => '',
	'heading3' => '',
	'heading4' => '',
	'heading5' => '',
	'progress1' => '',
	'progress2' => '',
	'progress3' => '',
	'progress4' => '',
	'progress5' => '',
	), $atts ) );

	$output ='<div class="m-top3 m-bottom4">
          <h2 class="font-color font30 font-bold uppercase m-bottom2">'.esc_attr( $section_heading ).'</h2>
          '; if(!empty($heading1)){ $output .='
		  <div class="progress-info">'.esc_attr( $heading1 ).' <span class="pull-right">'.esc_attr( $progress1 ).'%</span></div>
          <div class="progress">
            <div style="width: '.esc_attr( $progress1 ).'%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="'.esc_attr( $progress1 ).'" role="progressbar" class="progress-bar progress-bar-info progress-bar-striped active"> <span class="sr-only">'.esc_attr( $progress1 ).'% Complete</span> </div>
          </div>
		  '; } if(!empty($heading2)){ $output .='	
          <div class="progress-info">'.esc_attr( $heading2 ).' <span class="pull-right">'.esc_attr( $progress2 ).'%</span></div>
          <div class="progress">
            <div style="width: '.esc_attr( $progress2 ).'%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="'.esc_attr( $progress2 ).'" role="progressbar" class="progress-bar progress-bar-success progress-bar-striped active"> <span class="sr-only">'.esc_attr( $progress2 ).'% Complete</span> </div>
          </div>
		  '; } if(!empty($heading3)){ $output .='	
		  <div class="progress-info">'.esc_attr( $heading3 ).' <span class="pull-right">'.esc_attr( $progress3 ).'%</span></div>
          <div class="progress">
            <div style="width: '.esc_attr( $progress3 ).'%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="'.esc_attr( $progress3 ).'" role="progressbar" class="progress-bar progress-bar-warning progress-bar-striped active"> <span class="sr-only">'.esc_attr( $progress3 ).'% Complete</span> </div>
          </div>
		  '; } if(!empty($heading4)){ $output .='	
		  <div class="progress-info">'.esc_attr( $heading4 ).' <span class="pull-right">'.esc_attr( $progress4 ).'%</span></div>
          <div class="progress">
            <div style="width: '.esc_attr( $progress4 ).'%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="'.esc_attr( $progress4 ).'" role="progressbar" class="progress-bar progress-bar-danger progress-bar-striped active"> <span class="sr-only">'.esc_attr( $progress4 ).'% Complete</span> </div>
          </div>
		  '; } if(!empty($heading5)){ $output .='	
		  <div class="progress-info">'.esc_attr( $heading5 ).' <span class="pull-right">'.esc_attr( $progress5 ).'%</span></div>
          <div class="progress">
            <div style="width: '.esc_attr( $progress5 ).'%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="'.esc_attr( $progress5 ).'" role="progressbar" class="progress-bar progress-bar-info progress-bar-striped active"> <span class="sr-only">'.esc_attr( $progress5 ).'% Complete</span> </div>
          </div>
		  '; } $output .='
        </div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_skills', 'maxhost_skills_shortcode');

/***
Team
***/
function maxhost_team_one_shortcode( $atts ) {
	$output = $image_one = '';
	extract( shortcode_atts( array(
	'image_one' => $image_one,
	'fb_url' => '',
	'tw_url' => '',
	'gp_url' => '',
	'ln_url' => '',
	'name' => '',
	'text' => '',
	'designation' => '',
	'one_third' => '',
	'active' => '',
	), $atts ) );
	
	$img_one_id = preg_replace( '/[^\d]/', '', $image_one );

				if(class_exists('WPBakeryVisualComposerAbstract')) {
				$img_one = wpb_getImageBySize( array( 'attach_id' => $img_one_id, 'thumb_size' => 'full', 'class' => 'img-responsive' ) );
				} else {
				$img_one = '';
				}
	
	$output = '<div class="m-bottom3">
          <div class="team-thumb clearfix '; if ( $one_third != false ) { $output .='one '; } if ( $active != false ) { $output .='active'; } $output .='">
            <div class="team-col '; if ( $one_third != false ) { $output .='one'; } $output .='">
			  ';	if (( $fb_url == '' ) && ( $tw_url == '' ) && ( $gp_url == '' ) && ( $ln_url == '' )) { $output .= ''; } else { $output .= '
              <div class="team-overlay">
				';	if ( $fb_url != '' ) { $output .= '
				<a href="'.esc_url( $fb_url ).'" class="so-icons"><i class="fa fa-facebook"></i></a> 
				';	} if ( $tw_url != '' ) { $output .= '
				<a href="'.esc_url( $tw_url ).'" class="so-icons"><i class="fa fa-twitter"></i></a> 
				';	} if ( $gp_url != '' ) { $output .= '
				<a href="'.esc_url( $gp_url ).'" class="so-icons"><i class="fa fa-google-plus"></i></a> 
				';	} if ( $ln_url != '' ) { $output .= '
				<a href="'.esc_url( $ln_url ).'" class="so-icons"><i class="fa fa-linkedin"></i></a>
				';	} $output .= '
			  </div>
			  ';	} $output .= '
              <div class="imgbox">'.$img_one['thumbnail'].'</div>
            </div>
            <div class="team-dis text-center">
              <h4 class="m-bottom1">'.esc_attr( $name ).' '; if(!empty($designation)){ $output .='<span class="font-color font13">/ '.esc_attr( $designation ).'</span>'; } $output .='</h4>
              <p>'.$text.'</p>
            </div>
          </div>
        </div>';
	
	return $output;
}
add_shortcode('maxhost_team_one', 'maxhost_team_one_shortcode');

/**************
Testimonial - 1
**************/
function maxhost_testimonial_one_shortcode($atts, $content = null) {

   $a = shortcode_atts(array(
        'number_of_tabs' => '',
		'maxhost_shortcodes_parallax_bg' => '',
		'section_heading' => '',
		'section_heading2' => '',
		'tytle_style' => '',
    ),$atts);

	$output ='<div '; if ( $a['maxhost_shortcodes_parallax_bg'] != '' ) { $output .= 'style="background: rgba(0, 0, 0, 0) url('.esc_url( $a['maxhost_shortcodes_parallax_bg'] ).') no-repeat fixed center top / cover ;" '; } $output .= ' class="section-lg bg-parallax-12 text-center m-top5">
    <div class="container">
      <div class="row">
	  '; if ( $a['tytle_style'] == '' ) { $output .='
        <h3 class="font-white font30 font-bold uppercase m-bottom3">'.$a['section_heading'].'</h3>
		'; } else { $output .='
		<h3 class="text-center font-bold font-white font15 uppercase">'.$a['section_heading'].'</h3>
		<h2 class="text-center font-bold font-white font30 uppercase">'.$a['section_heading2'].'</h2>
		<div class="'.$a['tytle_style'].'"></div>
		'; } $output .='
        <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators white-color">';
	$i=1;
	$c=-1;
	while ($i<=$a['number_of_tabs']){
	$c++;
			$output .='<li data-target="#carousel-example-generic1" '; if ($c==0){$output .='class="active"';} $output .=' data-slide-to="'.$c.'"></li>';			
	$i++;
	}
	$output .='	</ol>';
			  
	$output .='<div class="carousel-inner" role="listbox">';

	$i=1;
	$c=-1;
	while ($i<=$a['number_of_tabs']){
	$c++;
	$b = shortcode_atts(array(
        'text'.$c.'' => '',
		'client_name'.$c.'' => '',
		'company_name'.$c.'' => '',
    ),$atts);
	$text =$b['text'.$c.''];
	$client_name =$b['client_name'.$c.''];
	$company_name =$b['company_name'.$c.''];

	$output .='<div class="item '; if ($c==0){$output .='active';} $output .='">
              <div class="col-md-9 sec-auto-margin">
                <p class="font-thin font20 font-white line-height">'.$text.'</p>
                <p class="m-top3 font-white"><span class="font18">'.esc_attr( $client_name ).'</span> '; if ( $company_name != '' ) { $output .= '<span class="italic">/ '.esc_attr( $company_name ).'</span>'; } $output .= '</p>
              </div>
            </div>';
$i++;
}
	$output .='
    </div>
  </div></div></div></div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_testimonial_one','maxhost_testimonial_one_shortcode');

/**************
Testimonial - 2
**************/
function maxhost_testimonial_two_shortcode($atts, $content = null) {

   $a = shortcode_atts(array(
        'number_of_tabs' => '',
		'maxhost_shortcodes_parallax_bg' => '',
		'section_heading' => '',
		'section_heading2' => '',
    ),$atts);

	$output ='<div class="m-bottom4">
					<h4 class="font-color font-bold font15 uppercase">'.$a['section_heading'].'</h4>
					<h2 class="font-black font-thin-xs font40 m-bottom2 uppercase">'.$a['section_heading2'].'</h2>
					<div class="col-md-12 nopadding">
            <div '; if ( $a['maxhost_shortcodes_parallax_bg'] != '' ) { $output .= 'style="background: rgba(0, 0, 0, 0) url('.esc_url( $a['maxhost_shortcodes_parallax_bg'] ).') no-repeat scroll center bottom / cover ;" '; } $output .= ' class="col-fea-box-image">
              <div id="carousel-example-generic2" class="carousel slide text-center" data-ride="carousel"> 
          <ol class="carousel-indicators white-color">';
	$i=1;
	$c=-1;
	while ($i<=$a['number_of_tabs']){
	$c++;
			$output .='<li data-target="#carousel-example-generic2" '; if ($c==0){$output .='class="active"';} $output .=' data-slide-to="'.$c.'"></li>';			
	$i++;
	}
	$output .='	</ol>';
			  
	$output .='<div class="carousel-inner" role="listbox">';

	$i=1;
	$c=-1;
	while ($i<=$a['number_of_tabs']){
	$c++;
	$b = shortcode_atts(array(
        'text'.$c.'' => '',
		'client_name'.$c.'' => '',
		'company_name'.$c.'' => '',
    ),$atts);
	$text =$b['text'.$c.''];
	$client_name =$b['client_name'.$c.''];
	$company_name =$b['company_name'.$c.''];

	$output .='<div class="item '; if ($c==0){$output .='active';} $output .='">
                    <div class="col-md-12 sec-auto-margin">
                      <p class="font-white"><span class="font18">'.esc_attr( $client_name ).'</span> '; if ( $company_name != '' ) { $output .= '<span class="italic">/ '.esc_attr( $company_name ).'</span>'; } $output .= '</p>
                      <p class="m-top2 font15 font-white">'.$text.'</p>
                    </div>
                  </div>';
$i++;
}
	$output .='
    </div></div></div></div></div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_testimonial_two','maxhost_testimonial_two_shortcode');

/**************
Testimonial - 3
**************/
function maxhost_testimonial_three_shortcode($atts, $content = null) {

   $a = shortcode_atts(array(
        'number_of_tabs' => '',
		'section_heading' => '',
		'section_heading2' => '',
    ),$atts);

	$output ='<div class="section-lg gery-bg m-top3">
    <div class="container">
      <div class="row">
        <h3 class="text-center font-bold font-black font15 uppercase">'.$a['section_heading'].'</h3>
        <h2 class="text-center font-bold font-black font30 uppercase">'.$a['section_heading2'].'</h2>
        <div class="title-line-shape m-bottom3"></div>
        
        <div id="carousel-example-generic3" class="carousel slide" data-ride="carousel"> 
          <ol class="carousel-indicators">';
	$i=1;
	$c=-1;
	while ($i<=$a['number_of_tabs']){
	$c++;
			$output .='<li data-target="#carousel-example-generic3" '; if ($c==0){$output .='class="active"';} $output .=' data-slide-to="'.$c.'"></li>';			
	$i++;
	}
	$output .='	</ol>';
			  
	$output .='<div class="carousel-inner" role="listbox">';

	$i=1;
	$c=-1;
	while ($i<=$a['number_of_tabs']){
	$c++;
	$b = shortcode_atts(array(
        'text'.$c.'' => '',
		'client_name'.$c.'' => '',
		'company_name'.$c.'' => '',
		'image'.$c.'' => '',
    ),$atts);
	$text =$b['text'.$c.''];
	$client_name =$b['client_name'.$c.''];
	$company_name =$b['company_name'.$c.''];
	$image =$b['image'.$c.''];

	$output .='<div class="item '; if ($c==0){$output .='active';} $output .='">
              <div class="col-md-3 left-padd4"> <img src="'.esc_url( $image ).'" alt="" class="img-circle">
                <div class="small-circle-commet"><span class="icon-bubble"></span></div>
              </div>
              <div class="col-md-9">
                <p>'.$text.'</p>
				<p class="m-top2"><span class="font-color font18">'.esc_attr( $client_name ).'</span> '; if ( $company_name != '' ) { $output .= '<span class="italic">/ '.esc_attr( $company_name ).'</span>'; } $output .= '</p>
              </div>
            </div>';
$i++;
}
	$output .='
    </div></div></div></div></div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_testimonial_three','maxhost_testimonial_three_shortcode');

/**************
Testimonial - 4
**************/
function maxhost_testimonial_four_shortcode($atts, $content = null) {

   $a = shortcode_atts(array(
        'number_of_tabs' => '',
		'section_heading' => '',
		'section_heading2' => '',
    ),$atts);

	$output ='<div class="section-lg text-center m-top7">
    <div class="container">
      <div class="row">
        <h3 class="font-color font16 uppercase m-bottom1">'.$a['section_heading'].'</h3>
        <h2 class="font40 font-thin-xs m-bottom3">'.$a['section_heading2'].'</h2>
        
        <div id="carousel-example-generic4" class="carousel slide" data-ride="carousel"> 
          <ol class="carousel-indicators">';
	$i=1;
	$c=-1;
	while ($i<=$a['number_of_tabs']){
	$c++;
			$output .='<li data-target="#carousel-example-generic4" '; if ($c==0){$output .='class="active"';} $output .=' data-slide-to="'.$c.'"></li>';			
	$i++;
	}
	$output .='	</ol>';
			  
	$output .='<div class="carousel-inner" role="listbox">';

	$i=1;
	$c=-1;
	while ($i<=$a['number_of_tabs']){
	$c++;
	$b = shortcode_atts(array(
        'text'.$c.'' => '',
		'client_name'.$c.'' => '',
		'company_name'.$c.'' => '',
		'image'.$c.'' => '',
    ),$atts);
	$text =$b['text'.$c.''];
	$client_name =$b['client_name'.$c.''];
	$company_name =$b['company_name'.$c.''];
	$image =$b['image'.$c.''];

	$output .='<div class="item '; if ($c==0){$output .='active';} $output .='">
              <div class="col-md-9 sec-auto-margin">
                <div class="m-bottom3"><img src="'.esc_url( $image ).'" alt="" class="img-circle"></div>
                <p>'.$text.'</p>
                <p class="m-top2"><span class="font-color font18">'.esc_attr( $client_name ).'</span> '; if ( $company_name != '' ) { $output .= '<span class="italic">/ '.esc_attr( $company_name ).'</span>'; } $output .= '</p>
              </div>
            </div>';
$i++;
}
	$output .='
    </div></div></div></div></div>';
	
	return $output;
}
add_shortcode('maxhost_shortcodes_testimonial_four','maxhost_testimonial_four_shortcode');

if(class_exists('WPBakeryVisualComposerAbstract')) {
	include_once('vc_shortcodes.php');
}