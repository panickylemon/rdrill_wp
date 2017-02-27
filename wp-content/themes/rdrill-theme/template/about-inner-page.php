<?php
/**
 * Template Name: Внутренние страницы раздела "О Компании"
 */
?>


<?php get_header(); ?>

<div class="l-container">
    <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
</div>

<main class="content">
    <?php get_sidebar('about-page'); ?>

    <div class="about-content">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>


