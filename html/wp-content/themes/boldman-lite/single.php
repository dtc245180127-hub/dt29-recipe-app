<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Boldmanlite
 */

get_header(); ?>

<div class="container">
	<div class="row site-content-inner">
			<div id="primary" class="content-area <?php echo esc_attr( boldmanlite_sidebar_class() ); ?>">
				<main id="main" class="site-main">
				
				<?php
				// Start the loop.
				while ( have_posts() ) : the_post();
				?>
			
				<?php
				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
					get_template_part( 'template-parts/content', get_post_type() );
				?>	
				<?php
				// Author bio.
				if ( is_single() && get_the_author_meta( 'description' ) ) :
					get_template_part( 'template-parts/author-bio', 'customized' );
				endif;
				
				?>

				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( is_single() && ( comments_open() ) ) : ?>
					<div class="prt-blog-classic-comment">
						<?php comments_template(); ?>
					</div>
				<?php endif; 
					// End the loop.
					endwhile;
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