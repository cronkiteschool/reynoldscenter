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
	<head>

		<!-- Title -->

		<title>
			<?php wp_title(''); ?>
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

    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-JMXBB1RRKZ"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-JMXBB1RRKZ');
        </script>

		<?php wp_head(); ?>	

		<!-- Hotjar Tracking Code for http://businessjournalism.org/ -->
		<script>
			(function(h,o,t,j,a,r){
				h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
				h._hjSettings={hjid:162994,hjsv:5};
				a=o.getElementsByTagName('head')[0];
				r=o.createElement('script');r.async=1;
				r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
				a.appendChild(r);
			})(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
		</script>

	<!-- END head -->

	</head>
	

	<!-- BEGIN body -->
    

	<body <?php body_class();?>>

		<?php get_template_part(THEME_INCLUDES."banners");?>

			<?php get_template_part(THEME_INCLUDES."top"); ?>