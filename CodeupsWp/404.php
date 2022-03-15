<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php get_template_part( 'template-section/header/content'); ?>

  <div class="l-404">
    <p class="l-404__title">404 Not Found</p>
    <p class="l-404__text">お探しのページは<span>見つかりませんでした。</span></p>
    <div class="l-404__button">
      <a href="<?php echo esc_url(home_url('/')); ?>">TOPへ</a>
    </div>
  </div>

  <?php get_template_part( 'template-section/footer/content'); ?>

  <?php get_footer(); ?>
</body>

</html>