<?php
$title = get_field('gallery_title');
$list = get_field('gallery_list');
?>

<section class="section gallery" id="gallery">
	<div class="container gallery__container">
		<div class="gallery__header mb-56">
			<h2 class="gallery__title title-2">
				<?php echo esc_html($title) ?>
			</h2>
			<nav class="gallery__nav">
				<button class="swiper-btn swiper-btn__prev gallery-swiper__btn gallery-swiper__btn-prev" type="button"
					data-swiper-btn-prev>
					<svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M0 4.6189L8 9.2377L8 9.65119e-05L0 4.6189ZM24 4.6189L24 3.8189L7.2 3.8189L7.2 4.6189L7.2 5.4189L24 5.4189L24 4.6189Z"
							fill="currentColor" />
					</svg>
				</button>
				<button class="swiper-btn swiper-btn__next gallery-swiper__btn gallery-swiper__btn-next" type="button"
					data-swiper-btn-next>
					<svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M24 4.61889L16 9.3015e-05L16 9.2377L24 4.61889ZM0 4.6189L6.99382e-08 5.4189L16.8 5.4189L16.8 4.6189L16.8 3.8189L-6.99382e-08 3.8189L0 4.6189Z"
							fill="currentColor" />
					</svg>
				</button>
			</nav>
		</div>
		<?php if ($list): ?>
			<div class="swiper gallery-swiper"
				data-swiper='{ "slidesPerView": "auto", "spaceBetween": 10, "loop": true, "breakpoints": { "768": { "spaceBetween": 24 } }, "navigation": { "prevEl": ".gallery-swiper__btn-prev", "nextEl": ".gallery-swiper__btn-next" } }'>
				<div class="swiper-wrapper gallery-swiper__wrapper">
					<?php foreach ($list as $item): ?>
						<div class="swiper-slide gallery-slide">
							<a class="gallery-slide__wrapper image-box" data-fancybox href="<?php echo esc_attr($item['image']) ?>">
								<img src="<?php echo esc_attr($item['thumb']) ?>" alt="Фото">
							</a>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="gallery-swiper__pagination pagination" data-swiper-pagination></div>
			</div>
		<?php endif; ?>
	</div>
</section>