<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php get_template_part( 'template-section/header/content'); ?>

  <section class="p-news">
    <div class="p-news__inner">
      <div class="p-news__visual c-page-visual">
        <h3 class="c-page-visual__title"><?php the_archive_title() ?></h3>
      </div>
    </div>

    <?php get_template_part( 'template-section/breadcrumbs'); ?>

    <?php if ( have_posts() ) : ?>
    <div class="p-news__items">
      <?php while ( have_posts() ) : the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="p-news__item c-newsItem">
        <time class="c-newsItem__time" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
        <?php
        // カテゴリー１つ目の名前を表示
        $category = get_the_category();
        if ($category[0] ) {
        echo '<div class="c-newsItem__category">' . $category[0]->cat_name . '</div>';
        }
        ?>
        <p class="c-newsItem__text c-newsItem__text--yellow"><?php the_title(); ?></p>
      </a>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>

    <?php custom_wp_pagenavi(); ?>
  </section>

  <?php get_template_part( 'template-section/sub-contact'); ?>

  <?php get_template_part( 'template-section/footer/content'); ?>

  <?php get_footer(); ?>
</body>

</html>