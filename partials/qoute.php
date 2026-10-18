<?php
$page = get_page_by_path('home');

$title = get_field('qoute_title', $page) ?? '';
$descr = get_field('qoute_descr', $page) ?? '';
$image = get_field('qoute_image', $page) ?? '';
?>
<section class="qoute jarallax" id="qoute" style="background-image: url('<?php echo esc_url($image) ?>');">
	<div class="container qoute__container">
		<h2 class="qoute__title title-2">
			<?php echo esc_html($title)?>
		</h2>
		<blockquote class="qoute__descr descr-box title-3">
			<?php echo wp_kses_post($descr)?>
		</blockquote>
	</div>
</section>