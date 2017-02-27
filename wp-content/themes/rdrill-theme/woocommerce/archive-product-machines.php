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

<div class="catalog catalog-machine">
    <div class="l-container">
        <div class="banner-catalog catalog-machine__banner">
            <div class="banner-inner">

                <?php
                    $term_id = get_queried_object()->term_id;
                    $post_id = 'product_cat_'.$term_id;
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


        <?php if (have_posts()) : ?>
            <div class="sorting-wrap">
                <form id="sorting-form" action="">

                    <div class="table-responsive">
                        <table class="table sorting-table tablesorter" id="sorting-table">
                            <thead>
                            <tr class="options-sorting">
                                <th class="sorting-table__model">Модель</th>
                                <th class="diameter-core-bits options-item options-active">
                                    <div class="options-sorting__icon"></div>
                                    <p class="options-title">
                                        Диаметр корончатых сверл, мм
                                    </p>

                                    <div class="buttons-sorting clearfix">
                                        <div class="buttons-sorting__item buttons-sorting__top"></div>
                                        <div class="buttons-sorting__item buttons-sorting__bottom active"></div>
                                    </div>
                                </th>
                                <th class="drilling-depth options-item">
                                    <div class="options-sorting__icon"></div>
                                    <p class="options-title">
                                        Глубина сверления, мм
                                    </p>

                                    <div class="buttons-sorting clearfix">
                                        <div class="buttons-sorting__item buttons-sorting__top"></div>
                                        <div class="buttons-sorting__item buttons-sorting__bottom"></div>
                                    </div>
                                </th>
                                <th class="diameter-twist-drills options-item">
                                    <div class="options-sorting__icon"></div>
                                    <p class="options-title">
                                        Диаметр спиральных сверл, мм
                                    </p>

                                    <div class="buttons-sorting clearfix">
                                        <div class="buttons-sorting__item buttons-sorting__top"></div>
                                        <div class="buttons-sorting__item buttons-sorting__bottom"></div>
                                    </div>
                                </th>
                                <th class="power options-item">
                                    <div class="options-sorting__icon"></div>
                                    <p class="options-title">
                                        Мощность
                                    </p>

                                    <div class="buttons-sorting clearfix">
                                        <div class="buttons-sorting__item buttons-sorting__top"></div>
                                        <div class="buttons-sorting__item buttons-sorting__bottom"></div>
                                    </div>
                                </th>
                                <th class="weight options-item">
                                    <div class="options-sorting__icon"></div>
                                    <p class="options-title">
                                        Вес, кг
                                    </p>

                                    <div class="buttons-sorting clearfix">
                                        <div class="buttons-sorting__item buttons-sorting__top"></div>
                                        <div class="buttons-sorting__item buttons-sorting__bottom"></div>
                                    </div>
                                </th>
                                <th class="height options-item">
                                    <div class="options-sorting__icon"></div>
                                    <p class="options-title">
                                        Высота, мм
                                    </p>

                                    <div class="buttons-sorting clearfix">
                                        <div class="buttons-sorting__item buttons-sorting__top"></div>
                                        <div class="buttons-sorting__item buttons-sorting__bottom"></div>
                                    </div>
                                </th>
                                <th class="working-body options-item">
                                    <div class="options-sorting__icon"></div>
                                    <p class="options-title">
                                        Рабочий орган
                                    </p>

                                    <div class="buttons-sorting clearfix">
                                        <div class="buttons-sorting__item buttons-sorting__top"></div>
                                        <div class="buttons-sorting__item buttons-sorting__bottom"></div>
                                    </div>
                                </th>
                                <th class="spindle options-item">
                                    <div class="options-sorting__icon"></div>
                                    <p class="options-title">
                                        Ход шпинделя, мм
                                    </p>

                                    <div class="buttons-sorting clearfix">
                                        <div class="buttons-sorting__item buttons-sorting__top"></div>
                                        <div class="buttons-sorting__item buttons-sorting__bottom"></div>
                                    </div>
                                </th>
                                <th class="tapping options-item">
                                    <div class="options-sorting__icon"></div>
                                    <p class="options-title">
                                        Нарезание резьбы
                                    </p>

                                    <div class="buttons-sorting clearfix">
                                        <div class="buttons-sorting__item buttons-sorting__top"></div>
                                        <div class="buttons-sorting__item buttons-sorting__bottom"></div>
                                    </div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="static">
                                <td class="reset-options" colspan="10">
                                    <a href="#">
                                        <span class="reset-options__icon"></span><span class="reset-options__text">Сбросить параметры фильтра</span>
                                    </a>
                                </td>
                            </tr>
                            <?php while (have_posts()) : the_post(); ?>

                                <?php wc_get_template_part('content', 'product-machines'); ?>

                            <?php endwhile; // end of the loop. ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="sorting-buttons">
                        <button class="base-button base-button--red button-sorting">Сравнить выбранные станки
                        </button>

                        <button class="base-button base-button--grey button-sorting button-sorting-reset">Сбросить
                        </button>
                    </div>

                </form>
            </div>


            <div><?php echo get_field('description_category', $post_id); ?> </div>
            <div><?php echo get_field('questions_category', $post_id); ?> </div>

            <?php
            /**
             * woocommerce_after_shop_loop hook.
             *
             * @hooked woocommerce_pagination - 10
             */
            do_action('woocommerce_after_shop_loop');
            ?>

        <?php elseif (!woocommerce_product_subcategories(array('before' => woocommerce_product_loop_start(false), 'after' => woocommerce_product_loop_end(false)))) : ?>

            <?php wc_get_template('loop/no-products-found.php'); ?>

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
