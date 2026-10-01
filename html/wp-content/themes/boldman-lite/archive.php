<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Boldman Lite
 */

get_header(); ?>

<div class="container">
	<div class="row site-content-inner">
		<div id="primary" class="content-area <?php echo esc_attr( boldmanlite_sidebar_class() ); ?>">
			<main id="main" class="site-main">
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<?php
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				// Start the loop.
				while ( have_posts() ) : the_post();
					/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				the_posts_navigation();
				
				?>
				<div class="post-pagination">
					<?php the_posts_pagination(); ?>
				</div>
				<?php
				else :
					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
				</main><!-- .site-main -->
			</div><!-- .content-area -->
		<?php 
			// Sidebar
			get_sidebar();
		?>
	</div>
</div>

<?php get_footer(); ?>