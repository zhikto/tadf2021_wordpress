<?php
/*
Template Name: シンプル記事-テンプレート
Template Post Type: post
*/
?>
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/area14.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/loading.css">

    <!--スクリプト-->
    <script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?60e7e60f7a1041439d156a2eac1e02e5" charset="utf-8"></script>
    <?php wp_enqueue_script('jquery'); ?>

    <title>筑波大学 芸術祭 2021 / TSUKUBA ART&DESIGN FESTIVAL 2021</title>
    <?php wp_head(); ?>
</head>

<body>
    <div id="work-loading" style="background-color: <?php the_field('gallery-theme-color', 'category_' . get_the_category()[0]->cat_ID); ?>"></div>
    <!--サイドバー-->
    <?php get_header('work'); ?>
    <div class="gallery-title">
        <p><?php the_field('gallery-title-en', 'category_' . get_the_category()[0]->cat_ID); ?></p>
        <p><?php the_field('gallery-title', 'category_' . get_the_category()[0]->cat_ID); ?></p>
    </div>
    <!--コンテンツ-->
    <div class="content">
        <!--コンテナ-->
        <div class="container">
            <div class="article-title">
                <p><?php the_field('work-title'); ?></p>
            </div>
            <!--記事-->
            <div class="sentence">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
<script src="<?php echo get_template_directory_uri(); ?>/js/work-loading.js"></script>

</html>