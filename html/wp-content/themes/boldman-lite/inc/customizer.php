<?php
/**
 * Boldman Lite Customizer settings.
 *
 * @package Boldmanlite
 */

/**
 * Return the theme's Customizer-backed options in the legacy array shape.
 *
 * Keeping the array shape avoids unnecessary changes in template files while
 * storing all settings through the WordPress Customizer API.
 *
 * @return array
 */
function boldmanlite_get_theme_options() {
	$defaults = array(
		'primary_color'               => '#fda12b',
		'secondary_color'             => '#182333',
		'tertiary_color'              => '#f8f9fa',
		'display_topbar'              => 1,
		'topbar_left_text'            => '<ul class="top-contact tm-highlight-left"><li><i class="fas fa-phone-alt"></i><strong>Client Services:</strong> 0 (143) 456 7897</li>
</ul>',
		'topbar_right_text'           => '<ul class="top-contact"><li><i class="fa fa-envelope-o"></i> <strong>Email: </strong><a href="mailto:info@example.com.com">info@example.com</a></li></ul><div class="prt-social-link"><ul class="social-icons"><li class="prt-social-facebook"><a class=" tooltip-top" href="#" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a></li><li class="prt-social-googleplus"><a class=" tooltip-top" href="#" target="_blank" rel="noopener"><i class="fab fa-google-plus-g"></i></a></li><li class="prt-social-linkedin"><a class=" tooltip-top" href="#" target="_blank" rel="noopener"><i class="fab fa-linkedin-in"></i></a></li><li class="prt-social-instagram"><a class=" tooltip-top" target="_blank" rel="noopener"><i class="fab fa-instagram"></i></a></li></ul></div>',
		'topbar_background_color'     => '#182333',
		'topbar_text_color'           => '#ffffff',
		'topbar_text_font_size'       => 14,
		'header-layout'               => 'layout-1',
		'height_height'               => 100,
		'height_background'           => '#ffffff',
		'display-search-icon'         => 0,
		'display-header-button'       => 1,
		'header_button_title'         => 'Get Started',
		'header_button_liink'         => '#',
		'header-menu-position'        => 'right',
		'headers-layout'              => 'wide',
		'headerbox_cta_text'          => '',
		'center_logo_width'           => 370,
		'first_menu_margin'           => 70,
		'social_infos'                => array(),
		'facebook_link'               => '',
		'twitter_link'                => '',
		'dribbble_link'               => '',
		'vimeo_link'                  => '',
		'pinterest_link'              => '',
		'linkedin_link'               => '',
		'youtube_link'                => '',
		'instagram_link'              => '',
		'display_page_title'          => 1,
		'page_title_height'           => 283,
		'page_title_background_color' => '#182333',
		'page_titlebar_text_color'    => '#ffffff',
		'blog_sidebar'                => 'right-sidebar',
		'page_sidebar'                => 'full-width',
		'active_menu_color'           => '#fda12b',
		'footer_layout'               => '3-3-3-3',
		'footer-widget-border'        => 0,
		'footerwidget_heading_color'  => '#ffffff',
		'footerwidget_text_color'     => '#ffffff',
		'footerwidget_link_color'     => array(
			'regular' => '',
			'hover'   => '',
		),
		'footer_background_color'     => '#182333',
		'copyright_text_left'         => 'Copyright © 2026 All Right Reserved | Powered by Boldmanlite WordPress Theme',
		'copyright_text_right'        => '',
		'footer_copyright_background' => '#182333',
		'footer_text_color'           => '#ffffff',
		'display-border-copyright'    => 0,
		'404_page_title'              => '404',
		'404_page_description'        => 'It looks like nothing was found at this location. Maybe try one of the links below or a search?',
		'button_topbottom_padding'    => array(
			'height' => '13px',
			'units'  => 'px',
		),
		'tm-btn-radius'              => 0,
	);

	$options = $defaults;

	$color_keys = array(
		'primary_color',
		'secondary_color',
		'tertiary_color',
		'height_background',
		'topbar_background_color',
		'topbar_text_color',
		'page_title_background_color',
		'page_titlebar_text_color',
		'active_menu_color',
		'footerwidget_heading_color',
		'footerwidget_text_color',
		'footer_background_color',
		'footer_copyright_background',
		'footer_text_color',
	);

	foreach ( $color_keys as $key ) {
		$options[ $key ] = get_theme_mod( $key, $defaults[ $key ] );
	}

	$boolean_keys = array(
		'display_topbar',
		'display-search-icon',
		'display-header-button',
		'display_page_title',
		'footer-widget-border',
		'display-border-copyright',
	);
	foreach ( $boolean_keys as $key ) {
		$options[ $key ] = get_theme_mod( $key, $defaults[ $key ] ) ? 1 : 0;
	}

	$text_keys = array(
		'header_button_title',
		'headerbox_cta_text',
		'topbar_left_text',
		'topbar_right_text',
		'copyright_text_left',
		'copyright_text_right',
		'404_page_title',
		'404_page_description',
	);
	foreach ( $text_keys as $key ) {
		$options[ $key ] = get_theme_mod( $key, $defaults[ $key ] );
	}

	$url_keys = array(
		'header_button_liink',
		'facebook_link',
		'twitter_link',
		'dribbble_link',
		'vimeo_link',
		'pinterest_link',
		'linkedin_link',
		'youtube_link',
		'instagram_link',
	);
	foreach ( $url_keys as $key ) {
		$options[ $key ] = get_theme_mod( $key, $defaults[ $key ] );
	}

	$select_defaults = array(
		'header-layout'        => 'layout-1',
		'header-menu-position' => 'right',
		'headers-layout'       => 'wide',
		'blog_sidebar'         => 'right-sidebar',
		'page_sidebar'         => 'full-width',
		'footer_layout'        => '3-3-3-3',
	);
	foreach ( $select_defaults as $key => $default ) {
		$options[ $key ] = get_theme_mod( $key, $default );
	}

	$number_defaults = array(
		'height_height'         => 100,
		'topbar_text_font_size' => 14,
		'page_title_height'     => 283,
		'center_logo_width'     => 370,
		'first_menu_margin'     => 70,
		'tm-btn-radius'         => 0,
	);
	foreach ( $number_defaults as $key => $default ) {
		$options[ $key ] = absint( get_theme_mod( $key, $default ) );
	}

	$options['site-logo'] = array();
	$logo_id = absint( get_theme_mod( 'site_logo', 0 ) );
	if ( $logo_id ) {
		$logo_url = wp_get_attachment_image_url( $logo_id, 'full' );
		if ( $logo_url ) {
			$options['site-logo'] = array(
				'url' => $logo_url,
				'id'  => $logo_id,
			);
		}
	}

	$options['site-logo-height'] = array(
		'height' => get_theme_mod( 'site_logo_height', '40px' ),
		'units'  => 'px',
	);
	$options['button_topbottom_padding'] = array(
		'height' => get_theme_mod( 'button_topbottom_padding', '13px' ),
		'units'  => 'px',
	);

	$page_title_image = absint( get_theme_mod( 'page_title_background_image', 0 ) );
	$options['page_title_banner_image'] = boldmanlite_build_background_option(
		$page_title_image,
		'page_title_background_repeat',
		'page_title_background_size',
		'page_title_background_attachment',
		'page_title_background_position'
	);

	$footer_image = absint( get_theme_mod( 'footer_background_image', 0 ) );
	$options['footer_background'] = boldmanlite_build_background_option(
		$footer_image,
		'footer_background_repeat',
		'footer_background_size',
		'footer_background_attachment',
		'footer_background_position'
	);

	$socials = array(
		'facebook',
		'twitter',
		'dribbble',
		'vimeo',
		'pinterest',
		'linkedin',
		'youtube',
		'instagram',
	);
	$options['social_infos'] = array();
	foreach ( $socials as $social ) {
		if ( get_theme_mod( 'social_' . $social, false ) ) {
			$options['social_infos'][] = $social;
		}
	}

	$options['footerwidget_link_color'] = array(
		'regular' => get_theme_mod( 'footerwidget_link_regular', '' ),
		'hover'   => get_theme_mod( 'footerwidget_link_hover', '' ),
	);

	$typography = array(
		'body_typography'        => array( 'Poppins', '400', '17px', '27px', '#8d9297', '', '' ),
		'h1_typography'          => array( 'Poppins', '600', '64px', '74px', '#182333', '', '' ),
		'h2_typography'          => array( 'Poppins', '600', '54px', '64px', '#182333', '', '' ),
		'h3_typography'          => array( 'Poppins', '600', '36px', '46px', '#182333', '', '' ),
		'h4_typography'          => array( 'Poppins', '600', '30px', '40px', '#182333', '', '' ),
		'h5_typography'          => array( 'Poppins', '600', '26px', '36px', '#182333', '', '' ),
		'h6_typography'          => array( 'Poppins', '600', '22px', '32px', '#182333', '', '' ),
		'mainmenu_typography'    => array( 'Poppins', '600', '15px', '25px', '#182333', '0.5px', 'uppercase' ),
		'widget_title_typography' => array( 'Poppins', '600', '20px', '30px', '#182333', '', '' ),
		'button_typography'      => array( 'Poppins', '600', '14px', '24px', '#000000', '', 'uppercase' ),
	);
	foreach ( $typography as $key => $default ) {
		$options[ $key ] = boldmanlite_get_typography_option( $key, $default );
	}

	return $options;
}

