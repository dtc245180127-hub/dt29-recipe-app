<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package Boldmanlite
 */

get_header(); ?>
<div class="container">
	<div class="row"> 
			<div id="primary" class="content-area <?php echo esc_attr( boldmanlite_sidebar_class() ); ?>">
				<main id="main" class="site-main">
				<?php
					while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

					// End the loop.
					endwhile;
				?>
				</main><!-- #main .site-main -->
			</div><!-- #primary .content-area -->
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>