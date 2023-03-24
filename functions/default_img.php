<?php
// Remove default image cropp sizes
function remove_default_img_sizes( $sizes ) {
  $targets = ['medium_large', 'large', '1536x1536', '2048x2048'];
  foreach($sizes as $size_index=>$size) {
    if(in_array($size, $targets)) {
      unset($sizes[$size_index]);
    }
  }
  return $sizes;
}
add_filter( 'intermediate_image_sizes', 'remove_default_img_sizes', 10, 1);
