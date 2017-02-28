<?php get_header(); ?>

<div class="l-container">
    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
</div>

<main class="content">
    <div class="l-container">
        <?php get_sidebar('about-inner'); ?>

        <div class="about-content">

            <?php while ( have_posts() ) : the_post();?>
                <div class="news-preview">
                    <?php if ( has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                    <?php endif; ?>

                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> </h2>



                    <?php the_content(''); ?>
                    <ul class="meta">
                        <li><?php the_time('F jS, Y') ?><li>
                        <li>автор</li>
                    </ul>
                </div>
            <?php endwhile; ?>

            <div class="pagination">
                <ul>
                    <li class="older"><?php next_posts_link('Предыдущие') ?></li>
                    <li class="newer"><?php previous_posts_link('Следующие') ?></li>
                </ul>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>
