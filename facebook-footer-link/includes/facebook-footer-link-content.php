<?php

function ffl_add_footer($content) {

  global $ffl_options;
  // "return 'Hello World' = will return Hello World for 'the_content' as it is 'filtering'
 // "return $content . 'Hello World' = content + 'Hello World' -> concatentation 
  $footer_output = '<hr>';
  $footer_output .= '<div class="footer_content">';
  $footer_output .= '<span class="dashicons dashicons-facebook">    </span> Find me on <a href="http://www.facebook.com">Facebook</a> ';
  $footer_output .= '</div">';


  if($ffl_options['show_in_feed']) {
    if(is_single() || is_home() && $ffl_options['enable']){
      return $content . $footer_output;
    }
  } else {
    if(is_single() && $ffl_options['enable']){
      return $content . $footer_output;
    }
  }
  // Will ensure footer link will only appear in posts and not feed in main page


  return $content;

}

// Add filter
add_filter('the_content', 'ffl_add_footer');