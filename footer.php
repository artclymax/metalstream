<?php
$company = get_field('footer_company', 'options') ?? '';
$unp = get_field('footer_unp', 'options') ?? '';
$copy = get_field('footer_copy', 'options') ?? '';
$title_nav = get_field('footer_title_nav', 'options') ?? '';
$title_contacts = get_field('footer_title_contacts', 'options') ?? '';
$links = get_field('footer_links', 'options') ?? '';
?>
</main>
<footer class="footer">
	<div class="footer__container container">
		<div class="footer__top">
			<div class="footer__info">
				<div class="logo footer__logo">
					<?php the_custom_logo(); ?>
				</div>
				<div class="footer__content">
					<p class="footer__company">
						<?php echo esc_html($company) ?>
					</p>
					<p class="footer__unp">
						<?php echo esc_html($unp) ?>
					</p>
					<small class="footer__copy">&copy; <?php echo date('Y'); ?> <?php echo esc_html($copy) ?></small>
				</div>
			</div>
			<nav class="footer__nav footer-menu">
				<h3 class="footer__title title-4">
					<?php echo esc_html($title_nav); ?>
				</h3>
				<?php
				$menu = wp_nav_menu(
					array(
						'theme_location' => 'footer-menu',
						'container' => false,
						'menu_class' => 'footer-menu__list',
					)
				);
				echo htmlspecialchars($menu); ?>
			</nav>
			<div class="footer__contacts">
				<h3 class="footer__title title-4">
					<?php echo esc_html($title_contacts); ?>
				</h3>
				<?php get_template_part('partials/contacts-box', null, ['class' => 'footer__contacts-box']) ?>
			</div>
		</div>
		<div class="footer__bottom">
			<?php if ($links): ?>
				<ul class="footer__links">
					<?php foreach ($links as $item): ?>
						<li class="footer__links-item">
							<a class="footer__link" href="<?php echo esc_attr($item['link']['url']) ?>" target="_blank">
								<?php echo esc_html($item['link']['title']) ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
</footer>

<?php get_template_part('partials/scroll-to-top') ?>
<?php get_template_part('partials/modal-call') ?>
<?php get_template_part('partials/cookie-banner') ?>

<?php wp_footer(); ?>
</body>

</html>