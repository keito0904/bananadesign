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
    <div class="sub-header">
      <div class="content">
        <h1>ブログ</h1>
      </div>
    </div>
    <div class="main-content">
      <div class="content">
        <div class="top-word" align="center">
          <img src="<?php bloginfo('template_url'); ?>/img/quo1.png">
          バナナを食べるくらいならバナナになれ！
          <img src="<?php bloginfo('template_url'); ?>/img/quo2.png">
        </div>
        <div class="blog-content">
          <div class="left-content">
            <div class="box box-large">
              <img src="<?php bloginfo('template_url'); ?>/img/blog-banana.png" class="clip">
              <div class="date-back">
                <div class="date">2014年1月1日</div>
              </div>
              <div class="blog-inner">
                <div class="title">
                  タイトル
                </div>
                <span class="category-link">
                  <a href="">カテゴリー</a>
                </span>
                <div class="twitter-facebook">
                  <?php socialButton(); ?>
                </div>
                <div class="clear"></div>
                <div class="blog-image" style="background-image: url(<?php bloginfo('template_url'); ?>/img/blog.jpg)">
                </div>
                <p class="text">
                  テキスト
                </p>
              </div>
            </div>
          </div>
          <div class="right-content">
            <?php dynamic_sidebar(); ?>
            <div class="clear"></div>
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
    <?php get_template_part('layouts/footer') ?>
  </body>
</html>