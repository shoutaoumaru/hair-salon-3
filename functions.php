<?php 
/**アイキャッチ画像 */
add_action('init', function() {   
  add_theme_support('post-thumbnails');
  });  
  //* * * * * * アーカイブ * * * *  */
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'news'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
 //* * * * * * ページネーション関数 * * * *  */
function the_pagination() {
  global $wp_query;
  $bignum = 999999999;
  if ( $wp_query->max_num_pages <= 1 )
  return;
  echo '<nav class="pagination">';
  echo paginate_links( array(
  'base' => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
  'format' => '',
  'current' => max( 1, get_query_var('paged') ),
  'total' => $wp_query->max_num_pages,
  'prev_text' => '&larr;',
  'next_text' => '&rarr;',
  'type' => 'list',
  'end_size' => 3,
  'mid_size' => 3
  ) );
  echo '</nav>';
  }
//お問い合わせと送信完了（固定ページ）のスラッグをセットする
$contact = 'contact';
$thanks = 'thanks';

//お問い合わせフォームの送信後にサンクスページへ飛ばす
add_action( 'wp_footer', 'redirect_thanks_page' );
function redirect_thanks_page() {
  global $contact;
  global $thanks;

  if( is_page($contact)  ) {
  ?>
  <script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
      location = '<?php echo home_url('/'.$thanks); ?>'; // 遷移先のURL
    }, false );
  </script>
  <?php }
}