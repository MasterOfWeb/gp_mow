<?php
add_shortcode('index-grid', 'index_grid_function');

function index_grid_function( $atts = array() ) {

    // set up default parameters
    extract(shortcode_atts(array(
     'kat' => ''
    ), $atts));

    $html = '';

    $query= new WP_Query(array(
        'post_type'       => 'index',
        /*'tax_query' => array(
        array(
            'taxonomy' => 'produktkategorie',
            'field'    => 'slug',
            'terms'    => $kat,
            'include_children' => true,
        ),), */
        'posts_per_page'  => 21,
        'meta_key' => 'post_views',
        'orderby' => 'meta_value_num',
        'order' => 'DESC'
    ));

    if($query->have_posts() ) {
      $html .= '<div class="row row-cols-1 row-cols-md-3">';
      while( $query->have_posts() ){
        $query->the_post();
        $html .='
          <div class="col">
            <div class="card h-100">';
        $html .='
              <div class="card-body">
                  <a href="'. get_the_permalink().'" class="stretched-link"><h4 class="card-title">'.get_the_title().'</h4></a>
              </div>
            </div>
          </div>';
      }
      $html .= '</div>';
    }

    return $html;
}

 ?>
