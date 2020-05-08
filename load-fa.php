<?php
/**
 * Plugin Name: FontAwesome5 Loader
 * Plugin URI: https://www.themeisle.com/
 * Description: This plugin loads the FontAwesome5 scripts and the compatibility with FontAwesome4
 * Version:     1.0
 * Author:      ThemeIsle
 * Author URI:  http://www.themeisle.com
 * License:     GPL-3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 *
 * @package FontAwesome5 Loader
 **/

if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'LOAD_FA_URL', plugin_dir_url( __FILE__ ) );
define( 'LOAD_FA_VERSION','1.0.0' );

/**
 * Enqueue FontAwesome styles.
 */
function enqueue_styles() {
	wp_enqueue_style( 'font-awesome-5-all', LOAD_FA_URL . 'assets/font-awesome/css/all.min.css', array(), LOAD_FA_VERSION );
	wp_enqueue_style( 'font-awesome-4-shim', LOAD_FA_URL . 'assets/font-awesome/css/v4-shims.min.css', array(), LOAD_FA_VERSION );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
