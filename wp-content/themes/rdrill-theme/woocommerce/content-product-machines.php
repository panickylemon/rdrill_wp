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
<tr>
	<td class="sorting-model__machine clearfix">
		<div class="checkbox sorting-checkbox">
			<input type="checkbox" id="element-<?php echo $product->id ?>" class="sorting-checkbox-input">
			<label for="element-<?php echo $product->id ?>">
			</label>
		</div>
		<a href="<?php echo get_the_permalink() ?>" class="product-link-sorting">
			<div class="sorting-model__img">
				<?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
			</div>
			<div class="sorting-model__info">
				<p class="sorting-model__title"><?php echo $product->get_attribute( 'name-category' ); ?></p>
				<p class="sorting-model__price-text">Цена с НДС:</p>
				<p class="sorting-model__price-number"><?php echo number_format($product->get_price(), 0, '', ' ') ?><sup>руб</sup></p>
			</div>
		</a>
	</td>
	<td>
		<?php echo $product->get_attribute( 'diametr-koronchatyih-sverl' ); ?>
	</td>
    <td>
        <?php echo $product->get_attribute( 'glubina-sverleniya' ); ?>
    </td>
    <td>
        <?php echo $product->get_attribute( 'diametr-spiralnyih-sverl' ); ?>
    </td>
    <td>
        <?php echo $product->get_attribute( 'moshhnost' ); ?>
    </td>
    <td>
        <?php echo $product->get_attribute( 'ves' ); ?>
    </td>
    <td>
        <?php echo $product->get_attribute( 'vyisota' ); ?>
    </td>
    <td>
        <?php echo $product->get_attribute( 'rabochiy-organ' ); ?>
    </td>
    <td>
        <?php echo $product->get_attribute( 'hod-shpindelya' ); ?>
    </td>
    <td>
        <?php echo $product->get_attribute( 'narezanie-rezbyi' ); ?>
    </td>

</tr>




