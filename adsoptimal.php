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
 * Description:       Earn top dollar for your mobile web traffic! Promote mobile offers on your WordPress site and get up to $15 RPM or $4 per download 
 * The highest payout you'll find on the web. You don't need a mobile app or an optimized mobile experience to leverage mobile. 
 * Start by serving relevant ads to your mobile users with our solution. There's no risk to try!
 * Version:           1.2.1
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
	if (get_option('adsoptimal_settings', '') != '') {
		$object = json_decode(rawurldecode(get_option('adsoptimal_settings', '{"code-textarea": ""}')), true);
		if ($object && array_key_exists('code-textarea', $object)) {
			echo $object['code-textarea'];
		}
	}
}
?>