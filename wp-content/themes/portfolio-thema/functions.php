<?php
function enqueue_scripts()
{
  // 共通CSS
  wp_enqueue_style(
    'global', // globalという名前を設定
    get_template_directory_uri() . '/assets/styles/global/style.css',
    array(), // このCSSより先に読みたいCSS(依存なし)
    filemtime(get_template_directory() . '/assets/styles/global/style.css')
  );


  // JS
  wp_enqueue_script(
    'main-js',
    get_template_directory_uri() . '/assets/styles/global/main.js',
    array(),
    filemtime(get_template_directory() . '/assets/styles/global/main.js'),
    true
  );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');


// Works カスタム投稿タイプ＆タクソノミー登録
function register_works_post_type_and_taxonomy()
{
  // ① 投稿タイプを登録
    register_post_type('works',
        array(
            'labels' => array(
                'name' => 'Works',
                'singular_name' => 'Works',
                'add_new' => '新規追加',
                'add_new_item' => '作品を追加',
                'edit_item' => '作品を編集',
                'new_item' => '新しい作品',
                'view_item' => '作品を見る',
                'search_items' => '作品を検索',
                'not_found' => '作品が見つかりません',
                'menu_name' => 'Works'
            ),
            'public' => true,
            'has_archive' => true, // ← archive-works.php使える
            'menu_position' => 5,
            'menu_icon' => 'dashicons-portfolio',
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ),
            'rewrite' => array('slug' => 'works'),
            'show_in_rest' => true,
        )
    );

// ② タクソノミーを登録
    register_taxonomy(
        'works_category',
        'works',
        array(
            'label' => 'カテゴリー',
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_admin_column' => true, // ←一覧にも出る
            'show_in_rest' => true,
            'rewrite' => array('slug' => 'works-category')
        )
    );
}
add_action('init', 'register_works_post_type_and_taxonomy');

// アイキャッチ画像を使用可能にする
add_theme_support('post-thumbnails');

// CF7が自動で入れる <p> と <br> を止める
add_filter('wpcf7_autop_or_not', '__return_false');