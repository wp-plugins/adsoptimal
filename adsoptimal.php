<?php
/**
 * The WordPress Plugin Boilerplate.
 *
 * A foundation off of which to build well-documented WordPress plugins that
 * also follow WordPress Coding Standards and PHP best practices.
 *
 * @package   AdsOptimal
 * @author    team@adsoptimal.com
 * @license   GPL-2.0+
 * @link      http://www.adsoptimal.com
 * @copyright 2014 AdsOptimal (Under Social Nation Inc)
 *
 * @wordpress-plugin
 * Plugin Name:       AdsOptimal - Mobile Ad
 * Plugin URI:        http://www.adsoptimal.com
 * Description:       EARN TOP DOLLAR FOR YOUR MOBILE WEB TRAFFIC! Promote mobile apps on your website and get $3 per download, The highest payout you'll find on the web. You don't need a mobile app or an optimized mobile experience to leverage mobile. Start by serving relevant ads to your mobile users with our solution. There's no risk to try!
 * Version:           1.1.1
 * Author:            team@adsoptimal.com
 * Author URI:        http://www.adsoptimal.com/company
 * Text Domain:       adsoptimal-locale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/AdsOptimal/adsoptimal-wordpress-plugin
 * WordPress-Plugin-Boilerplate: v2.6.1
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-adsoptimal.php` with the name of the plugin's class file
 *
 */
require_once( plugin_dir_path( __FILE__ ) . 'public/class-adsoptimal.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 * @TODO:
 *
 * - replace Plugin_Name with the name of the class defined in
 *   `class-adsoptimal.php`
 */
register_activation_hook( __FILE__, array( 'AdsOptimal', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'AdsOptimal', 'deactivate' ) );

/*
 * @TODO:
 *
 * - replace Plugin_Name with the name of the class defined in
 *   `class-adsoptimal.php`
 */
add_action( 'plugins_loaded', array( 'AdsOptimal', 'get_instance' ) );
add_action('wp_head', 'adsoptimal_script_head');

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-adsoptimal-admin.php` with the name of the plugin's admin file
 * - replace Plugin_Name_Admin with the name of the class defined in
 *   `class-adsoptimal-admin.php`
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-adsoptimal-admin.php' );
	add_action( 'plugins_loaded', array( 'AdsOptimal_Admin', 'get_instance' ) );

}

function adsoptimal_script_head() {
	if (get_option('adsoptimal_access_token', '') != '') {
	?>
<script type='text/javascript'>
(function(w) {
w.MobileMonetizer={ID:'<?php echo get_option('adsoptimal_publisher_id', '') ?>',type:'<?php echo get_option('adsoptimal_ad_format', '') ?>',category:'0',display:'<?php echo get_option('adsoptimal_ad_timing', '') ?>',delay:<?php echo intval(get_option('adsoptimal_ad_delay', '10')) * 1000 ?>,scrollFraction:<?php echo intval(get_option('adsoptimal_ad_scroll', '60')) / 100.0 ?>,label:'<?php echo get_option('adsoptimal_ad_label', 'YES') ?>',close:'<?php echo get_option('adsoptimal_ad_label', 'YES') ?>'};
if(navigator.userAgent.match(/iPhone|iPod|iPad|Android/i)==null)return;
var d=document,h=d.getElementsByTagName('head')[0],s=d.createElement('style'),j=d.createElement('script');
s.setAttribute('rel','mw-page-block');s.innerHTML='body * {display:none}';
j.setAttribute('src','//www.adsoptimal.com/advertisement/dispatcher.js');j.onerror=function(){h.removeChild(s);
h.removeChild(j);};h.appendChild(s);h.appendChild(j);
})(window);
</script>
	<?php
	}
}
?>