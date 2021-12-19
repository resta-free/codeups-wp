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
      <p class="l-breadcrumb c-breadcrumb">トップ >お問い合わせ</p>
      <div class="l-inner">
        <div class="p-page-contact__contents">
          <div class="p-page-contact__content">
            <div class="p-page-contact__head">
              <p class="p-page-contact__heading">※会社名・団体名</p>
            </div>
            <div class="p-page-contact__item c-contact-text">
              <input class="c-contact-text__text" type="text" placeholder="テキストがはいります" />
            </div>
          </div>
          <div class="p-page-contact__content">
            <div class="p-page-contact__head">
              <p class="p-page-contact__heading">※部署名</p>
            </div>
            <div class="p-page-contact__item c-contact-text">
              <input class="c-contact-text__text" type="text" placeholder="テキストがはいります" />
            </div>
          </div>
          <div class="p-page-contact__content">
            <div class="p-page-contact__head">
              <p class="p-page-contact__heading">※お名前</p>
            </div>
            <div class="p-page-contact__item c-contact-text">
              <input class="c-contact-text__text" type="text" placeholder="テキストがはいります" />
            </div>
          </div>
          <div class="p-page-contact__content">
            <div class="p-page-contact__head">
              <p class="p-page-contact__heading">※ふりがな</p>
            </div>
            <div class="p-page-contact__item c-contact-text">
              <input class="c-contact-text__text" type="text" placeholder="テキストがはいります" />
            </div>
          </div>
          <div class="p-page-contact__content">
            <div class="p-page-contact__head">
              <p class="p-page-contact__heading">※お問い合わせ内容</p>
            </div>
            <div class="p-page-contact__item c-contact-textarea">
              <textarea class="c-contact-textarea__text" placeholder="テキストがはいります"></textarea>
            </div>
          </div>
          <div class="p-page-contact__content c-contact-button">
            <input class="c-contact-button__button" type="submit" value="送信" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part( 'template-section/footer/content'); ?>

  <?php get_footer(); ?>
</body>

</html>