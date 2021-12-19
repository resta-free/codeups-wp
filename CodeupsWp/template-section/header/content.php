  <!-- header -->
  <header class="l-header p-header js-header">
    <div class="p-header__inner">
      <?php if (is_home() || is_front_page() ) : //トップページではロゴをh1に、それ以外のページではdivに。 ?>
      <h1 class="c-logo">
        <a class="c-logo__link" href="<?php echo esc_url(home_url('/')); ?>"><?php the_custom_logo(); ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/codeups.svg" alt="サイトロゴ">
        </a>
      </h1><!-- /header-logo -->
      <?php else : ?>
      <div class="c-logo">
        <a class="c-logo__link" href="<?php echo esc_url(home_url('/')); ?>"><?php the_custom_logo(); ?>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/codeups.svg" alt="サイトロゴ">
        </a>
      </div><!-- /header-logo -->
      <?php endif; ?>
      <div class="p-header__drawer c-hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="p-header__sp-nav p-sp-nav js-drawer-menu">
        <?php
        //.drawer-navを置き換えて、スマホ用メニューを動的に表示する
        wp_nav_menu(
        array(
        'depth' => 1,
        'theme_location' => 'drawer', //ドロワーメニューをここに表示すると指定
        'container' => 'false',
        'menu_class' => 'p-sp-nav__items',
        'add_li_class' => 'p-sp-nav__item', // liタグへclass追加
        'add_a_class' => '' // aタグへclass追加
        )
        );
        ?>
      </nav>
      <div class="p-header__pc-nav p-pc-nav">
        <?php
        wp_nav_menu(
        //.header-listを置き換えて、PC用メニューを動的に表示する
        array(
        'depth' => 1,
        'theme_location' => 'global', //グローバルメニューをここに表示すると指定
        'container' => 'false',
        'menu_class' => 'p-pc-nav__items',
        'add_li_class' => 'p-pc-nav__item', // liタグへclass追加
        )
        );
        ?>
      </div>
    </div>
  </header>