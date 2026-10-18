<?php
$page = get_page_by_path('about');

$title = get_field('products_title', $page) ?? '';
$list = get_field('products_list', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="section products" id="products">
		<div class="container products__container">
			<h2 class="products__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<ul class="products__list grid">
				<?php foreach ($list as $item): ?>
					<li class="products__item products-item">
						<div class="products-item__image image-box">
							<img src="<?php echo esc_url($item['image']) ?>" alt="<?php echo esc_html($item['title']) ?>">
						</div>
						<h3 class="products-item__title title-3">
							<?php echo esc_html($item['title']) ?>
						</h3>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>