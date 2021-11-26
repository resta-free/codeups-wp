<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php get_template_part( 'template-section/header/content'); ?>

  <!-- mv -->
  <div class="l-mv p-mv">
    <div class="p-mv__inner">
      <div class="swiper p-mv__slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slide-img p-mv__bg1"></div>
          </div><!-- /swiper-slide -->
          <div class="swiper-slide">
            <div class="slide-img p-mv__bg2"></div>
          </div><!-- /swiper-slide -->
          <div class="swiper-slide">
            <div class="slide-img p-mv__bg3"></div>
          </div><!-- /swiper-slide -->
          <div class="p-mv__title-box">
            <p class="p-mv__main-title">メインタイトルが入ります</p>
            <p class="p-mv__sub-title">サブタイトルが入ります</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="p-news">
    <div class="p-news__body">
      <p class="p-news__time">2020.07.20</p>
      <div class="p-news__notice"><a href="#">お知らせ</a></div>
      <p class="p-news__text">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</p>
      <div class="p-news__button">
        <a class="p-news__button-swipe" href="#">すべて見る</a>
      </div>
    </div>
  </section>

  <!-- content -->
  <section id="content" class="p-content l-top-content">
    <div class="p-content__inner">
      <div class="p-content__title c-section-header">
        <h2 class="c-section-header__title">事業内容</h2>
        <span class="c-section-header__subtitle">Content</span>
      </div>
      <div class="p-content__items">
        <div class="p-content__itembox">
          <div class="p-content__item1">
            <a class="p-content__link" href="#">経営理念ページへ</a>
          </div>
        </div>
        <div class="p-content__itembox">
          <div class="p-content__item2">
            <a class="p-content__link" href="#">理念1へ</a>
          </div>
        </div>
        <div class="p-content__itembox">
          <div class="p-content__item3">
            <a class="p-content__link" href="#">理念2へ</a>
          </div>
        </div>
        <div class="p-content__itembox">
          <div class="p-content__item4">
            <a class="p-content__link" href="#">理念3へ</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- works -->
  <section id="works" class="p-works l-top-works">
    <div class="works__inner">
      <div class="p-works__title c-section-header">
        <h2 class="c-section-header__title">制作実績</h2>
        <span class="c-section-header__subtitle">Works</span>
      </div>
      <div class="p-works__contents">
        <div class="p-works__body">
          <div class="swiper p-works__slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <figure class="p-works__picture">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/works1.jpg" alt="works1">
                </figure>
              </div>
              <div class="swiper-slide">
                <figure class="p-works__picture">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/works2.jpg" alt="works2">
                </figure>
              </div>
              <div class="swiper-slide">
                <figure class="p-works__picture">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/works3.jpg" alt="works3">
                </figure>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
          <div class="p-works__content">
            <p class="p-works__main-title">メインタイトルが入ります。
            </p>
            <p class="p-works__text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
            <div class="p-works__button-more">
              <a class="c-btn p-works__button-swipe" href="#">詳しく見る</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- overview -->
  <section id="overview" class="p-overview l-top-overview">
    <div class="p-overview__inner">
      <div class="p-overview__title c-section-header">
        <h2 class="c-section-header__title">企業概要</h2>
        <span class="c-section-header__subtitle">Overview</span>
      </div>
      <div class="p-overview__contents">
        <div class="p-overview__body">
          <div class="p-overview__picture">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/overview.jpg" alt="overview1">
          </div>
          <div class="p-overview__content">
            <p class="p-overview__main-title">メインタイトルが入ります。</p>
            <p class="p-overview__text">
              テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
            <div class="p-overview__button-more">
              <a class="c-btn p-overview__button-swipe" href="#">詳しく見る</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- blog -->
  <section id="blog" class="p-blog l-top-blog">
    <div class="p-blog__inner">
      <div class="p-blog__title c-section-header">
        <h2 class="c-section-header__title">ブログ</h2>
        <span class="c-section-header__subtitle">Blog</span>
      </div>
      <div class="p-blog__cards c-cards">
        <div class="c-cards__item c-card">
          <div class="c-card__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/rectangle1.jpg" alt="blog1">
          </div>
          <div class="c-card__body">
            <p class="c-card__title">タイトルが入ります。タイトルが入ります。</p>
            <p class="c-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
            <div class="p-blog__flex">
              <div class="c-card__group"><span>カテゴリ</span></div>
              <p class="c-card__time">2021.07.20</p>
            </div>
            <a href="#" class="c-card__link"></a>
          </div>
        </div>
        <div class="c-cards__item c-card">
          <div class="c-card__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/rectangle2.jpg" alt="blog2">
          </div>
          <div class="c-card__body">
            <p class="c-card__title">タイトルが入ります。タイトルが入ります。</p>
            <p class="c-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
            <div class="p-blog__flex">
              <div class="c-card__group">カテゴリ</div>
              <p class="c-card__time">2021.07.20</p>
            </div>
          </div>
          <a href="#" class="c-card__link"></a>
        </div>
        <div class="c-cards__item card">
          <div class="c-card__img">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/common/rectangle3.jpg" alt="blog3">
          </div>
          <div class="c-card__body">
            <p class="c-card__title">タイトルが入ります。タイトルが入ります。</p>
            <p class="c-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
            <div class="p-blog__flex">
              <div class="c-card__group">カテゴリ</div>
              <p class="c-card__time">2021.07.20</p>
            </div>
          </div>
          <a href="#" class="c-card__link"></a>
        </div>
      </div>
      <div class="p-blog__button">
        <a class="c-btn p-blog__button-swipe" href="#">詳しく見る</a>
      </div>
    </div>
  </section>

  <!-- contact -->
  <section id="contact" class="p-contact l-top-contact">
    <div class="p-contact__inner">
      <div class="p-contact__title c-section-header">
        <h2 class="c-section-header__title">お問い合わせ</h2>
        <span class="c-section-header__subtitle">Contact</span>
      </div>
      <p class="p-contact__text">
        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
      </p>
      <div class="p-contact__button">
        <a class="c-btn p-contact__button-swipe" href="#">お問い合わせへ</a>
      </div>
    </div>
  </section>

  <!-- totop -->
  <div class="c-totop"><a href="#"></a></div>

  <?php get_template_part( 'template-section/footer/content'); ?>

  <?php get_footer(); ?>
</body>

</html>