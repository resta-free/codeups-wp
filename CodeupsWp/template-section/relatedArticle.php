<div class="p-blog-detail__relatedArticle">
  <span class="p-blog-detail__relatedArticle--sp">おすすめ記事</span>
  <span class="p-blog-detail__relatedArticle--pc">関連記事</span>
</div>

<?php if( has_category() ) {
$post_cats = get_the_category();
$cat_ids = array();
//所属カテゴリーのIDリストを作っておく
foreach($post_cats as $cat) {
$cat_ids[] = $cat->term_id;
}
}

$myposts = get_posts( array(
'post_type' => 'post', // 投稿タイプ
'posts_per_page' => '4', // ８件を取得
'post__not_in' => array( $post->ID ),// 表示中の投稿を除外
'category__in' => $cat_ids, // この投稿と同じカテゴリーに属する投稿の中から
'orderby' => 'rand' // ランダムに
) );
if( $myposts ): ?>
<div class="p-blog-detail__cards c-cards-fourSheet">
  <?php foreach($myposts as $post): setup_postdata($post);?>
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
        <?php
        $category = get_the_category();
        if ( $category[0] ) : ?>
        <div class="c-card-fourSheet__group"><?php echo $category[0]->cat_name; ?></div>
        <?php endif; ?>
        <time class="c-card-fourSheet__time" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
      </div>
    </div>
  </a>
  <?php endforeach; wp_reset_postdata(); ?>
</div>
<?php endif; ?>