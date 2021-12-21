<?php
/**
 * Single Works
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php get_template_part( 'template-section/header/content'); ?>

  <!-- works-detail -->
  <section class="p-works-detail">
    <div class="p-works-detail__inner">
      <?php get_template_part( 'template-section/breadcrumbs'); ?>
      <h4 class="p-works-detail__title"><?php the_title(); ?></h4>
      <div class="p-works-detail__block">
        <time class="p-works-detail__time" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y/m/d' ); ?></time>
        <div class="p-works-detail__category"><a href="<?php echo esc_url( get_term_link( get_the_terms( get_the_ID(), 'genre' )[0], 'genre' ) ); ?>"><?php echo esc_html( get_the_terms( get_the_ID(), 'genre' )[0]->name ); ?></a></div>
      </div>
      <!-- メインスライダー -->
      <div class="swiper p-works-detail__slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img class="works-detail__slide--pc" src="<?php echo get_template_directory_uri() ?>/assets/img/works/works-detail_img1.jpg" alt="スライダー画像">
            <img class="works-detail__slide--sp" src="<?php echo get_template_directory_uri() ?>/assets/img/works/works-detail_img1-sp.jpg" alt="スライダー画像">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/works-detail_img3.jpg" alt="スライダー画像">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/works-detail_img4.jpg" alt="スライダー画像">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/works-detail_img5.jpg" alt="スライダー画像">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/works-detail_img6.jpg" alt="スライダー画像">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/works-detail_img7.jpg" alt="スライダー画像">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/works-detail_img8.jpg" alt="スライダー画像">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/works-detail_img9.jpg" alt="スライダー画像">
          </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
      <!-- サムネイルスライダー -->
      <div class="swiper p-works-detail__thumbs">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/works-detail_img2.jpg" alt="スライダー画像">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/works-detail_img3.jpg" alt="スライダー画像">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/works-detail_img4.jpg" alt="スライダー画像">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/works-detail_img5.jpg" alt="スライダー画像">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/works-detail_img6.jpg" alt="スライダー画像">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/works-detail_img7.jpg" alt="スライダー画像">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/works-detail_img8.jpg" alt="スライダー画像">
          </div>
          <div class="swiper-slide">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/works/works-detail_img9.jpg" alt="スライダー画像">
          </div>
        </div>
      </div>
      <dl class="p-works-detail__list">
        <?php if ( get_field( 'production' ) ) : ?>
        <div class="p-works-detail__box">
          <dt class="p-works-detail__term">制作のポイント</dt>
          <dd class="p-works-detail__data">
            <?php the_field( 'production' ); ?>
          </dd>
        </div>
        <?php endif; ?>
        <?php if ( get_field( 'design' ) ) : ?>
        <div class="p-works-detail__box">
          <dt class="p-works-detail__term">デザインのポイント</dt>
          <dd class="p-works-detail__data">
            <?php the_field( 'design' ); ?>
          </dd>
        </div>
        <?php endif; ?>
        <?php if ( get_field( 'others' ) ) : ?>
        <div class="p-works-detail__box">
          <dt class="p-works-detail__term">その他</dt>
          <dd class="p-works-detail__data">
            <?php the_field( 'others' ); ?>
          </dd>
        </div>
        <?php endif; ?>
      </dl>
      <div class="c-pagenation l-pagenation">
        <?php $nextpost = get_adjacent_post(false, '', false); if ($nextpost) : ?>
        <div class="c-pagenation__next">
          <a href="<?php echo get_permalink($nextpost->ID); ?>">next
          </a>
        </div>
        <?php endif; ?>
        <a class="c-pagenation__list" href="<?php echo esc_url( get_term_link( get_the_terms( get_the_ID(), 'genre' )[0], 'genre' ) ); ?>">一覧</a>
        <?php $prevpost = get_adjacent_post(false, '', true); if ($prevpost) : ?>
        <div class="c-pagenation__prev">
          <a href="<?php echo get_permalink($prevpost->ID); ?>">prev
          </a>
        </div>
        <?php endif; ?>
      </div>
      <div class="p-works-detail__relatedArticle">
        <span class="p-works-detail__relatedArticle--sp">おすすめ記事</span>
        <span class="p-works-detail__relatedArticle--pc">関連記事</span>
      </div>

      <?php
 global $post;
 $term = array_shift(get_the_terms($post->ID, 'genre')); //←ここが追加
 $args = array(
  'numberposts' => 4, //８件表示(デフォルトは５件)
  'post_type' => 'works', //カスタム投稿タイプ名
  'taxonomy' => 'genre', //タクソノミー名
  'term' => $term->slug, //ターム名 ←ここが追加
  'orderby' => 'rand', //ランダム表示
  'post__not_in' => array($post->ID) //表示中の記事を除外
 );
?>
      <?php $myPosts = get_posts($args); if($myPosts) : ?>
      <div class="p-works-detail__cards c-cards-fourSheet">
        <?php foreach($myPosts as $post) : setup_postdata($post); ?>
        <a href="<?php the_permalink(); ?>" class="c-cards-fourSheet__item c-card-fourSheet">
          <div class="c-card-fourSheet__img">
            <?php
      if (has_post_thumbnail() ) {
      // アイキャッチ画像が設定されてればミディアムサイズで表示
      the_post_thumbnail('large');
      } else {
      // なければnoimage画像をデフォルトで表示
      echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
      }
      ?>
          </div>
          <div class="c-card-fourSheet__body">
            <p class="c-card-fourSheet__title"><?php echo mb_substr( $post->post_title, 0, 20) . '...'; ?></p>
            <div class="c-card-fourSheet__flex">
              <div class="c-card-fourSheet__group">
                <?php
                if ($terms = get_the_terms($post->ID, 'genre')) {
                    foreach ( $terms as $term ) {
                        echo esc_html($term->name);
                    }
                }
                ?>
              </div>
              <time class="c-card-fourSheet__time" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
            </div>
          </div>
        </a>
        <?php endforeach; ?>
      </div>
      <?php endif; wp_reset_postdata(); ?>

    </div>
  </section>

  <?php get_template_part( 'template-section/sub-contact'); ?>

  <?php get_template_part( 'template-section/footer/content'); ?>
  <?php get_footer(); ?>
</body>

</html>