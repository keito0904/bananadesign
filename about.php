<?php
/*
Template Name:about
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/about.css">
  </head>
  <body class="about">
    <nav class="top-nav <?php if( is_page( array('about','service','blog')) ) { echo 'shadow'; }else{} ?>">
      <ul class="content">
        <li class="logo">
          <a href="<?php bloginfo('url'); ?>" class="nav-logo"><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></a>
        </li>
        <li class="list-border"></li>
        <li>
          <a href="<?php bloginfo('url'); ?>" class="nav-link <?php if ( is_page('top') ) { echo 'active'; } ?>">ホーム</a>
        </li>
        <li class="list-border"></li>
        <li>
          <a href="<?php bloginfo('url'); ?>/about" class="nav-link <?php if ( is_page('about') ) { echo 'active'; } ?>">組織概要</a>
        </li>
        <li class="list-border"></li>
        <li>
          <a href="<?php bloginfo('url'); ?>/service" class="nav-link <?php if ( is_page('service') ) { echo 'active'; } ?>">事業内容</a>
        </li>
        <li class="list-border"></li>
        <li>
          <a href="<?php bloginfo('url'); ?>/blog" class="nav-link <?php if ( is_page('blog') ) { echo 'active'; } ?>">ブログ</a>
        </li>
        <li class="list-border"></li>
        <div class="clear"></div>
      </ul>
    </nav>
    <div class="sub-header">
      <div class="content">
        <h1>組織概要</h1>
      </div>
    </div>
    <div class="main-content">
      <div class="content">
        <div class="left-content sidebar">
          <nav class="sidebar-nav">
            <ul>
              <li>
                <a href="" class="nav-link">
                  <img src="<?php bloginfo('template_url'); ?>/img/banana.png">
                  経営理念
                </a>
              </li>
              <li>
                <a href="" class="nav-link">
                  <img src="<?php bloginfo('template_url'); ?>/img/banana.png">
                  会社情報
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="right-content main">
          <div class="box large-box ideal-box">
            <div class="title-back">
              <h2 class="title">経営理念</h2>
            </div>
            <div class="box-content" align="center">
              <div class="motto">
                バナナを食べるくらいならバナナになれ。
              </div>
              <p>
                私達は普段良くバナナを口にしています。
                <br>
                食べていることすら忘れるくらいに、バナナは私達の生活にとけ込んでいるのです。
                <br>
                偉大な大工は、誰も見ないからといって、床裏にひどい木材を使ったりはしません。
                <br>
                我々もそれと同じように、誰も知ろうとしないからといって、バナナを育てる土や環境をないがしろにはしません。
                <br>
                バナナデザイン株式会社は今までも、そしてこれからもその身に日の光を一杯にうけ育ち続けるでしょう。
                <br>
                温室でそだったバナナが、世界に凹みをいれるその日まで。
              </p>
            </div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </body>
</html>