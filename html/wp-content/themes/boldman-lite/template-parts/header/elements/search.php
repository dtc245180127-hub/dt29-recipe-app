<?php
/**
 * Template part for displaying header searchform
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Boldmanlite
 */
 
global $boldmanlite_options;

$display_search_icon = isset( $boldmanlite_options['display-search-icon'] ) ? $boldmanlite_options['display-search-icon'] : '';
if ( ! $display_search_icon ) {
	return;
}
?>
<div class="search-wrapper prt-header-search-link">
	<a href="#" class="search-icon search-popup-modal"><i class="fas fa-search"></i></a>
<div class="prt-search-overlay">
	<form method="get" class="prt-site-searchform" action=" <?php echo esc_url( home_url()); ?>"> 
		<div class="w-search-form-h">
			<div class="w-search-form-row">
				<div class="w-search-input">
					<input type="search" class="field searchform-s" name="s" placeholder=" <?php echo esc_attr__('Type Word Then Enter..', 'boldman-lite'); ?>" />
					<button type="submit"><span class="fas fa-search"></span></button>
				</div>
			</div>
		</div>
	</form>
</div>
</div>