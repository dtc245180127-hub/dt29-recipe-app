<?php
/**
 * Display Functions for Boldmanlite Theme.
 *
 * @package Boldmanlite
 */
 
if ( ! function_exists( 'boldmanlite_comment_nav' ) ) :

function boldmanlite_comment_nav() {
	// Are there comments to navigate through?
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
	?>
	<nav class="navigation comment-navigation">
		<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'boldman-lite' ); ?></h2>
		<div class="nav-links">
			<?php
				if ( $prev_link = get_previous_comments_link( esc_attr__( 'Older Comments', 'boldman-lite' ) ) ) :
					printf( '<div class="nav-previous">%s</div>', $prev_link );
				endif;

				if ( $next_link = get_next_comments_link( esc_attr__( 'Newer Comments', 'boldman-lite' ) ) ) :
					printf( '<div class="nav-next">%s</div>', $next_link );
				endif;
			?>
		</div><!-- .nav-links -->
	</nav><!-- .comment-navigation -->
	<?php
	endif;
}
endif;

/**
 *  Show sidebar of hide sidebar
 */
if( !function_exists('boldmanlite_comment_row_template') ){
function boldmanlite_comment_row_template($comment, $args, $depth){
	if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
	
	
    <<?php echo esc_attr($tag); ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
	
		<?php if ( 'div' != $args['style'] ) : ?>
			<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
		<?php endif; ?>
		<div class="comment-author vcard">
				<?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
		</div>
			
		<?php if ( $comment->comment_approved == '0' ) : ?>
			 <em class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'boldman-lite' ); ?></em>
			  <br />
		<?php endif; ?>
		<div class="comment-box">
			<div class="comment-meta commentmetadata">
				<?php printf( '<cite class="prt-comment-owner fn">%s</cite> <span class="says">' . esc_attr__('says:', 'boldman-lite' ) . '</span>', get_comment_author_link() ); ?>
				
				<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
				<?php
				printf( esc_attr__( '%1$s at %2$s', 'boldman-lite' ), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( esc_attr__( '(Edit)', 'boldman-lite' ), '  ', '' );
				?>
			</div>			
			<div class="author-content-wrap">
				<?php comment_text(); ?>
			</div>	
			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div>
		</div>
		
		<?php if ( 'div' != $args['style'] ) : ?>
			</div>
		<?php endif; ?>
	
	</<?php echo esc_attr($tag); ?>>
	
    <?php
	
}
}


if ( ! function_exists( 'boldmanlite_posted_on' ) ) {
	/**
	 * Prints HTML with meta information for the current post-date/time with the social icons.
	 */
	function boldmanlite_posted_on() {
		?>	
		<span class="posted-on"><a href="<?php echo esc_url( get_day_link( get_the_time( 'Y' ), get_the_time( 'm' ), get_the_time( 'd' ) ) ); ?>" rel="bookmark">
			<time class="entry-date published updated" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
			<?php echo esc_html( get_the_date( 'd' ) ); ?>
			<span><?php echo esc_html( get_the_date( 'M' ) ); ?></span></time></a>
		</span>
		<?php
	}
}

if ( ! function_exists( 'boldmanlite_entry_footer' ) ) {
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function boldmanlite_entry_footer() {
		global $post, $boldmanlite_options;
		?>
		<div class="entry-meta-footer">
			<div class="entry-meta-container">
				<span class="author vcard prt-meta-line">
					<i class="fas fa-user"></i>
					<a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
						<?php echo esc_html( get_the_author() ); ?>
					</a>
				</span>
				<?php
				if ( 'post' === get_post_type() ) {

					$categories_list = get_the_category_list( esc_html__( ', ', 'boldman-lite' ) );
					if ( ! empty( $categories_list ) ) {
						?>
						<span class="categories-list prt-meta-line">
							<i class="far fa-folder-open"></i>
							<?php print_r( $categories_list ); ?>	
						</span>
						<?php
					}
					$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'boldman-lite' ) );
					if ( ! empty( $tags_list ) ) {
						?>
						<span class="tag-list prt-meta-line">
							<i class="fas fa-tags"></i>
							<?php print_r( $tags_list ); ?>	
						</span>
						<?php
					}
					if ( comments_open() ) {
						?>
						<span class="meta-comment prt-meta-line">
							<i class="far fa-comment"></i>
							<?php
							$comment_template = '<span class="comment-count">%s</span> <span class="comment-count-label">%s</span>';
							comments_popup_link( 
								sprintf( $comment_template, '0', esc_html__( 'comments', 'boldman-lite' ) ),
								sprintf( $comment_template, '1', esc_html__( 'comment', 'boldman-lite' ) ),
								sprintf( $comment_template, '%', esc_html__( 'comments', 'boldman-lite' ) )
							);
							?>
						</span>
						<?php
					}
				}
				?>
			</div>
		</div>
		<?php
	}
}

