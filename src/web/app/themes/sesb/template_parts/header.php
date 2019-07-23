<html>
  <head>
    <!-- meta -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <!-- css + javascript -->
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="u-padding header navbar u-bg-color-primary-shaded">
      <nav>
        <ul class="navbar__list">
          <?php main_nav(); ?>
        </ul>
      </nav>
      <img src="/app/themes/sesb/assets/jpg/logo.png">
    </header>