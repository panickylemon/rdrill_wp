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
                <h1><?php the_title(); ?></h1>

                <?php if ( has_post_thumbnail()) : ?>
                    <div class="post-thumb">
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                <?php endif; ?>

                <?php the_content(''); ?>

            </div>

            <?php comments_template();?>

        <?php endwhile; ?>

    <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
