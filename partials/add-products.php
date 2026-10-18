<?php
$page = get_page_by_path('about');

$title = get_field('add_products_title', $page) ?? '';
$descr = get_field('add_products_descr', $page) ?? '';
$image = get_field('add_products_image', $page) ?? '';
?>
<?php if ($descr): ?>
	<section class="section add-products jarallax" id="add-products" style="background-image: url('<?php echo esc_url($image) ?>');">
		<div class="container add-products__container">
			<h2 class="add-products__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<div class="descr-box add-products__descr">
				<?php echo wp_kses_post($descr) ?>
			</div>
		</div>
	</section>
<?php endif; ?>