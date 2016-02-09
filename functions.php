<?php
/**
 * reynoldscenter functions and definitions
 *
 * @package reynoldscenter
 */

	if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

	define("CHILDTHEME_URL", get_stylesheet_directory_uri());
	define("CHILDTHEME_IMAGE_URL",CHILDTHEME_URL."/images/");
	/* -------------------------------------------------------------------------*
	 * 						SET DEFAULT VALUES BY THEME INSTALL					*
	 * -------------------------------------------------------------------------*/

	// with activate install options
	add_action('after_switch_theme', 'childtheme_setup_options');
	function childtheme_setup_options () {
		$theme_logo = CHILDTHEME_IMAGE_URL."reynolds_logo.png";

		$favicon = CHILDTHEME_IMAGE_URL."favicon.png";
		$copyright = '&copy; '.date("Y").' Copyright <b> Donald W. Reynolds National Center for Business Journalism</b>. All Rights reserved.';
		$banner = '';

		update_option(THEME_NAME.'_about_author', 'hide');
		update_option(THEME_NAME.'_blog_banner', 'off');
		update_option(THEME_NAME.'_blog_banner_code', $banner);
		update_option(THEME_NAME.'_body_bg_type', 'pattern');
		update_option(THEME_NAME.'_body_pattern', 'texture-6');
		update_option(THEME_NAME.'_color_1', '006738');
		update_option(THEME_NAME.'_copyright', $copyright);
		update_option(THEME_NAME.'_default_cat_color', '006738');
		update_option(THEME_NAME."_favicon", $favicon);
		update_option(THEME_NAME.'_font_size_1', '14');
		update_option(THEME_NAME.'_google_font_1', 'Open Sans');
		update_option(THEME_NAME.'_google_font_2', 'Montserrat');
		update_option(THEME_NAME.'_google_font_3', 'PT Sans Narrow');
		update_option(THEME_NAME."_logo", $theme_logo);
		update_option(THEME_NAME.'_menu_style', 'off');
		update_option(THEME_NAME.'_page_layout', 'boxed');
		update_option(THEME_NAME.'_portfolio_items', "6");
		update_option(THEME_NAME.'_post_author_single', 'show');
		update_option(THEME_NAME.'_post_banner', 'off');
		update_option(THEME_NAME.'_post_banner_code', $banner);
		update_option(THEME_NAME.'_post_category_single', 'hide');
		update_option(THEME_NAME.'_post_comments_single', 'custom');
		update_option(THEME_NAME.'_post_date_single', 'show');
		update_option(THEME_NAME.'_post_style', "hide");
		update_option(THEME_NAME.'_responsive', 'on');
		update_option(THEME_NAME."_rss_url", get_bloginfo("rss_url"));
		update_option(THEME_NAME.'_search', 'on');
		update_option(THEME_NAME.'_share_all', 'hide');
		update_option(THEME_NAME.'_show_first_thumb', "on");
		update_option(THEME_NAME.'_show_single_thumb', "hide");
		update_option(THEME_NAME.'_sidebar_position', "right");
		update_option(THEME_NAME.'_sidebar_position_2', "custom");
		update_option(THEME_NAME.'_similar_posts', "hide");
		update_option(THEME_NAME.'_similar_posts_gallery', 'hide');
		update_option(THEME_NAME.'_similar_posts_portfolio', 'hide');
		update_option(THEME_NAME.'_singlePostBlogTitle', 'off');
		update_option(THEME_NAME.'_spotlight_color', '276197');
		update_option(THEME_NAME.'_sticky_sidebar', "off");

}

