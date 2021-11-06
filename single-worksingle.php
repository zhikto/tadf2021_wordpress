<?php
/*
Template Name: 作品-単体-テンプレート
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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/work.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/loading.css">

    <!--スクリプト-->
    <script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?60e7e60f7a1041439d156a2eac1e02e5" charset="utf-8"></script>
    <script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?6185f33081104a5bba27618eac1e02e5" charset="utf-8"></script>

    <title>筑波大学 芸術祭 2021 / TSUKUBA ART&DESIGN FESTIVAL 2021</title>
    <?php wp_head(); ?>
</head>

<body>
    <div class="container">
        <div id="work-loading" style="background-color: <?php the_field('gallery-theme-color', 'category_' . get_the_category()[0]->cat_ID); ?>"></div>
        <!--サイドバー-->
        <?php get_header('work'); ?>
        <div class="gallery-title">
            <p><?php the_field('gallery-title-en', 'category_' . get_the_category()[0]->cat_ID); ?></p>
            <p><?php the_field('gallery-title', 'category_' . get_the_category()[0]->cat_ID); ?></p>
        </div>
        <!--コンテンツ-->
        <div class="content" id="pinContainer">
            <div class="work-container">
                <div class="work-image" id="content">
                    <?php if (get_field('work-image')) : ?>
                        <img src="<?php the_field('work-image'); ?>" />
                    <?php endif; ?>
                </div>
                <div class="work-info">
                    <div class="work-about">
                        <p><?php the_field('work-title'); ?></p>
                        <p><?php the_field('work-title-en'); ?></p>
                        <p><?php the_field('work-info'); ?></p>
                        <p><?php the_field('work-sub-description'); ?></p>
                        <p><?php the_field('work-author'); ?></p>
                        <p><?php the_field('work-author-grade'); ?></p>
                    </div>
                    <div class="work-description">
                        <p><?php the_field('work-description'); ?></p>
                    </div>
                </div>
                <div class="work-nav">
                    <?php
                    $prev_post = get_previous_post(true);
                    $next_post = get_next_post(true);
                    if ($next_post || $prev_post) :
                    ?>
                        <?php if ($next_post) : ?>
                            <a class="left" href="<?php echo get_permalink($next_post->ID) ?>">
                                <div class="back-nav" style="background-color: <?php the_field('gallery-theme-color', 'category_' . get_the_category()[0]->cat_ID); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-white.svg" alt="arrow"></div>
                                <div class="work-nav-info">
                                    <p><?php the_field('work-title', $next_post->ID); ?></p>
                                    <p><?php the_field('work-author', $next_post->ID); ?></p>
                                </div>
                            </a>
                        <?php endif; ?>
                        <?php if ($next_post && $prev_post) : ?>
                            <div class="work-nav-border"></div>
                        <?php endif; ?>
                        <?php if ($prev_post) : ?>
                            <a class="right" href="<?php echo get_permalink($prev_post->ID) ?>">
                                <div class="back-nav" style="background-color: <?php the_field('gallery-theme-color', 'category_' . get_the_category()[0]->cat_ID); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-white.svg" alt="arrow"></div>
                                <div class="work-nav-info">
                                    <p><?php the_field('work-title', $prev_post->ID); ?></p>
                                    <p><?php the_field('work-author', $prev_post->ID); ?></p>
                                </div>
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/work-loading.js"></script>