<?php

// Adense setup via customizer
include( get_stylesheet_directory().'/inc/adsense.php');

// Shortcode für Produktgategorie-Gird
include( get_stylesheet_directory().'/inc/shortcodes.php');

// Shortcode für Produktgategorie-Gird
include( get_stylesheet_directory().'/inc/prefix_insert_post_ads.php');

include( get_stylesheet_directory().'/inc/views-to-meta.php');

require get_stylesheet_directory() . '/inc/custom-pt.php';
require get_stylesheet_directory() . '/inc/custom-tax.php';
require get_stylesheet_directory() . '/inc/custom-fields.php';
require get_stylesheet_directory() . '/inc/custom-blocks.php';
require get_stylesheet_directory() . '/inc/thumbnails.php';
require get_stylesheet_directory() . '/inc/insert_post_ads.php';


// Disable the core template part on the blog page.
add_filter( 'generate_do_template_part', function( $do ) {
    if ( is_singular('index') ) {
        return get_template_part( 'content', 'index' );
    } elseif ( is_singular( 'comparison' ) ) {
      return get_template_part( 'content', 'comparison' );
    }
    return $do;
} );


add_action( 'enqueue_block_editor_assets', function() {
    wp_enqueue_style( '', get_stylesheet_directory_uri() . "/style.css", false, '1.0', 'all' );
} );
