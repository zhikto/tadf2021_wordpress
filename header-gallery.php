<!DOCTYPE html>
<html lang="ja">

<head>
    <!--メタ情報-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--スタイルシート-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/init.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common-parts.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/gallery.css">

    <!--スクリプト-->
    <script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?60e7e60f7a1041439d156a2eac1e02e5" charset="utf-8"></script>
    <?php wp_enqueue_script('jquery'); ?>

    <title>筑波大学 芸術祭 2021 / TSUKUBA ART&DESIGN FESTIVAL 2021</title>
    <?php wp_head(); ?>
</head>

<body>
    <!--横スクロール用のコンテナ-->
    <div class="x-scroll-container" id="scroll" style="background-color: <?php the_field('gallery-theme-color', 'category_' . get_the_category()[0]->cat_ID); ?>">
        <div class="side-bar">
            <div class="top-logo">
                <a href="<?php echo esc_url(home_url('/1f/')); ?>">
                    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/tadf-logo-black.svg" alt="tadf-logo">
                    <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/tadf-logo-black-tate.svg" alt="tadf-logo">
                </a>
            </div>
            <?php
            //現在のカテゴリIDを取得
            global $cat;
            //現在のカテゴリ情報を取得
            $cat_data = get_category($cat);
            //親カテゴリがあるか判別
            if ($cat_data->category_parent) {
                //親カテゴリIDを取得
                $parent_id = $cat_data->category_parent;
            }
            ?>
            <a class="back-nav" href="<?php echo get_category_link($parent_id); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-white.svg" alt="arrow"></a>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'social-link-black',
                'menu_class' => 'social-link'
            ));
            ?>
        </div>