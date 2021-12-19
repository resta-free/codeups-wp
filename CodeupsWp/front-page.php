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
            <h1 class="p-mv__main-title"><?php bloginfo('name'); ?></h1>
            <p class="p-mv__sub-title"><?php bloginfo('description'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
$news_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'category_name' => 'news',
		'posts_per_page' => 1,
	)
);
?>
  <?php if ( $news_query->have_posts() ) : ?>
  <?php while ( $news_query->have_posts() ) : ?>
  <?php $news_query->the_post(); ?>
  <div class="p-news-content">
    <div class="p-news-content__item c-newsItem">
      <time class="c-newsItem__time" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
      <div class="c-newsItem__category"><a href="<?php the_permalink(); ?>">お知らせ</a></div>
      <p class="c-newsItem__text c-newsItem__text--underline"><?php the_title(); ?></p>
      <div class="p-news-content__button">
        <?php
        $category = get_the_category();
        if ( $category[0] ) : ?>
        <a class="p-news-content__button-swipe" href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>">すべて見る</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_postdata(); ?>

  <!-- l-diagonal-line -->
  <div class="l-diagonal-line">
    <div class="l-diagonal-line__downward">
      <!-- content -->
      <section id="content" class="p-content l-top-content">
        <div class="p-content__inner">
          <div class="p-content__title c-section-header">
            <h2 class="c-section-header__title">企業概要</h2>
            <span class="c-section-header__subtitle">Content</span>
          </div>
          <div class="p-content__items">
            <div class="p-content__itembox">
              <div class="p-content__item1">
                <a class="p-content__link" href="<?php echo esc_url( home_url( '/' ) ); ?>/content#content">経営理念ページへ</a>
              </div>
            </div>
            <div class="p-content__itembox">
              <div class="p-content__item2">
                <a class="p-content__link" href="<?php echo esc_url( home_url( '/' ) ); ?>/content#content1">理念1へ</a>
              </div>
            </div>
            <div class="p-content__itembox">
              <div class="p-content__item3">
                <a class="p-content__link" href="<?php echo esc_url( home_url( '/' ) ); ?>/content#content2">理念2へ</a>
              </div>
            </div>
            <div class="p-content__itembox">
              <div class="p-content__item4">
                <a class="p-content__link" href="<?php echo esc_url( home_url( '/' ) ); ?>/content#content3">理念3へ</a>
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
                <?php
                $args = array(
                  'post_type' => 'works',
                  'orderby' => 'DESC',
                  'posts_per_page' => 3
                );
                $the_query = new WP_Query($args);
                if($the_query->have_posts()):
                  ?>
                <div class="swiper-wrapper">
                  <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                  <div class="swiper-slide">
                    <figure class="p-works__picture">
                      <?php
                      if (has_post_thumbnail() ) {
                      the_post_thumbnail('large');
                      } else {
                      echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/common/noimg.png" alt="">';
                      }
                      ?>
                    </figure>
                  </div>
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                </div>
                <?php else: ?>
                <?php endif; ?>
              </div>
              <div class="swiper-pagination"></div>
              <div class="p-works__content">
                <p class="p-works__main-title">メインタイトルが入ります。
                </p>
                <p class="p-works__text">
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
                <div class="p-works__button-more">
                  <a class="c-btn p-works__button-swipe" href="<?php echo esc_url( home_url( '/' ) ); ?>/works/">詳しく見る</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="l-diagonal-line__upward">
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
                  <a class="c-btn p-overview__button-swipe" href="<?php echo esc_url( home_url( '/' ) ); ?>/overview">詳しく見る</a>
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

          <?php
          $args = array(
            'post_type' => 'blog',
            'orderby' => 'rand',
            'posts_per_page' => 3
          );
          $the_query = new WP_Query($args);
          if($the_query->have_posts()): ?>
          <div class="p-blog__cards c-cards">
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="c-cards__item c-card">
              <div class="c-card__img">
                <?php
              if (has_post_thumbnail() ) {
                      the_post_thumbnail('large');
                      } else {
                      echo '<img src="' . esc_url(get_template_directory_uri()) . 'assets//img/common/noimg.png" alt="">';
                      }
                      ?>
              </div>
              <div class="c-card__body">
                <p class="c-card__title"><?php echo mb_substr( $post->post_title, 0, 20) . '...'; ?></p>
                <p class="c-card__text"><?php echo get_the_excerpt(); ?></p>
                <div class="p-blog__flex">
                  <div class="c-card__group"><?php echo esc_html( get_the_terms( get_the_ID(), 'language' )[0]->name ); ?></div>
                  <time class="c-card__time" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
                </div>
              </div>
            </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </div>
          <?php endif; ?>
          <div class="p-blog__button">
            <a class="c-btn p-blog__button-swipe" href="<?php echo esc_url( home_url( '/' ) ); ?>/blog">詳しく見る</a>
          </div>
        </div>
      </section>
    </div>
  </div>

  <?php get_template_part( 'template-section/contact'); ?>

  <?php get_template_part( 'template-section/footer/content'); ?>

  <?php get_footer(); ?>
</body>

</html>