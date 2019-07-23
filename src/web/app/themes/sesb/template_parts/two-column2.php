<section class="grid-2col">
    <div class="u-padding-lg u-bg-color-primary">
        <p class="u-text-lg u-color-white">
            <?php the_field('left_text'); ?>
        </p>
        <a class="btn btn--white" href="<?php the_field('left_link_url'); ?>">
            <?php the_field('left_link_text'); ?>
        </a>
    </div>
    <div class="u-padding-lg u-bg-color-primary">
        <h2 class="h1 u-margin-hug--top u-color-secondary">
            <?php the_field('right_headline'); ?>
        </h2>
        <img class="u-fullwidth" src="<?php the_field('right_image'); ?>">
    </div>
</section>