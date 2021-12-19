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
        <h3 class="c-page-visual__title">事業内容</h3>
      </div>

      <?php get_template_part( 'template-section/breadcrumbs'); ?>

      <h3 class="p-sub-content__heading">企業理念</h3>
      <p class="p-sub-content__read">
        <span class="p-sub-content__text-sp">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </span>
        <span class="p-sub-content__text-pc">
          説明が入ります。説明が入ります。説明が入ります。説明が入ります。<br>説明が入ります。説明が入ります。説明が入ります。説明が入ります。
        </span>
      </p>
      <div class="p-sub-content__items">
        <span id="content1" class="l-link-position"></span>
        <div class="p-sub-content__item">
          <div class="p-sub-content__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/content/sub-content_img1.jpg" alt="企業理念1の画像">
          </div>
          <div class="p-sub-content__textBox">
            <p class="p-sub-content__title">企業理念１</p>
            <p class="p-sub-content__text">
              <span class="p-sub-content__text-sp">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </span>
              <span class="p-sub-content__text-pc">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </span>
            </p>
          </div>
        </div>
        <span id="content2" class="l-link-position"></span>
        <div class="p-sub-content__item">
          <div class="p-sub-content__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/content/sub-content_img2.jpg" alt="企業理念1の画像">
          </div>
          <div class="p-sub-content__textBox">
            <p class="p-sub-content__title">企業理念２</p>
            <p class="p-sub-content__text">
              <span class="p-sub-content__text-sp">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </span>
              <span class="p-sub-content__text-pc">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </span>
            </p>
          </div>
        </div>
        <span id="content3" class="l-link-position"></span>
        <div class="p-sub-content__item">
          <div class="p-sub-content__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/content/sub-content_img3.jpg" alt="企業理念1の画像">
          </div>
          <div class="p-sub-content__textBox">
            <p class="p-sub-content__title">企業理念３</p>
            <p class="p-sub-content__text">
              <span class="p-sub-content__text-sp">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
              </span>
              <span class="p-sub-content__text-pc">
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
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