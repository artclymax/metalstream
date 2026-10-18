<?php
$page = 'options';
$title = get_field('form_title', $page);
$image = get_field('form_image', $page);
$descr = get_field('form_descr', $page);
?>

<section class="section form-section jarallax" id="form-section">
	<div class="container form-section__container">
		<h2 class="form-section__title title-2">
			<?php echo esc_html($title) ?>
		</h2>
		<div class="form-section__descr-box descr-box mb-56">
			<?php echo wp_kses_post($descr) ?>
		</div>
		<div class="form-section__form">
			<?php echo do_shortcode('[hf_form slug="forma-konsultaczii"]'); ?>
		</div>
	</div>
	<div class="image-box form-section__image-box jarallax-img">
		<img src="<?php echo esc_attr($image) ?>" alt="<?php echo esc_attr($title) ?>">
	</div>
</section>

