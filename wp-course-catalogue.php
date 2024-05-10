<?php
/*
 * Plugin Name:       Wp Course Catalogue
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Custom Wp Course Catalogue Plugin For A Demo Testing Task Plugin.
 * Version:           1.10.3
 * Author:            WP Author
 * Text Domain:       wp-course-catalogue
 */

defined('ABSPATH') || die("You can't access this file");

register_activation_hook(__FILE__, 'wp_activate');
function wp_activate()
{
    // Activation code
    add_option('updateTitle', 'Your Title Is Wp Course Catalogue');
}

register_deactivation_hook(__FILE__, 'wp_deactivate');
function wp_deactivate()
{
    // Deactivation code
    delete_option('updateTitle');
}


// Custome dashbord menu code 

function wp_catelogue_add_menu()
{
    // Add a new top-level menu item
    add_menu_page(
        'WP Course Catalogue',  // Page title
        'Course Catalogue',     // Menu title
        'manage_options',       // Capability
        'wp-catelogue-settings',        // Menu slug
        'wp_catelogue_settings_page',   // Callback function
        'dashicons-book-alt',   // Icon
        80                      // Position
    );
}
add_action('admin_menu', 'wp_catelogue_add_menu');

function wp_catelogue_settings_page()
{
    // Render your settings page here
    echo '<div class="wrap">';
    echo '<h1>WP Course Catalogue Settings</h1>';
    echo '<p>Welcome to the WP Course Catalogue settings page.</p>';
    echo '</div>';
}
