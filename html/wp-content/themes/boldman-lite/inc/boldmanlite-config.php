<?php

/**
 * Display one click options for Boldmanlite Theme.
 *
 * NOTE: Per WordPress.org Theme Review requirements, a theme package must
 * not include a demo content XML export or a widget (.wie) import file —
 * the automated Theme Check scan rejects both file types outright, and
 * they may also not be hotlinked from an external server. Demo content is
 * therefore documented separately (see the theme's documentation / support
 * site) rather than bundled or auto-imported here. If a future companion
 * plugin wants to supply import files, it can still hook into
 * 'ocdi/import_files' from outside the theme package.
 *
 * @package Boldmanlite
 */



function ocdi_after_import_setup() {
	// Assign menus to their locations.
	$main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	$footer_menu = get_term_by( 'name', 'Footer menu', 'nav_menu' );
	set_theme_mod( 'nav_menu_locations', array(
			'main-menu' => $main_menu->term_id,
			'footer-menu' => $footer_menu->term_id,
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home page' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );
	
	// Disable Elementor default colors and fonts.
	update_option( 'elementor_disable_color_schemes', 'yes' );
	update_option( 'elementor_disable_typography', 'yes' );

}
add_action( 'ocdi/after_import', 'ocdi_after_import_setup' );

// Disable generation of smaller images (thumbnails) during the content import
add_filter( 'ocdi/regenerate_thumbnails_in_content_import', '__return_false' );

// Disable the branding notice
add_filter( 'ocdi/disable_pt_branding', '__return_true' );

/* function ocdi_plugin_intro_text( $default_text ) {
    $default_text .= '<div class="ttm-premium-upgrade"><h1 class="banner-header">Get access to all 30+ premium demos and more.</h1><h2 class="banner-subheader">Take the lead. Experience website building with no limits</h2><a href="https://themetechmount.com/boldmanlite/" target="_blank" class="banner-button" role="button"><span>View Premium Demos</span></a><a href="https://themetechmount.com/boldmanlite/pricing/" target="_blank" class="banner-button" role="button"><span>Upgrade now</span></a></div>';
 
    return $default_text;
}
add_filter( 'ocdi/plugin_intro_text', 'ocdi_plugin_intro_text' ); */


add_action('admin_menu', 'boldmanlite_admin_menu',99 );

function boldmanlite_admin_menu() { 
   add_submenu_page( 'themes.php', 'Pro Theme Demo', 'Pro Theme Demo', 'manage_options', 'boldmanlite_pro_theme_demo', 'boldmanlite_pro_theme_demo' );  
}

function boldmanlite_pro_theme_demo(){
	require get_template_directory() . '/inc/protheme-demo.php';
}
?>