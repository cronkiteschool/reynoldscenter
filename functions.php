<?php
/**
 * reynolds-center functions and definitions
 *
 * @package reynolds-center
 */

/**
 * disable heartbeat on all but when editing pages or posts.
 * http://www.webhostinghub.com/help/learn/wordpress/heartbeat-admin-ajax-usage
 */
 
add_action( 'init', 'stop_heartbeat', 1 );

function stop_heartbeat() {
        global $pagenow;

        if ( $pagenow != 'post.php' && $pagenow != 'post-new.php' )
        wp_deregister_script('heartbeat');
}