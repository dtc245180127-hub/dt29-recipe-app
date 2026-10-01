<?php
/**
 * Boldmanlite Sidebars
 *
 * @package Boldmanlite
 */

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function boldmanlite_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar Widget Area', 'boldman-lite' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'This is sidebar for blog.', 'boldman-lite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Page Sidebar Widget Area', 'boldman-lite' ),
			'id'            => 'page-sidebar',
			'description'   => esc_html__( 'This is sidebar for pages.', 'boldman-lite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	// Footer sidebars.
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer - 1st Widget Area ', 'boldman-lite' ),
			'id'            => 'footer-column-1',
			'description'   => esc_html__( 'This is first footer widget area for footer.', 'boldman-lite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer - 2nd Widget Area', 'boldman-lite' ),
			'id'            => 'footer-column-2',
			'description'   => esc_html__( 'This is second footer widget area for footer.', 'boldman-lite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer - 3rd Widget Area', 'boldman-lite' ),
			'id'            => 'footer-column-3',
			'description'   => esc_html__( 'This is third footer widget area for footer.', 'boldman-lite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer - 4th Widget Area', 'boldman-lite' ),
			'id'            => 'footer-column-4',
			'description'   => esc_html__( 'This is fourth footer widget area for footer.', 'boldman-lite' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'boldmanlite_widgets_init' );