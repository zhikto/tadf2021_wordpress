<!DOCTYPE html>
<html lang="ja">

<head>
    <!--メタ情報-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--リンク-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/init.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/base.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/floor.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/splash.css">

    <!--スクリプト-->
    <script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?60e7e60f7a1041439d156a2eac1e02e5" charset="utf-8"></script>
    <script type="text/javascript" src="//typesquare.com/3/tsst/script/ja/typesquare.js?6185f33081104a5bba27618eac1e02e5" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.14/lottie.min.js" integrity="sha512-G1R66RZMhyLDEcAu92/Kv4sWNypnEiJcM6yhe0PNyiYDaMAKpMrJ6ZLR67xC/RMNGRa8Pm9TxtO8a98F6Ct+Gw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php wp_enqueue_script('jquery'); ?>

    <title>筑波大学 芸術祭 2021 / TSUKUBA ART&DESIGN FESTIVAL 2021</title>
    <?php wp_head(); ?>
</head>

<body>
    <!--横スクロール用のコンテナ-->
    <div class="x-scroll-container" id="scroll">
        <div class="content">
            <div class="gallery-container">
                <div class="splash" id="lottie"></div>
                <div class="entry">
                    <span>2021年度 筑波大学芸術祭メインテーマ</span>
                    <h1>Re</h1>
                    <h2>
                        この2年、いろんなことがありました。
                        <br>
                        一人でじっと我慢しなくてはならなかったこと、
                        <br>
                        やりたいことができずにもどかしかったこと、
                        <br>
                        それを分かち合う友達に会いに行けなかったこと。
                        <br>
                        それは、私たちの想像を超えた現実でした。
                        <br>
                        でも、立ち止まっていたわけではありません。
                        <br>
                        常にできることを模索し、前へ進んできました。
                        <br>
                        だからこう思うのです。
                        <br>
                        「さらに想像を超える未来を創造しよう。」
                    </h2>
                    <a href="<?php echo esc_url(home_url('/1f/')); ?>">ENTRY</a>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" integrity="sha512-rCjfoab9CVKOH/w/T6GbBxnAH5Azhy4+q1EXW5XEURefHbIkRbQ++ZR+GBClo3/d3q583X/gO4FKmOFuhkKrdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/heightResize.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/mousewheel.js"></script>
<script>
    lottie.loadAnimation({
        container: document.getElementById("lottie"),
        renderer: 'svg',
        loop: false,
        autoplay: true,
        rendererSettings: {
            preserveAspectRatio: 'xMidYMid slice',
            filterSize: {
                width: '200%',
                height: '200%',
                x: '-50%',
                y: '-50%',
            }
        },
        path: '<?php echo get_template_directory_uri(); ?>/json/entry.json'
    });
</script>

</html>