<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           General_Assembly
 *
 * @wordpress-plugin
 * Plugin Name:       General Assembly
 * Plugin URI:        http://generalassemb.ly/
 * Description:       Let's build a plugin! 😸
 * Version:           1.0.0
 * Author:            Tracy Rotton
 * Author URI:        https://taupecat.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       general-assembly
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-general-assembly-activator.php
 */
function activate_general_assembly() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-general-assembly-activator.php';
	General_Assembly_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-general-assembly-deactivator.php
 */
function deactivate_general_assembly() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-general-assembly-deactivator.php';
	General_Assembly_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_general_assembly' );
register_deactivation_hook( __FILE__, 'deactivate_general_assembly' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-general-assembly.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_general_assembly() {

	$plugin = new General_Assembly();
	$plugin->run();

}
run_general_assembly();
