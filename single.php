<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/home.css">
    <link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/single.css">
  </head>
  <body class="single">
    <?php get_template_part('layouts/header') ?>
    <?php get_template_part('layouts/footer') ?>
  </body>
</html>