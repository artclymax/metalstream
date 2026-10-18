<section class="section contacts-section pt-0" id="contacts-section">
	<div class="container contacts-section__container">
		<?php get_template_part('partials/contacts-box', null, ['class' => 'contacts-section__contacts-box'])?>
		<div class="contacts-section__map">
			<?php the_content() ?>
		</div>
	</div>
</section>