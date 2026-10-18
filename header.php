<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="wrapper">

		<?php
		$logo_small = get_field('header_logo_small', 'options') ?? '';
		$btn = get_field('header_btn', 'options') ?? '';

		?>

		<header class="header" data-auto-calc="header, height">
			<div class="container header__container">
				<div class="logo header__logo">
					<?php the_custom_logo(); ?>
					<a class="logo__small" href="<?php echo esc_url(home_url('/')); ?>">
						<img src="<?php echo esc_attr($logo_small) ?>" alt="<?php echo get_bloginfo('name') ?>">
					</a>
				</div>
				<div class="header__col">
					<div class="header__contact-box header-contacts-box">
						<?php get_template_part('partials/contacts-box', null, ['class' => '']) ?>
						<button class="header__btn btn visible-tablet" type="button" data-modal-btn="modal-call">
							<?php echo esc_html($btn); ?>
						</button>
					</div>

					<nav class="header-menu header__menu">
						<?php
						$menu = wp_nav_menu(
							array(
								'theme_location' => 'header-menu',
								'container' => false,
								'menu_class' => 'header-menu__list',
							)
						);
						echo htmlspecialchars($menu); ?>
						<button class="header__btn btn" type="button" data-modal-btn="modal-call">
							<?php echo esc_html($btn); ?>
						</button>
					</nav>
					<button class="header__phone-btn phone-btn visible-tablet" type="button">
						<svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M10.0397 5.09474C9.72602 4.0484 9.51035 2.97515 9.39544 1.88887C9.28063 0.805857 8.3351 0 7.24624 0H2.19463C0.895168 0 -0.105207 1.1225 0.00887046 2.41611C1.16062 15.4539 11.5461 25.8386 24.5839 26.9911C25.8782 27.1052 27 26.1085 27 24.809V20.3044C27 18.6605 26.1941 17.7186 25.1111 17.6038C24.0249 17.4891 22.9516 17.2737 21.9053 16.9603C21.2849 16.7763 20.6263 16.7637 19.9993 16.9237C19.3723 17.0838 18.8003 17.4105 18.344 17.8693L16.1816 20.0316C12.282 17.919 9.08099 14.7179 6.96836 10.8184L9.13072 8.65602C9.58962 8.19976 9.91648 7.62781 10.0766 7.00082C10.2368 6.37384 10.2235 5.71519 10.0397 5.09474Z"
								fill="currentColor" />
						</svg>
					</button>
					<button class="header__burger-btn burger-btn visible-tablet" type="button"><span></span></button></nav>
				</div>
			</div>
		</header>
		<main class="main">
			<?php
			if (!is_front_page() && !is_404() && !is_page('thank-you')): ?>

				<?php get_template_part('partials/hero-page'); ?>

			<?php endif; ?>