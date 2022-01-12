<?php
/**
 * reynoldscenter functions and definitions
 *
 * @package reynoldscenter
 */

	if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

	define("CHILDTHEME_URL", get_stylesheet_directory_uri());
	define("CHILDTHEME_IMAGE_URL",CHILDTHEME_URL."/images/");
/**
 * Enqueue the Parent Theme scripts.
 *
 * Hooked to the wp_enqueue_scripts action.
 */
add_action('wp_enqueue_scripts', 'reynoldscenter_load_scripts');

function reynoldscenter_load_scripts() {
	wp_register_script('menu-effect', get_stylesheet_directory_uri() . '/js/menu-effect.js', array(), '1.0.0', false );
	wp_enqueue_script('menu-effect');
}

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

add_filter('the_content','add_my_content');
function add_my_content($content) {
$my_custom_text = '<p><br><br><font size=4em><font color=#186425><b>Want the best tips and story ideas from the Reynolds Center in your mailbox every month? Sign up for our monthly newsletter!</font></font></b></p>

<style>
.form-control {
  border-radius: 4px;
  padding-right: 10px;
  padding-left: 5px;
  padding-top: 5px;
  padding-bottom: 5px;
  margin-bottom: 10px;
  box-sizing: border-box;
  font-size: 1em;
border: 2px solid #186425;
color: #186425;
}

.form-submit {
    border-radius: 3px;
    padding-right: 15px;
    padding-left: 15px;
    padding-top: 5px;
    padding-bottom: 5px;
  font-size: 1em;
background-color: #186425;
  color: white;
  border: 2px solid #186425;
  cursor: pointer;
}


</style>

<form action="https://cl.s7.exct.net/DEManager.aspx" name="subscribeForm" method="post">
  <input type="hidden" name="_returnXML" value="0">
  <input type="hidden" name="_clientID" value="518000787">
  <input type="hidden" name="_deExternalKey" value="A4C03026-FB25-4EF3-8B7D-645E4886B71E">
  <input type="hidden" name="_action" value="add/update">
  <input type="hidden" name="_successURL" value="https://businessjournalism.org/signup/success/">
  <input type="hidden" name="_errorURL" value="https://businessjournalism.org/signup/oops/">
  <div class="form-group">
<input class="form-control" id="firstNameInput" name="First name" required="" placeholder="First Name">
<input class="form-control" id="lastNameInput" name="Last name" required="" placeholder="Last Name">    
<input class="form-control" id="emailInput" name="Email" maxlength="255" placeholder="Email Address">
  <button type="submit" class="form-submit btn btn-primary">Submit</button>
  </div>
  </form><br><br><br>
'; //
if(is_single() && !is_home()) {
$content .= $my_custom_text;
}
return $content;
}

