<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php get_template_part( 'template-section/header/content'); ?>

  <div class="p-page-thanks">
    <div class="p-page-thanks__inner l-inner">
      <p class="p-page-thanks__title">お問い合わせ完了</p>
      <p class="p-page-thanks__text">3営業日以内に<span>返信させて頂きます。</span></p>
      <div class="p-page-thanks__button">
        <a class="c-btn p-page-thanks__button-swipe" href="<?php echo esc_url( home_url( '/' ) ); ?>">TOPへ</a>
      </div>
    </div>
  </div>

  <?php get_template_part( 'template-section/footer/content'); ?>

  <?php get_footer(); ?>
</body>

</html>