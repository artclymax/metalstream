<?php
$title = get_field('partners_title');
$list = get_field('partners_list');
?>

<section class="section partners" id="partners">
	<div class="container partners__container">
		<h2 class="partners__title title-2 mb-56">
			<?php echo esc_html($title) ?>
		</h2>
	</div>
	<?php if ($list): ?>
		<div class="partners__running-line running-line" data-running-line>
			<ul class="running-line__list" data-running-line-list>
				<?php foreach ($list as $item): ?>
					<li class="running-line__item">
						<img src="<?php echo esc_attr($item['image']) ?>" alt="<?php echo esc_html($title) ?>">
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	<?php endif; ?>
</section>