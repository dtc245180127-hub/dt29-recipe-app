<?php
/**
 * Display action functions for Boldmanlite Theme.
 *
 * @package Boldmanlite
 */
 
 
/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function boldmanlite_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'boldmanlite_pingback_header' );


/*
 * Add some special classes on <body> tag.
 */
if( !function_exists('boldmanlite_body_classes') ){
function boldmanlite_body_classes($bodyClass){
	$hClass = '';
	
	if ( ! is_singular() ) {
		$bodyClass[] = 'hfeed';
	}
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
				$bodyClass[] = 'page-sidebar-yes';
			} else if ('right-sidebar' === $sidebar_position) {
				$bodyClass[] = 'page-sidebar-yes';
			} else {
				$bodyClass[] = 'page-sidebar-no';
			}
		}
		
		
	return $bodyClass;
}
}
add_filter('body_class', 'boldmanlite_body_classes');


if ( ! function_exists( 'boldmanlite_get_current_sidebar' ) ) {
	/**
	 * Get the current sidebar.
	 */
	function boldmanlite_get_current_sidebar() {

		$sidebar_position = boldmanlite_sidebar_position();
		if ( 'full-width' === $sidebar_position ) {
			return false;
		}

		if ( is_page() ) {
			$current_sidebar = 'page-sidebar';
		} elseif ( is_search() ) {
			$current_sidebar = 'sidebar-1';
		} elseif ( is_singular( 'service' ) ) {
			$current_sidebar = 'service-sidebar';
		} elseif ( is_home() || is_archive() || is_singular( 'post' ) ) {
			$current_sidebar = 'sidebar-1';
		} else {
			$current_sidebar = 'sidebar-1';
		}

		return $current_sidebar;
	}
}

if ( ! function_exists( 'boldmanlite_sidebar_position' ) ) {
	/**
	 * Get the current sidebar position.
	 */
	function boldmanlite_sidebar_position() {
		global $boldmanlite_options;
		
		$sidebar_position = 'right-sidebar';
		
		if ( is_page() ) {
			$sidebar_position = ( isset( $boldmanlite_options['page_sidebar'] ) && $boldmanlite_options['page_sidebar'] ) ? $boldmanlite_options['page_sidebar'] : $sidebar_position;
		} elseif ( is_search() ) {
			$sidebar_position = 'right-sidebar';
		}  elseif ( is_home() || is_archive() || is_singular( 'post' ) ) {
			$sidebar_position = ( isset( $boldmanlite_options['blog_sidebar'] ) && $boldmanlite_options['blog_sidebar'] ) ? $boldmanlite_options['blog_sidebar'] : $sidebar_position;
		}

		return $sidebar_position;
	}
}


function boldmanlite_add_inline_dynamic_css() {
	$boldmanlite_options = boldmanlite_get_theme_options();
	ob_start();
	include get_template_directory().'/css/dynamic-styles.php';
	$css    = ob_get_clean();
	
	wp_add_inline_style( 'boldman-lite-main-style', $css );		
}

add_action( 'wp_enqueue_scripts', 'boldmanlite_add_inline_dynamic_css', 15 );


if ( ! function_exists( 'boldmanlite_register_page_metafields' ) ) {
	function boldmanlite_register_page_metafields() {
		add_meta_box( 'boldmanlite_page_settings', __( 'Page Settings', 'boldman-lite' ), 'boldmanlite_page_settings_function', 'page' );
	}
}
add_action( 'add_meta_boxes', 'boldmanlite_register_page_metafields' );

