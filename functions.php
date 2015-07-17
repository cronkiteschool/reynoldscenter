<?php
/**
 * reynoldscenter functions and definitions
 *
 * @package reynoldscenter
 */

function reynoldscenter_fb_inline_script() {
?>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=105042694629";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<?php
}
add_action( 'wp_footer', 'reynoldscenter_inline_script' );

