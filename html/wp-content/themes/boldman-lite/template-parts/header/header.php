<?php
/**
 * Template part for displaying header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Boldmanlite
 */

global $boldmanlite_options;

$header_layout = (
	isset( $boldmanlite_options['header-layout'] ) &&
	$boldmanlite_options['header-layout']
) ? $boldmanlite_options['header-layout'] : 'layout-1';

$header_class  = 'site-header-container';
$header_class .= ' header-' . $header_layout;

// Header Menu Position
if (
	isset( $boldmanlite_options['header-menu-position'] ) &&
	$boldmanlite_options['header-menu-position']
) {
	$menu_postion = $boldmanlite_options['header-menu-position'];
} else {
	$menu_postion = 'right';
}

?>

<header id="masthead" class="<?php echo esc_attr( $header_class ); ?> prt-header-menu-position-<?php echo esc_attr( $menu_postion ); ?>">

	<?php echo boldmanlite_topbar(); ?>

	<?php get_template_part( 'template-parts/header/layouts/' . $header_layout ); ?>

</header>