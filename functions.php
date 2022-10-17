<?php add_theme_support( 'post-thumbnails' ); ?>

<?php
add_action('init', 'custom_taxonomy_cat');
function custom_taxonomy_cat(){
  register_taxonomy( // カスタムタクソノミーの追加関数
    'blog-cat', // カテゴリーの名前（半角英数字の小文字）
    'blog',     // カテゴリーを追加したいカスタム投稿タイプ名
    array(      // オプション（以下
      'label' => 'ブログカテゴリー', // 表示名称
      'public' => true, // 管理画面に表示するかどうかの指定
      'hierarchical' => false, // 階層を持たせるかどうか
    )
  );
}

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all("/]+src=[\"'](s?https?:\/\/[\-_\.!~\*'()a-z0-9;\/\?:@&=\+\$,%#]+\.(jpg|jpeg|png|gif))[\"'][^>]+>/i", $post->post_content, $matches);
  $first_img = $matches [1] [0];
  if(empty($first_img)){ //Defines a default image
  $first_img = "/images/default.jpg";
  }
  return $first_img;
  }
?>