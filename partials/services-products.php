<?php
$title = get_field('service_title');
$list = get_field('service_list');

?>
<?php if ($list): ?>
	<section class="section services-products" id="services-products">
		<div class="container services-products__container">
			<h2 class="services-products__title title-2 mb-56">
				<?php echo esc_html($title) ?>
			</h2>
			<ul class="services-products__list grid">
				<?php foreach ($list as $item): ?>
					<li class="services-products__item services-products-card">
						<h3 class="services-products-card__title title-3">
							<?php echo esc_html($item['title']) ?>
						</h3>
						<div class="services-products-card__descr-box descr-box">
							<?php echo wp_kses_post($item['descr']) ?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>