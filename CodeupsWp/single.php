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
          <?php
            $category = get_the_category();
            if ( $category[0] ) : ?>
          <div class="p-blog-detail__category"><a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>"><?php echo $category[0]->cat_name; ?></a></div>
          <?php endif; ?>
        </div>
        <div class="p-blog-detail__eyeCatch">
          <?php
          if (has_post_thumbnail() ) {
          the_post_thumbnail('large');
          } else {
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
        <a class="c-pagenation__list" href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>">一覧</a>
        <?php $prevpost = get_adjacent_post(false, '', true); if ($prevpost) : ?>
        <div class="c-pagenation__prev">
          <a href="<?php echo get_permalink($prevpost->ID); ?>">prev
          </a>
        </div>
        <?php endif; ?>
      </div>
      <?php get_template_part( 'template-section/relatedArticle'); ?>
    </div>
  </section>
  <?php get_template_part( 'template-section/sub-contact'); ?>
  <?php get_template_part( 'template-section/footer/content'); ?>
  <?php get_footer(); ?>
</body>

</html>