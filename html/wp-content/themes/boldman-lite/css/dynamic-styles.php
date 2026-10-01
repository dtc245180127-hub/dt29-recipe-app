<?php 

$boldmanlite_options = boldmanlite_get_theme_options();

$skincolor          = isset( $boldmanlite_options['primary_color'] ) ? $boldmanlite_options['primary_color'] : '#fda12b';
$secondarycolor        = isset( $boldmanlite_options['secondary_color'] ) ? $boldmanlite_options['secondary_color'] : '#182333';

$secondarygreycolor        = isset( $boldmanlite_options['tertiary_color'] ) ? $boldmanlite_options['tertiary_color'] : '#f8f9fa';

?>
:root {
  --prt-skincolor:<?php echo esc_attr($skincolor); ?>;
  --prt-greycolor:<?php echo esc_attr($secondarygreycolor); ?>;
  --prt-darkcolor:<?php echo esc_attr($secondarycolor); ?>;
}

<?php
	
if (isset($boldmanlite_options['body_typography'])) {
if ($boldmanlite_options['body_typography']) { ?>
body{
<?php if (!empty($boldmanlite_options['body_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($boldmanlite_options['body_typography']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['body_typography']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($boldmanlite_options['body_typography']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['body_typography']['font-size'])): ?>
	font-size: <?php echo esc_attr($boldmanlite_options['body_typography']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['body_typography']['line-height'])): ?>
	line-height: <?php echo esc_attr($boldmanlite_options['body_typography']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['body_typography']['color'])): ?>
	color: <?php echo esc_attr($boldmanlite_options['body_typography']['color']) ?>;
<?php endif; ?>
}
<?php  } } ?>
<?php if (isset($boldmanlite_options['h1_typography'])) {
if ($boldmanlite_options['h1_typography']) { ?>
h1{
<?php if (!empty($boldmanlite_options['h1_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($boldmanlite_options['h1_typography']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h1_typography']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($boldmanlite_options['h1_typography']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h1_typography']['font-size'])): ?>
	font-size: <?php echo esc_attr($boldmanlite_options['h1_typography']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h1_typography']['line-height'])): ?>
	line-height: <?php echo esc_attr($boldmanlite_options['h1_typography']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h1_typography']['color'])): ?>
	color: <?php echo esc_attr($boldmanlite_options['h1_typography']['color']) ?>;
<?php endif; ?>
}
<?php  } } ?>
<?php if (isset($boldmanlite_options['h2_typography'])) {
if ($boldmanlite_options['h2_typography']) { ?>
h2{
<?php if (!empty($boldmanlite_options['h2_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($boldmanlite_options['h2_typography']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h2_typography']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($boldmanlite_options['h2_typography']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h2_typography']['font-size'])): ?>
	font-size: <?php echo esc_attr($boldmanlite_options['h2_typography']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h2_typography']['line-height'])): ?>
	line-height: <?php echo esc_attr($boldmanlite_options['h2_typography']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h2_typography']['color'])): ?>
	color: <?php echo esc_attr($boldmanlite_options['h2_typography']['color']) ?>;
<?php endif; ?>
}
<?php  } } ?>
<?php if (isset($boldmanlite_options['h3_typography'])) {
if ($boldmanlite_options['h3_typography']) { ?>
h3{
<?php if (!empty($boldmanlite_options['h3_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($boldmanlite_options['h3_typography']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h3_typography']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($boldmanlite_options['h3_typography']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h3_typography']['font-size'])): ?>
	font-size: <?php echo esc_attr($boldmanlite_options['h3_typography']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h3_typography']['line-height'])): ?>
	line-height: <?php echo esc_attr($boldmanlite_options['h3_typography']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h3_typography']['color'])): ?>
	color: <?php echo esc_attr($boldmanlite_options['h3_typography']['color']) ?>;
<?php endif; ?>
}
<?php  } } ?>
<?php if (isset($boldmanlite_options['h4_typography'])) {
if ($boldmanlite_options['h4_typography']) { ?>
h4{
<?php if (!empty($boldmanlite_options['h4_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($boldmanlite_options['h4_typography']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h4_typography']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($boldmanlite_options['h4_typography']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h4_typography']['font-size'])): ?>
	font-size: <?php echo esc_attr($boldmanlite_options['h4_typography']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h4_typography']['line-height'])): ?>
	line-height: <?php echo esc_attr($boldmanlite_options['h4_typography']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h4_typography']['color'])): ?>
	color: <?php echo esc_attr($boldmanlite_options['h4_typography']['color']) ?>;
<?php endif; ?>
}
<?php  } } ?>
<?php if (isset($boldmanlite_options['h5_typography'])) {
if ($boldmanlite_options['h5_typography']) { ?>
h5{
<?php if (!empty($boldmanlite_options['h5_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($boldmanlite_options['h5_typography']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h5_typography']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($boldmanlite_options['h5_typography']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h5_typography']['font-size'])): ?>
	font-size: <?php echo esc_attr($boldmanlite_options['h5_typography']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h5_typography']['line-height'])): ?>
	line-height: <?php echo esc_attr($boldmanlite_options['h5_typography']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h5_typography']['color'])): ?>
	color: <?php echo esc_attr($boldmanlite_options['h5_typography']['color']) ?>;
<?php endif; ?>
}
<?php  } } ?>
<?php if (isset($boldmanlite_options['h6_typography'])) {
if ($boldmanlite_options['h6_typography']) { ?>
h6{
<?php if (!empty($boldmanlite_options['h6_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($boldmanlite_options['h6_typography']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h6_typography']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($boldmanlite_options['h6_typography']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h6_typography']['font-size'])): ?>
	font-size: <?php echo esc_attr($boldmanlite_options['h6_typography']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h6_typography']['line-height'])): ?>
	line-height: <?php echo esc_attr($boldmanlite_options['h6_typography']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['h6_typography']['color'])): ?>
	color: <?php echo esc_attr($boldmanlite_options['h6_typography']['color']) ?>;
<?php endif; ?>
}
<?php  } } ?>
<?php if (isset($boldmanlite_options['mainmenu_typography'])) {
if ($boldmanlite_options['mainmenu_typography']) { ?>
.site-header .main-navigation div>ul>li>a{
<?php if (!empty($boldmanlite_options['mainmenu_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($boldmanlite_options['mainmenu_typography']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['mainmenu_typography']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($boldmanlite_options['mainmenu_typography']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['mainmenu_typography']['font-size'])): ?>
	font-size: <?php echo esc_attr($boldmanlite_options['mainmenu_typography']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['mainmenu_typography']['line-height'])): ?>
	line-height: <?php echo esc_attr($boldmanlite_options['mainmenu_typography']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['mainmenu_typography']['color'])): ?>
	color: <?php echo esc_attr($boldmanlite_options['mainmenu_typography']['color']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['mainmenu_typography']['letter-spacing'])): ?>
	letter-spacing: <?php echo esc_attr($boldmanlite_options['mainmenu_typography']['letter-spacing']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['mainmenu_typography']['text-transform'])): ?>
	text-transform: <?php echo esc_attr($boldmanlite_options['mainmenu_typography']['text-transform']) ?>;
<?php endif; ?>
}
<?php  } } ?>

#bottom-footer-text {
	<?php if (isset($boldmanlite_options['footer_copyright_background']) && $boldmanlite_options['footer_copyright_background']) : ?>
		background-color: <?php echo esc_attr($boldmanlite_options['footer_copyright_background']); ?>;
	<?php else : ?>
		background-color: #121212;
	<?php endif; ?>
}
.bottom-footer-text .footer-right, .bottom-footer-text .footer-left {
	<?php if (isset($boldmanlite_options['footer_text_color']) && $boldmanlite_options['footer_text_color']) : ?>
		color: <?php echo esc_attr($boldmanlite_options['footer_text_color']); ?>;
	<?php else : ?>
		color: #fff;
	<?php endif; ?>
}
.site-footer .widget.widget_nav_menu a:not(:hover),
.boldman-lite-footer-widgets-wrapper .widget {
	<?php if (isset($boldmanlite_options['footerwidget_text_color']) && $boldmanlite_options['footerwidget_text_color']) : ?>
		color: <?php echo esc_attr($boldmanlite_options['footerwidget_text_color']); ?>;
	<?php else : ?>
		color: #fff;
	<?php endif; ?>
}
.site-footer .widget .widget-title {
	<?php if (isset($boldmanlite_options['footerwidget_heading_color']) && $boldmanlite_options['footerwidget_heading_color']) : ?>
		color: <?php echo esc_attr($boldmanlite_options['footerwidget_heading_color']); ?>;
	<?php else : ?>
		color: #fff;
	<?php endif; ?>
}
.col-sm-12.prt-footer2-left, .col-sm-12.prt-footer2-right {
	<?php if (isset($boldmanlite_options['footer_text_color']) && $boldmanlite_options['footer_text_color']) : ?>
		color: <?php echo esc_attr($boldmanlite_options['footer_text_color']); ?>;
	<?php else : ?>
		color: #fff;
	<?php endif; ?>
}
.boldman-lite-page-title {
	<?php if (!empty($boldmanlite_options['page_title_banner_image']['background-color'])): ?>
		background-color: <?php echo esc_attr($boldmanlite_options['page_title_banner_image']['background-color']) ?>;
	<?php endif; ?>
	<?php if (!empty($boldmanlite_options['page_title_banner_image']['background-image'])): ?>
		background-image: url("<?php echo esc_attr($boldmanlite_options['page_title_banner_image']['background-image']) ?>");
	<?php endif; ?>
	<?php if (!empty($boldmanlite_options['page_title_banner_image']['background-size'])): ?>
		background-size: <?php echo esc_attr($boldmanlite_options['page_title_banner_image']['background-size']) ?>;
	<?php endif; ?>
	<?php if (!empty($boldmanlite_options['page_title_banner_image']['background-repeat'])): ?>
		background-repeat: <?php echo esc_attr($boldmanlite_options['page_title_banner_image']['background-repeat']) ?>;
	<?php endif; ?>
	<?php if (!empty($boldmanlite_options['page_title_banner_image']['background-position'])): ?>
		background-position: <?php echo esc_attr($boldmanlite_options['page_title_banner_image']['background-position']) ?>;
	<?php endif; ?>
	<?php if (!empty($boldmanlite_options['page_title_banner_image']['background-attachment'])): ?>
		background-attachment: <?php echo esc_attr($boldmanlite_options['page_title_banner_image']['background-attachment']) ?>;
	<?php endif; ?>
}

.boldman-lite-page-title {
<?php if (isset($boldmanlite_options['page_title_height']) && $boldmanlite_options['page_title_height']) : ?>
		height: <?php echo esc_attr($boldmanlite_options['page_title_height']); ?>px;
	<?php else : ?>
		height:250px;
	<?php endif; ?>
}
.boldman-lite-page-title .page-title{
	<?php if (isset($boldmanlite_options['page_titlebar_text_color']) && $boldmanlite_options['page_titlebar_text_color']) : ?>
		color: <?php echo esc_attr($boldmanlite_options['page_titlebar_text_color']); ?>;
	<?php else : ?>
		color: #fff;
	<?php endif; ?>
}

.site-header .sticky-site-logo, .site-header .site-logo,.header-right-side,.site-header .site-branding-text {
<?php if (isset($boldmanlite_options['height_height']) && $boldmanlite_options['height_height']) : ?>
		height: <?php echo esc_attr($boldmanlite_options['height_height']); ?>px;
	line-height: <?php echo esc_attr($boldmanlite_options['height_height']); ?>px;
	<?php else : ?>
		height:90px;
		line-height:90px;
	<?php endif; ?>
}
.site-header .main-navigation div>ul>li>a {
<?php if (isset($boldmanlite_options['height_height']) && $boldmanlite_options['height_height']) : ?>
		line-height: <?php echo esc_attr($boldmanlite_options['height_height']); ?>px;
	<?php else : ?>
		line-height:90px;
	<?php endif; ?>
}
.site-header {
	<?php if (isset($boldmanlite_options['height_background']) && $boldmanlite_options['height_background']) : ?>
		background-color: <?php echo esc_attr($boldmanlite_options['height_background']); ?>;
	<?php else : ?>
		background-color: #fff;
	<?php endif; ?>
}

	.site-footer a, .bottom-footer-text a {
<?php if (isset($boldmanlite_options['footerwidget_link_color']['regular']) && $boldmanlite_options['footerwidget_link_color']['regular']) : ?>
		color: <?php echo esc_attr($boldmanlite_options['footerwidget_link_color']['regular']); ?>;
	<?php else : ?>
		color: #fff;
<?php endif; ?>
	}
	
.site-footer a:hover, .bottom-footer-text a:hover {
<?php if (isset($boldmanlite_options['footerwidget_link_color']['hover']) && $boldmanlite_options['footerwidget_link_color']['hover']) : ?>
		color: <?php echo esc_attr($boldmanlite_options['footerwidget_link_color']['hover']); ?>;
	<?php else : ?>
		color: #fda12b;
<?php endif; ?>
}

.site-header .site-logo img {
<?php
 if (isset($boldmanlite_options['site-logo-height']['height']) && $boldmanlite_options['site-logo-height']['height']) : ?>
		height: <?php echo esc_attr($boldmanlite_options['site-logo-height']['height']); ?>;
	<?php else : ?>
		height:40px;
<?php endif; ?>
}
<?php if ( ! empty( $boldmanlite_options ) ) { ?>
.sidebar .widget h2, .sidebar .wp-block-search__label,	
a,h1,h2,h3,h4,h5,h6{
	<?php if (isset($boldmanlite_options['h1_typography']['color']) && $boldmanlite_options['h1_typography']['color']) : ?>
		color: <?php echo esc_attr($boldmanlite_options['h1_typography']['color']); ?>;
	<?php else : ?>
		color: #182333;
	<?php endif; ?>
	    font-family: "Poppins", Sans-serif;
}
.sidebar .widget h2, .sidebar .wp-block-search__label,h1,h2,h3,h4,h5,h6{
	font-weight:500;
}
.page .entry-content {
	margin-bottom:45px;
}
.boldman-lite-page-title  {
    background-color:#182333;
}
<?php } ?>

<?php if (isset($boldmanlite_options['center_logo_width']) && $boldmanlite_options['center_logo_width']) : ?>
@media (min-width: 1200px) {
.header-layout-2 .site-header .headerlogo,
.header-layout-2 .site-header .site-logo a {
    width: <?php echo esc_attr($boldmanlite_options['center_logo_width']); ?>px;
}
}
<?php endif; ?>

<?php if (isset($boldmanlite_options['first_menu_margin']) && $boldmanlite_options['first_menu_margin']) : ?>
.header-layout-2 .site-header .main-navigation div>ul>li.logo-after-this {
    margin-right: <?php echo esc_attr($boldmanlite_options['first_menu_margin']); ?>px;
}
<?php endif; ?>

<?php if (isset($boldmanlite_options['active_menu_color']) && $boldmanlite_options['active_menu_color']) : ?>
.site-header .main-navigation div > ul ul li.current-menu-item > a, .boldman-lite-copyright .social-icons li a:hover, .site-header .main-navigation div > ul > li.current-menu-parent > a, .site-header .main-navigation div > ul > li > a:hover, .site-header .main-navigation div > ul > li.current-menu-item > a, .site-header .main-navigation div > ul ul li.current_page_item > a, .site-header .main-navigation div > ul ul li a:hover, .skincolor {
	color: <?php echo esc_attr($boldmanlite_options['active_menu_color']); ?>;
}
<?php endif; ?>

<?php if (isset($boldmanlite_options['widget_title_typography'])) {
if ($boldmanlite_options['widget_title_typography']) { ?>
.site-footer .widget .widget-title,
.sidebar .widget h2, .sidebar .wp-block-search__label{
<?php if (!empty($boldmanlite_options['widget_title_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($boldmanlite_options['widget_title_typography']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['widget_title_typography']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($boldmanlite_options['widget_title_typography']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['widget_title_typography']['font-size'])): ?>
	font-size: <?php echo esc_attr($boldmanlite_options['widget_title_typography']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['widget_title_typography']['line-height'])): ?>
	line-height: <?php echo esc_attr($boldmanlite_options['widget_title_typography']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['widget_title_typography']['letter-spacing'])): ?>
	letter-spacing: <?php echo esc_attr($boldmanlite_options['widget_title_typography']['letter-spacing']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['widget_title_typography']['text-transform'])): ?>
	text-transform: <?php echo esc_attr($boldmanlite_options['widget_title_typography']['text-transform']) ?>;
<?php endif; ?>
}
<?php  } } ?>


<?php if (isset($boldmanlite_options['button_typography'])) {
if ($boldmanlite_options['button_typography']) { ?>
.elementor-button-wrapper .elementor-button,
.elementor-button span,
.boldman-lite-header-button{
<?php if (!empty($boldmanlite_options['button_typography']['font-family'])): ?>
	font-family: <?php echo esc_attr($boldmanlite_options['button_typography']['font-family']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['button_typography']['font-weight'])): ?>
	font-weight: <?php echo esc_attr($boldmanlite_options['button_typography']['font-weight']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['button_typography']['font-size'])): ?>
	font-size: <?php echo esc_attr($boldmanlite_options['button_typography']['font-size']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['button_typography']['line-height'])): ?>
	line-height: <?php echo esc_attr($boldmanlite_options['button_typography']['line-height']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['button_typography']['letter-spacing'])): ?>
	letter-spacing: <?php echo esc_attr($boldmanlite_options['button_typography']['letter-spacing']) ?>;
<?php endif; ?>
<?php if (!empty($boldmanlite_options['button_typography']['text-transform'])): ?>
	text-transform: <?php echo esc_attr($boldmanlite_options['button_typography']['text-transform']) ?>;
<?php endif; ?>
}
<?php  } } ?>


<?php
 if (isset($boldmanlite_options['button_topbottom_padding']['height'])) {?>
	.elementor-button.elementor-size-md {
		padding-top: <?php echo esc_attr($boldmanlite_options['button_topbottom_padding']['height']); ?>;
		padding-bottom: <?php echo esc_attr($boldmanlite_options['button_topbottom_padding']['height']); ?>;
		
	}
<?php } ?>



<?php if (!empty($boldmanlite_options['footer_background']['background-image'])) { ?>
.site-footer {
	<?php if (!empty($boldmanlite_options['footer_background']['background-color'])): ?>
		background-color: <?php echo esc_attr($boldmanlite_options['footer_background']['background-color']) ?>;
	<?php endif; ?>
	<?php if (!empty($boldmanlite_options['footer_background']['background-image'])): ?>
		background-image: url("<?php echo esc_attr($boldmanlite_options['footer_background']['background-image']) ?>");
	<?php endif; ?>
	<?php if (!empty($boldmanlite_options['footer_background']['background-size'])): ?>
		background-size: <?php echo esc_attr($boldmanlite_options['footer_background']['background-size']) ?>;
	<?php endif; ?>
	<?php if (!empty($boldmanlite_options['footer_background']['background-repeat'])): ?>
		background-repeat: <?php echo esc_attr($boldmanlite_options['footer_background']['background-repeat']) ?>;
	<?php endif; ?>
	<?php if (!empty($boldmanlite_options['footer_background']['background-position'])): ?>
		background-position: <?php echo esc_attr($boldmanlite_options['footer_background']['background-position']) ?>;
	<?php endif; ?>
	<?php if (!empty($boldmanlite_options['footer_background']['background-attachment'])): ?>
		background-attachment: <?php echo esc_attr($boldmanlite_options['footer_background']['background-attachment']) ?>;
	<?php endif; ?>
}
	<?php } ?>
	
	
<?php if (!empty($boldmanlite_options['footer_background_color'])) { ?>
.site-footer .footer-bg-layer {
	<?php if (!empty($boldmanlite_options['footer_background_color'])): ?>
		background-color: <?php echo esc_attr($boldmanlite_options['footer_background_color']) ?>;
	<?php endif; ?>
	}	
<?php } ?>

<?php if (isset($boldmanlite_options['tm-btn-radius'])) { ?>
.boldman-lite-blog-classic .prt-blogbox-footer a,
button, input[type="submit"], input[type="button"], input[type="reset"],
.site-main nav.woocommerce-pagination ul li span,
.site-main nav.woocommerce-pagination ul li a,
.post-pagination .page-numbers,
.sidebar .widget .tagcloud a,
.site-header .boldman-lite-header-button a,
.elementor-button.elementor-size-md {
	border-radius: <?php echo esc_attr($boldmanlite_options['tm-btn-radius']); ?>px;
}
<?php } ?>