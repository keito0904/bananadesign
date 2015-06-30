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
          <div class="ad">
            <img src="<?php bloginfo('template_url'); ?>/img/ad1.jpg">
          </div>
          <div class="ad">
            <img src="<?php bloginfo('template_url'); ?>/img/ad2.jpg">
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </body>
</html>