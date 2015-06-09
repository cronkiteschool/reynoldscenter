<?php
	$logoFooter = get_option(THEME_NAME."_logo_footer");


	//copyright
	$copyRight = get_option(THEME_NAME."_copyright");

	// pop up banner
	$banner_type = get_option ( THEME_NAME."_banner_type" );
	
	$banner_fly_in = get_option ( THEME_NAME."_banner_fly_in" );
	$banner_fly_out = get_option ( THEME_NAME."_banner_fly_out" );
	$banner_start = get_option ( THEME_NAME."_banner_start" );
	$banner_close = get_option ( THEME_NAME."_banner_close" );
	$banner_overlay = get_option ( THEME_NAME."_banner_overlay" );
	$banner_views = get_option ( THEME_NAME."_banner_views" );
	$banner_timeout = get_option ( THEME_NAME."_banner_timeout" );
	
	$banner_text_image_img = get_option ( THEME_NAME."_banner_text_image_img" ) ;
	$banner_image = get_option ( THEME_NAME."_banner_image" );
	$banner_text = stripslashes ( get_option ( THEME_NAME."_banner_text" ) );
	
	if ( $banner_type == "image" ) {
	//Image Banner
		$cookie_name = substr ( md5 ( $banner_image ), 1,6 );
	} else if ( $banner_type == "text" ) { 
	//Text Banner
		$cookie_name = substr ( md5 ( $banner_text ), 1,6 );
	} else if ( $banner_type == "text_image" ) { 
	//Image And Text Banner
		$cookie_name = substr ( md5 ( $banner_text_image_img ), 1,6 );
	} else {
		$cookie_name = "popup";
	}

	if ( !$banner_start) {
		$banner_start = 0;
	}
	
	if ( !$banner_close) {
		$banner_close = 0;
	}
	
	if ( $banner_overlay == "on") {
		$banner_overlay = "true";
	} else {
		$banner_overlay = "false";
	}

	?>
			<!-- BEGIN .footer -->
			<footer class="footer">
				
				<!-- BEGIN .wrapper -->
				<div class="wrapper">

					<div class="footer-widgets">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer') ) : ?>
						<?php endif; ?>
					</div>
					
				<!-- END .wrapper -->
				</div>
				
				<div class="footer-copyright">
					<!-- BEGIN .wrapper -->
					<div class="wrapper">
						<p class="right"><a href="http://cronkite.asu.edu" target="_blank">The Walter Cronkite School of Journalism and Mass Communication</a></p>
						<p><?php echo stripslashes($copyRight);?></p>
					<!-- END .wrapper -->
					</div>
				</div>

			<!-- END .footer -->
			</footer>

			
		<!-- END .boxed -->
		</div>
		<div class="lightbox">
			<div class="lightcontent-loading">
				<a href="#" onclick="javascript:lightboxclose();" class="light-close"><i class="fa fa-minus-square"></i>&nbsp;&nbsp;<?php _e("Close Window", THEME_NAME);?></a>
				<div class="loading-box">
					<h3><?php _e("Loading, Please Wait!", THEME_NAME);?></h3>
					<span><?php _e("This may take a second or two.", THEME_NAME);?></span>
					<span class="loading-image"><img src="<?php echo THEME_IMAGE_URL;?>loading.gif" title="<?php _e("Loading", THEME_NAME);?>" alt="<?php _e("Loading", THEME_NAME);?>" /></span>
				</div>
			</div>
			<div class="lightcontent"></div>
		</div>
<?php
			//pop up banner
			if ( $banner_type != "off" ) {
		?>
		
		<script type="text/javascript">
		<!--
		
		jQuery(document).ready(function($){
			$('#popup_content').popup( {
				starttime 			 : <?php echo $banner_start; ?>,
				selfclose			 : <?php echo $banner_close; ?>,
				popup_div			 : 'popup',
				overlay_div	 		 : 'overlay',
				close_id			 : 'baner_close',
				overlay				 : <?php echo $banner_overlay; ?>,
				opacity_level		 : 0.7,
				overlay_cc			 : false,
				centered			 : true,
				top	 		   		 : 130,
				left	 			 : 130,
				setcookie 			 : true,
				cookie_name	 		 : '<?php echo $cookie_name;?>',
				cookie_timeout 	 	 : <?php echo $banner_timeout; ?>,
				cookie_views 		 : <?php echo $banner_views ; ?>,
				floating	 		 : true,
				floating_reaction	 : 700,
				floating_speed 		 : 12,
				<?php 
					if ( $banner_fly_in != "off") { 
						echo "fly_in : true,
						fly_from : '".$banner_fly_in."', "; 
					} else {
						echo "fly_in : false,";
					}
				?>
				<?php 
					if ( $banner_fly_out != "off") { 
						echo "fly_out : true,
						fly_to : '".$banner_fly_out."', "; 
					} else {
						echo "fly_out : false,";
					}
				?>
				popup_appear  		 : 'show',
				popup_appear_time 	 : 0,
				confirm_close	 	 : false,
				confirm_close_text 	 : 'Do you really want to close?'
			} );
		});
		-->
		</script>
		<?php } ?>

		<!-- Twitter Code for Reynolds Website -->
		<script src="//platform.twitter.com/oct.js" type="text/javascript"></script>
		<script type="text/javascript">
			twttr.conversion.trackPid('l5jw5');
		</script>
		<noscript>
			<img height="1" width="1" style="display:none;" alt="" src="https://analytics.twitter.com/i/adsct?txn_id=l5jw5&p_id=Twitter" />
			<img height="1" width="1" style="display:none;" alt="" src="//t.co/i/adsct?txn_id=l5jw5&p_id=Twitter" />
		</noscript>

		<!-- Facebook Conversion Code for From Facebook Ads to Reynolds Website -->
		<script>
			(function() {
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
		<noscript>
			<img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6024373290416&amp;cd[value]=0.00&amp;cd[currency]=USD&amp;noscript=1" />
		</noscript>

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

	<?php wp_footer(); ?>
	<!-- END body -->
	</body>
<!-- END html -->
</html>