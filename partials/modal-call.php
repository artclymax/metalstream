<?php
$title = get_field('modal_call_title', 'options') ?? '';
$descr = get_field('modal_call_descr', 'options') ?? '';
?>
<div class="modal" id="modal-call" data-modal>
	<div class="modal__box" data-modal-box>
		<button class="modal__close-btn modal-close-btn" data-modal-close aria-label="Закрыть">
			<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M10 10L19 19M10 10L1 1M10 10L1 19M10 10L19 1" stroke="currentColor" stroke-width="2"
					stroke-linecap="round" />
			</svg>

		</button>
		<div class="modal-call">
			<h3 class="modal-call__title title-2">
				<?php echo esc_html($title) ?>
			</h3>
			<div class="modal-call__descr-box descr-box">
				<?php echo wp_kses_post($descr) ?>
			</div>
			<div class="modal-call__form">
				<?php echo do_shortcode('[hf_form slug="forma-modalnogo-okna"]') ?>
			</div>
		</div>
	</div>
</div>