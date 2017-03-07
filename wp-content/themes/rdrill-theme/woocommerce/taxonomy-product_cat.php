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
$drills = array("8","13","14","15","16","17","18","19","20");
$machines = array("9");
$accessories = array("10","21","22","23","24","25","26","27","28","29","106","107","108","112","113","114");
$accessories_nofilter = array("21","22","23","24","25","26","27","28","29","106","107","108","112","113","114");
$rails = array("11");
//$rails_attr = array("109","110","111");

if (in_array($category, $drills)) {
    wc_get_template( 'archive-product-drills.php' );
}
elseif (in_array($category, $machines)) {
    wc_get_template( 'archive-product-machines.php' );
}
elseif (in_array($category, $accessories)) {
    wc_get_template( 'archive-product-accessories.php' );
}
elseif (in_array($category, $accessories_nofilter)) {
    wc_get_template( 'archive-product-accessories-nofilter.php' );
}
elseif (in_array($category, $rails)) {
    wc_get_template( 'archive-product-rails.php' );
}
//elseif (in_array($category, $rails_attr)) {
//    wc_get_template( 'archive-product-rails-attr.php' );
//}
else {
    wc_get_template( 'archive-product.php' );
}

//wc_get_template( 'archive-product.php' );

