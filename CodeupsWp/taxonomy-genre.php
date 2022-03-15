<?php
/**
 * Taxonomy Genre
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

  <!-- p-sub-works -->
  <section class="p-sub-works">
    <div class="p-sub-works__inner">
      <div class="p-sub-works__visual c-page-visual">
        <h3 class="p-sub-works__title c-page-visual__title">おすすめグッズ</h3>
      </div>

      <?php get_template_part( 'template-section/breadcrumbs'); ?>

    </div>

    <ul class="p-sub-works__list">
      <li class="p-sub-works__category"><a href="<?php echo esc_url( get_post_type_archive_link( 'goods' ) ); ?>">ALL</a></li>
      <?php 
        $cat = get_queried_object();
        $cat_name = $cat->name;
        ?>
      <?php
        $genre_terms = get_terms( 'genre', array( 'hide_empty' => false ) );
        foreach ( $genre_terms as $genre_term ) :
      ?>
      <li class="p-sub-works__category <?php if( $cat_name == esc_html($genre_term->name)){echo "is-active";}?>"><a href="<?php echo esc_url( get_term_link( $genre_term, 'genre' ) ); ?>"><?php echo esc_html( $genre_term->name ); ?></a></li>
      <?php
        endforeach;
      ?>
    </ul>

    <?php if ( have_posts() ) : ?>
    <div class="p-sub-works__items">
      <?php while ( have_posts() ) : ?>
      <?php the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="p-sub-works__item">
        <div class="p-sub-works__img">
          <?php
          if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'my_thumbnail' );
          } else {
            echo '<img loading="lazy" src="' . esc_url( get_template_directory_uri() ) . '/assets/img/common/noimg.png" alt="">';
          }
        ?>
          <span><?php echo esc_html( get_the_terms( get_the_ID(), 'genre' )[0]->name ); ?></span>
        </div>
        <p class="p-sub-works__caption"><?php the_title(); ?></p>
      </a>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>

    <?php custom_wp_pagenavi(); ?>
  </section>

  <?php get_template_part( 'template-section/footer/content'); ?>

  <?php get_footer(); ?>
</body>

</html>