/**
 * Build a background option in the shape used by the theme templates.
 *
 * @param int    $image_id Attachment ID.
 * @param string $repeat   Setting name.
 * @param string $size     Setting name.
 * @param string $attachment Setting name.
 * @param string $position Setting name.
 * @return array
 */
function boldmanlite_build_background_option( $image_id, $repeat, $size, $attachment, $position ) {
	$image_url = $image_id ? wp_get_attachment_image_url( $image_id, 'full' ) : '';

	return array(
		'background-color'     => '',
		'background-image'     => $image_url ? $image_url : '',
		'background-repeat'    => get_theme_mod( $repeat, '' ),
		'background-size'      => get_theme_mod( $size, '' ),
		'background-attachment'=> get_theme_mod( $attachment, '' ),
		'background-position'  => get_theme_mod( $position, '' ),
	);
}

/**
 * Build the typography option used by the dynamic stylesheet.
 *
 * @param string $prefix  Setting prefix.
 * @param array  $default Default values.
 * @return array
 */
function boldmanlite_get_typography_option( $prefix, $default ) {
	$option = array(
		'font-family'    => get_theme_mod( $prefix . '_font_family', $default[0] ),
		'font-weight'    => get_theme_mod( $prefix . '_font_weight', $default[1] ),
		'font-size'      => get_theme_mod( $prefix . '_font_size', $default[2] ),
		'line-height'    => get_theme_mod( $prefix . '_line_height', $default[3] ),
		'color'          => get_theme_mod( $prefix . '_color', $default[4] ),
		'letter-spacing' => get_theme_mod( $prefix . '_letter_spacing', $default[5] ),
		'text-transform' => get_theme_mod( $prefix . '_text_transform', $default[6] ),
	);

	return $option;
}

