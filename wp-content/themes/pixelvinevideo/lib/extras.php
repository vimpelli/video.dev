<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);

/**
* Creates a sidebar
* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
*/
$args = array(
	'name'          => __( 'Header Left'),
	'description'   => 'This is the area directly to the left of the logo',
	'class'         => 'header-left',
	'before_widget' => '<div class="header_flex_child header-left">',
	'after_widget'  => '</div>',
	'before_title'  => '',
	'after_title'   => ''
);

register_sidebar( $args );

// Wrap up function for responsive image swapping from the RICG plugin 
function imgswap($id, $size) {

	// If plugin is active, do this, if not, don't break everything to pieces
	if (function_exists('tevkori_get_srcset_string')) {
		$source = tevkori_get_srcset_string( $id, $size );
		echo $source;
	}
	
}
