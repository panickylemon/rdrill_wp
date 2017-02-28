<?php get_header(); ?>

<main class="content">

    <div class="l-container">
        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div>

    <div class="l-container">
    <?php get_sidebar('about-inner'); ?>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post();?>

            <div class="about-content">
                <h1>Новости</h1>

                <div class="news-item">
                    <h2 class="news-item__title"><?php the_title(); ?></h2>

                    div class="news-item__additional-info clearfix">
                    <p class="news-date">
                        <span class="news__additional-title">Дата</span>
                        <span><?php the_time('d.m.Y') ?></span>
                    </p>

                    <p class="news-author">
                        <span class="news__additional-title">Автор:</span>
                        <span class="news-name"><?php the_author(); ?></span>
                    </p>
                </div>

                    <?php if ( has_post_thumbnail()) : ?>
                        <div class="post-thumb">
                            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                        </div>
                    <?php endif; ?>

                    <?php the_content(''); ?>

                </div>
            </div>



        <?php endwhile; ?>

    <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
