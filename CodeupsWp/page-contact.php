<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php get_template_part( 'template-section/header/content'); ?>

  <section class="p-page-contact">
    <div class="p-page-contact__inner">
      <div class="p-page-contact__visual c-page-visual">
        <h3 class="p-page-contact__title c-page-visual__title">お問い合わせ</h3>
      </div>
      <?php get_template_part( 'template-section/breadcrumbs'); ?>
      <div class="l-inner">
        <?php if (have_posts()): ?>
        <div>
          <?php while (have_posts()): the_post(); ?>
          <?php the_content(); ?>
          <?php endwhile; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-section/footer/content'); ?>

  <?php get_footer(); ?>
</body>

</html>