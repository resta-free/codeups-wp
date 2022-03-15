  <!-- totop -->
  <div class="c-totop"><a href="#"></a></div>

  <footer class="p-footer l-footer">
    <div class="p-footer__inner">
      <div class="p-footer__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      </div>
      <nav class="p-footer__nav">
        <?php
        //.drawer-navを置き換えて、スマホ用メニューを動的に表示する
        wp_nav_menu(
        array(
        'depth' => 1,
        'theme_location' => 'footer', //ドロワーメニューをここに表示すると指定
        'container' => 'false',
        'menu_class' => 'p-footer__sp-items',
        'add_li_class' => 'p-footer__sp-item', // liタグへclass追加
        )
        );
        ?>
        <?php
        //.drawer-navを置き換えて、スマホ用メニューを動的に表示する
        wp_nav_menu(
        array(
        'depth' => 1,
        'theme_location' => 'footer', //ドロワーメニューをここに表示すると指定
        'container' => 'false',
        'menu_class' => 'p-footer__pc-items',
        'add_li_class' => 'p-footer__pc-item', // liタグへclass追加
        )
        );
        ?>
      </nav>
    </div>
    <p class="p-footer__copy">&copy; 2021 PlusUltra Inc.</p>
  </footer>