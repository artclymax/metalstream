<?php

// === Helpers ===
require_once get_template_directory() . '/functions/helpers/print_dump.php';
require_once get_template_directory() . '/functions/helpers/trim_text.php';
require_once get_template_directory() . '/functions/helpers/correct_phone.php';
//require_once get_template_directory() . '/functions/helpers/kama_breadcrumbs.php';

// === BASE ====
// Общая настройка темы (лого, название и т.п.)
require_once get_template_directory() . '/functions/default_settings.php';

// Подключение стилей
require_once get_template_directory() . '/functions/connect_styles.php';

// Подключение скриптов
require_once get_template_directory() . '/functions/connect_scripts.php';

// Подключение SVG - Safe SVG
//require_once get_template_directory() . '/functions/connect_svg.php';

// Создание меню
require_once get_template_directory() . '/functions/register_nav_menus.php';

// Регистрация новых записей
require_once get_template_directory() . '/functions/register_post_type.php';

//!
/*
add_action('wp_head', function () {
	if (defined('WP_DEBUG')) {
		$vite_server = 'http://localhost:5173';
		echo "<!-- VITE DEV INJECT: start -->\n";
		echo '<script type="module" src="' . esc_url($vite_server) . '/@vite/client"></script>';
		echo '<script type="module" src="' . esc_url($vite_server) . '/main.js"></script>';
		echo "<!-- VITE DEV INJECT: end -->\n";
	};
});
*/
// === Adds ===
// Создание вкладок для SCF
//require_once get_template_directory() . '/functions/SCF/add_options_page.php';
