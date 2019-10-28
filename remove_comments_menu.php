<?php

/*
 * @package   ANDYP - Remove Admin Comments section
 * @author    Andy Pearson <andy@londonparkour.com>
 * @copyright 2020 LondonParkour
 * 
 * @wordpress-plugin
 * Plugin Name:       _ANDYP - Remove Admin Comments Menu option
 * Plugin URI:        http://londonparkour.com
 * Description:       Removes the left menu option for comments.
 * Version:           1.0.0
 * Author:            Andy Pearson
 * Author URI:        https://londonparkour.com
 * Domain Path:       /languages
 */

function remove_menus() {
	remove_menu_page( 'edit-comments.php' );          //Comments
}
add_action( 'admin_menu', 'remove_menus' );