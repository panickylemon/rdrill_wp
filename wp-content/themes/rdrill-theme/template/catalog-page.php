<?php
/**
 * Template Name: Catalog Pageddd
 */
?>


<?php get_header(); ?>
jhngbfvdc
<main class="content zz">
	<div class="l-container cc">
		<section>
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</section>
	</div>
</main>

<?php get_footer(); ?>
