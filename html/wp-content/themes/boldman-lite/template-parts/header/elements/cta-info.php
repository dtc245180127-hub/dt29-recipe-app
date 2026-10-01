<?php
/**
 * Template part for displaying cta text
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Boldmanlite
 */
 
global $boldmanlite_options;

$headerbox_cta_text = isset( $boldmanlite_options['headerbox_cta_text'] ) ? $boldmanlite_options['headerbox_cta_text'] : '';
?>
<div class="ttm-header-cta">
<div class="ttm-header-cta-inner">
	<?php echo wp_kses_post( $headerbox_cta_text ); ?>
</div>
</div>
