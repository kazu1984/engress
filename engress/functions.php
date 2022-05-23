<?php

// ------------------------------------------------
// テーマのセットアップ
// ------------------------------------------------
function my_theme_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('wp-block-styles');
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_theme_setup');


// ------------------------------------------------
// css、js、fontの読み込み
// ------------------------------------------------
function my_script_init()
{
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.0.min.js', "", "1.0.1");

  // scroll-hint
  wp_enqueue_style('scroll-hint', '//unpkg.com/scroll-hint@latest/css/scroll-hint.css', array(), '1.0.1', false);
  wp_enqueue_script('scroll-hint', '//unpkg.com/scroll-hint@1.1.10/js/scroll-hint.js', array(), '1.0.1', true);

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


/**
 * mw-wp-formではビジュアルエディタを非表示
 */
function disable_visual_editor_in_page()
{
  global $typenow;
  if ($typenow == 'mw-wp-form') {
    add_filter('user_can_richedit', 'disable_visual_editor_filter');
  }
}
function disable_visual_editor_filter()
{
  return false;
}
add_action('load-post.php', 'disable_visual_editor_in_page');
add_action('load-post-new.php', 'disable_visual_editor_in_page');


/**
 * お問合せフォームのエラーメッセージ変更
 */
function my_error_message($error, $key, $rule)
{
  if ($key === 'company' && $rule === 'noempty') {
    return '会社名が入力されていません';
  }
  if ($key === 'mail' && $rule === 'noempty') {
    return 'メールアドレスが入力されていません';
  }
  if ($key === 'name' && $rule === 'noempty') {
    return '氏名が入力されていません';
  }
  if ($key === 'tel' && $rule === 'noempty') {
    return '電話番号が入力されていません';
  }
  if ($key === 'contact' && $rule === 'required') {
    return 'お問い合わせの種類を選択してください';
  }
  if ($key === 'detail' && $rule === 'noempty') {
    return 'お問い合わせの内容が入力されていません';
  }
  if ($key === 'check' && $rule === 'required') {
    return 'プライバシーポリシーの同意が必要です';
  }
  return $error;
}
add_filter('mwform_error_message_mw-wp-form-40', 'my_error_message', 10, 3);

/**
 * お問い合わせ完了ページのみ親のパンくず非表示
 */
add_action('bcn_after_fill', function ($trail) {
  if (is_page('thanks')) {
    if (($count = count($trail->breadcrumbs)) > 2) {
      array_splice($trail->breadcrumbs, 1, $count -  2);
    }
  }
});

/**
 *  メインループの制御
 */
function my_query($query)
{
  if (is_admin() || !$query->is_main_query()) {
    return;
  }

  $post_per_page = 10;
  $query->set('posts_per_page', $post_per_page);
  $query->set('ignore_sticky_posts', 1);
  
  if ($query->is_front_page()) {
    $query->set('posts_per_page', 3);
  }
  
  // if ($query->is_post_type_archive('news')) {
  //   $query->set('post_type', 'news');
  //   $query->set('posts_per_page', $post_per_page);
  //   return;
  // }

}
add_filter('pre_get_posts', 'my_query');

/**
 * パンくず 
 * ブログ一覧で「カテゴリー」の前に「ブログ」を追加
 */
function bcn_news_insert($bcnObj)
{

  if (get_post_type() == 'post' && !is_category()) {
    $trail_tmp_cat = clone $bcnObj->trail[1];
    $trail_tmp_home = clone $bcnObj->trail[2];
    // ホーム
    $bcnObj->trail[3] = $trail_tmp_home;
    // ブログ
    $bcnObj->trail[2] = clone $bcnObj->trail[0];
    $bcnObj->trail[2]->set_title('ブログ');
    $bcnObj->trail[2]->set_url(home_url('blog'));
    $bcnObj->trail[2]->set_linked(true);
    // カテゴリ
    $bcnObj->trail[1] = $trail_tmp_cat;
    // タイトル
    $bcnObj->trail[0] = clone $bcnObj->trail[0];
  }
  return $bcnObj;
}
add_action('bcn_after_fill', 'bcn_news_insert');
