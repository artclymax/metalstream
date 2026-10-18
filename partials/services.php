<?php
$title = get_field('services_title');
$image = get_field('services_image');


$args_post = array(
	'post_type' => 'services',
	'posts_per_page' => -1,
);

$query = new WP_Query($args_post);
?>

<section class="section services jarallax" id="services">
	<div class="container services__container">
		<h2 class="services__title title-2 mb-56">
			<?php echo esc_html($title) ?>
		</h2>
		<ul class="services__list grid">
			<?php if ($query->have_posts()):
				while ($query->have_posts()):
					$query->the_post(); ?>
					<li class="services__item services-card">
						<div class="services-card__content">
							<h3 class="services-card__title title-3">
								<a href="<?php the_permalink() ?>">
									<?php the_title() ?>
								</a>
							</h3>
							<div class="services-card__descr-box descr-box">
								<?php the_field('service_exerpt') ?>
							</div>
						</div>
						<div class="services-card__image-box image-box">
							<?php the_post_thumbnail() ?>
						</div>

					</li>
				<?php endwhile;
				wp_reset_postdata();
			endif; ?>
		</ul>
	</div>
	<div class="image-box services__image-box jarallax-img">
		<img src="<?php echo esc_attr($image) ?>" alt="<?php echo esc_attr($title) ?>">
	</div>
</section>