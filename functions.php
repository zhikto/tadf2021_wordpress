<?php

add_action('after_setup_theme', 'register_menu');
function register_menu()
{
    register_nav_menus(array(
        'floor_nav' => 'フロアナビ',
        'floor_nav-f' => 'フロアナビ-f',
        'social-link-white' => 'ソーシャルリンク-白',
        'social-link-black' => 'ソーシャルリンク-黒',
    ));
}

//URLの文字列を置換する
function category_name_url_hidden_function($link)
{
    return str_replace("/category/", "/", $link);
}

add_filter('user_trailingslashit', 'category_name_url_hidden_function');


//リライトルールを再生成してデータベースに保存
function category_name_url_hidden_rules()
{
    global $wp_rewrite;
    $wp_rewrite->flush_rules();
}

add_action('init', 'category_name_url_hidden_rules');


//新しいリライトルールを設定する
function category_name_url_hidden_rewrite($wp_rewrite)
{
    $new_rules = array('(.+)/page/(.+)/?' => 'index.php?category_name=' . $wp_rewrite->preg_index(1) . '&paged=' . $wp_rewrite->preg_index(2));
    $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
}

add_filter('generate_rewrite_rules', 'category_name_url_hidden_rewrite');

function hook_widget_categories($args)
{
    $args['hide_empty'] = 0;
    return $args;
}
add_filter('widget_categories_args', 'hook_widget_categories');
add_filter('widget_categories_dropdown_args', 'hook_widget_categories');
