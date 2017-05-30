<?php
/**
 * Plugin Name: Talk in Arabic Custom BB Modules
 * Plugin URI: http://www.briancoords.com
 * Description: Contains custom builder modules for TIA.
 * Version: 1.0
 * Author: Brian Coords
 * Author URI: http://www.briancoords.com
 */
define( 'TIA_FL_MODULE_EXAMPLES_DIR', plugin_dir_path( __FILE__ ) );
define( 'TIA_FL_MODULE_EXAMPLES_URL', plugins_url( '/', __FILE__ ) );

/**
 * Custom modules
 */
function tia_fl_load_module_examples() {
	if ( class_exists( 'FLBuilder' ) ) {
	    require_once 'audio-module/audio-module.php';
//	    require_once 'example/example.php';
	}
}
add_action( 'init', 'tia_fl_load_module_examples' );