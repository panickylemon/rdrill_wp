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
    <div class="l-container">
        <?php get_sidebar('about-inner'); ?>

        <div class="about-content">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>


