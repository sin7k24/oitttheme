<?php
// テーマの機能設定を行うフック
function oitttheme_setup()
{
    // アイキャッチ画像を有効にする
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'oitttheme_setup');

// スタイルシートやスクリプトを読み込むフック
function oitttheme_enqueue_styles()
{
    // Google Fonts を読み込み
    wp_enqueue_style(
        'noto-sans-jp',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap',
        false
    );

    // 自作テーマの style.css を読み込む
    wp_enqueue_style('oitttheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'oitttheme_enqueue_styles');

