<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boldmanlite
 */
 
global $boldmanlite_options;
if ( isset( $boldmanlite_options['copyright_text_right'] ) && $boldmanlite_options['copyright_text_right'] ) {
	$left_content=$boldmanlite_options['copyright_text_right'];
}
if ( isset( $boldmanlite_options['copyright_text_left'] ) && $boldmanlite_options['copyright_text_left'] ) {
	$right_content=$boldmanlite_options['copyright_text_left'];
}

if(!empty($left_content)) { $left_col_class='col-lg-6 col-md-6'; } else { $left_col_class='col-sm-12 prt-center-text'; }
if(!empty($right_content)) { $right_col_class='col-lg-6 col-md-6'; } else { $right_col_class='col-sm-12'; }
$display_border = isset( $boldmanlite_options['display-border-copyright'] ) ? $boldmanlite_options['display-border-copyright'] : '';

?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer">
	<div class="footer-bg-layer tm-bg-layer"></div>
		<?php
			get_sidebar( 'footer' );
		?>
		
		<div id="bottom-footer-text" class="bottom-footer-text site-info tm-border-above-<?php echo esc_attr($display_border); ?>">
			<div class="container">
				<div class="row multi-columns-row">
					<div class="col-xs-12 <?php echo esc_attr($left_col_class); ?> <?php if(!empty($right_content)) { ?>prt-footer2-left <?php } ?>">
						<?php
						if ( isset( $boldmanlite_options['copyright_text_left'] ) && $boldmanlite_options['copyright_text_left'] ) {
							echo do_shortcode( $boldmanlite_options['copyright_text_left'] );
						} else {
							?>
							
							<?php echo wp_kses_post( html_entity_decode( esc_html__( 'Copyright &copy; ' , 'boldman-lite' ) ) );
							echo esc_html( date( 'Y' ) . ' ' . get_bloginfo( 'name' ) );
							printf( esc_html__( '. Powered by', 'boldman-lite' ) );
							?>
							<?php
							printf( esc_html__( 'Boldmanlite WordPress Theme', 'boldman-lite' ) );
							?>
					
						<?php	
						}
						?>
					</div>
					<div class="col-xs-12 <?php echo esc_attr($right_col_class); ?> <?php if(!empty($left_content)) { ?>prt-footer2-right <?php } ?>">
						<?php
						if ( isset( $boldmanlite_options['copyright_text_right'] ) && $boldmanlite_options['copyright_text_right'] ) {
							echo do_shortcode( $boldmanlite_options['copyright_text_right'] );
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- .site-footer -->
  </div><!-- #page -->
</div><!-- #main-holder -->
<?php wp_footer(); ?>
</body>
</html>