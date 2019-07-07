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
    <header class="u-padding u-bg-color-primary navbar">
      <nav>
        <ul class="navbar__list">
          <li>
            <a class="u-color-secondary" href="https://google.com" target="_blank">Home</a>
          </li>
          <li>
            <a class="u-color-secondary" href="#about">About</a>
          </li>
          <li>
            <a class="u-color-secondary">Community</a>
          </li>
          <li>
            <a class="u-color-secondary">Find a Home</a>
          </li>
        </ul>
      </nav>
      <img src="/app/themes/sesb/assets/jpg/logo.jpg">
    </header>