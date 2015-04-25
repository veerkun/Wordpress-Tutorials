<?php 
/*
 * Delete attachment associated with post when delete post
 *
 */

add_action('before_delete_post', 'vk_delete_associated_media');
function vk_delete_associated_media($post_id) {
  /* 
  //if you want check post type
	global $post_type;
	if($post_type != "post" ) { return; }
	*/
  $media = get_children(array(
        'post_parent' => $post_id,
        'post_type' => 'attachment'
    ));

  if (empty($media)) return;
  foreach ($media as $file) {
    wp_delete_attachment($file->ID);
  }
}
?>
