<?php
$page = get_page_by_path('home');
$title = get_field('projects_title', $page) ?? '';
$btn = get_field('projects_btn', $page) ?? '';

$args_post = array(
	'post_type' => 'projects',
	'posts_per_page' => 2,
);

$query = new WP_Query($args_post);
?>
<?php if ($query->have_posts()): ?>
<section class="section projects-section" id="projects-section">
	<div class="container projects-section__container">
		<h2 class="projects-section__title title-2 mb-56">
			<?php echo esc_html($title) ?>
		</h2>
		<ul class="projects-section__list grid mb-56">
			<?php 
				while ($query->have_posts()):
					$query->the_post(); ?>
					<li class="projects-section__item project-card">
						<div class="project-card__image-box image-box">
							<?php the_post_thumbnail() ?>
						</div>
						<h3 class="project-card__title title-3">
							<?php the_title() ?>
						</h3>
						<div class="project-card__box">
							<div class="project-card__item project-card__city">
								<h3 class="project-card__subtitle">
									Город
								</h3>
								<p class="project-card__text">
									<?php echo the_field('project_city') ?>
								</p>
							</div>
							<div class="project-card__item project-card__time">
								<h3 class="project-card__subtitle">
									Сроки
								</h3>
								<p class="project-card__text">
									<?php echo the_field('project_time') ?>
								</p>
							</div>
						</div>
						<div class="project-card__descr-box descr-box">
							<?php the_content() ?>
						</div>

					</li>
				<?php endwhile;
				wp_reset_postdata(); ?>
		</ul>
		<a class="projects-section__btn btn" href="<?php echo esc_url(home_url('/projects')); ?>">
			<?php echo esc_html($btn) ?>
		</a>
	</div>
</section>
<?php endif; ?>