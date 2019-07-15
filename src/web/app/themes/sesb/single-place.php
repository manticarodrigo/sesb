<? get_template_part( 'template_parts/header' );  ?>

<?php while ( have_posts() ) : the_post(); ?>
    <main>
        <section class='placesbgimg' style="background-image: url('<?php the_field('image'); ?>');">
        <h2 class=places_headline>
               <?php the_title() ?>
        </h2>
        <div class="textbox">
            <p class="textbox-text"><?php the_field('description'); ?>
            </p> 
        </div>
        </section>
</main>
<?php endwhile; // end of the loop. ?>

<? get_template_part( 'template_parts/footer' );  ?>
