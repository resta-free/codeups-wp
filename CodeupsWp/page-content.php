<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php get_template_part( 'template-section/header/content'); ?>

  <!-- p-sub-content -->
  <section id="content" class="p-sub-content">
    <div class="p-sub-content__inner">
      <div class="p-sub-content__visual c-page-visual">
        <h3 class="c-page-visual__title">プログラム</h3>
      </div>

      <?php get_template_part( 'template-section/breadcrumbs'); ?>

      <h3 class="p-sub-content__heading">トレーニングプログラム</h3>
      <p class="p-sub-content__read">
        <span class="p-sub-content__text-sp">
          一人一人の目的に合った最適のトレーニングを提案します。
        </span>
        <span class="p-sub-content__text-pc">
          一人一人の目的に合った最適のトレーニングを提案します。
        </span>
      </p>
      <div class="p-sub-content__items">
        <span id="content1" class="l-link-position"></span>
        <div class="p-sub-content__item">
          <div class="p-sub-content__img">
            <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/img/common/content_img2.jpg" alt="ジムの画像">
          </div>
          <div class="p-sub-content__textBox">
            <p class="p-sub-content__title">ジム</p>
            <p class="p-sub-content__text">
              <span class="p-sub-content__text-sp">
                徹底的に自分を追い込んで体を鍛えたい方におすすめです。大会出場する選手にも人気のプログラムとなっています。<br>
                ・1回のご利用　1,000円
                ・１ヶ月の　1,000円
                ・1回のご利用　1,000円
              </span>
              <span class="p-sub-content__text-pc">
                徹底的に自分を追い込んで体を鍛えたい方におすすめです。大会出場する選手にも人気のプログラムとなっています。
              </span>
            </p>
          </div>
        </div>
        <span id="content2" class="l-link-position"></span>
        <div class="p-sub-content__item">
          <div class="p-sub-content__img">
            <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/img/common/content_img3.jpg" alt="ボクシングの画像">
          </div>
          <div class="p-sub-content__textBox">
            <p class="p-sub-content__title">ボクシング</p>
            <p class="p-sub-content__text">
              <span class="p-sub-content__text-sp">
                楽しくエクササイズしたい方におすすめです。また、日頃のストレスを発散する場にもピッタリです。
              </span>
              <span class="p-sub-content__text-pc">
                楽しくエクササイズしたい方におすすめです。また、日頃のストレスを発散する場にもピッタリです。
              </span>
            </p>
          </div>
        </div>
        <span id="content3" class="l-link-position"></span>
        <div class="p-sub-content__item">
          <div class="p-sub-content__img">
            <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/assets/img/common/content_img4.jpg" alt="フィットネスの画像">
          </div>
          <div class="p-sub-content__textBox">
            <p class="p-sub-content__title">フィットネス</p>
            <p class="p-sub-content__text">
              <span class="p-sub-content__text-sp">
                カッコいい・キレイな体づくりを目指す方におすすめです。
              </span>
              <span class="p-sub-content__text-pc">
                カッコいい・キレイな体づくりを目指す方におすすめです。
              </span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-section/sub-contact'); ?>

  <?php get_template_part( 'template-section/footer/content'); ?>

  <?php get_footer(); ?>
</body>

</html>