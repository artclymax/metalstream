<?php
$btn = get_field('page_404_btn', 'options');
$image = get_field('hero_image', get_page_by_path('home'));
$video = get_field('hero_video', get_page_by_path('home'));
?>
<div class="hero hero-thank-you" id="hero">
	<div class="container hero__container">
		<div class="hero__content">
			<h1 class="hero__title title-2">
				<?php the_title() ?>
			</h1>
			<div class="hero__descr-box descr-box">
				<?php the_content() ?>
			</div>
			<a class="hero__btn btn" href="<?php echo esc_url(home_url('/')); ?>">
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