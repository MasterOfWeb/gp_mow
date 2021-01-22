<?php
/**
 * Block Name: Testimonials
 *
 * This is the template that displays the testimonials loop block.
 */

/*
$pages = get_field( 'selected_pages' );
$args = array(

  'post_type' => 'testimonials',
  'post__in' => $pages
);


$the_query = new WP_Query( $args );

  if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

      <div>
        <?php the_post_thumbnail('post-thumbnail'); ?>
        <b><?php the_title(); ?></b> <br>
      </div>

    <?php endwhile; ?>
<?php endif;?> */

$subpages = get_field('selected_pages');
$strip_from_title = get_field('strip_from_title');

if($subpages):?>
  <div class="posts-sm row col-mb-30">
  <?php
  foreach( $subpages as $subpage):
    $title = get_the_title( $subpage->ID );
    $title = trim(str_replace($strip_from_title,'',$title));
    $permalink = get_permalink( $subpage->ID);
    $img = get_the_post_thumbnail($subpage->ID, 'thumbnail');
    ?>
      <div class="entry col-md-3 text-center">
        <a href="<?php echo esc_url( $permalink ); ?>">
          <?php echo  $img ; ?><br>
          <?php echo esc_html( $title ); ?>
        </a>
      </div>
  <?php
  endforeach;
  ?>
  </div>
<?php endif; ?>
