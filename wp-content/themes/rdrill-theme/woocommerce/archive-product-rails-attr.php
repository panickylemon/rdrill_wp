<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author        WooThemes
 * @package    WooCommerce/Templates
 * @version     2.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

get_header('shop'); ?>

<?php
/**
 * woocommerce_before_main_content hook.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 */
do_action('woocommerce_before_main_content');
?>

<div class="catalog catalog-drill">
    <div class="l-container">
        <div class="banner-catalog catalog-drill__banner">
            <div class="banner-inner">

                <?php
                $term_id = get_queried_object()->term_id;
                $post_id = 'product_cat_' . $term_id;
                ?>

                <?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
                    <h1 class="banner-catalog__title"><?php echo get_field('full_title', $post_id); ?></h1>
                <?php endif; ?>

                <!-- описание категории - выводится под заголовком -->
                <?php
                /**
                 * woocommerce_archive_description hook.
                 *
                 * @hooked woocommerce_taxonomy_archive_description - 10
                 * @hooked woocommerce_product_archive_description - 10
                 */
                do_action('woocommerce_archive_description');
                ?>

            </div>
        </div>
    </div>

    <div class="l-container">
        <div class="button-show-filter"><span>Показать фильтр</span></div>
        <div class="filter-sidebar">
            <div class="filter-catalog" id="filter-form">
                <?php
                echo do_shortcode( '[woof tax_only="pa_glubina-rails" autohide=0 autosubmit=0
                    taxonomies=product_cat:11]' );
                ?>
            </div>

            <?php get_sidebar('questions'); ?>
        </div>

        <?php if (have_posts()) : ?>
            <div class="filter-content">
                <div class="catalog-products-wrap clearfix">
                    <?php
                    echo do_shortcode( '[woof_products per_page=12 columns=3 is_ajax=1 taxonomies=product_cat:11]' );
                    ?>
                </div>

                <div class="catalog-description">
                    <div><?php echo get_field('description_category', $post_id); ?> </div>
                    <div><?php echo get_field('questions_category', $post_id); ?> </div>
                </div>
            </div>
        <?php endif; ?>

        <?php
        /**
         * woocommerce_after_main_content hook.
         *
         * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
         */
        do_action('woocommerce_after_main_content');
        ?>

        <?php
        /**
         * woocommerce_sidebar hook.
         *
         * @hooked woocommerce_get_sidebar - 10
         */
        do_action('woocommerce_sidebar');
        ?>

        <?php get_footer('shop'); ?>

    </div>
</div>
