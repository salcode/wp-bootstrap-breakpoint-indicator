<?php
/**
 * Plugin Name: Bootstrap 3 Breakpoint Indicator
 * Plugin URI: http://salferrarello.com/bootstrap-breakpoint-indicator-wordpress/
 * Description: Displays "xs", "sm", "md", or "lg" in the admin bar based on the current Bootstrap 3 Breakpoint being displayed.
 * Version: 0.1.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 * Text Domain: bootstrap-breakpoint-indicator
 * Domain Path: /languages
 *
 * @package Fe_Admin_Bar_Menu_Bootstrap_3_Breakpoints
 */

add_action( 'admin_bar_menu', 'fe_admin_bar_menu_bootstrap_3_breakpoints', 200 );

/**
 * Add Bootstrap 3 Breakpoint indicators to wp_admin_bar
 *
 * @param WP_Admin_Bar $wp_admin_bar Instance of WP_Admin_Bar used on the page.
 * @return WP_Admin_Bar modified instance, which includes Bootstrap Breakpoint Indicator
 */
function fe_admin_bar_menu_bootstrap_3_breakpoints( $wp_admin_bar ) {

	// Do not display on backend pages.
	if ( is_admin() ) {
		return;
	}

	$args = array(
		'id' => 'fe-admin-bar-menu-bootstrap-3-breakpoints',
		'title' => '<span class="visible-xs-inline">xs</span><span class="visible-sm-inline">sm</span><span class="visible-md-inline">md</span><span class="visible-lg-inline">lg</span>',
	);

	$wp_admin_bar->add_node( $args );
}
