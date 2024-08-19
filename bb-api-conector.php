<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://about.me/juanfelipemorales
 * @since             1.0.0
 * @package           Bb_Api_Conector
 *
 * @wordpress-plugin
 * Plugin Name:       BB Api Conector
 * Plugin URI:        https://rkdgroup.com
 * Description:        A Blackbaud API connection to add emails to a survey
 * Version:           1.0.0
 * Author:            Juan Felipe Morales
 * Author URI:        https://about.me/juanfelipemorales/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bb-api-conector
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BB_API_CONECTOR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-bb-api-conector-activator.php
 */
function activate_bb_api_conector() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bb-api-conector-activator.php';
	Bb_Api_Conector_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-bb-api-conector-deactivator.php
 */
function deactivate_bb_api_conector() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bb-api-conector-deactivator.php';
	Bb_Api_Conector_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_bb_api_conector' );
register_deactivation_hook( __FILE__, 'deactivate_bb_api_conector' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-bb-api-conector.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_bb_api_conector() {

	$plugin = new Bb_Api_Conector();
	$plugin->run();

}
run_bb_api_conector();
