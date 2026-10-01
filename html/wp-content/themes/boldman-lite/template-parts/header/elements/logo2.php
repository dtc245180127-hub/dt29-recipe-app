<?php
/**
 * Template part for displaying header logo2
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package Boldmanlite
 */
 
global $boldmanlite_options;

if ( isset( $boldmanlite_options['site-logo']['url'] ) ) {
	$logo_url = $boldmanlite_options['site-logo']['url'];
}
else {
	$logo_url='';
	}
?>
<div class="site-logo">
  <div class="headerlogo">
<?php 	if ( $logo_url !== '' ) {  ?>
	<a href="<?php echo esc_url( get_home_url() ); ?>" rel="home">
		<img class="img-fluid" src="<?php echo esc_url( $logo_url ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"/>
	</a>
	<?php
	}

		if ( empty( $logo_url ) ) {
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
		}
		$boldmanlite_site_description = get_bloginfo( 'description', 'display' );
			if ( $boldmanlite_site_description || is_customize_preview() ) :
				?>
			<p class="site-description"><?php echo esc_html($boldmanlite_site_description); ?></p>
			<?php endif; ?>		
	
</div>
</div>
