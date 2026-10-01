<?php
/**
 * Boldmanlite functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * 
 * @package Boldmanlite
 */


/**
 * Set the content width based on the theme's design and stylesheet.
 *
 */


if ( ! isset( $content_width ) ) {
	$content_width = 847;
}

if ( ! function_exists( 'boldmanlite_setup' ) ) :

	function boldmanlite_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Boldmanlite, use a find and replace
	 * to change 'Boldmanlite' to the name of your theme in all the template files
	 */
	//load_theme_textdomain( 'boldman-lite', get_template_directory() . '/languages' );
	load_theme_textdomain(
		'boldman-lite',
		get_template_directory() . '/languages'
	);
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( 
		array(
			'main-menu'   => esc_html__( 'Main Menu', 'boldman-lite' ),
			'footer-menu' => esc_html__( 'Footer Menu', 'boldman-lite' ),
		) 
	);

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 39,
		'width'       => 224,
		'flex-height' => true,
		'flex-width' => true,
		'header-text' => array( 'site-title', 'site-description' ),
		
	) );
		
	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'gallery', 'audio', 'video', 'quote', 'link', 'status', 'chat'
	) );
	

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	/*
	 * Recommended WordPress.org theme supports.
	 */
	add_theme_support(
		'custom-header',
		array(
			'width'       => 1920,
			'height'      => 800,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'ffffff',
		)
	);

	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'style-editor.css' );

	}
endif;
add_action( 'after_setup_theme', 'boldmanlite_setup' );

/*
 * Prefdefine Global variable
 */
global $boldmanlite_globals;

$boldmanlite_globals = array(
	'theme_options_slug' => 'boldmanlite_options',
	'theme_options_name' => 'boldmanlite_options',
);


/************************* Custom Files ************************/

// Theme Customizer options.
require get_template_directory() . '/inc/customizer.php';

// Load theme functions
require get_template_directory() . '/inc/tools.php';

// filters and action hooks
require get_template_directory() . '/inc/hooks.php';

// Enqueue styles and scripts
require get_template_directory() . '/inc/boldmanlite-scripts-styles.php';

// theme widgets
require get_template_directory() . '/inc/widgets.php';

// about theme
require get_template_directory() . '/inc/getting-started.php';

// demo data
require get_template_directory() . '/inc/boldmanlite-config.php';


require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
require get_template_directory() . '/inc/bundled-plugins.php';


/**
 * Register WordPress block patterns and styles.
 */
function boldmanlite_register_block_pattern() {
	if ( function_exists( 'register_block_pattern' ) ) {
		register_block_pattern(
			'boldman-lite/service-intro',
			array(
				'title'       => __( 'Service Introduction', 'boldman-lite' ),
				'description' => __( 'A simple service introduction section.', 'boldman-lite' ),
				'categories'  => array( 'services', 'text' ),
				'content'     => '<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2 class="wp-block-heading">' . esc_html__( 'We are ready to help', 'boldman-lite' ) . '</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>' . esc_html__( 'Describe your services and invite visitors to get in touch.', 'boldman-lite' ) . '</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->',
			)
		);
	}
}
add_action( 'init', 'boldmanlite_register_block_pattern' );

function boldmanlite_register_block_styles() {
	if ( function_exists( 'register_block_style' ) ) {
		register_block_style(
			'core/button',
			array(
				'name'  => 'boldmanlite-outline',
				'label' => __( 'Outline', 'boldman-lite' ),
			)
		);
	}
}
add_action( 'init', 'boldmanlite_register_block_styles' );
if ( ! function_exists( 'mhmwt_fs' ) ) {
    // Create a helper function for easy SDK access.
    function mhmwt_fs() {
        global $mhmwt_fs;

        if ( ! isset( $mhmwt_fs ) ) {
            // Include Freemius SDK.
            require_once dirname(__FILE__) . '/freemius/start.php';

            $mhmwt_fs = fs_dynamic_init( array(
                'id'                  => '17551',
                'slug'                => 'boldman-lite',
                'premium_slug'        => 'boldman-lite',
                'type'                => 'theme',
                'public_key'          => 'pk_5f83bdb77d5c638f38d846b566e46',
                'is_premium'          => false,
                'has_addons'          => false,
                'has_paid_plans'      => true,
                'menu'                => array(
                    'slug'            => 'boldman-lite',
                    'account'         => false,
                ),
				'is_live'			  => true,
            ) );
        }

        return $mhmwt_fs;
    }

    // Init Freemius.
    mhmwt_fs();
    // Signal that SDK was initiated.
    do_action( 'mhmwt_fs_loaded' );
}