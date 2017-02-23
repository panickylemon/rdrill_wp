<?php
/**
 * Template Name: Catalog Page
 */
?>


<?php get_header(); ?>
jhngbfvdc
<main class="content zz">
	<div class="l-container cc">
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
</main>

<?php get_footer(); ?>
