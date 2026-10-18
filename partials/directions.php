<?php
$page = get_page_by_path('about');

$title = get_field('directions_title', $page) ?? '';
$descr = get_field('directions_descr', $page) ?? '';
$image = get_field('directions_image', $page) ?? '';
$list = get_field('derections_list', $page) ?? '';

?>
<?php if ($list): ?>
	<section class="section directions jarallax" id="directions" style="background-image: url('<?php echo esc_url($image); ?>');">
		<div class="container directions__container">
			<h2 class="directions__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<ul class="directions__list grid">
				<?php foreach ($list as $item): ?>
					<li class="directions__item directions-item">
						<h3 class="directions-item__title title-3">
							<?php echo esc_html($item['title'])?>
						</h3>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>