<?php

add_action('init', function () {
	register_post_type('services', array(
		'labels' => array(
			'name' => 'Услуги',
			'singular_name' => 'Услуги',
			'menu_name' => 'Услуги',
			'name_admin_bar' => 'Услуги',
			'add_new' => 'Добавить услугу',
			'add_new_item' => 'Добавить новую услугу',
			'new_item' => 'Новая услугу',
			'edit_item' => 'Редактировать услугу',
			'view_item' => 'Посмотреть услугу',
			'all_items' => 'Все услуги',
			'search_items' => 'Поиск услуг',
			'not_found' => 'Услуги не найдены',
			'not_found_in_trash' => 'Услуги не найдены в корзине',
		),
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'services',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => true, // true
		'hierarchical' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-hammer',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
		'show_in_rest' => true, //! редактор гутенберг
	));
});

add_action('init', function () {
	register_post_type('review', array(
		'labels' => array(
			'name' => 'Отзывы',
			'singular_name' => 'Отзывы',
			'menu_name' => 'Отзывы',
			'name_admin_bar' => 'Отзывы',
			'add_new' => 'Добавить отзыв',
			'add_new_item' => 'Добавить новый отзыв',
			'new_item' => 'Новый отзыв',
			'edit_item' => 'Редактировать отзыв',
			'view_item' => 'Посмотреть отзыв',
			'all_items' => 'Все отзывы',
			'search_items' => 'Поиск отзывов',
			'not_found' => 'Отзывы не найдены',
			'not_found_in_trash' => 'Отзывы не найдены в корзине',
		),
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'review',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => true, // true
		'hierarchical' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-id-alt',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
		'show_in_rest' => false, //! редактор гутенберг
	));
});


add_action('init', function () {
	register_post_type('gallery', array(
		'labels' => array(
			'name' => 'Галерея',
			'singular_name' => 'Галерея',
			'menu_name' => 'Галерея',
			'name_admin_bar' => 'Галерея',
			'add_new' => 'Добавить элемент',
			'add_new_item' => 'Добавить новый элемент',
			'new_item' => 'Новый элемент',
			'edit_item' => 'Редактировать элемент',
			'view_item' => 'Посмотреть элемент',
			'all_items' => 'Вся галерея',
			'search_items' => 'Поиск элементов',
			'not_found' => 'Элементы не найдена',
			'not_found_in_trash' => 'Элементы не найдены в корзине',
		),
		'public' => true,
		'public_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => [
			'slug' => 'gallery',
			'with_front' => false,
			'pages' => true, // важно для /page/2/
			'feeds' => true
		],
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-format-image',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
		'show_in_rest' => false, //! редактор гутенберг
	));
});

function add_admin_thumbnail_column($post_type)
{

	add_filter("manage_{$post_type}_posts_columns", function ($columns) {
		$columns = array_slice($columns, 0, 1, true)
			+ ['thumbnail' => 'Миниатюра']
			+ array_slice($columns, 1, null, true);

		return $columns;
	});

	add_action("manage_{$post_type}_posts_custom_column", function ($column, $post_id) {
		if ($column === 'thumbnail') {
			$url = get_the_post_thumbnail_url($post_id, 'thumbnail');
			echo $url
				? '<img src="' . esc_url($url) . '" width="100">'
				: '—';
		}
	}, 10, 2);
}
add_action('admin_head', function () {
	echo '<style>
		.wp-list-table .column-thumbnail {
			width: 100px;
			text-align: center;
		}
	</style>';
});
add_admin_thumbnail_column('review');
add_admin_thumbnail_column('gallery');
