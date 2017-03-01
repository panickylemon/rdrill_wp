<?php
/**
 * Template Name: Основной шаблон (без сайбдара)
 */
?>


<?php get_header(); ?>

<main class="content">
    <div class="l-container">
        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div>
    <div class="l-container">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>


