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
    <?php get_template_part('layouts/header') ?>
    <div class="main-content">
      <div class="content">
        <div class="left-content">
          <div class="box large-box newsfeed-box">
            <div class="title-back">
              <h2 class="title">ニュースフィード</h2>
            </div>
            <div class="box-content">
              <ul>
                <?php
                  global $post;
                  $args = array( 'posts_per_page' => 20 );
                  $myposts = get_posts( $args );
                  foreach( $myposts as $post ) {
                      setup_postdata($post);
                      ?>
                      <li>
                        <span class="date"><?php echo get_the_date(); ?></span>
                        <span class="category"><?php the_category('｜') ?></span>
                        <a href="<?php the_permalink(); ?>" class="text">
                          <?php the_title(); ?>
                        </a>
                      </li>
                      <?php
                  }
                  wp_reset_postdata();
                ?>
              </ul>
            </div>
          </div>
          <div class="box small-box about-box">
            <div class="title-back">
              <h2 class="title">バナナとは？</h2>
            </div>
            <div class="box-content">
              <img src="<?php bloginfo('template_url'); ?>/img/top1.png">
              <p>バナナとは"バナナを食べるくらいならバナナになれ。"をモットーにバナナで世界に凹みをいれるその日まで戦い続ける組織である。</p>
            </div>
          </div>
          <div class="box small-box service-box">
            <div class="title-back">
              <h2 class="title">サービス</h2>
            </div>
            <div class="box-content">
              <img src="<?php bloginfo('template_url'); ?>/img/top2.png">
              <p>バナナではあらゆるクリエイティブ事業に挑戦しています。</p>
            </div>
          </div>
          <div class="clear"></div>
        </div>
        <div class="right-content">
          <img src="<?php bloginfo('template_url'); ?>/img/right1.jpg">
          <img src="<?php bloginfo('template_url'); ?>/img/right2.jpg">
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <div class="footer">
      <div class="content">
        <div class="footer-info">
          <strong>会社情報</strong>
          <div class="info">株式会社バナナデザイン</div>
          <div class="clear"></div>
        </div>
        <div class="footer-info">
          <strong>所在地</strong>
          <div class="info">東京都渋谷区神泉町8-16 渋谷ファーストプレイス</div>
          <div class="clear"></div>
        </div>
        <div class="footer-info">
          <strong>E-Mail</strong>
          <div class="info">banana@banana.co.jp</div>
          <div class="clear"></div>
        </div>
        <div class="copyright">
          ©2014 Banana Inc. ALL Rights Reserved.
        </div>
      </div>
    </div>
  </body>
</html>