<?php
//テーマのセットアップ
// HTML5でマークアップさせる
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
// Feedのリンクを自動で生成する
add_theme_support( 'automatic-feed-links' );
//アイキャッチ画像を使用する設定
add_theme_support('post-thumbnails');
register_post_type(
    'event',
    // 'supports'に'thumbnail'を追記
    array('supports' => array('title','editor','thumbnail'))
);
//サムネイルの大きさ指定	
add_image_size('thumb75',75,75,true);
//alt属性に関する引数を増やしておく
function get_thumb_img($size = 'full', $alt = null) {

    $thumb_id = get_post_thumbnail_id();    
    $thumb_img = wp_get_attachment_image_src($thumb_id, $size);    
    $thumb_src = $thumb_img[0];

    $alt = ($alt) ? $alt : get_the_title();  //追記部分。alt属性に関する引数が空だった場合、デフォルトで投稿タイトルを入力する

    return '<img src="'.$thumb_src.'" alt="'.$alt.'">';
};



function slider_scripts(){
    wp_enqueue_script( 'slider', get_template_directory_uri() .'/slider.js', array('jquery') );
};
add_action( 'wp_enqueue_scripts' , 'slider_scripts' );

