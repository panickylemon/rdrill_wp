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
        <div class="filter-sidebar">
            <div class="filter-catalog" id="filter-form">
                <?php
                    echo do_shortcode( '[woof sid="auto_shortcode" tax_only="product_cat,pa_glubina-sverl" autohide=0 autosubmit=0
                    taxonomies=product_cat:8]' );
                ?>

                <?php
                    echo do_shortcode( '[woof_products per_page=1 columns=3 is_ajax=1 taxonomies=product_cat:8
                    custom_tpl=themes/rdrill-theme/woocommerce/content-product-drills.php]' );
                ?>
            </div>
        </div>

        <div class="button-show-filter"><span>Показать фильтр</span></div>
        <div class="filter-sidebar">

            <form class="filter-catalog" id="filter-form">
                <div class="filter-item">
                    <p class="filter-item__title">Выбирайте нужное</p>
                    <div class="filter-item__content">
                        <div class="checkbox">
                            <input type="checkbox" id="hss-drills">
                            <label for="hss-drills">Сверла из быстрорежущей стали
                            </label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="drills-soldered-plates">
                            <label for="drills-soldered-plates">Сверла с напаянными пластинами
                            </label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="carbide-bits">
                            <label for="carbide-bits">Твердосплавные коронки
                            </label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="twist-drill">
                            <label for="twist-drill">Спиральные сверла (Weldon 19,05)
                            </label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="mini-drill">
                            <label for="mini-drill">Мини-сверла
                            </label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="rail-drills-hss">
                            <label for="rail-drills-hss">Железнодорожные сверла HSS (SRCV)
                            </label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="rail-drills-tct">
                            <label for="rail-drills-tct">Железнодорожные сверла ТСТ (SCRWC)
                            </label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="rail-twist-drills">
                            <label for="rail-twist-drills">Железнодорожные спиральные сверла
                            </label>
                        </div>
                    </div>
                </div>

                <div class="filter-item">
                    <p class="filter-item__title">Глубина сверления</p>
                    <div class="filter-item__content">
                        <div class="checkbox">
                            <input type="checkbox" id="30-mm">
                            <label for="30-mm">30 mm
                            </label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="55-mm">
                            <label for="55-mm">55 mm
                            </label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="80-mm">
                            <label for="80-mm">80 mm
                            </label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="110-mm">
                            <label for="110-mm">110 mm
                            </label>
                        </div>

                    </div>
                </div>

                <div class="filter-item">
                    <p class="filter-item__title">Диаметр сверла</p>
                    <div class="filter-item__content filter-select-wrap">
                        <label for="diameter">Выбрать диаметр:</label>
                        <select name="diameter" class="selectpicker diameter-select" id="diameter">
                            <option>12х50 мм</option>
                            <option>12х50 мм</option>
                            <option>12х150 мм</option>
                            <option>12х150 мм</option>
                        </select>
                    </div>
                </div>

                <div class="folter-buttons clearfix">
                    <button class="base-button base-button--red button-filter">Показать
                    </button>

                    <button class="base-button base-button--grey button-filter button-filter-reset">Сбросить
                    </button>
                </div>
            </form>

            <?php get_sidebar('questions'); ?>
        </div>

        <?php if (have_posts()) : ?>

            <div class="filter-content">
                <div class="catalog-products-wrap clearfix">

                    <?php while (have_posts()) : the_post(); ?>

                        <?php wc_get_template_part('content', 'product-drills'); ?>

                    <?php endwhile; ?>

                </div>

                <?php
                    /**
                     * woocommerce_after_shop_loop hook.
                     *
                     * @hooked woocommerce_pagination - 10
                     */
                do_action('woocommerce_after_shop_loop');
                ?>
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
