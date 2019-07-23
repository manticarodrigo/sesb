<?php
$alignment = get_field('alignment');

function render_headline_and_image() {
  $is_alt_color = get_field('is_alt_color');
  $headline_color = $is_alt_color ? 'secondary' : 'primary';
  $headline_text = get_field('headline');
  $image_url = get_field('image_url');

  echo <<<EOT
<div class="u-padding-lg">
  <h2 class="h1 u-margin-hug--top u-color-$headline_color">$headline_text</h2>
  <img class="u-fullwidth" src="$image_url">
</div>
EOT;
}

function render_text_and_link() {
  $is_alt_color = get_field('is_alt_color');
  $text_color = $is_alt_color ? ' u-color-white' : '';
  $text = get_field('text');
  $btn_color = $is_alt_color ? ' btn--white' : '';
  $link_url = get_field('link_url');
  $link_text = get_field('link_text');

  echo <<<EOT
<div class="u-padding-lg">
  <p class="u-text-lg$text_color">$text</p>
  <a class="btn$btn_color" href="$link_url">$link_text</a>
</div>
EOT;
}
?>
<section class="grid-2col<?php echo $bg_color; ?>">
  <?php if ($alignment == 'left'): ?>
    <?php render_headline_and_image(); ?>
    <?php render_text_and_link(); ?>
  <?php else: ?>
    <?php render_text_and_link(); ?>
    <?php render_headline_and_image(); ?>
  <?php endif; ?>
</section>
