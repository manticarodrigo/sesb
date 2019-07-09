<?php
$alignment = get_field('alignment');
$headline = get_field('headline');
$text = get_field('text');
$image_url = get_field('image_url');
$link_url = get_field('link_url');
$link_text = get_field('link_text');
$is_alt_color = get_field('is_alt_color');
$bg_color = $is_alt_color ? ' u-bg-color-primary' : '';
$headline_color = $is_alt_color ? 'secondary' : 'primary';
$text_color = $is_alt_color ? ' u-color-white' : '';
$btn_color = $is_alt_color ? ' btn--white' : '';
?>
<section class="container-2col<?php echo $bg_color; ?>">
  <?php if ($alignment == 'left'): ?>
    <div class="u-padding-lg">
      <h2 class="h1 u-margin-hug--top u-color-<?php echo $headline_color; ?>">
        <?php echo $headline; ?>
      </h2>
      <img class="u-fullwidth" src="<?php echo $image_url; ?>">
    </div>
    <div class="u-padding-lg">
      <p class="u-text-lg<?php echo $text_color; ?>">
        <?php echo $text; ?>
      </p>
      <a class="btn<?php echo $btn_color; ?>" href="<?php echo $link_url; ?>">
        <?php echo $link_text; ?>
      </a>
    </div>
  <?php else: ?>
    <div class="u-padding-lg">
      <p class="u-text-lg<?php echo $text_color; ?>">
        <?php echo $text; ?>
      </p>
      <a class="btn<?php echo $btn_color; ?>" href="<?php echo $link_url; ?>">
        <?php echo $link_text; ?>
      </a>
    </div>
    <div class="u-padding-lg">
      <h2 class="h1 u-margin-hug--top u-color-<?php echo $headline_color; ?>">
        <?php echo $headline; ?>
      </h2>
      <img class="u-fullwidth" src="<?php echo $image_url; ?>">
    </div>
  <?php endif; ?>
</section>
