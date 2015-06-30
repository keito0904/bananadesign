<?php
/*
Template Name:top
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/top.css">
  </head>
  <body class="top">
    <div class="top-head">
      <div class="content">
        <h1>Banana Design</h1>
      </div>
    </div>
    <nav class="top-nav">
      <ul class="content">
        <li class="logo">
          <a href="<?php bloginfo('url'); ?>" class="nav-logo"><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></a>
        </li>
        <li class="list-border"></li>
        <li>
          <a href="<?php bloginfo('url'); ?>" class="nav-link">ホーム</a>
        </li>
        <li class="list-border"></li>
        <li>
          <a href="<?php bloginfo('url'); ?>/about" class="nav-link">組織概要</a>
        </li>
        <li class="list-border"></li>
        <li>
          <a href="<?php bloginfo('url'); ?>/service" class="nav-link">事業内容</a>
        </li>
        <li class="list-border"></li>
        <li>
          <a href="<?php bloginfo('url'); ?>/blog" class="nav-link">ブログ</a>
        </li>
        <li class="list-border"></li>
        <div class="clear"></div>
      </ul>
    </nav>
  </body>
</html>