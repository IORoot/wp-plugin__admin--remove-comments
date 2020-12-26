<?php

/*
 * @wordpress-plugin
 * Plugin Name:       _ANDYP - Admin - Remove Comments Menu option
 * Plugin URI:        http://londonparkour.com
 * Description:       <strong>💪ACTION</strong> | Removes the left sidemenu option for comments.
 * Version:           1.0.0
 * Author:            Andy Pearson
 * Author URI:        https://londonparkour.com
 * Domain Path:       /languages
 */

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Register with ANDYP Plugins                          │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/andyp_plugin_register.php';

function remove_menus() {
	remove_menu_page( 'edit-comments.php' );          //Comments
}
add_action( 'admin_menu', 'remove_menus' );