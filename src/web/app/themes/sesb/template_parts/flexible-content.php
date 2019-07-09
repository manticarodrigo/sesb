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

function render_headline_and_image($headline_color, $headline_text, $image_url) {
  echo <<<EOT
<div class="u-padding-lg">
  <h2 class="h1 u-margin-hug--top u-color-$headline_color">$headline_text</h2>
  <img class="u-fullwidth" src="$image_url">
</div>
EOT;
}

function render_text_and_link($text_color, $text, $btn_color, $link_url, $link_text) {
  echo <<<EOT
<div class="u-padding-lg">
  <p class="u-text-lg$text_color">$text</p>
  <a class="btn$btn_color" href="$link_url">$link_text</a>
</div>
EOT;
}
?>
<section class="container-2col<?php echo $bg_color; ?>">
  <?php if ($alignment == 'left'): ?>
    <?php render_headline_and_image($headline_color, $headline, $image_url); ?>
    <?php render_text_and_link($text_color, $text, $btn_color, $link_url, $link_text); ?>
  <?php else: ?>
    <?php render_text_and_link($text_color, $text, $btn_color, $link_url, $link_text); ?>
    <?php render_headline_and_image($headline_color, $headline, $image_url); ?>
  <?php endif; ?>
</section>
