<?php

add_filter( 'the_content', 'insert_post_ads' );

function insert_post_ads( $content ) {
 $ad_code = get_theme_mod('mow_ads_inarticle');
 $extra_ads = get_field('extra_ads');
 if ( is_single() && ! is_admin() && $extra_ads ) {

   return insert_after_paragraph( $ad_code, 3, $content );
   }
return $content;
}

// Parent Function that makes the magic happen
function insert_after_paragraph( $insertion, $paragraph_id, $content ) {
 $closing_p = '</p>';
 $paragraphs = explode( $closing_p, $content );
 foreach ($paragraphs as $index => $paragraph) {
 if ( trim( $paragraph ) ) {
 $paragraphs[$index] .= $closing_p;
 }
 if ( $paragraph_id == $index + 1 ) {
 $paragraphs[$index] .= $insertion;
 }
 }

 return implode( '', $paragraphs );
}
 ?>
