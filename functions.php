<?php 

/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/

function my_setup() {
    add_theme_support('post-thumbnails');//アイキャッチ有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');
// セットアップの書き方の型
// function custom_theme_setup() {
// add_theme_support( $feature, $arguments );
// }
// add_action( 'after_setup_theme', 'custom_theme_setup' );

/**
* CSSとJavaScriptの読み込み
*/
function my_script_init()
{
  wp_enqueue_style( 'google-fonts-noto-sans', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700&display=swap" rel="stylesheet" rel="stylesheet"', array(), '1.0.0', 'all' );
wp_enqueue_style('google-fonts-fira-sans', 'https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet', array(), '1.0.0', 'all');
wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', array(), '1.0.0', 'all');
wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
wp_enqueue_script('js-swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array( 'jquery' ), '1.0.0', true);
wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');



//お問い合わせcontact form7thanks-pageに飛ばす記述
$contact = 'contact';
$download = 'download';
$cThanks = 'contact-thanks';
$dThanks = 'download-thanks';
add_action( 'wp_footer', 'add_thanks_page' );
function add_thanks_page() {
  global $contact ;
  global $download ;
  global $dThanks ;
  global $cThanks ;
if( is_page('contact') ) {//ここにIDを入れるis-page('/contact');
echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'esc_url(home_url($contact/$cThanks))'; 
}, false );
</script>
EOD;
}
if( is_page('download') ) { //ここにIDを入れるget_the_IDが意図した挙動にならなかった為is-page('');に変更
echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'esc_url(home_url($download/$dThanks))'; 
}, false );
</script>
EOD;
}
}