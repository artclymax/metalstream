<?php
$page = get_page_by_path('about');
$title = get_field('benefits_title', $page);
$list = get_field('benefits_list', $page);
?>

<section class="section benefits" id="benefits">
	<div class="container benefits__container">
		<h2 class="benefits__title title-2 mb-56">
			<?php echo esc_html($title) ?>
		</h2>
		<?php if ($list): ?>
			<ul class="benefits__list grid">
				<?php foreach ($list as $item): ?>
					<li class="benefits__item benefits-card">
						<div class="benefits-card__icon">
							<img src="<?php echo esc_attr($item['icon']) ?>" alt="<?php echo esc_attr($item['title']) ?>">
							
						</div>
						<h3 class="benefits-card__title title-3">
							<?php echo esc_html($item['title']) ?>
						</h3>
						<div class="benefits-card__descr-box descr-box">
							<?php echo wp_kses_post($item['descr']) ?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</div>
</section>