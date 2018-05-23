<?php
// **********************************************************************// 
// ! Function is_woocommerce_activated
// **********************************************************************//
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	function is_woocommerce_activated() {
		if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
	}
}

// **********************************************************************// 
// ! Declare WooCommerce support in this theme
// **********************************************************************//
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// **********************************************************************// 
// ! Enqueue Custom WooCommerce Styles
// **********************************************************************//
if ( class_exists( 'woocommerce' ) ) {
function maxhost_add_footer_styles() {
    /* woocommerce */
	wp_enqueue_style( 'maxhost-shop-templates.css', get_template_directory_uri() . '/css/shop-templates.css');
};
add_action( 'get_footer', 'maxhost_add_footer_styles' );
}

// **********************************************************************// 
// ! Enqueue Custom WooCommerce JS
// **********************************************************************//
function maxhost_woocommerce_scripts_basic() {  
wp_enqueue_script('maxhost-woocommerce', get_template_directory_uri() . '/js/maxhost-woocommerce.js', array( 'jquery' ), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'maxhost_woocommerce_scripts_basic' ); 

// **********************************************************************// 
// ! Customizing open and close a href tags of product loop
// **********************************************************************//
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );
/*
add_action('woocommerce_before_shop_loop_item', 'maxhost_woocommerce_template_loop_product_link_open');
function maxhost_woocommerce_template_loop_product_link_open() {
echo '<div class="project-item"><div class="project-item-inner">';
}

add_action('woocommerce_before_shop_loop_item', 'maxhost_woocommerce_template_loop_product_link_close');
function maxhost_woocommerce_template_loop_product_link_close() {
echo '</div></div>';
}
*/

// **********************************************************************// 
// ! Customizing title of loop product
// **********************************************************************//
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );

// **********************************************************************// 
// ! Customizing star rating of product loop
// **********************************************************************//
add_filter('woocommerce_product_get_rating_html', 'maxhost_rating_removal');
function maxhost_rating_removal( $rating_variable ) {
$rating_variable = '<div class="star-rating" style="display:none;"></div>';
return $rating_variable;
}


// **********************************************************************// 
// ! Customizing image of product loop
// **********************************************************************//
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
/**
 * WooCommerce Loop Product Thumbs
 **/
 if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {
	function woocommerce_template_loop_product_thumbnail() {
		echo woocommerce_get_product_thumbnail();
	} 
 }
/**
 * WooCommerce Product Thumbnail
 **/
 if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {
	
	function woocommerce_get_product_thumbnail( $size = 'shop_catalog', $deprecated1 = 0, $deprecated2 = 0 ) {
		global $post;
		global $product;
		$image_size = apply_filters( 'single_product_archive_thumbnail_size', $size );

		if ( has_post_thumbnail() ) {
			$props = wc_get_product_attachment_props( get_post_thumbnail_id(), $post );
			$output = '<div class="project-item"><div class="project-item-inner"><figure class="alignnone project-img">';
			$output .= get_the_post_thumbnail( $post->ID, $image_size, array(
				'title'	 => $props['title'],
				'alt'    => $props['alt'],
			) );
			$output .= '<div class="overlay">
						<a href="' . $product->add_to_cart_url() . '" class="dlink"><i class="fa fa-shopping-cart"></i></a>
						<a href="' . get_the_permalink() . '" class="zoom"><i class="fa fa-file-text-o"></i></a>
					</div>
                </figure>
				<div class="project-desc">
                  <h4 class="title"><a href="' . get_the_permalink() . '">' . $product->get_title() . '</a></h4>
                  <span class="price">
                    <span class="amount">' . $product->get_price_html() . '</span>
                  </span>
                </div>
				</div></div>';
			return $output;
		} elseif ( wc_placeholder_img_src() ) {
			return wc_placeholder_img( $image_size );
		}
	}
 }
 
// **********************************************************************// 
// ! Customizing category product of loop
// **********************************************************************//
 remove_action( 'woocommerce_shop_loop_subcategory_title', 'woocommerce_template_loop_category_title', 10 );
 
 add_action( 'woocommerce_shop_loop_subcategory_title', 'woocommerce_template_loop_category_title', 10 );
 function woocommerce_template_loop_category_title( $category ) {
 ?>
		<div class="project-desc" style="padding: 10px 20px 25px 20px;">
			<h4 class="title">
			<a href="<?php echo get_term_link( $category, 'product_cat' ); ?>"><?php echo $category->name; ?><?php if ( $category->count > 0 )
								echo apply_filters( 'woocommerce_subcategory_count_html', ' <span class="count" style="padding: 0.2em;">(' . $category->count . ')</span>', $category ); ?></a>
			</h4>
		</div>
<?php
}

// **********************************************************************// 
// ! Customizing woocommerce breadcrumb
// **********************************************************************//
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
add_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
function woocommerce_breadcrumb( $args = array() ) {
	$args = wp_parse_args( $args, apply_filters( 'woocommerce_breadcrumb_defaults', array(
			'delimiter'   => '<i>/</i>',
			'wrap_before' => '<nav class="breadcrumbs view-links" ' . ( is_single() ? 'itemprop="breadcrumb"' : '' ) . '>',
			'wrap_after'  => '</nav>',
			'before'      => '',
			'after'       => '',
			'home'        => _x( 'Home', 'breadcrumb', 'maxhost' )
		) ) );

		$breadcrumbs = new WC_Breadcrumb();

		if ( ! empty( $args['home'] ) ) {
			$breadcrumbs->add_crumb( $args['home'], apply_filters( 'woocommerce_breadcrumb_home_url', home_url() ) );
		}

		$args['breadcrumb'] = $breadcrumbs->generate();

		wc_get_template( 'global/breadcrumb.php', $args );
}

// **********************************************************************// 
// ! Register WooCommerce Sidebars
// **********************************************************************//
if ( ! function_exists( 'maxhost_woocommerce_widgets_init' ) ) {
	function maxhost_woocommerce_widgets_init() {

		register_sidebar( array(
		'name' => esc_html__( 'WooCommerce Sidebar', 'maxhost' ),
		'id' => 'maxhost_woocommerce_sidebar',
		'before_widget' => '<div id="%1$s" class="widget widget__sidebar %2$s">',
		'after_widget' => '</div><div class="clearfix"></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	}
}
add_action( 'widgets_init', 'maxhost_woocommerce_widgets_init' );	