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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/map.css">

    <!--スクリプト-->
    <script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?60e7e60f7a1041439d156a2eac1e02e5" charset="utf-8"></script>
    <?php wp_enqueue_script('jquery'); ?>

    <title>筑波大学 芸術祭 2021 / TSUKUBA ART&DESIGN FESTIVAL 2021</title>
    <?php wp_head(); ?>
</head>
<!--
 =#@@@@@@@@@@@@@@@@@@@%*.         :+#%@@@@@@@@@@@@@%*:         -#%@@@@@@@@@@@@%#=     
*@@@%%%%%%%%%%%%%%%%%%@@%.       +@@@@%%%%%%%%%%%%%@@@:       *@@@%%%%%%%%%%%%@@@*    
@@@-                 .%@@-      #@@%:              +@@*      *@@%.            .@@@:   
=@@@:                #@@#     .#@@#.               =@@*     *@@%.              *@@*   
 +@@%:              #@@#.    .%@@#                 =@@*    *@@%.               :@@@.  
  +@@%.            *@@%.    :%@@*                  =@@*   +@@%.                 #@@=  
   *@@%.          +@@%.     %@@+                   =@@*  +@@%.                  -@@%  
    *@@%.         %@@:     .@@@                    =@@* :@@@.                    %@@- 
     *@@#         #@@*      %@@:                   =@@* .@@@-                    +@@# 
     :@@@         .%@@*     *@@+                   =@@*  -@@@+                   .@@@*
    .#@@*          .%@@*    =@@#                   =@@*   :%@@#.                .*@@%:
   .%@@#            .%@@*   .@@@                   =@@*    .#@@%:             :*@@@%: 
  .%@@*              .%@@+   %@@-                  =@@*      +@@@=          -#@@@#-   
 :%@@*                .%@@+  *@@+        ..        =@@*       -@@@*       =%@@@*:     
.%@@+                  :@@@. -@@#   .-+#@@@@#*=:   =@@*        .%@@#.  .+%@@@+.       
=@@%::::--===+++***###%%@@%  .@@@*#%@@@@@%#@@@@@@%*%@@+          *@@%=*@@@%=.         
.%@@@@@@@@@@@@@@@@@@@@@@%+.   -%@@@@%*=:    :-+#%@@@@*            =@@@@@#-            
 .+%@%%##**+++==--::..          :=-.             :--.              .+*+-              

筑波大学 芸術祭 2021 / TSUKUBA ART&DESIGN FESTIVAL 2021
-->

<body>
    <!--スクロールバー&マップボタン-->
    <div class="scroll-bar">
        <div class="map">
            <ul class='floor f-3'>
                <p>3F</p>
                <div class="floor-container">
                    <div class="floor-box">
                        <li style="background-color:#71BCA1"></li>
                        <li style="background-color:#BBEAEA"></li>
                        <li style="background-color:#F4BE14"></li>
                        <li style="background-color:#CCB2D3"></li>
                        <li style="background-color:#9950e5"></li>
                    </div>
                    <div class="map-scroll-bar">
                        <div class="map-scroll f3"></div>
                    </div>
                </div>
            </ul>
            <ul class='floor f-2'>
                <p>2F</p>
                <div class="floor-container">
                    <div class="floor-box">
                        <li style="background-color:#B2B210"></li>
                        <li style="background-color:#FFD02D"></li>
                        <li style="background-color:#6590E5"></li>
                        <li style="background-color:#FFEC00"></li>
                        <li style="background-color:#ff0079"></li>
                    </div>
                    <div class="map-scroll-bar">
                        <div class="map-scroll f2"></div>
                    </div>
                </div>
            </ul>
            <ul class='floor f-1'>
                <p>1F</p>
                <div class="floor-container">
                    <div class="floor-box">
                        <li style="background-color:#FF5933"></li>
                        <li style="background-color:#E0E0E0"></li>
                        <li style="background-color:#FFFFFF"></li>
                        <li style="background-color:#DD6D22"></li>
                        <li style="background-color:#FFFFFF"></li>
                    </div>
                    <div class="map-scroll-bar">
                        <div class="map-scroll f1"></div>
                    </div>
                </div>
            </ul>
        </div>
        <a class="tadf-square" href="https://tadf.site/2021/tadf-square">
            <img src="<?php echo get_template_directory_uri(); ?>/img/tadf-square.svg" alt="">
        </a>
        <ul class="scroll">
            <li></li>
        </ul>
    </div>
    <!--横スクロール用のコンテナ-->
    <div class="x-scroll-container" id="scroll">
        <div class="side-bar">
            <div class="top-logo">
                <a href="<?php echo esc_url(home_url('/1f/')); ?>">
                    <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/tadf-logo-black.svg" alt="tadf-logo">
                    <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/tadf-logo-black-tate.svg" alt="tadf-logo">
                </a>
            </div>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'floor_nav',
                'menu_class' => 'level-nav'
            ));
            ?>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'social-link-black',
                'menu_class' => 'social-link'
            ));
            ?>
            <div id="nav-color"></div>
        </div>