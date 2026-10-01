<?php
/**
 * Template part for displaying header layout1
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Boldmanlite
 */

global $boldmanlite_options;

$tm_menuclass = '';
$cta_boxclass = '';

if (
	isset( $boldmanlite_options['headers-layout'] ) &&
	$boldmanlite_options['headers-layout'] == 'fullwide'
) {
	$header_layout_class = 'container-fullwide';
} else {
	$header_layout_class = 'container';
}

$display_search_icon = isset( $boldmanlite_options['display-search-icon'] )
	? $boldmanlite_options['display-search-icon']
	: '';

$social_infos = isset( $boldmanlite_options['social_infos'] )
	? $boldmanlite_options['social_infos']
	: array();

$headerbox_cta_text = isset( $boldmanlite_options['headerbox_cta_text'] )
	? $boldmanlite_options['headerbox_cta_text']
	: '';

$header_button_liink = ! empty( $boldmanlite_options['header_button_liink'] )
    ? $boldmanlite_options['header_button_liink']
    : '#';

if (
	! empty( $social_infos ) ||
	$display_search_icon != '0' ||
	$headerbox_cta_text != '' ||
	$header_button_liink != ''
) {
	$tm_menuclass = 'tm-has-textarea';
}

if (
	$headerbox_cta_text != '' ||
	$header_button_liink != ''
) {
	$cta_boxclass = 'tm-cta-with-btn';
}
?>

<div class="site-header">

	<div class="<?php echo esc_attr( $header_layout_class ); ?> site-header-top">

		<div class="d-flex align-items-center <?php echo esc_attr( $tm_menuclass ); ?>">

			<?php
			// Logo
			get_template_part(
				'template-parts/header/elements/logo'
			);
			?>

			<nav id="site-navigation" class="main-navigation">

				<?php
				if ( has_nav_menu( 'main-menu' ) ) {

					wp_nav_menu(
						array(
							'theme_location' => 'main-menu',
							'menu_id'        => 'primary-menu',
						)
					);

				}
				?>

			</nav>

			<div class="header-right-side <?php echo esc_attr( $cta_boxclass ); ?>">

				<?php
				// Search
				get_template_part(
					'template-parts/header/elements/search'
				);

				// Social icons
				get_template_part(
					'template-parts/header/elements/social-info'
				);

				// CTA
				get_template_part(
					'template-parts/header/elements/cta-info'
				);

				// Button
				get_template_part(
					'template-parts/header/elements/button'
				);
				?>

			</div>

			<div id="site-navigation-mobile"></div>

		</div>

	</div>

</div>