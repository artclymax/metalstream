<?php
$title = get_field('hero_title');
$btn = get_field('hero_btn');
$image = get_field('hero_image');
$video = get_field('hero_video');
?>
<div class="hero" id="hero">
	<div class="container hero__container">
		<div class="hero__content">
			<h1 class="hero__title title-1 mb-l">
				<?php echo esc_html($title); ?>
			</h1>
			<a class="hero__btn btn" href="#form-section">
				<?php echo esc_html($btn); ?>
			</a>
		</div>
	</div>
	<div class="hero__image-box image-box">
		<?php if ($video): ?>
			<video autoplay muted loop>
				<source src="<?php echo esc_attr($video); ?>">
			</video>
		<?php else: ?>
			<img src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_html($title); ?>">
		<?php endif; ?>
	</div>
</div>