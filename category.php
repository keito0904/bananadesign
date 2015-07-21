<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/home.css">
    <link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/category.css">
  </head>
  <body class="category">
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
            <div class="category-name">
              カテゴリー：<span class="name"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
              <div class="description">
                <?php echo category_description(); ?>
              </div>
            </div>
            <?php if(have_posts()): while(have_posts()):the_post(); ?>
              <div class="box small-box">
                <a href="<?php the_permalink(); ?>" class="blog-link">
                  <img src="<?php bloginfo('template_url'); ?>/img/blog-banana.png" class="clip">
                  <div class="blog-image" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
                    <div class="date-back">
                      <div class="date"><?php echo get_the_date(); ?></div>
                    </div>
                  </div>
                  <div class="blog-inner">
                    <div class="title">
                      <?php if(mb_strlen($post->post_title)>30) { $title= mb_substr($post->post_title,0,30) ; echo $title. ･･･ ;
                      } else {echo $post->post_title;}?>
                    </div>
                    <p class="text">
                      <?php if(mb_strlen($post->post_content)>80) { $content= mb_substr($post->post_content,0,80) ; echo $content. ･･･ ;
                      } else {echo $post->post_content;}?>
                    </p>
                  </div>
                </a>
              </div>
            <?php endwhile; endif; ?>
            <div class="clear"></div>
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