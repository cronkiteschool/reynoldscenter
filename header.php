<?php

	$favicon = get_option(THEME_NAME."_favicon");

?>

<!DOCTYPE html>

<!--[if IE 7]>

<html class="ie ie7" <?php language_attributes(); ?>>

<![endif]-->

<!--[if IE 8]>

<html class="ie ie8" <?php language_attributes(); ?>>

<![endif]-->

<!--[if !(IE 7) | !(IE 8)  ]><!-->



<!-- BEGIN html -->

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<!--<![endif]-->

	<!-- BEGIN head -->


<!-- Twitter Code for Reynolds Website -->
	<head>
<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
<script type="text/javascript">
twttr.conversion.trackPid('l5jw5');</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l5jw5&p_id=Twitter" />
<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l5jw5&p_id=Twitter" /></noscript>


<!-- Facebook Conversion Code for From Facebook Ads to Reynolds Website -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6024373290416', {'value':'0.00','currency':'USD'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6024373290416&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" /></noscript>





		<!-- Title -->

		<title>

			<?php

				if ( is_single() ) { single_post_title(); print ' | '; bloginfo('name'); }      

				elseif ( is_home() || is_front_page() ) { bloginfo('name'); if(get_bloginfo('description')) { print ' | '; bloginfo('description'); } }

				elseif ( is_page() ) { single_post_title(''); if(get_bloginfo('description')) { print ' | '; bloginfo('description'); } }

				elseif ( is_search() ) { bloginfo('name'); print ' | Search results ' . esc_html($s); }

				elseif ( is_404() ) { bloginfo('name'); print ' | Page not found'; }

				else { bloginfo('name'); print ' | '; wp_title(''); }

			?>

		</title>



		<!-- Meta Tags -->

		<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

		

		<!-- Favicon -->

		<?php 

			if($favicon) {

		?>

			<link rel="shortcut icon" href="<?php echo $favicon;?>" type="image/x-icon" />

		<?php } else { ?>

			<link rel="shortcut icon" href="<?php echo THEME_IMAGE_URL; ?>favicon.ico" type="image/x-icon" />

		<?php } ?>

		

		<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', THEME_NAME), esc_html( get_bloginfo('name'), 1 ) ); ?>" />

		<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', THEME_NAME), esc_html( get_bloginfo('name'), 1 ) ); ?>" />

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />



		<?php wp_head(); ?>	



	<!-- END head -->

	</head>

	

	<!-- BEGIN body -->
    
    <!-- Google Code for Remarketing Tag -->
<!--------------------------------------------------
Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
--------------------------------------------------->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 961762318;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/961762318/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
    

	<body <?php body_class();?>>

		<?php get_template_part(THEME_INCLUDES."banners");?>

			<?php get_template_part(THEME_INCLUDES."top"); ?>