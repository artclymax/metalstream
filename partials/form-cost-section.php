<?php
$page = 'options';
$title = get_field('form_cost_title', $page);
$image = get_field('form_cost_image', $page);
$descr = get_field('form_cost_descr', $page);
?>

<section class="section form-section form-cost-section jarallax" id="form-section">
	<div class="container form-section__container">
		<h2 class="form-section__title title-2">
			<?php echo esc_html($title) ?>
		</h2>
		<div class="form-section__descr-box descr-box mb-56">
			<?php echo wp_kses_post($descr) ?>
		</div>
		<div class="form-section__form">
			<?php echo do_shortcode('[contact-form-7 id="b4884b0" title="Форма расчёта стоимости"]'); ?>
		</div>
	</div>
	<div class="image-box form-section__image-box jarallax-img">
		<img src="<?php echo esc_attr($image) ?>" alt="<?php echo esc_attr($title) ?>">
	</div>
</section>