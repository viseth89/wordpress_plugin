<!-- 
  https://codex.wordpress.org/Widgets_API 
  1.  Change class name to new class name
  2.  Constructor 



-->


<?php 

class Social_Links_Widget extends WP_Widget {

/**
 * Sets up the widgets name etc
 */
public function __construct() {
  parent::__construct(
    'social_links_widget', // Base ID
    esc_html__( 'Social Links Widget', 'sl_domain' ), // Name
    array( 'description' => esc_html__( 'Outputs social icons linked to profiles', 'sl_domain' ), ) // Args
  );
}

/**
 * Outputs the content of the widget
 *
 * @param array $args
 * @param array $instance
 */
public function widget( $args, $instance ) {
  // outputs the content of the widget
  return 'TEST FRONTEND';
}

/**
 * Outputs the options form on admin
 *
 * @param array $instance The widget options
 */
public function form( $instance ) {
  // outputs the options form on admin
  ?>
    TEST BACKEND FORM
  <?php
}

/**
 * Processing widget options on save
 *
 * @param array $new_instance The new options
 * @param array $old_instance The previous options
 *
 * @return array
 */
public function update( $new_instance, $old_instance ) {
  // processes widget options to be saved
}
}