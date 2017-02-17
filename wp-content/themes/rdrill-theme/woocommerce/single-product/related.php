<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product, $woocommerce_loop;

if ( empty( $product ) || ! $product->exists() ) {
	return;
}

if ( $product->upsell_ids) {
	$related = $product->upsell_ids;
} else {
	if ( ! $related = $product->get_related( $posts_per_page ) ) {
		return;
	}
}


$args = apply_filters( 'woocommerce_related_products_args', array(
	'post_type'            => 'product',
	'ignore_sticky_posts'  => 1,
	'no_found_rows'        => 1,
	'posts_per_page'       => $posts_per_page,
	'orderby'              => $orderby,
	'post__in'             => $related,
	'post__not_in'         => array( $product->id )
) );

$products                    = new WP_Query( $args );
$woocommerce_loop['name']    = 'related';
$woocommerce_loop['columns'] = apply_filters( 'woocommerce_related_products_columns', $columns );

if ( $products->have_posts() ) : ?>

	<div class="related products">

		<h2><?php _e( 'Related Products', 'woocommerce' ); ?></h2>

	<div class="other-product-slider">
		<div id="other-product-slider" class="owl-carousel owl-theme">
			<?php while ( $products->have_posts() ) : $products->the_post(); ?>
				<div class="product-slider__item">
					<a class="product-slider__item-link">
						<div class="product-slider__image">
							<?php echo woocommerce_get_product_thumbnail()?>
						</div>
						<p class="product-slider__title"><span><?php echo get_the_title() ?></span></p>
					</a>
				</div>
			<?php endwhile; // end of the loop. ?>
		</div>
	</div>

	</div>

<?php endif;

wp_reset_postdata();
