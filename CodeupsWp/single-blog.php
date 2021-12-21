<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php get_template_part( 'template-section/header/content'); ?>

  <!-- p-blog-detail -->
  <section class="p-blog-detail">
    <div class="l-inner">
      <div class="l-breadcrumbs p-blog-detail__breadcrumbs">
        <?php if(function_exists('bcn_display')) {
        bcn_display();
        }?>
      </div>
      <div class="p-blog-detail__inner">
        <h1 class="p-blog-detail__title"><?php the_title(); ?></h1>
        <div class="p-blog-detail__block">
          <time class="p-blog-detail__time" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y/m/d' ); ?></time>
          <div class="p-blog-detail__category"><a href="<?php echo esc_url( get_term_link( get_the_terms( get_the_ID(), 'language' )[0], 'language' ) ); ?>"><?php echo esc_html( get_the_terms( get_the_ID(), 'language' )[0]->name ); ?></a></div>
        </div>
        <div class="p-blog-detail__eyeCatch">
          <?php
          if (has_post_thumbnail() ) {
          // アイキャッチ画像が設定されてればミディアムサイズで
          the_post_thumbnail('full');
          } else {
          // なければnoimage画像をデフォルトで表示
          echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/common/noimg.png" alt="">';
          }
          ?>
        </div>
        <?php
        $content_string = get_the_content();
        $content_string = str_replace('<p','<p class="p-blog-detail__text" ',$content_string);
        $content_string = str_replace('<h2','<h2 class="p-blog-detail__secondary-heading" ',$content_string);
        $content_string = str_replace('<h3','<h3 class="p-blog-detail__tertiary-heading" ',$content_string);
        $content_string = str_replace('<li','<li class="p-bblog-detail__item" ',$content_string);
        $content_string = str_replace('<ul','<ul class="p-bblog-detail__list" ',$content_string);
        $content_string = str_replace('<ol','<ol class="p-bblog-detail__list" ',$content_string);
        echo $content_string;
        ?>
      </div>
      <div class="c-pagenation l-pagenation">
        <?php $nextpost = get_adjacent_post(false, '', false); if ($nextpost) : ?>
        <div class="c-pagenation__next">
          <a href="<?php echo get_permalink($nextpost->ID); ?>">next
          </a>
        </div>
        <?php endif; ?>
        <a class="c-pagenation__list" href="<?php echo esc_url( get_term_link( get_the_terms( get_the_ID(), 'language' )[0], 'language' ) ); ?>">一覧</a>
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
 $term = array_shift(get_the_terms($post->ID, 'language')); //←ここが追加
 $args = array(
  'numberposts' => 4, //８件表示(デフォルトは５件)
  'post_type' => 'blog', //カスタム投稿タイプ名
  'taxonomy' => 'language', //タクソノミー名
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
                if ($terms = get_the_terms($post->ID, 'language')) {
                    foreach ( $terms as $term ) {
                        echo esc_html($term->name);
                    }
                }
                ?></div>
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