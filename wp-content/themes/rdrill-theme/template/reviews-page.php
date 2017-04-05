<?php
/**
 * Template Name: Страница отзывов
 */
?>


<?php get_header(); ?>

<main class="content">
    <div class="l-container">
        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div>

    <div class="contacts-wrap">
        <div class="l-container">
            <h1><?php the_title(); ?></h1>
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
            <div class="news-slider">
                <div id="reviews-slider" class="owl-carousel owl-theme">
                    <div class="news-slider__item">
                        <a href="/wp-content/themes/rdrill-theme/image/reviews/1-otziv-rotabroach.jpg" data-lightbox="images">
                            <img src="/wp-content/themes/rdrill-theme/image/reviews/1-otziv-rotabroach.jpg" alt="">
                        </a>
                    </div>
                    <div class="news-slider__item">
                        <a href="/wp-content/themes/rdrill-theme/image/reviews/2-otziv-rotabroach.jpg" data-lightbox="images">
                            <img src="/wp-content/themes/rdrill-theme/image/reviews/2-otziv-rotabroach.jpg" alt="">
                        </a>
                    </div>
                    <div class="news-slider__item">
                        <a href="/wp-content/themes/rdrill-theme/image/reviews/3-otziv-rotabroach.jpg" data-lightbox="images">
                            <img src="/wp-content/themes/rdrill-theme/image/reviews/3-otziv-rotabroach.jpg" alt="">
                        </a>
                    </div>
                    <div class="news-slider__item">
                        <a href="/wp-content/themes/rdrill-theme/image/reviews/4-otziv-rotabroach.jpg" data-lightbox="images">
                            <img src="/wp-content/themes/rdrill-theme/image/reviews/4-otziv-rotabroach.jpg" alt="">
                        </a>
                    </div>
                    <div class="news-slider__item">
                        <a href="/wp-content/themes/rdrill-theme/image/reviews/5-otziv-rotabroach.jpg" data-lightbox="images">
                            <img src="/wp-content/themes/rdrill-theme/image/reviews/5-otziv-rotabroach.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>


