<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div class="catalog-product">
	<a href="<?php echo get_the_permalink() ?>" class="catalog-product__content">
		<div class="catalog-product__img">
			<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
		</div>
		<p class="catalog-product__title"><span><?php echo get_the_title() ?></span></p>
		<div itemprop="description" class="catalog-product__description">
			<?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?>
		</div>
	</a>
</div>
