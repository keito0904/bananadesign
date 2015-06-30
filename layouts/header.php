<nav class="top-nav <?php if( is_page( array('about','service')) || is_home() || is_single() || is_category() ) { echo 'shadow'; }else{} ?>">
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
      <a href="<?php bloginfo('url'); ?>/blog" class="nav-link <?php if ( is_home() || is_single() || is_category() ) { echo 'active'; } ?>">ブログ</a>
    </li>
    <li class="list-border"></li>
    <div class="clear"></div>
  </ul>
</nav>