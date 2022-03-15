<?php
/**
 * Taxonomy Language
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

  <!-- p-sub-blog -->
  <section class="p-sub-blog">
    <div class="p-sub-blog__inner">
      <div class="p-sub-blog__visual c-page-visual">
        <h3 class="p-sub-blog__title c-page-visual__title">ブログ</h3>
      </div>
      <?php get_template_part( 'template-section/breadcrumbs'); ?>

      <ul class="p-sub-blog__list">
        <li class="p-sub-blog__category"><a href="<?php echo esc_url( get_post_type_archive_link( 'blog' ) ); ?>">ALL</a></li>
        <?php 
        $cat = get_queried_object();
        $cat_name = $cat->name;
        ?>
        <?php
        $language_terms = get_terms( 'language', array( 'hide_empty' => false ) );
        foreach ( $language_terms as $language_term ) :
      ?>
        <li class="p-sub-blog__category <?php if( $cat_name == esc_html($language_term->name)){echo "is-active";}?>"><a href="<?php echo esc_url( get_term_link( $language_term, 'language' ) ); ?>"><?php echo esc_html( $language_term->name ); ?></a></li>
        <?php
        endforeach;
      ?>
      </ul>

      <div class="l-inner">
        <?php if (have_posts()): ?>
        <div class="p-sub-blog__cards c-cards">
          <?php while (have_posts()): the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="c-cards__item c-card">
            <div class="c-card__img">
              <?php
              if (has_post_thumbnail() ) {
              the_post_thumbnail('large');
              } else {
              echo '<img loading="lazy" src="' . esc_url(get_template_directory_uri()) . 'assets//img/common/noimg.png" alt="">';
              }
              ?>
            </div>
            <div class="c-card__body">
              <p class="c-card__title"><?php echo mb_substr( $post->post_title, 0, 20) . '...'; ?></p>
              <p class="c-card__text"><?php echo get_the_excerpt(); ?></p>
              <div class="c-card__flex">
                <div class="c-card__group"><?php echo esc_html( get_the_terms( get_the_ID(), 'language' )[0]->name ); ?></div>
                <time class="c-card__time" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
              </div>
            </div>
          </a>
          <?php endwhile; ?>
        </div>
        <?php endif; ?>
      </div>
      <?php custom_wp_pagenavi(); ?>
    </div>
  </section>

  <?php get_template_part( 'template-section/sub-contact'); ?>

  <?php get_template_part( 'template-section/footer/content'); ?>

  <?php get_footer(); ?>
</body>

</html>