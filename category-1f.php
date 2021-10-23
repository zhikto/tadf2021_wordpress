        <!--サイドバー-->
        <?php get_header(); ?>
        <!--コンテンツ-->
        <div class="content">
            <!--部屋一覧-->
            <div class="gallery-container">
                <?php
                $categories = get_categories(array(
                    'child_of' => '4', //IDが4のカテゴリーの子カテゴリーを読み込む
                    'hide_empty' => '0' //投稿がないカテゴリーを読み込む。色々設定できる。設定の方法は下記を見て下さい。
                ));
                foreach ($categories as $category) :
                    $cat_id = $category->cat_ID;
                    $post_id = 'category_' . $cat_id;

                    $catimg = get_field('img', $post_id);
                    $img = wp_get_attachment_image_src($catimg, 'thumbnail'); // (thumbnail, medium, large, full or custom size)

                ?>
                    <a href="<?php echo get_category_link($category->term_id); ?>" class="gallery" style="background-color: <?php the_field('gallery-theme-color', $post_id); ?>" data-trigger>
                        <div class="gallery-title">
                            <p><?php the_field('gallery-title-en', $post_id); ?></p>
                            <p><?php the_field('gallery-title', $post_id); ?></p>
                        </div>
                        <div class="gallery-copy">
                            <h1><?php the_field('gallery-copy', $post_id); ?></h1>
                            <p><?php the_field('gallery-description', $post_id); ?></p>
                            <div class="button-stroke">Enter</div>
                        </div>
                        <div class="gallery-thumbnail">
                            <?php if (get_field('gallery-thumbnail', $post_id)) : ?>
                                <img src="<?php the_field('gallery-thumbnail', $post_id); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="gallery-num">
                            <p><?php the_field('gallery-num', $post_id); ?></p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
        <!--サイドバー-->
        <?php get_footer(); ?>