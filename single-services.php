<?php get_header(); ?>


<?php if (have_posts()): ?>
	<?php while (have_posts()):
		the_post(); ?>
		<div class="section container descr-box pt-0">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<!--<?php get_template_part('partials/form-cost-section'); ?>
<?php get_template_part('partials/services-products'); ?>
<?php get_template_part('partials/projects-section'); ?>-->
<?php get_template_part('partials/form-section'); ?>

<?php get_footer(); ?>