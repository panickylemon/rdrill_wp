<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>



<div class="catalog catalog-item">
    <div class="l-container">
	<?php
		/**
		 * woocommerce_before_single_product_summary hook.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>

    <?php global $product; ?>
    <h1><?php echo get_the_title() ?></h1>

    <div class="product-price">
        <p class="product-price__text">Цена с НДС:</p>
        <p class="product-price__number"><?php echo number_format($product->get_price(), 0, '', ' ') ?> <sup>руб</sup></p>
        <a class="base-button base-button--red button-buy" href="#">Оформить заявку</a>
    </div>

    <div class="clearfix">
        <!-- комплект поставки-->
        <?php echo get_post_meta( $post->ID, 'сontents_delivery', true ); ?>
    </div>
    <div class="clearfix">
        <h2>Основные преимущества станка <?php echo $product->get_attribute( 'name-category' ); ?></h2>
        <!-- особенности/преимущества -->
        <?php echo get_post_meta( $post->ID, 'features_machine', true ); ?>
    </div>

    <div class="zz">
        <?php wc_get_template( 'single-product/single-product-description.php' );?>
    </div>


	<?php
		/**
		 * woocommerce_after_single_product_summary hook.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>


    <!-- похожие товары -->
    <?php
    wc_get_template( 'single-product/single-product-ddd.php' );
    $args = array(
        'posts_per_page' 	=> 4,
        'columns' 			=> 4,
        'orderby' 			=> 'rand'
    );

    woocommerce_related_products( apply_filters( 'woocommerce_output_related_products_args', $args ) );
    ?>

    <!-- не знаю что это -->
	<meta itemprop="url" content="<?php the_permalink(); ?>" />

    </div>
</div><!-- #product -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