if ( ! function_exists( 'boldmanlite_post_thumbnail' ) ) {

	function boldmanlite_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}

		if ( is_singular() ) {
			?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->
			<?php
		} else {
			?>
			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
				the_post_thumbnail(
					'post-thumbnail',
					array(
						'alt' => the_title_attribute(
							array(
								'echo' => false,
							)
						),
					) 
				);
				?>
			</a>
			<?php
		}
	}
}

/**
 *  boldmanlite_blog_classic_extra_class
 */
if ( !function_exists( 'boldmanlite_blog_classic_extra_class' ) ){
function boldmanlite_blog_classic_extra_class(){
	$return = 'ttm-blogbox-format-'.get_post_format();

		if( !has_post_thumbnail() ){
			$return .= ' ttm-no-featured-content';
		}
		
	return $return;
	
	}
}
	
if ( ! function_exists( 'boldmanlite_post_authorbox' ) ) {
	/**
	 * Displays an post authorbox.
	 */
	function boldmanlite_post_authorbox() {
		if ( get_the_author_meta( 'description' ) ) {
			?>
			<div class="post-author-box">
				<div class="post-author-image">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 150 ); ?>
				</div>
				<div class="post-author-details">
					<?php
					if ( ! is_author() ) {
						?>
						<h3 class="author-title">
							<?php
							/* translators: 1: get the author name*/
							printf( esc_html__( 'About %s', 'boldman-lite' ), get_the_author() );
							?>
						</h3>
						<?php
					}
					?>
					<div class="post-author-description">
						<p class="author-description"><?php the_author_meta( 'description' ); ?></p>
					</div>
				</div>
			</div>
			<?php
		}
	}
}


/**
 *  Return sidebar class for Row container or content container
 */
 
if( !function_exists('boldmanlite_sidebar_class') ){
function boldmanlite_sidebar_class($for='row'){
	
		global $boldmanlite_options;
		$return_content_area = '';
		
		$sidebar_position = 'right-sidebar';
		$current_sidebar  = ( function_exists( 'boldmanlite_get_current_sidebar' ) ) ? boldmanlite_get_current_sidebar() : '';
		
		if ( is_active_sidebar( $current_sidebar ) ) {
			if ( is_page() ) {
				$sidebar_position = ( isset( $boldmanlite_options['page_sidebar'] ) && $boldmanlite_options['page_sidebar'] ) ? $boldmanlite_options['page_sidebar'] : $sidebar_position;
			} elseif ( is_search() ) {
				$sidebar_position = 'right-sidebar';
			} elseif ( is_home() || is_archive() || is_singular( 'post' ) ) {
				$sidebar_position = ( isset( $boldmanlite_options['blog_sidebar'] ) && $boldmanlite_options['blog_sidebar'] ) ? $boldmanlite_options['blog_sidebar'] : $sidebar_position;
			}

			if ( 'left-sidebar' === $sidebar_position ) {
				$return_content_area = 'col-sm-12 col-md-12 col-lg-8 col-xl-9 order-xl-2 order-lg-2';
			} elseif ( 'right-sidebar' === $sidebar_position ) {
				$return_content_area = 'col-sm-12 col-md-12 col-lg-8 col-xl-9';
			} else {
				$return_content_area = 'col-sm-12 col-md-12 col-lg-12 col-xl-12';
			}
		} else {
			$return_content_area = 'col-sm-12 col-md-12 col-lg-12 col-xl-12';
		}

		return $return_content_area;
	
}
}

if ( !function_exists( 'boldmanlite_readmore_button' ) ){
function boldmanlite_readmore_button(){
	
	$return        = '';
	
	if( get_post_format()!='quote' && get_post_format()!='link' ) {
		$return .= '<div class="prt-blogbox-footer">';
		$return .= '<a href="'.get_permalink().'">Read More</a>';
		$return .= '</div>';
	}
	
	return $return;
	
}
}

if ( ! function_exists( 'boldmanlite_entry_date' ) ) :
function boldmanlite_entry_date( $echo = true ) {
	if ( has_post_format( array( 'chat', 'status' ) ) ){
		$format_prefix = esc_attr_x( '%1$s on %2$s', '1: post format name. 2: date', 'boldman-lite' );
	} else {
		$format_prefix = '%2$s';
	}
	
	
	$date = '<div class="ttm-post-date-wrapper">';
		$date .= sprintf( '<div class="ttm-entry-date-wrapper"><span class="ttm-entry-date"><time class="entry-date" datetime="%1$s" >%2$s<span class="entry-month entry-year">%3$s<span class="entry-year">%4$s</span></span></time></span></div>',
			get_the_date( 'c' ),
			get_the_date( 'j' ),
			get_the_date( 'M' ),
			get_the_date( 'Y' )
		);
	$date .= '</div>';
	
	if ( $echo ){
		echo trim($date);
	} else {
		return trim($date);
	}
}
endif;