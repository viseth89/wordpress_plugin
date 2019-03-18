<?php

// Add Scripts
// 'ffl' to prevent conflicts / convention
// wp_enqueue_style( string $handle, string $src = '', array $deps = array(), string|bool|null $ver = false, string $media = 'all' )

function ffl_add_scripts() {
  wp_enqueue_style('ffl-main-style', plugins_url() . '/facebook-footer-link/css/style.css');
  wp_enqueue_script('ffl-main-script', plugins_url() . 'facebook-footer-link/js/main.js');
}

add_action('wp_enqueue_scripts', 'ffl_add_scripts');