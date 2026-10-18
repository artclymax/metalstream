<?php
$page = get_page_by_path('about');
$title = get_field('certificates_title', $page);
$image = get_field('certificates_image', $page);
$list = get_field('certificates_list', $page);
?>

<section class="section certificates jarallax" id="certificates">
	<div class="container certificates__container">
		<div class="certificates__header mb-56">
			<h2 class="certificates__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<nav class="certificates__nav">
				<button class="swiper-btn swiper-btn__prev certificates-swiper__btn certificates-swiper__btn-prev"
					type="button" data-swiper-btn-prev>
					<svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M0 4.6189L8 9.2377L8 9.65119e-05L0 4.6189ZM24 4.6189L24 3.8189L7.2 3.8189L7.2 4.6189L7.2 5.4189L24 5.4189L24 4.6189Z"
							fill="currentColor" />
					</svg>
				</button>
				<button class="swiper-btn swiper-btn__next certificates-swiper__btn certificates-swiper__btn-next"
					type="button" data-swiper-btn-next>
					<svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M24 4.61889L16 9.3015e-05L16 9.2377L24 4.61889ZM0 4.6189L6.99382e-08 5.4189L16.8 5.4189L16.8 4.6189L16.8 3.8189L-6.99382e-08 3.8189L0 4.6189Z"
							fill="currentColor" />
					</svg>
				</button>
			</nav>
		</div>
		<?php if ($list): ?>
			<div class="swiper certificates-swiper"
				data-swiper='{ "slidesPerView": "auto", "spaceBetween": 10, "loop": true, "breakpoints": { "768": { "spaceBetween": 24 } }, "navigation": { "prevEl": ".certificates-swiper__btn-prev", "nextEl": ".certificates-swiper__btn-next" } }'>
				<div class="swiper-wrapper certificates-swiper__wrapper">
					<?php foreach ($list as $item): ?>
						<div class="swiper-slide certificates-slide">
							<a class="certificates-slide__wrapper image-box" data-fancybox
								href="<?php echo esc_attr($item['file']) ?>">
								<img src="<?php echo esc_attr($item['thumb']) ?>" alt="Фото">
							</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
	<div class="image-box certificates__image-box jarallax-img">
		<img src="<?php echo esc_attr($image) ?>" alt="<?php echo esc_attr($title) ?>">
	</div>
</section>