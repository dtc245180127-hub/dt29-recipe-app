<?php
/**
 * Template part for displaying header social icons
 *
 * @package Boldmanlite
 */

global $boldmanlite_options;

$social_infos = isset( $boldmanlite_options['social_infos'] )
	? $boldmanlite_options['social_infos']
	: array();

/*
 * Temporary fallback for testing.
 * If social_infos is empty, these icons will still appear.
 */
if ( empty( $social_infos ) ) {
	$social_infos = array(
		'facebook',
		'twitter',
		'linkedin',
		'instagram',
	);
}
?>

<div class="social-info-wrapper">

	<ul class="social-info">

		<?php foreach ( $social_infos as $social_info ) : ?>

			<?php
			$social_link = isset( $boldmanlite_options[ $social_info . '_link' ] )
				? $boldmanlite_options[ $social_info . '_link' ]
				: '#';
			?>

			<li class="social-<?php echo esc_attr( $social_info ); ?>">

				<a
					class="social-icon"
					href="<?php echo esc_url( $social_link ); ?>"
					target="_blank"
					rel="nofollow noopener"
				>
					<i class="fab fa-<?php echo esc_attr( $social_info ); ?>"></i>
				</a>

			</li>

		<?php endforeach; ?>

	</ul>

</div>