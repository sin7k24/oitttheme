<?php
function oitttheme_enqueue_styles() {
  // 親テーマがある場合はここで読み込む（今回は自作なので不要）
  // wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

    // Google Fonts を読み込み
  wp_enqueue_style(
    'noto-sans-jp',
    'https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap',
    false
  );


  // 自作テーマの style.css を読み込む
  wp_enqueue_style( 'oitttheme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'oitttheme_enqueue_styles' );
