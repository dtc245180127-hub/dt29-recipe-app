<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Boldman Lite
 */

get_header();

global $boldmanlite_options;

if ( isset( $boldmanlite_options['404_page_title'] ) && $boldmanlite_options['404_page_title'] ) {
	$boldmanlite_page_title = $boldmanlite_options['404_page_title'];
} else {
	$boldmanlite_page_title = esc_html__( '404', 'boldman-lite' );
}

if ( isset( $boldmanlite_options['404_page_description'] ) && $boldmanlite_options['404_page_description'] ) {
	$pnf_page_description = $boldmanlite_options['404_page_description'];
} else {
	$pnf_page_description = esc_html__( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'boldman-lite' );
}
?>
<div class="404-page-container">
	<div class="container">
		<div class="row site-content-inner">
			<div id="primary" class="content-area col-lg-12">
				<main id="main" class="site-main">
					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php echo esc_html( $boldmanlite_page_title ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php echo esc_html( $pnf_page_description ); ?></p>
							<?php
							get_search_form();
								?>
								<a href="<?php echo esc_url( get_home_url(), 'boldman-lite' ); ?>" class="prt-back-buttton" role="button"><?php esc_html_e( 'Back to Home', 'boldman-lite' ); ?></a>
						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</main><!-- .site-main -->
			</div><!-- .content-area -->	
		</div>
	</div>
</div>
<?php
get_footer();
