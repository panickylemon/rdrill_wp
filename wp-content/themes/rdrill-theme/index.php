<?php get_header(); ?>

<div class="l-container">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Главная</a></li>
        <li class="breadcrumb-item"><a href="/about">О компании</a></li>
        <li class="breadcrumb-item active">Статьи</li>
    </ul>
</div>

<main class="content">
    <div class="l-container">
        <?php get_sidebar('about-inner'); ?>

        <div class="about-content">
            <h1>Статьи</h1>

            <?php
            $wp_query = new WP_Query(array(
                'posts_per_page' => 6,
                'paged' => $paged
            )); ?>

            <?php while ( have_posts() ) : the_post();?>
                <div class="news-preview">
                    <?php if ( has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                    <?php endif; ?>

                    <h2 class="news-preview__title"><?php the_title(); ?></h2>

                    <div class="news-item__additional-info clearfix">
                        <p class="news-date">
                            <span class="news__additional-title">Дата:</span>
                            <span><?php the_time('d.m.Y') ?></span>
                        </p>

                        <p class="news-author">
                            <span class="news__additional-title">Автор:</span>
                            <span class="news-name"><?php the_author(); ?></span>
                        </p>
                    </div>

                    <div class="news-preview__text">
                        <?php the_content(''); ?>
                    </div>


                    <div class="news-preview__wrap-button">
                        <a class="base-button base-button--grey news-preview__button" href="<?php the_permalink() ?>">
                            Читать далее
                            <span class="button-arrows">»</span>
                        </a>
                    </div>

                </div>
            <?php endwhile; ?>

            <?php
            /**
             * woocommerce_after_shop_loop hook.
             *
             * @hooked woocommerce_pagination - 10
             */
            do_action('woocommerce_after_shop_loop');
            ?>

        </div>
    </div>
</main>

<?php get_footer(); ?>
