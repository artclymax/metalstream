<section class="section services services-archive pt-0" id="services">
	<div class="container services__container">
		<ul class="services__list grid">
			<?php if (have_posts()):
				while (have_posts()):
					the_post(); ?>
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
</section>