<?php
/**
 * The default template for displaying post content
 *
 * @package Boldmanlite
 */

global $boldmanlite_options;
?>

<article <?php post_class(boldmanlite_blog_classic_extra_class()); ?>>
	<div class="boldman-lite-blog-classic">
		<div class="ttm-featured-outer-wrapper ttm-post-featured-outer-wrapper">
			<?php boldmanlite_post_thumbnail(); ?>	
			<div class="ttm-box-post-date">
				<?php boldmanlite_entry_date(); ?>
			</div>
		</div>
	<div class="boldman-lite-blog-content">
		<header class="entry-header">
			<?php
			if ( !is_single() ) {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
			?>
			<?php boldmanlite_entry_footer(); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			if ( is_single() ) {
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'boldman-lite' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) 
				);
			} else {
				the_excerpt();
			}
		
			 if ( !is_single() ) { echo boldmanlite_readmore_button(); }
			?>
			<div class="clear clr"></div>		
			<?php
			// pagination if any
			wp_link_pages( array(
				'before'      => '<div class="page-links">' . esc_attr__( 'Pages:', 'boldman-lite' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			) );
			?>
		</div><!-- .entry-content -->	  
	</div>
	</div>
</article>