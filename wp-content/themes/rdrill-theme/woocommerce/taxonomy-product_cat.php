<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product_cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

$category = get_queried_object()->term_id;
$drills = array("8,10,11,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29");
$machines = array("9");

if (in_array($category, $drills)) {
    wc_get_template( 'archive-product-drills.php' );
}
elseif (in_array($category, $machines)) {
    wc_get_template( 'archive-product-machines.php' );
}
else {
    wc_get_template( 'archive-product.php' );
}

//wc_get_template( 'archive-product.php' );

