<?php
/**
 * Plugin Name: SOFT Heading
 * Description: Custom styled sub-heading for title
 * Version: 1.0
 * Author: SOFTINTTECH
 * Author URI: https://goo.gl/AoFONs
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
 
//Plugin CSS File!
function soft_heading_style() 
{
    wp_register_style("soft_heading_style-file", plugin_dir_url(__FILE__) . "css/style.css");
   wp_enqueue_style("soft_heading_style-file");
}
add_action("wp_enqueue_scripts", "soft_heading_style");


// Function of Shortcode
function soft_heading( $soft, $text = null) {

    // Return custom embed code
	return '<div class="soft">
	<p><i class="fa fa-newspaper-o" aria-hidden="true" style="margin-left:-38px; padding-right: 10px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;'.$text.'</p>
	</div>';

}
add_shortcode( 'h', 'soft_heading' );

/* Activation Mail */
function soft_heading_activate() {
    $url = get_site_url();
  $message = "SOFT Heading Plugin installed on $url & Admin Email is $admin_email ";
  $message = wordwrap($message, 70, "\r\n");
  wp_mail('softinttech@gmail.com', 'SOFT Heading Plugin Activated', $message);
}
register_activation_hook( __FILE__, 'soft_heading_activate' );
?>
