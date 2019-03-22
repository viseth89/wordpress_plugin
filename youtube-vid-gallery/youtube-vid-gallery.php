<?php 
/**
 * Plugin Name: Youtube Video Gallery
 * Description: Adds social icons with links to profiles
 * Version: 1.0
 * Author: Viseth (Taught by Brad Traversy)
 * 
 */

 //  Exit if Accessed Directly
if (!defined('ABSPATH')) {
  exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__)  .  '/includes/youtube-vid-gallery-scripts.php');

// Load Shortcodes
require_once(plugin_dir_path(__FILE__)  .  '/includes/youtube-vid-gallery-shortcodes.php');

// Check if admin and include admin scripts
if ( is_admin() ) {
  // Load Custom Post Type
  require_once(plugin_dir_path(__FILE__) . '/includes/youtube-vid-gallery-cpt.php');
  // Load Settings
  require_once(plugin_dir_path(__FILE__) . '/includes/youtube-vid-gallery-settings.php');
  // Load Post Fields
  require_once(plugin_dir_path(__FILE__) . '/includes/youtube-vid-gallery-fields.php');
}