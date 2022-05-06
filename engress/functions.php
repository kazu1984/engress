<?php

// ------------------------------------------------
// css、js、fontの読み込み
// ------------------------------------------------
function my_script_init()
{
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.0.min.js', "", "1.0.1");

  // google font
  wp_enqueue_style('NotoSans', '//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap');
  wp_enqueue_style('Lexend', '//fonts.googleapis.com/css2?family=Lexend+Deca:wght@400;500&display=swap');

  // js
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/common.js?20220101', array('jquery'), '1.0.1', true);

  // css
  wp_enqueue_style('style-name', get_template_directory_uri() . '/assets/css/styles.css?20220101', array(), '1.0.1', false);
}
add_action('wp_enqueue_scripts', 'my_script_init');


// ------------------------------------------------
// wordpressエディタ自動整形の無効化
// ------------------------------------------------
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
add_filter(
  'tiny_mce_before_init',
  function ($init_array) {
    global $allowedposttags;
    $init_array['valid_elements']          = '*[*]';
    $init_array['extended_valid_elements'] = '*[*]';
    $init_array['valid_children']          = '+a[' . implode('|', array_keys($allowedposttags)) . ']';
    $init_array['indent']                  = true;
    $init_array['wpautop']                 = false;
    $init_array['force_p_newlines']        = false;
    return $init_array;
  }
);


// ------------------------------------------------
// ブロックエディタ対応
// ------------------------------------------------
add_theme_support('wp-block-styles');


// ------------------------------------------------
// wordpress更新通知を管理者権限のみに表示
// ------------------------------------------------
function update_nag_admin_only()
{
  if (!current_user_can('administrator')) {
    remove_action('admin_notices', 'update_nag', 3);
  }
}
add_action('admin_init', 'update_nag_admin_only');


// ------------------------------------------------
// アイキャッチ有効化
// ------------------------------------------------
add_theme_support('post-thumbnails');

// ------------------------------------------------
// デフォルトアイキャッチの設定
// ------------------------------------------------
function get_eyecatch_with_default()
{
  if (has_post_thumbnail()) {
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'full');
  } else {
    $img = array(get_template_directory_uri() . '/assets/images/common/no_image.png');
  }

  return $img;
}

// ------------------------------------------------
// アイキャッチのaltを取得
// ------------------------------------------------
function get_eyecatch_alt()
{
  if (has_post_thumbnail()) {
    $thumbnail_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
  } else {
    $thumbnail_alt = "no image";
  }
  return $thumbnail_alt;
}


// ------------------------------------------------
// titleタグの自動生成
// ------------------------------------------------
add_theme_support('title-tag');


// ------------------------------------------------
// titleにセパレータを出力
// ------------------------------------------------
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator)
{
  $separator = '|';
  return $separator;
}


// ------------------------------------------------
// 記事タイトルが未入力の場合のテキスト
// ------------------------------------------------
function get_post_title($title)
{
  if ($title != "") {
    return $title;
  }
  return "(non title)";
}

/**
 * 不要なメニューを非表示
 * （コメントアウトした行のメニューは表示される）
 */
add_action('admin_menu', 'my_add_remove_admin_menus');
function my_add_remove_admin_menus()
{
  global $menu;
  unset($menu[2]);  // ダッシュボード
  unset($menu[4]);  // メニューの線1
  // unset($menu[5]);  // 投稿
  // unset($menu[10]); // メディア
  // unset($menu[15]); // リンク
  // unset($menu[20]); // ページ
  unset($menu[25]); // コメント
  unset($menu[59]); // メニューの線2
  // unset($menu[60]); // テーマ
  // unset($menu[65]); // プラグイン
  // unset($menu[70]); // プロフィール
  // unset($menu[75]); // ツール
  // unset($menu[80]); // 設定
  unset($menu[90]); // メニューの線3
}

/**
 * 投稿の自動整形を無効（ダブルクオーテーションなど）
 */
add_filter('run_wptexturize', '__return_false');

