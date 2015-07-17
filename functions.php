<?php
/**
 * reynoldscenter functions and definitions
 *
 * @package reynoldscenter
 */

function reynoldscenter_fb_inline_script() {
?>
<div id="fb-root"></div>
<script type="text/javascript">
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<script type="text/javascript">
	!function(d,s,id){
		var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
		if(!d.getElementById(id)){
			js=d.createElement(s);
			js.id=id;
			js.src=p+'://platform.twitter.com/widgets.js';
			fjs.parentNode.insertBefore(js,fjs);
		}
	}(document, 'script', 'twitter-wjs');
</script>

<?php
}
add_action( 'wp_footer', 'reynoldscenter_fb_inline_script' );

function reynoldscenter_enqueue_scripts() {
	wp_register_script('linkedin-follow', '//platform.linkedin.com/in.js', array(), null, true);
	wp_enqueue_script('linkedin-follow');
}
add_action( 'wp_enqueue_scripts', 'reynoldscenter_enqueue_scripts' );
