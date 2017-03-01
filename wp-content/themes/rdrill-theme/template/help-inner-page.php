<?php
/**
 * Template Name: Внутренние страницы раздела "Помощь"
 */
?>


<?php get_header(); ?>

<div class="l-container">
    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
</div>

<main class="content">
    <div class="l-container">
        <?php get_sidebar('help-inner'); ?>

        <div class="about-content">
            <h1><?php the_title(); ?></h1>
            <div class="brand-content">
                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>


