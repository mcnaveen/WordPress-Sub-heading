<?php
/**
 * Plugin Name: SOFT Heading
 * Plugin URI: http://bit.ly/2cyJ8NT
 * Description: Custom styled sub-heading for title
 * Version: 1.1
 * Author: SOFTINTTECH
 * Author URI: https://goo.gl/AoFONs
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */
 

// Plugin CSS File
add_action('wp_head','sfth_css');
function sfth_css() {

$output="<style>
.soft {
display: block;
font-size: 19px;
line-height: 1;
color: white;
border-left: 40px solid #fe286c;
padding: 10px 20px 1px 0px;
margin: 20px 20px 20px 10px;
box-shadow: 3px 3px 5px #888888;
border-radius: 2px;
}
.soft small {
    font-size: 13px;
    color: #266289;
    line-height: 10px
}
.soft p {
    margin-bottom: 10px!important;
    margin-left: 5px!important;
}
</style>";

echo $output;

}


// Function of Shortcode Default Color
function soft_heading($atts, $content = null) {
 extract( shortcode_atts( array(
), $atts ) );
// Return custom embed code
return '<div class="soft" style="background: #1AB299;"><p><i class="fa fa-newspaper-o" aria-hidden="true" style="margin-left:-35px; padding-right: 10px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;'.$content.'</p></div>';
}
add_shortcode( 'h', 'soft_heading' );

/* Activation Mail */
function soft_heading_activate() {
  $url = get_site_url();
  $message = "SOFT Heading Plugin 1.1 installed on $url";
  $message = wordwrap($message, 70, "\r\n");
  wp_mail('softinttech@gmail.com', 'SOFT Heading Plugin Activated', $message);
}
register_activation_hook( __FILE__, 'soft_heading_activate' );
?>
