<?php
/**
* Template part for displaying page headings (banners)
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package sesb
*/
?>

<section class="u-padding hero" style="background-image: url('<?php the_field('background_image'); ?>');">
  <h1 class="hero__title">
    <?php the_field('headline'); ?>
  </h1>
</section>