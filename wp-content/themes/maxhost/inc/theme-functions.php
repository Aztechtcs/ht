<?php
// **********************************************************************// 
// ! Customizing number of products in shop page
// **********************************************************************//
	add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 9;' ), 20 );
	
// **********************************************************************// 
// ! Supports post thumbnails and post formats
// **********************************************************************// 
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', array( 'video' ) );
add_theme_support( 'custom-logo', array(
   'height'      => 35,
   'width'       => 200,
   'flex-width' => true,
) );
function maxhost_the_custom_logo() {
   if ( function_exists( 'the_custom_logo' ) ) {
      the_custom_logo();
   }
}
// **********************************************************************// 
// ! Rss feeds, Custom Background and Title Tag theme supports
// **********************************************************************// 
add_theme_support( 'automatic-feed-links' );
add_theme_support('custom-background', array(
        'default-color' => '#ffffff',
    ));
add_theme_support( 'custom-header', array(
		'default-text-color'     => '#000'
	) );
add_theme_support( 'title-tag' );
function maxhost_add_editor_styles() {
    add_editor_style( 'css/webfonts/webfonts.css' );
}
add_action( 'admin_init', 'maxhost_add_editor_styles' );

// **********************************************************************// 
// ! This theme uses wp_nav_menu() for Main Menu
// **********************************************************************// 
register_nav_menus( array(
		'maxhost_primary_menu'=> esc_html__('Main Menu', 'maxhost'),
		'maxhost_menu_footer_one'=> esc_html__('Footer Menu One', 'maxhost'),
		'maxhost_menu_footer_two'=> esc_html__('Footer Menu Two', 'maxhost'),
		'maxhost_menu_footer_three'=> esc_html__('Footer Menu Three', 'maxhost')
) );

// **********************************************************************// 
// ! Custom Walker for wp_nav_menu()
// **********************************************************************//
class maxhost_walker_nav_menu extends Walker_Nav_Menu {

private $blog_sidebar_pos = "";
// add classes to ul sub-menus
function start_lvl( &$output, $depth = 0, $args = Array() ) {
    // depth dependent classes
    $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
    $display_depth = ( $depth + 1); // because it counts the first submenu as 0
    $classes = array(
        'dropdown-menu',
        ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
        ( $display_depth >=2 ? '' : '' ),
        'menu-depth-' . $display_depth
        );
    $class_names = implode( ' ', $classes );
  
    // build html
	
	$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
}
  
// add main/sub classes to li's and links
 function start_el( &$output, $item, $depth = 0, $args = Array(), $id = 0 ) {
    global $wp_query;
    $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
  
    // depth dependent classes
	$depth_classes = array(
        ( $depth == 0 ? 'dropdown' : '' ), //class for the top level menu which got sub-menu
		( $depth >=1 ? 'dropdown-submenu mul' : '' ), //class for the level-1 sub-menu which got level-2 sub-menu
        ( $depth >=2 ? 'sub-sub-menu-item' : '' ), //class for the level-2 sub-menu which got level-3 sub-menu
        ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
        'menu-item-depth-' . $depth
    );
    $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
  
    // passed classes
    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
    $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
  
    // build html
    $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
  
    // link attributes
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'dropdown-toggle' ) . '"';

	if( 'maxhost_mega_menu' == $item->object ){
				$item_output = $args->before;
				$megamenu_item = get_post( $item->object_id );
				$item_output .= '<div class="yamm-content"><div class="row list-unstyled">' . apply_filters( 'the_content', $megamenu_item->post_content ) . '</div></div>';
	}else{
	$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
        $args->before,
        $attributes,
        $args->link_before,
        apply_filters( 'the_title', $item->title, $item->ID ),
        $args->link_after,
        $args->after
    );
	}
  
    // build html
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id );
}
} //End Walker_Nav_Menu

// **********************************************************************// 
// ! Add breadcrumbs
// **********************************************************************//
function maxhost_wordpress_breadcrumbs() {
 
  $delimiter = '<i>/</i>';
  $name = 'Home'; //text for the 'Home' link
  $currentBefore = '<span class="current">';
  $currentAfter = '</span>';
 
  if ( !is_home() && !is_front_page() || is_paged() ) {
 
    echo '<div class="breadcrumbs view-links">';
 
    global $post;
    $home = home_url();
    echo '<a href="' . $home . '">' . $name . '</a> ' . $delimiter . ' ';
 
    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
      echo $currentBefore . 'Archive by category &#39;';
      single_cat_title();
      echo '&#39;' . $currentAfter;
 
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $currentBefore . get_the_time('d') . $currentAfter;
 
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $currentBefore . get_the_time('F') . $currentAfter;
 
    } elseif ( is_year() ) {
      echo $currentBefore . get_the_time('Y') . $currentAfter;
 
    } elseif ( is_single() ) {
      $cat = get_the_category(); $cat = (isset($cat[0]) ? $cat[0] : null);
      echo is_wp_error( $cat_parents = get_category_parents($cat, TRUE, '' . $delimiter . '') ) ? '' : $cat_parents;
      echo $currentBefore;
      the_title();
      echo $currentAfter;
 
    } elseif ( is_page() && !$post->post_parent ) {
      echo $currentBefore;
      the_title();
      echo $currentAfter;
 
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
      echo $currentBefore;
      the_title();
      echo $currentAfter;
 
    } elseif ( is_search() ) {
      echo $currentBefore . 'Search results for &#39;' . get_search_query() . '&#39;' . $currentAfter;
 
    } elseif ( is_tag() ) {
      echo $currentBefore . 'Posts tagged &#39;';
      single_tag_title();
      echo '&#39;' . $currentAfter;
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $currentBefore . 'Articles posted by ' . $userdata->display_name . $currentAfter;
 
    } elseif ( is_404() ) {
      echo $currentBefore . 'Error 404' . $currentAfter;
    }
 
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page', 'maxhost') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
 
    echo '</div>';
 
  }
}
/// Breadcrumbs End ///

