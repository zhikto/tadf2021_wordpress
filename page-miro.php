<?php
/*
Template Name: miro-テンプレート
Template Post Type: page
*/
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <!--メタ情報-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="pgki_zCgOXMcBFuHJ4oPxy8SjLsmAYjHwHsfwTfQqSA" />

    <!--スタイルシート-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/init.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common-parts.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/floor.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/square.css">


    <!--スクリプト-->
    <script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?60e7e60f7a1041439d156a2eac1e02e5" charset="utf-8"></script>
    <script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?6185f33081104a5bba27618eac1e02e5" charset="utf-8"></script>
    <?php wp_enqueue_script('jquery'); ?>

    <title>筑波大学 芸術祭 2021 / TSUKUBA ART&DESIGN FESTIVAL 2021</title>
    <?php wp_head(); ?>
</head>

<body>
    <!--横スクロール用のコンテナ-->
    <div class="x-scroll-container" id="scroll">
        <!--コンテンツ-->
        <div class="content">
            <!--部屋一覧-->
            <div class="gallery-container">
                <div class="tadf-square">
                <iframe width="100%" height="100%" src="https://miro.com/app/live-embed/o9J_ltgYDf4=/?moveToViewport=-6011,-8713,3876,2116" frameBorder="0" scrolling="no" allowFullScreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
<script src="<?php echo get_template_directory_uri(); ?>/js/heightResize.js"></script>

</html>