/**
 * Migrate legacy theme settings to Customizer settings once.
 */
function boldmanlite_migrate_legacy_options() {
	if ( get_theme_mod( 'boldmanlite_customizer_migrated', false ) ) {
		return;
	}

	$legacy = get_option( 'boldmanlite_options', array() );
	if ( ! is_array( $legacy ) || empty( $legacy ) ) {
		set_theme_mod( 'boldmanlite_customizer_migrated', 1 );
		return;
	}

	$scalar_keys = array(
		'primary_color', 'secondary_color', 'tertiary_color', 'display_topbar',
		'topbar_left_text', 'topbar_right_text', 'topbar_background_color', 'topbar_text_color',
		'topbar_text_font_size', 'header-layout', 'height_height', 'height_background',
		'display-search-icon', 'display-header-button', 'header_button_title', 'header_button_liink',
		'header-menu-position', 'headers-layout', 'headerbox_cta_text', 'center_logo_width',
		'first_menu_margin', 'display_page_title', 'page_title_height', 'page_title_background_color',
		'page_titlebar_text_color', 'blog_sidebar', 'page_sidebar', 'active_menu_color',
		'footer_layout', 'footer-widget-border', 'footerwidget_heading_color', 'footerwidget_text_color',
		'footer_background_color', 'copyright_text_left', 'copyright_text_right',
		'footer_copyright_background', 'footer_text_color', 'display-border-copyright',
		'404_page_title', '404_page_description', 'tm-btn-radius',
	);

	foreach ( $scalar_keys as $key ) {
		if ( array_key_exists( $key, $legacy ) ) {
			set_theme_mod( $key, $legacy[ $key ] );
		}
	}

	if ( isset( $legacy['site-logo']['id'] ) ) {
		set_theme_mod( 'site_logo', absint( $legacy['site-logo']['id'] ) );
	}
	if ( isset( $legacy['site-logo-height']['height'] ) ) {
		set_theme_mod( 'site_logo_height', sanitize_text_field( $legacy['site-logo-height']['height'] ) );
	}
	if ( isset( $legacy['button_topbottom_padding']['height'] ) ) {
		set_theme_mod( 'button_topbottom_padding', sanitize_text_field( $legacy['button_topbottom_padding']['height'] ) );
	}

	if ( isset( $legacy['page_title_banner_image']['media']['id'] ) ) {
		set_theme_mod( 'page_title_background_image', absint( $legacy['page_title_banner_image']['media']['id'] ) );
	}
	if ( isset( $legacy['page_title_banner_image']['background-repeat'] ) ) {
		set_theme_mod( 'page_title_background_repeat', sanitize_key( $legacy['page_title_banner_image']['background-repeat'] ) );
	}
	if ( isset( $legacy['page_title_banner_image']['background-size'] ) ) {
		set_theme_mod( 'page_title_background_size', sanitize_key( $legacy['page_title_banner_image']['background-size'] ) );
	}
	if ( isset( $legacy['page_title_banner_image']['background-attachment'] ) ) {
		set_theme_mod( 'page_title_background_attachment', sanitize_key( $legacy['page_title_banner_image']['background-attachment'] ) );
	}
	if ( isset( $legacy['page_title_banner_image']['background-position'] ) ) {
		set_theme_mod( 'page_title_background_position', sanitize_key( $legacy['page_title_banner_image']['background-position'] ) );
	}

	if ( isset( $legacy['footer_background']['media']['id'] ) ) {
		set_theme_mod( 'footer_background_image', absint( $legacy['footer_background']['media']['id'] ) );
	}
	if ( isset( $legacy['footer_background']['background-repeat'] ) ) {
		set_theme_mod( 'footer_background_repeat', sanitize_key( $legacy['footer_background']['background-repeat'] ) );
	}
	if ( isset( $legacy['footer_background']['background-size'] ) ) {
		set_theme_mod( 'footer_background_size', sanitize_key( $legacy['footer_background']['background-size'] ) );
	}
	if ( isset( $legacy['footer_background']['background-attachment'] ) ) {
		set_theme_mod( 'footer_background_attachment', sanitize_key( $legacy['footer_background']['background-attachment'] ) );
	}
	if ( isset( $legacy['footer_background']['background-position'] ) ) {
		set_theme_mod( 'footer_background_position', sanitize_key( $legacy['footer_background']['background-position'] ) );
	}

	if ( isset( $legacy['footerwidget_link_color'] ) && is_array( $legacy['footerwidget_link_color'] ) ) {
		set_theme_mod( 'footerwidget_link_regular', sanitize_hex_color( $legacy['footerwidget_link_color']['regular'] ?? '' ) ?: '' );
		set_theme_mod( 'footerwidget_link_hover', sanitize_hex_color( $legacy['footerwidget_link_color']['hover'] ?? '' ) ?: '' );
	}

	$socials = array( 'facebook', 'twitter', 'dribbble', 'vimeo', 'pinterest', 'linkedin', 'youtube', 'instagram' );
	$selected_socials = isset( $legacy['social_infos'] ) && is_array( $legacy['social_infos'] ) ? $legacy['social_infos'] : array();
	foreach ( $socials as $social ) {
		set_theme_mod( 'social_' . $social, in_array( $social, $selected_socials, true ) );
	}

	$typography_defaults = array(
		'body_typography'         => array( 'Poppins', '400', '17px', '27px', '#8d9297', '', '' ),
		'h1_typography'           => array( 'Poppins', '600', '64px', '74px', '#182333', '', '' ),
		'h2_typography'           => array( 'Poppins', '600', '54px', '64px', '#182333', '', '' ),
		'h3_typography'           => array( 'Poppins', '600', '36px', '46px', '#182333', '', '' ),
		'h4_typography'           => array( 'Poppins', '600', '30px', '40px', '#182333', '', '' ),
		'h5_typography'           => array( 'Poppins', '600', '26px', '36px', '#182333', '', '' ),
		'h6_typography'           => array( 'Poppins', '600', '22px', '32px', '#182333', '', '' ),
		'mainmenu_typography'     => array( 'Poppins', '600', '15px', '25px', '#182333', '0.5px', 'uppercase' ),
		'widget_title_typography' => array( 'Poppins', '600', '20px', '30px', '#182333', '', '' ),
		'button_typography'       => array( 'Poppins', '600', '14px', '24px', '#000000', '', 'uppercase' ),
	);
	foreach ( $typography_defaults as $key => $default ) {
		if ( isset( $legacy[ $key ] ) && is_array( $legacy[ $key ] ) ) {
			$old = $legacy[ $key ];
			set_theme_mod( $key . '_font_family', sanitize_text_field( $old['font-family'] ?? $default[0] ) );
			set_theme_mod( $key . '_font_weight', sanitize_key( $old['font-weight'] ?? $default[1] ) );
			set_theme_mod( $key . '_font_size', sanitize_text_field( $old['font-size'] ?? $default[2] ) );
			set_theme_mod( $key . '_line_height', sanitize_text_field( $old['line-height'] ?? $default[3] ) );
			set_theme_mod( $key . '_color', sanitize_hex_color( $old['color'] ?? $default[4] ) ?: $default[4] );
			set_theme_mod( $key . '_letter_spacing', sanitize_text_field( $old['letter-spacing'] ?? $default[5] ) );
			set_theme_mod( $key . '_text_transform', sanitize_key( $old['text-transform'] ?? $default[6] ) );
		}
	}

	set_theme_mod( 'boldmanlite_customizer_migrated', 1 );
	delete_option( 'boldmanlite_options' );
}
add_action( 'after_setup_theme', 'boldmanlite_migrate_legacy_options', 20 );