if ( ! function_exists( 'boldmanlite_page_settings_function' ) ) {
	function boldmanlite_page_settings_function( $post ) {
		global $post;

		wp_nonce_field( basename( __FILE__ ), 'boldman-lite-page-meta-nonce' );
		
		$page_settings         = get_post_meta( $post->ID, 'boldmanlite_page_settings', true );
		$prt_page_title_disable = isset( $page_settings['prt_page_title_disable'] ) ? (bool) $page_settings['prt_page_title_disable'] : '';
		?>
		<div class="prt-meta-content">
			<div class="prt-page-input-field">
				<label for="prt_page_title_disable"><?php esc_html_e( 'Disable Page Title', 'boldman-lite' ); ?></label>
				<input type="checkbox" id="prt_page_title_disable" name="prt_page_title_disable" value="true" <?php checked( $prt_page_title_disable, true ); ?>>
			</div>
		</div>
		<?php
	}
}


if ( ! function_exists( 'boldmanlite_page_save_meta_box' ) ) {
	function boldmanlite_page_save_meta_box( $post_id ) {

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		if ( ! current_user_can( 'edit_posts' ) ) {
			return;
		}

		if ( ! isset( $_POST['boldman-lite-page-meta-nonce'] ) || ! wp_verify_nonce( sanitize_text_field( wp_unslash( 	$_POST['boldman-lite-page-meta-nonce'] ) ), basename( __FILE__ ) ) ) {
			return;
		}

		$page_settings = array();
		$page_settings['prt_page_title_disable'] = isset( $_POST['prt_page_title_disable'] ) ? sanitize_text_field( wp_unslash( $_POST['prt_page_title_disable'] ) ) : '';

		update_post_meta( $post_id, 'boldmanlite_page_settings', $page_settings );
	}
}
add_action( 'save_post', 'boldmanlite_page_save_meta_box' );



if( !function_exists('boldmanlite_wp_admin_scripts_styles') ){
function boldmanlite_wp_admin_scripts_styles() {

	wp_enqueue_style( 'admin-style', get_template_directory_uri() . '/inc/admin-style.css', false, '1.0.0' );	
}
}
add_action( 'admin_enqueue_scripts', 'boldmanlite_wp_admin_scripts_styles' );

add_action( 'after_setup_theme', 'mhmwt_fs' );

/**
 * Display Topbar.
 */
if ( ! function_exists( 'boldmanlite_topbar' ) ) {
	function boldmanlite_topbar() {

		$boldmanlite_options = boldmanlite_get_theme_options();


		$display_topbar     = isset( $boldmanlite_options['display_topbar'] ) ? $boldmanlite_options['display_topbar'] : 1;
		$topbar_left_text   = isset( $boldmanlite_options['topbar_left_text'] ) ? $boldmanlite_options['topbar_left_text'] : '';
		$topbar_right_text  = isset( $boldmanlite_options['topbar_right_text'] ) ? $boldmanlite_options['topbar_right_text'] : '';
		$topbar_background_color  = isset( $boldmanlite_options['topbar_background_color'] ) ? $boldmanlite_options['topbar_background_color'] : '';
		$topbar_text_color       = isset( $boldmanlite_options['topbar_text_color'] ) ? $boldmanlite_options['topbar_text_color'] : '#ffffff';
		$topbar_text_font_size = isset( $boldmanlite_options['topbar_text_font_size'] ) ? $boldmanlite_options['topbar_text_font_size'] : 14;

		if ( ! $display_topbar ) {
			return;
		}
		?>

		<div class="boldman-lite-topbar" style="background-color: <?php echo esc_attr( $topbar_background_color ); ?>; color: <?php echo esc_attr( $topbar_text_color ); ?>; font-size: <?php echo esc_attr( $topbar_text_font_size ); ?>px;">			
			<div class="container boldman-lite-left-righttext">
				
				<div class="boldman-lite-topbar-left">
					<?php echo wp_kses_post( $topbar_left_text ); ?>
				</div>

				<div class="boldman-lite-topbar-right">
					<?php echo wp_kses_post( $topbar_right_text ); ?>
				</div>

			</div>
		</div>

		<?php
	}
}

add_action( 'boldmanlite_before_header', 'boldmanlite_topbar' );