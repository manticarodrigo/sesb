<? get_template_part( 'template_parts/header' );  ?>

<?php
    // show page contents
  while ( have_posts() ) : the_post(); ?>
      <main>
        <?php the_content(); ?>
      </main>
  <?php
  endwhile;
  wp_reset_query();
?>

<? get_template_part( 'template_parts/footer' );  ?>