// **********************************************************************// 
// ! Register Sidebars
// **********************************************************************//
if ( ! function_exists( 'maxhost_widgets_init' ) ) {
	function maxhost_widgets_init() {

		register_sidebar( array(
		'name' => esc_html__( 'Sidebar', 'maxhost' ),
		'id' => 'maxhost_sidebar',
		'before_widget' => '<div id="%1$s" class="widget m-bottom4 %2$s">',
		'after_widget' => '</div><div class="clearfix"></div>',
		'before_title' => '<div class="cat-title white font-bold uppercase"><i class="fa fa-align-justify"></i> ',
		'after_title' => '</div>',
	) );
	}
}
add_action( 'widgets_init', 'maxhost_widgets_init' );

// **********************************************************************// 
// ! Get Global Variables
// **********************************************************************//
function maxhost_get_global_post() {
    global $post;
    if ( 
        ! $post instanceof \WP_Post
    ) {
        return false;
    }
    return $post;
}

function maxhost_get_global_wpquery() {
    global $wp_query;
    return $wp_query;
}

// **********************************************************************// 
// ! Custom Pagination
// **********************************************************************//
function maxhost_custom_pagination() {
	global $wp_query;

	$big = 999999999; // need an unlikely integer
		
	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'show_all'     => false,
		'end_size'     => 1,
		'mid_size'     => 2,
		'prev_next'    => true,
		'prev_text'    => '<i class="fa fa-angle-left"></i>',
		'next_text'    => '<i class="fa fa-angle-right"></i>',
		'type'         => 'list',
		'add_args'     => false,
		'add_fragment' => ''
	) );
}

// **********************************************************************// 
// ! Excerpt Limit
// **********************************************************************//
function maxhost_excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

if ( ! function_exists( 'maxhost_excerpt_length' ) ) {
	function maxhost_excerpt_length( $length ) {
	return 65;
	}
}
add_filter( 'excerpt_length', 'maxhost_excerpt_length', 999 );

// **********************************************************************// 
// ! Set Content Width
// **********************************************************************// 
if (!isset($content_width)) { $content_width = 750; }

add_filter('get_avatar','add_gravatar_class');

// **********************************************************************// 
// ! Adding Class to Gravatar image
// **********************************************************************//
function add_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='avatar img-circle", $class);
    return $class;
}
// **********************************************************************// 
// ! Display Comments section
// **********************************************************************//
if ( ! function_exists( 'maxhost_comment' ) ) {
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own maxhost_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 */
	function maxhost_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;

	global $post;
	?>
	<div <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
	<div class="media">
	<div class="media-left"><?php echo get_avatar($comment, 80); ?></div>
            <div class="media-body" style="width: auto;">
              <h4 class="media-heading"><a class="c-font-bold" href="#"><?php comment_author(); ?></a> <span class="small"><?php esc_html_e('on ', 'maxhost'); ?> <?php comment_date('d M, Y') ?></span> </h4>
              <?php comment_text()?>
            </div>
	</div>
	<!-- #comment-## -->

	<?php
	}
}

/*******************
Comment form styling
*******************/
if ( ! function_exists( 'maxhost_modify_comment_fields' ) ) {
	function maxhost_modify_comment_fields($fields) {

    $fields['fields'] = '<div class="row"><div class="col col-6"><label class="label al_left">'.esc_html__("Name", 'maxhost').'</label>
                      <label class="input"><input type="text" id="author" name="author"';
	$n_value = '';
	$e_value = '';

	$fields['fields'] .= ' value="'.esc_attr($n_value).'" aria-required="true" /></label></div>
						  <div class="col col-6">';
    $fields['fields'] .= '<label class="label al_left">'.esc_html__("E-mail", 'maxhost').'</label>
							<label class="input"><input type="email" id="email" name="email" value="'.esc_attr($e_value).'" aria-required="true" /></label></div></div>';
	//$fields['fields'] .= '<div style="display:none;"><input type="text" id="url" class="form-control" name="url" placeholder="'.esc_html__("Website", 'maxhost').'" value="'.esc_attr($w_value).'" aria-required="false" /></div>';
	return $fields;
	}
}

add_filter('comment_form_defaults', 'maxhost_modify_comment_fields');//Name, Email and Website fields customization filter

if ( ! function_exists( 'maxhost_comment_field' ) ) {
	function maxhost_comment_field($arg) {
  
	$arg['comment_field'] = '
								<label class="label al_left">'.esc_html__("Message", 'maxhost').'</label>
								<label class="textarea"><textarea name="comment" id="" rows="4"></textarea></label>
							 ';    
	return $arg;
	}
}
add_filter('comment_form_defaults', 'maxhost_comment_field');//Text area customization filter


function maxhost_comment_form_submit_button($button) {
	$button =
		'<footer>
            <button class="button seven" name="submit" type="submit" id="[args:id_submit]" value="[args:label_submit]">'.esc_html__("Submit comment", 'maxhost').'</button>
         </footer>' .
		get_comment_id_fields();
	return $button;
}
add_filter('comment_form_submit_button', 'maxhost_comment_form_submit_button');//Submit button customization filter

function maxhost_move_comment_field_to_bottom( $fields ) {
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;

return $fields;
}
add_filter( 'comment_form_fields', 'maxhost_move_comment_field_to_bottom' );//move the comment text field to the bottom