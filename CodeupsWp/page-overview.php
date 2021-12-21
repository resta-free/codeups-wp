<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <?php get_template_part( 'template-section/header/content'); ?>

  <!-- p-sub-overview -->
  <section class="p-sub-overview">
    <div class="p-sub-overview__inner">
      <div class="p-sub-overview__visual c-page-visual">
        <h3 class="p-sub-overview__title c-page-visual__title">企業概要</h3>
      </div>
      <?php get_template_part( 'template-section/breadcrumbs'); ?>
      <dl class="p-sub-overview__list">
        <?php if ( get_field( 'company' ) ) : ?>
        <div class="p-sub-overview__row">
          <dt class="p-sub-overview__term">会社名</dt>
          <dd class="p-sub-overview__data">
            <?php the_field( 'company' ); ?>
          </dd>
        </div>
        <?php endif; ?>
        <?php if ( get_field( 'establishment' ) ) : ?>
        <div class="p-sub-overview__row">
          <dt class="p-sub-overview__term">設立</dt>
          <dd class="p-sub-overview__data">
            <?php the_field( 'establishment' ); ?>
          </dd>
        </div>
        <?php endif; ?>
        <?php if ( get_field( 'capital' ) ) : ?>
        <div class="p-sub-overview__row">
          <dt class="p-sub-overview__term">資本金</dt>
          <dd class="p-sub-overview__data">
            <?php the_field( 'capital' ); ?>
          </dd>
        </div>
        <?php endif; ?>
        <?php if ( get_field( 'sales' ) ) : ?>
        <div class="p-sub-overview__row">
          <dt class="p-sub-overview__term">売上高</dt>
          <dd class="p-sub-overview__data">
            <?php the_field( 'sales' ); ?>
          </dd>
        </div>
        <?php endif; ?>
        <?php if ( get_field( 'representative' ) ) : ?>
        <div class="p-sub-overview__row">
          <dt class="p-sub-overview__term">代表者</dt>
          <dd class="p-sub-overview__data">
            <?php the_field( 'representative' ); ?>
          </dd>
        </div>
        <?php endif; ?>
        <?php if ( get_field( 'employees' ) ) : ?>
        <div class="p-sub-overview__row">
          <dt class="p-sub-overview__term">従業員数</dt>
          <dd class="p-sub-overview__data">
            <?php the_field( 'employees' ); ?>
          </dd>
        </div>
        <?php endif; ?>
        <?php if ( get_field( 'content' ) ) : ?>
        <div class="p-sub-overview__row">
          <dt class="p-sub-overview__term">事業内容</dt>
          <dd class="p-sub-overview__data">
            <?php the_field( 'content' ); ?>
          </dd>
        </div>
        <?php endif; ?>
        <?php if ( get_field( 'location' ) ) : ?>
        <div class="p-sub-overview__row">
          <dt class="p-sub-overview__term">所在地</dt>
          <dd class="p-sub-overview__data">
            <?php the_field( 'location' ); ?>
          </dd>
        </div>
        <?php endif; ?>
      </dl>
      <div class="p-sub-overview__block">
        <div class="p-sub-overview__map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.8278534024503!2d139.76493075038258!3d35.681240537482566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1638680638019!5m2!1sja!2sjp" width="375" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-section/sub-contact'); ?>

  <?php get_template_part( 'template-section/footer/content'); ?>

  <?php get_footer(); ?>
</body>

</html>