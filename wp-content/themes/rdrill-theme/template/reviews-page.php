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
            <h2 style="font-weight: 900;">Наши клиенты</h2>
            <div class="news-slider">
                <div id="clients-slider" class="owl-carousel owl-theme">
                    <div class="news-slider__item">
                        <a href="http://snsz.ru/" target="_blank">
                            <img src="/wp-content/themes/rdrill-theme/image/base/snsz.jpg" alt="Средне-Невский судостроительный завод" title="Средне-Невский судостроительный завод">
                        </a>
                    </div>
                    <div class="news-slider__item">
                        <a href="http://vszmk.ru/" target="_blank">
                            <img src="/wp-content/themes/rdrill-theme/image/base/zmk.jpg" alt="Восточно-Сибирский ЗМК" title="Восточно-Сибирский ЗМК">
                        </a>
                    </div>
                    <div class="news-slider__item">
                        <a href="https://www.sibur.ru/" target="_blank">
                            <img src="/wp-content/themes/rdrill-theme/image/base/sibur.jpg" alt="Сибур Холдинг" title="Сибур Холдинг">
                        </a>
                    </div>
                    <div class="news-slider__item">
                        <a href="http://mosmetro.ru/" target="_blank">
                            <img src="/wp-content/themes/rdrill-theme/image/base/mosm.jpg" alt="Московский метрополитен" title="Московский метрополитен">
                        </a>
                    </div>
                    <div class="news-slider__item">
                        <a href="http://www.metalloinvest.com/business/mining-segment/lgok/" target="_blank">
                            <img src="/wp-content/themes/rdrill-theme/image/base/mti.jpg" alt="Лебединский ГОК" title="Лебединский ГОК">
                        </a>
                    </div>
                    <div class="news-slider__item">
                        <a href="http://www.niimostov.ru/" target="_blank">
                            <img src="/wp-content/themes/rdrill-theme/image/base/niim.jpg" alt="НИИ мостов" title="НИИ мостов">
                        </a>
                    </div>
                    <div class="news-slider__item">
                        <a href="http://moreship.ru/" target="_blank">
                            <img src="/wp-content/themes/rdrill-theme/image/base/more.png" alt="Судостроительный завод Море" title="Судостроительный завод Море">
                        </a>
                    </div>
                    <div class="news-slider__item">
                        <a href="http://sibmost.ru/" target="_blank">
                            <img src="/wp-content/themes/rdrill-theme/image/base/sibm.jpg" alt="Сибмост" title="Сибмост">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>


