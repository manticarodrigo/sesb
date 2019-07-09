<section class="container-2col">
    <div class="u-padding-lg">
        <h2 class="h1 u-margin-hug--top u-color-primary">
            <?php the_field('left_headline'); ?>
        </h2>
        <img class="u-fullwidth" src="<?php the_field('left_image'); ?>">
    </div>
    <div class="u-padding-lg">
        <p class="u-text-lg">
            <?php the_field('right_text'); ?>
        </p>
        <a class="btn" href="<?php the_field('right_link_url'); ?>">
            <?php the_field('right_link_text'); ?>
        </a>
    </div>
</section>