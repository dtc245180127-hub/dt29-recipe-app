<?php
/**
 * Display about theme functions for Boldmanlite Theme.
 *
 * @package Boldmanlite
 */


/**
 * Adding About Theme Page in admin menu
 */
 
if( ! function_exists( 'boldmanlite_about_menu' ) ) :
function boldmanlite_about_menu(){   
    add_theme_page(
        __( 'Getting Started', 'boldman-lite' ),
        __( 'About Boldmanlite', 'boldman-lite' ),
        'manage_options',
        'ttm-getting-started',
        'ttm_getting_started_page'    
    );
}
endif;
add_action( 'admin_menu', 'boldmanlite_about_menu' );

/*if( ! function_exists( 'boldmanlite_protheme_menu' ) ) :
function boldmanlite_protheme_menu(){   
    add_theme_page(
      __( 'Pro Theme Demo', 'boldman-lite' ),
      __( 'Pro Theme Demo', 'boldman-lite' ),
      'manage_options',
      'boldmanlite_pro_theme_demo',
      'boldmanlite_pro_theme_demo'    
    );
}
endif;

add_action( 'admin_menu', 'boldmanlite_protheme_menu' );*/


if( ! function_exists( 'boldmanlite_aboutheme_admin_scripts' ) ) :
function boldmanlite_aboutheme_admin_scripts( $hook ){
	wp_enqueue_style( 'ttm-admin-style', get_template_directory_uri() . '/inc/admin.css', false, '1.0.0' );
    wp_enqueue_style( 'boldman-lite-about', get_template_directory_uri() . '/inc/getting-started/css/about-theme.css', false);
    wp_enqueue_script( 'boldman-lite-about', get_template_directory_uri() . '/inc/getting-started/js/about-theme.js', array( 'jquery' ), true );
}
endif;
add_action( 'admin_enqueue_scripts', 'boldmanlite_aboutheme_admin_scripts' );

/**
 * Callback function for admin page.
*/
if( ! function_exists( 'ttm_getting_started_page' ) ) :
function ttm_getting_started_page(){ ?>
    <div class="wrap getting-started">
        <h2 class="notices"></h2>
        <div class="intro-wrap">
            <div class="intro">
				<h3><?php printf( esc_html__( 'Getting started with %1$s v%2$s', 'boldman-lite' ), 'boldman-lite', '1.0.0' ); ?></h3>
            </div>
        </div>
        <div class="panels">
            <div class="welcome-boldman-lite-main">
            <h1 class="ttm-welcome-title"><?php echo esc_html__('Welcome to','boldman-lite'); ?> <strong><?php echo esc_html('Boldman Lite Theme','boldman-lite'); ?> </strong></h1>
            <div class="ttm-welcome-subtitle">
                <span class="ttm-welcome-desc-meta">By <a href="https://themetechmount.com" target="_blank"><?php echo esc_html__('ThemetechMount','boldman-lite'); ?></a></span>            </div>
            </div>
			
            <ul class="inline-list">
                <li class="current">
                    <a id="help" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22">
                            <defs><style>.a{fill:#354052;}</style></defs>
                            <path class="a" d="M12,23H11V16.43A5.966,5.966,0,0,1,7,18a6.083,6.083,0,0,1-6-6V11H7.57A5.966,5.966,0,0,1,6,7a6.083,6.083,0,0,1,6-6h1V7.57A5.966,5.966,0,0,1,17,6a6.083,6.083,0,0,1,6,6v1H16.43A5.966,5.966,0,0,1,18,17,6.083,6.083,0,0,1,12,23Zm1-9.87v7.74a4,4,0,0,0,0-7.74ZM3.13,13A4.07,4.07,0,0,0,7,16a4.07,4.07,0,0,0,3.87-3Zm10-2h7.74a4,4,0,0,0-7.74,0ZM11,3.13A4.08,4.08,0,0,0,8,7a4.08,4.08,0,0,0,3,3.87Z" transform="translate(-1 -1)"/>
                        </svg>
                        <?php esc_html_e( 'Getting Started', 'boldman-lite' ); ?>
                    </a>
                </li>
                <li>
                    <a id="support" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <defs><style>.a{fill:#354052;}</style></defs>
                            <path class="a" d="M11,18h2V16H11ZM12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm0,18a8,8,0,1,1,8-8A8.011,8.011,0,0,1,12,20ZM12,6a4,4,0,0,0-4,4h2a2,2,0,0,1,4,0c0,2-3,1.75-3,5h2c0-2.25,3-2.5,3-5A4,4,0,0,0,12,6Z" transform="translate(-2 -2)"/>
                        </svg>
                        <?php esc_html_e( 'FAQ\'s &amp; Support', 'boldman-lite' ); ?>
                    </a>
                </li>

                <li>
                    <a id="free-pro-panel" href="javascript:void(0);">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17.297 20">
                            <defs><style>.a{fill:#354052;}</style></defs>
                            <path class="a" d="M19.384,17.534V13.75L14,19.155l5.384,5.405V20.777H31.3V17.534Zm6.53,9.189H14v3.243H25.914V33.75L31.3,28.345l-5.384-5.405Z" transform="translate(-14 -13.75)"/>
                        </svg>
                        <?php esc_html_e( 'Free Vs Pro', 'boldman-lite' ); ?>
                    </a>
                </li>
              
                
            </ul>
            <div id="panel" class="panel">

                <?php require get_template_directory() . '/inc/getting-started/tabs/help-panel.php'; ?>         

                <?php require get_template_directory() . '/inc/getting-started/tabs/support-panel.php'; ?>
                
                <?php require get_template_directory() . '/inc/getting-started/tabs/free-vs-pro-panel.php'; ?>

            </div><!-- .panel -->
        </div><!-- .panels -->
    </div><!-- .getting-started -->
    <?php
}
endif;