/**
 * Make the options available to existing template code.
 */
function boldmanlite_initialize_theme_options() {
	global $boldmanlite_options;
	$boldmanlite_options = boldmanlite_get_theme_options();
}
add_action( 'after_setup_theme', 'boldmanlite_initialize_theme_options', 30 );

/**
 * Register all theme settings with the WordPress Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Customizer manager.
 */
function boldmanlite_customize_register( $wp_customize ) {
	$wp_customize->add_panel(
		'boldmanlite_theme_options',
		array(
			'title'       => __( 'Boldman Lite Theme Options', 'boldman-lite' ),
			'description' => __( 'Customize the appearance and layout of your site.', 'boldman-lite' ),
			'priority'    => 30,
		)
	);

	$sections = array(
		'colors'       => __( 'Color Scheme', 'boldman-lite' ),
		'topbar'       => __( 'Topbar Settings', 'boldman-lite' ),
		'header'       => __( 'Header Settings', 'boldman-lite' ),
		'contact'      => __( 'Contact Information', 'boldman-lite' ),
		'titlebar'     => __( 'Titlebar Settings', 'boldman-lite' ),
		'blog'         => __( 'Blog Settings', 'boldman-lite' ),
		'page'         => __( 'Page Settings', 'boldman-lite' ),
		'typography'   => __( 'Typography', 'boldman-lite' ),
		'footer'       => __( 'Footer Settings', 'boldman-lite' ),
		'not_found'    => __( '404 Page', 'boldman-lite' ),
	);
	foreach ( $sections as $id => $title ) {
		$wp_customize->add_section(
			'boldmanlite_' . $id,
			array(
				'title' => $title,
				'panel' => 'boldmanlite_theme_options',
			)
		);
	}

	boldmanlite_customize_add_color( $wp_customize, 'primary_color', __( 'Select Skin Color', 'boldman-lite' ), '#fda12b', 'colors' );
	boldmanlite_customize_add_color( $wp_customize, 'secondary_color', __( 'Select Primary Dark BG Color', 'boldman-lite' ), '#182333', 'colors' );
	boldmanlite_customize_add_color( $wp_customize, 'tertiary_color', __( 'Select Primary Grey BG Color', 'boldman-lite' ), '#f8f9fa', 'colors' );

	boldmanlite_customize_add_checkbox( $wp_customize, 'display_topbar', __( 'Show Topbar', 'boldman-lite' ), true, 'topbar' );
	boldmanlite_customize_add_textarea( $wp_customize, 'topbar_left_text', __( 'Topbar Left Text', 'boldman-lite' ), 'Welcome to our website', 'topbar' );
	boldmanlite_customize_add_textarea( $wp_customize, 'topbar_right_text', __( 'Topbar Right Text', 'boldman-lite' ), 'Call us: +1 234 567 890', 'topbar' );
	boldmanlite_customize_add_color( $wp_customize, 'topbar_background_color', __( 'Topbar Background Color', 'boldman-lite' ), '#182333', 'topbar' );
	boldmanlite_customize_add_color( $wp_customize, 'topbar_text_color', __( 'Topbar Text Color', 'boldman-lite' ), '#ffffff', 'topbar' );
	boldmanlite_customize_add_number( $wp_customize, 'topbar_text_font_size', __( 'Topbar Text Font Size', 'boldman-lite' ), 14, 10, 30, 'topbar' );

	$wp_customize->add_setting( 'header-layout', array( 'default' => 'layout-1', 'sanitize_callback' => 'sanitize_key' ) );
	$wp_customize->add_control( 'header-layout', array( 'label' => __( 'Select Header Style', 'boldman-lite' ), 'section' => 'boldmanlite_header', 'type' => 'select', 'choices' => array( 'layout-1' => __( 'Header Style 1', 'boldman-lite' ) ) ) );
	boldmanlite_customize_add_number( $wp_customize, 'height_height', __( 'Header Height (in pixel)', 'boldman-lite' ), 100, 70, 350, 'header' );
	boldmanlite_customize_add_color( $wp_customize, 'height_background', __( 'Select Header Background Color', 'boldman-lite' ), '#ffffff', 'header' );
	boldmanlite_customize_add_checkbox( $wp_customize, 'display-search-icon', __( 'Show Search Button', 'boldman-lite' ), false, 'header' );
	boldmanlite_customize_add_checkbox( $wp_customize, 'display-header-button', __( 'Show Header Button', 'boldman-lite' ), true, 'header' );
	boldmanlite_customize_add_text( $wp_customize, 'header_button_title', __( 'Header Button', 'boldman-lite' ), 'Get Started', 'header' );
	boldmanlite_customize_add_url( $wp_customize, 'header_button_liink', __( 'Header Button Link', 'boldman-lite' ), '#', 'header' );
	$wp_customize->add_setting( 'site_logo', array( 'default' => 0, 'sanitize_callback' => 'absint' ) );
	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'site_logo', array( 'label' => __( 'Logo Image', 'boldman-lite' ), 'section' => 'boldmanlite_header', 'mime_type' => 'image' ) ) );
	boldmanlite_customize_add_text( $wp_customize, 'site_logo_height', __( 'Logo Max Height', 'boldman-lite' ), '40px', 'header' );
	$wp_customize->add_setting( 'header-menu-position', array( 'default' => 'right', 'sanitize_callback' => 'sanitize_key' ) );
	$wp_customize->add_control( 'header-menu-position', array( 'label' => __( 'Header Menu Position', 'boldman-lite' ), 'section' => 'boldmanlite_header', 'type' => 'select', 'choices' => array( 'left' => __( 'Left Align', 'boldman-lite' ), 'center' => __( 'Center Align', 'boldman-lite' ), 'right' => __( 'Right Align', 'boldman-lite' ) ) ) );
	$wp_customize->add_setting( 'headers-layout', array( 'default' => 'wide', 'sanitize_callback' => 'sanitize_key' ) );
	$wp_customize->add_control( 'headers-layout', array( 'label' => __( 'Header Layout', 'boldman-lite' ), 'section' => 'boldmanlite_header', 'type' => 'select', 'choices' => array( 'wide' => __( 'Wide', 'boldman-lite' ), 'fullwide' => __( 'Fullwide', 'boldman-lite' ) ) ) );
	boldmanlite_customize_add_textarea( $wp_customize, 'headerbox_cta_text', __( 'Header CTA Text', 'boldman-lite' ), '', 'header' );
	boldmanlite_customize_add_number( $wp_customize, 'center_logo_width', __( 'Logo Area Width (pixel)', 'boldman-lite' ), 370, 70, 550, 'header' );
	boldmanlite_customize_add_number( $wp_customize, 'first_menu_margin', __( 'Menu Left Margin (pixel)', 'boldman-lite' ), 70, 70, 550, 'header' );

	$socials = array( 'facebook', 'twitter', 'dribbble', 'vimeo', 'pinterest', 'linkedin', 'youtube', 'instagram' );
	foreach ( $socials as $social ) {
		boldmanlite_customize_add_checkbox( $wp_customize, 'social_' . $social, sprintf( __( 'Display %s', 'boldman-lite' ), ucfirst( $social ) ), false, 'contact' );
		boldmanlite_customize_add_url( $wp_customize, $social . '_link', sprintf( __( '%s URL', 'boldman-lite' ), ucfirst( $social ) ), '', 'contact' );
	}

	boldmanlite_customize_add_checkbox( $wp_customize, 'display_page_title', __( 'Show Titlebar', 'boldman-lite' ), true, 'titlebar' );
	boldmanlite_customize_add_number( $wp_customize, 'page_title_height', __( 'Titlebar Height', 'boldman-lite' ), 283, 100, 600, 'titlebar' );
	$wp_customize->add_setting( 'page_title_background_image', array( 'default' => 0, 'sanitize_callback' => 'absint' ) );
	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'page_title_background_image', array( 'label' => __( 'Titlebar Background Image', 'boldman-lite' ), 'section' => 'boldmanlite_titlebar', 'mime_type' => 'image' ) ) );
	boldmanlite_customize_add_select( $wp_customize, 'page_title_background_repeat', __( 'Titlebar Background Repeat', 'boldman-lite' ), '', array( '' => __( 'Default', 'boldman-lite' ), 'no-repeat' => __( 'No Repeat', 'boldman-lite' ), 'repeat' => __( 'Repeat', 'boldman-lite' ), 'repeat-x' => __( 'Repeat X', 'boldman-lite' ), 'repeat-y' => __( 'Repeat Y', 'boldman-lite' ) ), 'titlebar' );
	boldmanlite_customize_add_select( $wp_customize, 'page_title_background_size', __( 'Titlebar Background Size', 'boldman-lite' ), '', array( '' => __( 'Default', 'boldman-lite' ), 'cover' => __( 'Cover', 'boldman-lite' ), 'contain' => __( 'Contain', 'boldman-lite' ), 'auto' => __( 'Auto', 'boldman-lite' ) ), 'titlebar' );
	boldmanlite_customize_add_select( $wp_customize, 'page_title_background_attachment', __( 'Titlebar Background Attachment', 'boldman-lite' ), '', array( '' => __( 'Default', 'boldman-lite' ), 'scroll' => __( 'Scroll', 'boldman-lite' ), 'fixed' => __( 'Fixed', 'boldman-lite' ) ), 'titlebar' );
	boldmanlite_customize_add_select( $wp_customize, 'page_title_background_position', __( 'Titlebar Background Position', 'boldman-lite' ), '', array( '' => __( 'Default', 'boldman-lite' ), 'center center' => __( 'Center Center', 'boldman-lite' ), 'center top' => __( 'Center Top', 'boldman-lite' ), 'center bottom' => __( 'Center Bottom', 'boldman-lite' ), 'left center' => __( 'Left Center', 'boldman-lite' ), 'right center' => __( 'Right Center', 'boldman-lite' ) ), 'titlebar' );
	boldmanlite_customize_add_color( $wp_customize, 'page_title_background_color', __( 'Titlebar Background Color', 'boldman-lite' ), '#182333', 'titlebar' );
	boldmanlite_customize_add_color( $wp_customize, 'page_titlebar_text_color', __( 'Titlebar Text Color', 'boldman-lite' ), '#ffffff', 'titlebar' );

	boldmanlite_customize_add_select( $wp_customize, 'blog_sidebar', __( 'Blog Sidebar', 'boldman-lite' ), 'right-sidebar', array( 'full-width' => __( 'Full Width', 'boldman-lite' ), 'left-sidebar' => __( 'Left Sidebar', 'boldman-lite' ), 'right-sidebar' => __( 'Right Sidebar', 'boldman-lite' ) ), 'blog' );
	boldmanlite_customize_add_select( $wp_customize, 'page_sidebar', __( 'Page Sidebar', 'boldman-lite' ), 'full-width', array( 'full-width' => __( 'Full Width', 'boldman-lite' ), 'left-sidebar' => __( 'Left Sidebar', 'boldman-lite' ), 'right-sidebar' => __( 'Right Sidebar', 'boldman-lite' ) ), 'page' );

	$font_sections = array(
		'body_typography'         => __( 'Body Font', 'boldman-lite' ),
		'h1_typography'           => __( 'H1 Headers Typography', 'boldman-lite' ),
		'h2_typography'           => __( 'H2 Headers Typography', 'boldman-lite' ),
		'h3_typography'           => __( 'H3 Headers Typography', 'boldman-lite' ),
		'h4_typography'           => __( 'H4 Headers Typography', 'boldman-lite' ),
		'h5_typography'           => __( 'H5 Headers Typography', 'boldman-lite' ),
		'h6_typography'           => __( 'H6 Headers Typography', 'boldman-lite' ),
		'mainmenu_typography'     => __( 'Menu Typography', 'boldman-lite' ),
		'widget_title_typography' => __( 'Widget Title Typography', 'boldman-lite' ),
		'button_typography'       => __( 'Button Typography', 'boldman-lite' ),
	);
	$font_defaults = array(
		'body_typography'         => array( 'Poppins', '400', '17px', '27px', '#8d9297', '', '' ),
		'h1_typography'           => array( 'Poppins', '600', '64px', '74px', '#182333', '', '' ),
		'h2_typography'           => array( 'Poppins', '600', '54px', '64px', '#182333', '', '' ),
		'h3_typography'           => array( 'Poppins', '600', '36px', '46px', '#182333', '', '' ),
		'h4_typography'           => array( 'Poppins', '600', '30px', '40px', '#182333', '', '' ),
		'h5_typography'           => array( 'Poppins', '600', '26px', '36px', '#182333', '', '' ),
		'h6_typography'           => array( 'Poppins', '600', '22px', '32px', '#182333', '', '' ),
		'mainmenu_typography'     => array( 'Poppins', '600', '15px', '25px', '#182333', '0.5px', 'uppercase' ),
		'widget_title_typography' => array( 'Poppins', '600', '20px', '30px', '#182333', '', '' ),
		'button_typography'       => array( 'Poppins', '600', '14px', '24px', '#000000', '', 'uppercase' ),
	);
	foreach ( $font_sections as $prefix => $label ) {
		$default = $font_defaults[ $prefix ];
		boldmanlite_customize_add_text( $wp_customize, $prefix . '_font_family', $label . ' - ' . __( 'Font Family', 'boldman-lite' ), $default[0], 'typography' );
		boldmanlite_customize_add_select( $wp_customize, $prefix . '_font_weight', $label . ' - ' . __( 'Font Weight', 'boldman-lite' ), $default[1], array( '300' => '300', '400' => '400', '500' => '500', '600' => '600', '700' => '700', '800' => '800' ), 'typography' );
		boldmanlite_customize_add_text( $wp_customize, $prefix . '_font_size', $label . ' - ' . __( 'Font Size', 'boldman-lite' ), $default[2], 'typography' );
		boldmanlite_customize_add_text( $wp_customize, $prefix . '_line_height', $label . ' - ' . __( 'Line Height', 'boldman-lite' ), $default[3], 'typography' );
		boldmanlite_customize_add_color( $wp_customize, $prefix . '_color', $label . ' - ' . __( 'Color', 'boldman-lite' ), $default[4], 'typography' );
		if ( in_array( $prefix, array( 'mainmenu_typography', 'widget_title_typography', 'button_typography' ), true ) ) {
			boldmanlite_customize_add_text( $wp_customize, $prefix . '_letter_spacing', $label . ' - ' . __( 'Letter Spacing', 'boldman-lite' ), $default[5], 'typography' );
			boldmanlite_customize_add_select( $wp_customize, $prefix . '_text_transform', $label . ' - ' . __( 'Text Transform', 'boldman-lite' ), $default[6], array( '' => __( 'Default', 'boldman-lite' ), 'none' => __( 'None', 'boldman-lite' ), 'uppercase' => __( 'Uppercase', 'boldman-lite' ), 'lowercase' => __( 'Lowercase', 'boldman-lite' ), 'capitalize' => __( 'Capitalize', 'boldman-lite' ) ), 'typography' );
		}
	}
	boldmanlite_customize_add_color( $wp_customize, 'active_menu_color', __( 'Select Active Menu Item Color', 'boldman-lite' ), '#fda12b', 'typography' );
	boldmanlite_customize_add_text( $wp_customize, 'button_topbottom_padding', __( 'Button Top Bottom Padding', 'boldman-lite' ), '13px', 'typography' );
	boldmanlite_customize_add_number( $wp_customize, 'tm-btn-radius', __( 'Button Border Radius', 'boldman-lite' ), 0, 0, 50, 'typography' );

	boldmanlite_customize_add_select( $wp_customize, 'footer_layout', __( 'Footer Column Layout', 'boldman-lite' ), '3-3-3-3', array( '6-6' => '6 - 6', '8-4' => '8 - 4', '4-8' => '4 - 8', '4-4-4' => '4 - 4 - 4', '3-3-3-3' => '3 - 3 - 3 - 3', '6-3-3' => '6 - 3 - 3', '5-4-3' => '5 - 4 - 3', '4-2-2-4' => '4 - 2 - 2 - 4' ), 'footer' );
	boldmanlite_customize_add_checkbox( $wp_customize, 'footer-widget-border', __( 'Show Border Between Widgetbox', 'boldman-lite' ), false, 'footer' );
	boldmanlite_customize_add_color( $wp_customize, 'footerwidget_heading_color', __( 'Footer Widget Title Color', 'boldman-lite' ), '#ffffff', 'footer' );
	boldmanlite_customize_add_color( $wp_customize, 'footerwidget_text_color', __( 'Footer Text Color', 'boldman-lite' ), '#ffffff', 'footer' );
	boldmanlite_customize_add_color( $wp_customize, 'footerwidget_link_regular', __( 'Footer Link Color', 'boldman-lite' ), '', 'footer' );
	boldmanlite_customize_add_color( $wp_customize, 'footerwidget_link_hover', __( 'Footer Link Hover Color', 'boldman-lite' ), '', 'footer' );
	$wp_customize->add_setting( 'footer_background_image', array( 'default' => 0, 'sanitize_callback' => 'absint' ) );
	$wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_background_image', array( 'label' => __( 'Footer Background Image', 'boldman-lite' ), 'section' => 'boldmanlite_footer', 'mime_type' => 'image' ) ) );
	boldmanlite_customize_add_select( $wp_customize, 'footer_background_repeat', __( 'Footer Background Repeat', 'boldman-lite' ), '', array( '' => 'Default', 'no-repeat' => 'No Repeat', 'repeat' => 'Repeat', 'repeat-x' => 'Repeat X', 'repeat-y' => 'Repeat Y' ), 'footer' );
	boldmanlite_customize_add_select( $wp_customize, 'footer_background_size', __( 'Footer Background Size', 'boldman-lite' ), '', array( '' => 'Default', 'cover' => 'Cover', 'contain' => 'Contain', 'auto' => 'Auto' ), 'footer' );
	boldmanlite_customize_add_select( $wp_customize, 'footer_background_attachment', __( 'Footer Background Attachment', 'boldman-lite' ), '', array( '' => 'Default', 'scroll' => 'Scroll', 'fixed' => 'Fixed' ), 'footer' );
	boldmanlite_customize_add_select( $wp_customize, 'footer_background_position', __( 'Footer Background Position', 'boldman-lite' ), '', array( '' => 'Default', 'center center' => 'Center Center', 'center top' => 'Center Top', 'center bottom' => 'Center Bottom', 'left center' => 'Left Center', 'right center' => 'Right Center' ), 'footer' );
	boldmanlite_customize_add_color( $wp_customize, 'footer_background_color', __( 'Footer Background Color', 'boldman-lite' ), '#182333', 'footer' );
	boldmanlite_customize_add_textarea( $wp_customize, 'copyright_text_left', __( 'Footer Text Left', 'boldman-lite' ), 'Copyright © 2026 All Right Reserved | Powered by Boldmanlite WordPress Theme', 'footer' );
	boldmanlite_customize_add_textarea( $wp_customize, 'copyright_text_right', __( 'Footer Text Right', 'boldman-lite' ), '', 'footer' );
	boldmanlite_customize_add_color( $wp_customize, 'footer_copyright_background', __( 'Footer Copyright Background', 'boldman-lite' ), '#182333', 'footer' );
	boldmanlite_customize_add_color( $wp_customize, 'footer_text_color', __( 'Footer Copyright Text Color', 'boldman-lite' ), '#ffffff', 'footer' );
	boldmanlite_customize_add_checkbox( $wp_customize, 'display-border-copyright', __( 'Display Border Above Copyright', 'boldman-lite' ), false, 'footer' );

	boldmanlite_customize_add_text( $wp_customize, '404_page_title', __( 'Page Title', 'boldman-lite' ), '404', 'not_found' );
	boldmanlite_customize_add_textarea( $wp_customize, '404_page_description', __( '404 Page Description', 'boldman-lite' ), 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'not_found' );
}
add_action( 'customize_register', 'boldmanlite_customize_register' );

