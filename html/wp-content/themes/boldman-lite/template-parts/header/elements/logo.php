<?php
/**
 * Template part for displaying header logo
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Boldmanlite
 */

global $boldmanlite_options;

$logo_url = '';

if ( isset( $boldmanlite_options['site-logo']['url'] ) ) {
	$logo_url = $boldmanlite_options['site-logo']['url'];
}

?>

<div class="site-logo">

	<?php if ( $logo_url !== '' ) : ?>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img
				class="img-fluid"
				src="<?php echo esc_url( $logo_url ); ?>"
				alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
			/>
		</a>

	<?php endif; ?>

	<?php if ( '' === $logo_url ) : ?>

		<?php the_custom_logo(); ?>

		<div class="site-branding-text">

			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</h1>

			<?php
			$boldmanlite_site_description = get_bloginfo( 'description', 'display' );

			if ( $boldmanlite_site_description || is_customize_preview() ) :
			?>

				<p class="site-description">
					<?php echo esc_html( $boldmanlite_site_description ); ?>
				</p>

			<?php endif; ?>

		</div><!-- .site-branding-text -->

	<?php endif; ?>

</div><!-- .site-logo -->