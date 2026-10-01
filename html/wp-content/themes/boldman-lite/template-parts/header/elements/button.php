<?php
/**
 * Template part for displaying header button
 *
 * @package Boldmanlite
 */

global $boldmanlite_options;

$display_header_button = isset( $boldmanlite_options['display-header-button'] )
	? $boldmanlite_options['display-header-button']
	: 1;

// If button is disabled, don't display it.
if ( ! $display_header_button ) {
	return;
}

$header_button_title = ! empty( $boldmanlite_options['header_button_title'] )
	? $boldmanlite_options['header_button_title']
	: 'Get Started';

$header_button_liink = ! empty( $boldmanlite_options['header_button_liink'] )
	? $boldmanlite_options['header_button_liink']
	: '#';
?>

<div class="boldman-lite-header-button-container">
	<div class="boldman-lite-header-button">
		<a class="boldman-lite-header-button"
			href="<?php echo esc_url( $header_button_liink ); ?>"
			title="<?php echo esc_attr( $header_button_title ); ?>">
			<?php echo esc_html( $header_button_title ); ?>
		</a>
	</div>
</div>