function boldmanlite_customize_add_text( $wp_customize, $id, $label, $default, $section ) {
	$wp_customize->add_setting( $id, array( 'default' => $default, 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( $id, array( 'label' => $label, 'section' => 'boldmanlite_' . $section, 'type' => 'text' ) );
}

function boldmanlite_customize_add_textarea( $wp_customize, $id, $label, $default, $section ) {
	$wp_customize->add_setting( $id, array( 'default' => $default, 'sanitize_callback' => 'wp_kses_post' ) );
	$wp_customize->add_control( $id, array( 'label' => $label, 'section' => 'boldmanlite_' . $section, 'type' => 'textarea' ) );
}

function boldmanlite_customize_add_url( $wp_customize, $id, $label, $default, $section ) {
	$wp_customize->add_setting( $id, array( 'default' => $default, 'sanitize_callback' => 'esc_url_raw' ) );
	$wp_customize->add_control( $id, array( 'label' => $label, 'section' => 'boldmanlite_' . $section, 'type' => 'url' ) );
}

function boldmanlite_customize_add_number( $wp_customize, $id, $label, $default, $min, $max, $section ) {
	$wp_customize->add_setting( $id, array( 'default' => $default, 'sanitize_callback' => 'absint' ) );
	$wp_customize->add_control( $id, array( 'label' => $label, 'section' => 'boldmanlite_' . $section, 'type' => 'number', 'input_attrs' => array( 'min' => $min, 'max' => $max, 'step' => 1 ) ) );
}

function boldmanlite_customize_add_checkbox( $wp_customize, $id, $label, $default, $section ) {
	$wp_customize->add_setting( $id, array( 'default' => $default, 'sanitize_callback' => 'rest_sanitize_boolean' ) );
	$wp_customize->add_control( $id, array( 'label' => $label, 'section' => 'boldmanlite_' . $section, 'type' => 'checkbox' ) );
}

function boldmanlite_sanitize_optional_color( $value ) {
	if ( '' === trim( $value ) ) {
		return '';
	}
	return sanitize_hex_color( $value );
}

function boldmanlite_customize_add_color( $wp_customize, $id, $label, $default, $section ) {
	$wp_customize->add_setting( $id, array( 'default' => $default, 'sanitize_callback' => 'boldmanlite_sanitize_optional_color' ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $id, array( 'label' => $label, 'section' => 'boldmanlite_' . $section ) ) );
}

function boldmanlite_customize_add_select( $wp_customize, $id, $label, $default, $choices, $section ) {
	$wp_customize->add_setting( $id, array( 'default' => $default, 'sanitize_callback' => 'sanitize_text_field' ) );
	$wp_customize->add_control( $id, array( 'label' => $label, 'section' => 'boldmanlite_' . $section, 'type' => 'select', 'choices' => $choices ) );
}
