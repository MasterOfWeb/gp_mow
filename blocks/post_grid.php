<?php

$posts = get_field('posts');
if( $posts):?>

  <div class="row row-cols-1 row-cols-md-3">

  <?php
  foreach( $posts as $post ) :
    $permalink = get_permalink( $post->ID );
    $title = get_the_title( $post->ID )
    ;?>
    <div class="col pb-20">
      <div class="card h-100 ">
        <?=get_the_post_thumbnail($post->ID,'grid369', array('class'=>'card-img-top',));?>
        <div class="card-body">
          <a href="<?=$permalink;?>" class="stretched-link">
            <h4 class="card-title"><?=$title;?></h4>
          </a>
        </div>
       </div>
     </div>

    <?php
  endforeach;?>
  </div>
<?php
// No value.
else :
    // Do something...
endif;
