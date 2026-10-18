<?php
$slug = get_query_var('post_type');
$page = get_page_by_path($slug);
?>
<div class="hero-page" id="hero-page">
	<div class="container hero-page__container">
		<div class="breadcrumbs">
			<?php if (function_exists('bcn_display')) {
				bcn_display();
			} ?>
		</div>
		<h1 class="hero-page__title title-2">
			<?php if (is_singular()): ?>
				<?php the_title() ?>
			<?php elseif ($page): ?>
				<?php echo esc_html($page->post_title) ?>
			<?php endif; ?>
		</h1>
	</div>
</div>