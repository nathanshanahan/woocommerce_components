<?php 

// Update size of gallery thumbnails 
add_action('after_setup_theme', 'csf_woocommerce_image_sizes_override'); 

function csf_woocommerce_image_sizes_override() {
  add_theme_support( 'woocommerce', array(
	'gallery_thumbnail_image_width' => 200,
	) );
}
