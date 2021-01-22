<?php


/* Storing views as meta keys */
add_action( 'template_redirect', function() {
  if (is_single())
     postviews_to_meta(get_queried_object_id());
});
function postviews_to_meta($post_id) {
	$accuracy = 30; // in Percent of Visits
	if ( function_exists('pvc_get_post_views') && (mt_rand(0,100) < $accuracy) ) {
    // Get views count
    $count = pvc_get_post_views( $post_id );
    // Views meta key
    $count_key = 'post_views';
    // Save / update post meta
    update_post_meta( $post_id, $count_key, $count );
	}
}
