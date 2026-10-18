<?php
$title = get_field('page_404_title', 'options');
$descr = get_field('page_404_descr', 'options');
$btn = get_field('page_404_btn', 'options');
?>
<div class="hero-404 section" id="hero-404">
	<div class="container hero-404__container">
		<h1 class="hero-404__title title-2">
			<?php echo esc_html($title); ?>
		</h1>
		<div class="hero-404__404">404</div>
		<div class="descr-box hero-404__descr-box">
			<?php echo wp_kses_post($descr) ?>
		</div>
		<a class="hero-404__btn btn" href="<?php echo esc_url(home_url('/')); ?>">
			<?php echo esc_html($btn); ?>
		</a>
	</div>
</div>