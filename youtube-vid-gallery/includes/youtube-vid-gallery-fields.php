<?php

function yvg_add_fields_metabox()
{
  add_meta_box(
    'yvg_video_fields',
    __('Video Fields'),
    'yvg_video_fields_callback',
    'video',
    'normal',
    'default'
  );
}

add_action('add_meta_boxes', 'yvg_add_fields_metabox');

// Display meta Box Content
function yvg_video_fields_callback($post)
{
  wp_nonce_field(basename(__FILE__), 'yvg_videos_nonce');
  $yvg_video_stored_meta = get_post_meta($post->ID);
  ?>

<div class="wrap video-form">
    <div class="form-group">
      <label for="video-id"><?php esc_html_e('Video ID', 'yvg-domain'); ?></label>
      <input type="text" name='video_id' id='video-id' value="<?php if(!empty($yvg_video_stored_meta['video_id'])) echo esc_attr($yvg_video_stored_meta['video_id'][0]); ?>">
    </div>
    <div class="form-group">
      <label for="details"><?php esc_html_e('Details', 'yvg-domain'); ?></label>
      <?php 
        $content = get_post_meta($post->ID, 'details', true);
        $editor = 'details';
        $settings = array(
          'textarea_rows' => 5,
          'media_buttons' => false
        );

        wp_editor($content, $editor, $settings);

      ?>
    </div>
    <?php if(isset($yvg_video_stored_meta['video_id'][0])) : ?>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $yvg_video_stored_meta['video_id'][0] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <?php endif; ?>
</div>

<?php
} 

function yvg_video_save($post_id){
  $is_autosave = wp_is
}