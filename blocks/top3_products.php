<?php

// Check rows exists.
if( have_rows('products') ):?>

<div class="row row-cols-1 row-cols-md-3" id="top3">

  <?php
  $i = 0;
  // Loop through rows.
  while( have_rows('products') ) :
    the_row();
    $i++;

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

    <?php if($asin) : ?>
      <div class="col pb-20">
        <div class="card h-100 text-center <?php if($i==1) {echo 'border-green';} if($i==2) {echo 'top-card border-blue';}?>">
          <div class="card-header text-center">
            <?php
             if( $i == 1) {
               echo 'Topseller';
             } elseif ($i == 2) {
               echo 'Testsieger';
             } else {
               echo 'Preissieger';
             }
             ?>
           </div>
           <div class="card-body">
             <?=aawp_get_field_value($asin, 'thumb');?><br>
             <b><?=$title;?></b><br>
             <?=aawp_get_field_value($asin, 'star_rating');?>
           </div>
           <div class="card-footer">
             <?=aawp_get_field_value($asin, 'button');?>
           </div>
         </div>
       </div>
    <?php endif; ?>

  <?php
  endwhile;?>

</div>
<?php
// No value.
else :
    // Do something...
endif;
?>
