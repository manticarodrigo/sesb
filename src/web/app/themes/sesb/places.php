<?php
/**
* Template Name: Places
*
*/
?>
<? get_template_part( 'template_parts/header' );  ?>
<main>
  <?php
    $categories = get_categories();
    foreach ($categories as $category) {
      $args = array(
      'post_type' => 'place',
      'tax_query' => array(
          array(
              'taxonomy' => 'category',
              'field'    => 'term_id',
              'terms'    => $category->cat_ID,
              ),
          ),
      );
      $query = new WP_Query($args);
      if ($query->have_posts()): ?>

        <p class="places_category_headline"><?php echo $category->cat_name ; ?></p>

        <ul class="u-list-unstyled grid-3col">

          <?php while ($query -> have_posts()) : $query -> the_post(); ?>

            <li class="u-text-overflow-ellipsis u-object-fit-contain" style="background-image: url('<?php the_field('image'); ?>');">
              <a class="box_headline" href="<?php the_permalink(); ?>">
                <h2 class="box_headline"><?php the_title(); ?></h2>
              </a>
            </li>

          <?php endwhile; ?>
        </ul>

      <?php endif; 
      wp_reset_query();
    }
  ?>
</main>
<? get_template_part( 'template_parts/footer' );  ?>