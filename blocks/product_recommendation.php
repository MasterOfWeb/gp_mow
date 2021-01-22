<?php

// Check rows exists.
if( have_rows('products') ):?>

  <ul>
  <?php
  // Loop through rows.
  while( have_rows('products') ) : the_row();

      // Load sub field value.
      $product = get_sub_field('product');
      $asin = get_sub_field('asin');
      if ($asin) {
        if ($product) {
          $title = $product->post_title;
        } else {
          $title = aawp_get_field_value($asin, 'title', array('title_length'=>'50'));
        }
      } else {
        $title = $product->post_title;
        $asin = get_field('asin',$product->ID);
      }?>

      <li>
        <a href="<?=aawp_get_field_value($asin, 'url');?>" target="_blank">
          <b><?=$title;?></b>
        </a> -
        <?=get_sub_field('category');?>
      </li>

  <?php
  endwhile;?>

  </ul>
  <?php
    // Loop through rows.
    while( have_rows('products') ) : the_row();

      $product = get_sub_field('product');
      $asin = get_sub_field('asin');
      if ($asin) {
        if ($product) {
          $title = $product->post_title;
        } else {
          $title = aawp_get_field_value($asin, 'title', array('title_length'=>'50'));
        }
      } else {
        $title = $product->post_title;
        $asin = get_field('asin',$product->ID);
      }?>
      <h3><?=get_sub_field('category');?>:<br>
        <a href="<?=aawp_get_field_value($asin, 'url');?>" target="_blank"> <?=$title;?> </a>
      </h3>
      <div class="media mb-20">
        <?=aawp_get_field_value($asin, 'thumb', array('image_class'=>'img-thumbnail mr-10'));?>
        <div class="media-body">
          <?php
            $stars = aawp_get_field_value($asin, 'star_rating');
            if ($stars) {
              echo '<strong>Bewertung:</strong> ';
              echo aawp_get_field_value($asin, 'star_rating',array('star_rating_size' => 'medium'));
              echo '<br>';
            }?>
          <?php
          if (get_sub_field('description')) {
            echo get_sub_field('description');
          } else {
            echo aawp_get_field_value($asin, 'description');
          } ?>
          <?php
          if ($product):?>
            <a href="<?=get_permalink($product->ID);?>">vollständigen Test lesen</a><br>
          <?php endif;?>
          <?=aawp_get_field_value($asin, 'button');?>
        </div>
      </div>
      <?php
      $comparison = get_sub_field('comparison');
      if ($comparison) :?>
        <a href="<?=get_permalink($comparison->ID);?>" class="button">
          mehr <?=$comparison->post_title?> anzeigen
        </a>
      <?php endif;?>

    <?php
    endwhile;

// No value.
else :
    // Do something...
endif;
