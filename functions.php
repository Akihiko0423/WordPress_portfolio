<?php

//テーマサポート
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support('post-thumbnails');           //アイキャッチ画像
register_nav_menus() ;                          //テーマチェックでadd_theme_support('menus')だとエラー起きたので置き換え
add_theme_support('title-tag');                 //タイトルタグを出力
add_theme_support( 'automatic-feed-links' );    //この機能は、headerでの、投稿とコメントのRSSフィードのリンクを有効にします

//外部ファイルの読み込み
function hamburger_script() {
    wp_enqueue_style('font-awesome','https://use.fontawesome.com/releases/v5.6.1/css/all.css');
    wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
    wp_enqueue_script('jquery');
}

add_action( 'wp_enqueue_scripts', 'hamburger_script' );