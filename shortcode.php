<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://outgive.ca
 * @since             1.0.0
 * @package           Outgive_function
 *
 * @wordpress-plugin
 * Plugin Name:       Outgive_function
 * Plugin URI:        https://#
 * Description:       Shortcode Popup coding response layout
 * Version:           1.0.0
 * Author:            nielfernandez
 * Author URI:        https://outgive.ca
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       outgive_function
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
define( 'OUTGIVE_FUNCTION_VERSION', '1.0.0' );

// Shortcode: [wpextension_shortcode]
add_shortcode( 'popup_closing', 'si_popup_closing_shortcode' );
function si_popup_closing_shortcode() { 
 
 $html = '';

 $html = ' <div id="si_close_container"> ';
 $html = ' <div class="si_container"> ';
 $html = ' <div class="si_col-1"> ';
 $html = ' <h1>Thanks for Subscribing!</h1> ';
 $html = ' <p>Stay tuned for the next issue of SellerBites!</p> ';
 $html = ' <div> ';
 $html = ' <a href="">CLOSE WINDOW</a> ';
 $html = ' </div> ';
 $html = ' </div> ';
 $html = ' <div class="si_col-2"> ';

 $html = ' </div> ';
 $html = ' </div> ';
 $html = ' </div> '; 

 return( $html );

 }


/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-outgive_function-activator.php
 */
function activate_outgive_function() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-outgive_function-activator.php';
	Outgive_function_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-outgive_function-deactivator.php
 */
function deactivate_outgive_function() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-outgive_function-deactivator.php';
	Outgive_function_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_outgive_function' );
register_deactivation_hook( __FILE__, 'deactivate_outgive_function' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-outgive_function.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_outgive_function() {

	$plugin = new Outgive_function();
	$plugin->run();

}
run_outgive_function();
