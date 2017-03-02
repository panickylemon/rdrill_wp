<?php
/**
 * Template Name: Контакты
 */
?>


<?php get_header(); ?>

<main class="content">

    <div class="l-container">
        <?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?>
    </div>

    <div class="l-container">

        <div class="contacts-wrap">

            <?php $page_title = get_post_meta( $post->ID, 'page_title', true ); ?>
            <?php if (!empty($page_title)) { ?>
                <h1><?php echo $page_title ?></h1>
            <?php } else { ?>
                <h1><?php the_title(); ?></h1>
            <?php } ?>

            <div class="clearfix">
                <div class="contacts-content">
                    <?php if (have_posts()): while (have_posts()): the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                </div>
            </div>

        </div>
    </div>
</main>

<?php get_footer(); ?>


