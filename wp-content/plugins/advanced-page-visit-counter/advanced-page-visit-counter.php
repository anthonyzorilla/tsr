<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://pagevisitcounter.com
 * @since             2.6.3
 * @package           Advanced_Visit_Counter
 *
 * @wordpress-plugin
 * Plugin Name:       Advanced Page Visit Counter
 * Plugin URI:        https://pagevisitcounter.com
 * Description:       This plugin will count the total visits of your website or ecommerce store.

 * Version:           2.6.3
 * Author:            Ankit Panchal
 * Author URI:        https://iamankitp.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       advanced-visit-counter
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

error_reporting(0);
/**
 * Currently plugin version.
 * Start at version 2.6.3 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ADVANCED_PAGE_VISIT_COUNTER', '2.6.3' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-advanced-page-visit-counter-activator.php
 */
function activate_advanced_visit_counter() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-advanced-page-visit-counter-activator.php';
	Advanced_Visit_Counter_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-advanced-page-visit-counter-deactivator.php
 */
function deactivate_advanced_visit_counter() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-advanced-page-visit-counter-deactivator.php';
	Advanced_Visit_Counter_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_advanced_visit_counter' );
register_deactivation_hook( __FILE__, 'deactivate_advanced_visit_counter' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-advanced-page-visit-counter.php';

require plugin_dir_path( __FILE__ ) . 'admin/partials/file-advanced-page-visit-counter-metaboxes.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    2.6.3
 */
function run_advanced_visit_counter() {

	$plugin = new Advanced_Visit_Counter();
	$plugin->run();

}
run_advanced_visit_counter();
