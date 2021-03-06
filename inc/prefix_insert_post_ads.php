<?php

function prefix_insert_post_ads( $content ) {
 $ad_code = get_theme_mod('mag_ads_inarticle');
 if ( is_single() && ! is_admin() ) {
 return prefix_insert_after_paragraph( $ad_code, 2, $content );
 }
return $content;
}

// Parent Function that makes the magic happen
function prefix_insert_after_paragraph( $insertion, $paragraph_id, $content ) {
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
