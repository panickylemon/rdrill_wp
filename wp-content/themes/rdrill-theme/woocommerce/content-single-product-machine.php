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
        <div class="wrap-card">
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
            <!-- !!!!!! проверка на наличие поля особенности !!!!! -->
            <?php $features_machine = get_post_meta( $post->ID, 'features_machine', true ); ?>
            <?php if (!empty($features_machine)) { ?>
                <h2>Основные преимущества станка <?php echo $product->get_attribute( 'name-category' ); ?></h2>
            <?php }?>

            <!-- видео -->
            <?php $video_machine = get_post_meta( $post->ID, 'video_machine', true ); ?>
            <?php if (!empty($video_machine)) { ?>
            <div class="video-container">
                <div class="video-wrapper">
                    <div id="player" data-video-id="<?php echo $video_machine ?>"></div>
                    <div id="thumbnail_container" class="thumbnail_container">
                        <img class="thumbnail" id="thumbnail"
                             src="http://img.youtube.com/vi/<?php echo $video_machine ?>/sddefault.jpg" alt="превью"/>
                    </div>
                    <a class="start-video"><img src="/wp-content/themes/rdrill-theme/image/icons/play.png" alt="play">
                    </a>
                </div>
            </div>
            <?php }?>

            <!-- особенности/преимущества -->
            <?php echo $features_machine; ?>


            <!-- полезные статьи !!!!!! тоже нужна проверка !!!!!!!!!!!!!!!!!!!  -->
            <?php $useful_articles = get_post_meta( $post->ID, 'useful_articles', true ); ?>
            <?php if (!empty($useful_articles)) { ?>
                <div class="useful-articles">
                    <p class="useful-articles__title">Полезные статьи по теме</p>
                    <div class="useful-articles__content">
                        <?php foreach ( $useful_articles as $useful_article ): ?>
                            <a href="<?php echo get_permalink($useful_article);?>">
                                <span><?php echo get_the_title($useful_article);?></span>
                            </a>
                        <?php endforeach;?>
                    </div>
                </div>
            <?php }?>

        </div>  <!-- end wrap-card -->
    </div> <!-- end l-container -->

        <!-- Дополнительная инфа -->
    <?php $tabs = apply_filters( 'woocommerce_product_tabs', array() );?>
    <?php $tab = $tabs['additional_information'] ?>
    <div>
        <?php call_user_func( $tab['callback'], $key, $tab ); ?>
    </div>

        <!-- Отзывы -->
        <?php $tab = $tabs['reviews'] ?>
    <div>
        <?php call_user_func( $tab['callback'], $key, $tab ); ?>
    </div>

        <!-- Описание -->
    <?php $tab = $tabs['description'] ?>
    <div>
        <?php call_user_func( $tab['callback'], $key, $tab ); ?>
    </div>

    <div class="other-product">
        <div class="l-container">
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
        </div>
    </div>

    <!-- не знаю что это -->
	<meta itemprop="url" content="<?php the_permalink(); ?>" />

    </div>
</div><!-- #product -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
