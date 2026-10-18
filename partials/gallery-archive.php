<section class="section projects-section pt-0" id="projects-section">
	<div class="container projects-section__container">
		<ul class="projects-section__list grid mb-56">
			<?php if (have_posts()):
				while (have_posts()):
					the_post(); ?>
					<li class="projects-section__item project-card">
						<a class="project-card__link" href="<?php the_post_thumbnail_url('large'); ?>" data-fancybox="gallery">
							<div class="project-card__image-box image-box">
								<?php the_post_thumbnail() ?>
							</div>
							<h3 class="project-card__title title-3">
								<?php the_title() ?>
							</h3>
						</a>
					</li>
				<?php endwhile;
				wp_reset_postdata();
			endif; ?>
		</ul>
		<!-- Пагинация -->
		<div class="pagination">
			<?php
			echo paginate_links([
				'total' => $wp_query->max_num_pages,
				'mid_size' => 1,
				'current' => max(1, get_query_var('paged')),
				'prev_text' => '<svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 4.6189L8 9.2377L8 9.65119e-05L0 4.6189ZM24 4.6189L24 3.8189L7.2 3.8189L7.2 4.6189L7.2 5.4189L24 5.4189L24 4.6189Z" fill="currentColor"/></svg>',
				'next_text' => '<svg width="24" height="10" viewBox="0 0 24 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24 4.6189L16 9.2377L16 9.65119e-05L24 4.6189ZM0 4.6189L1.04907e-07 3.8189L16.8 3.8189L16.8 4.6189L16.8 5.4189L-1.04907e-07 5.4189L0 4.6189Z" fill="currentColor"/></svg>'
			]);
			?>
		</div>
	</div>
</section>