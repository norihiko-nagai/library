// カスタム投稿タイプ「service」の登録
function register_custom_post_type_service() {
    register_post_type('service', array(
        'labels' => array(
            'name' => 'サービス',
            'singular_name' => 'サービス',
            'add_new' => '新規追加',
            'add_new_item' => '新しいサービスを追加',
            'edit_item' => 'サービスを編集',
            'new_item' => '新しいサービス',
            'view_item' => 'サービスを見る',
            'search_items' => 'サービスを検索',
            'not_found' => 'サービスが見つかりませんでした',
            'not_found_in_trash' => 'ゴミ箱内にサービスが見つかりませんでした',
            'all_items' => '全サービス',
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'service',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-hammer', // アイコンは任意で変更可能
        'show_in_rest' => true,
    ));
}
add_action('init', 'register_custom_post_type_service');

// カスタムタクソノミー「service_category」の登録
function register_custom_taxonomy_service_category() {
    register_taxonomy('service_category', 'service', array(
        'labels' => array(
            'name' => 'サービスカテゴリー',
            'singular_name' => 'サービスカテゴリー',
            'search_items' => 'カテゴリーを検索',
            'all_items' => 'すべてのカテゴリー',
            'edit_item' => 'カテゴリーを編集',
            'update_item' => 'カテゴリーを更新',
            'add_new_item' => '新しいカテゴリーを追加',
            'new_item_name' => '新しいカテゴリー名',
            'menu_name' => 'カテゴリー',
        ),
        'hierarchical' => true,
        'public' => true,
        'rewrite' => array(
            'slug' => 'service-category',
            'with_front' => false
        ),
        'show_in_rest' => true,
    ));
}
add_action('init', 'register_custom_taxonomy_service_category');