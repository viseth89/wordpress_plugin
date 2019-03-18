<?php
/**
 * Plugin Name: Facebook Footer Link
 * Description: Adds a facebook profile link to the end of posts
 * Version: 1.0
 * Author: Viseth (Taught by Brad Traversy)
 * 
 */

//  Exit if Accessed Directly
if (!defined('ABSPATH')) {
  exit;
}

// Global Options Variable
$ffl_options = get_option('ffl_settings');

// Load Scripts
require_once(plugin_dir_path(__FILE__) . '/includes/facebook-footer-link-scripts.php');
// Load Content
require_once(plugin_dir_path(__FILE__) . '/includes/facebook-footer-link-content.php');

// If is admin

if (is_admin()) {
  // Load Settings
  require_once(plugin_dir_path(__FILE__) . '/includes/facebook-footer-link-settings.php');
}
