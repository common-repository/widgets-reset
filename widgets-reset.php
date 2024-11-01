<?php
/*
Plugin Name: Widgets Reset
Plugin URI: http://justintadlock.com/archives/2009/03/03/widgets-reset-wordpress-plugin
Description: Allows you to reset all of your widgets.
Version: 0.1
Author: Justin Tadlock
Author URI: http://justintadlock.com
*/

/*
* Copyright (c) 2008 Justin Tadlock.  All rights reserved.
* http://justintadlock.com
*
* Widgets Reset is released under the GNU General Public License, version 2 (GPL).
* http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/

// Make sure we get the correct directory
	if ( !defined( 'WP_CONTENT_URL' ) )
		define( 'WP_CONTENT_URL', get_option('siteurl') . '/wp-content' );
	if ( !defined( 'WP_CONTENT_DIR' ) )
		define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
	if ( !defined( 'WP_PLUGIN_URL' ) )
		define( 'WP_PLUGIN_URL', WP_CONTENT_URL. '/plugins' );
	if ( !defined( 'WP_PLUGIN_DIR' ) )
		define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );

// Define constant path to plugin folder
	define( WIDGETS_RESET, WP_PLUGIN_DIR . '/widgets-reset' );
	define( WIDGETS_RESET, WP_PLUGIN_URL . '/widgets-reset' );

// Localization
	load_plugin_textdomain( 'widgets_reset' );

// Add actions
	add_action( 'admin_menu', 'widgets_reset_add_pages' );

// Load files
	if ( is_admin() )
		require_once( WIDGETS_RESET . '/settings-admin.php' );

/**
 * Function to add the settings page
 *
 * @since 0.1
 */
function widgets_reset_add_pages() {
	add_theme_page( __('Widgets Reset', 'widgets_reset'), __('Widgets Reset', 'widgets_reset'), 10, 'widgets-reset-settings.php', widgets_reset_theme_page );
}

?>