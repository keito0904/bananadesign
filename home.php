<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/home.css">
  </head>
  <body class="home">
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
            <div class="box small-box">
              <a href="" class="blog-link">
                <img src="<?php bloginfo('template_url'); ?>/img/blog-banana.png" class="clip">
                <div class="blog-image" style="background-image: url(<?php bloginfo('template_url'); ?>/img/blog.jpg)">
                  <div class="date-back">
                    <div class="date">
                      2014年1月1日
                    </div>
                  </div>
                </div>
                <div class="blog-inner">
                  <div class="title">
                    タイトル
                  </div>
                  <p class="text">
                    テキスト
                  </p>
                </div>
              </a>
            </div>
            <div class="box small-box">
              <a href="" class="blog-link">
                <img src="<?php bloginfo('template_url'); ?>/img/blog-banana.png" class="clip">
                <div class="blog-image" style="background-image: url(<?php bloginfo('template_url'); ?>/img/blog.jpg)">
                  <div class="date-back">
                    <div class="date">
                      2014年1月1日
                    </div>
                  </div>
                </div>
                <div class="blog-inner">
                  <div class="title">
                    タイトル
                  </div>
                  <p class="text">
                    テキスト
                  </p>
                </div>
              </a>
            </div>
            <div class="clear"></div>
          </div>
          <div class="right-content">
            right
          </div>
          <div class="clear"></div>
        </div>
      </div>
    </div>
    <?php get_template_part('layouts/footer') ?>
  </body>
</html>