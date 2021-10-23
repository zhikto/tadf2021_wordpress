        <!--サイドバー-->
        <?php get_header('gallery'); ?>
        <!--コンテンツ-->
        <div class="content">
            <!--ギャラリートップ-->
            <div class="gallery-top">
                <!--企画説明モーダル-->
                <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
                    <!-- 背景のオーバーレイ -->
                    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
                        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                            <!-- モーダルのコンテンツ -->
                            <div class="modal__content" id="modal-1-content">
                                <p><?php the_field('gallery-title', 'category_' . get_the_category()[0]->cat_ID); ?></p>
                                <p class="replace-br"><?php the_field('gallery-title-en', 'category_' . get_the_category()[0]->cat_ID); ?></p>
                                <p class="el1" data-chaffle="en"><?php the_field('gallery-full-description', 'category_' . get_the_category()[0]->cat_ID); ?></p>
                                <!-- 閉じるボタン -->
                                <p class="modal__close button-fill" style="background-color: <?php the_field('gallery-theme-color', 'category_' . get_the_category()[0]->cat_ID); ?>" aria-label="Close modal" data-micromodal-close>閉じる</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--タイトル-->
                <div class="gallery-title el1">
                    <p><?php the_field('gallery-title-en', 'category_' . get_the_category()[0]->cat_ID); ?></p>
                    <p><?php the_field('gallery-title', 'category_' . get_the_category()[0]->cat_ID); ?></p>
                </div>
                <!--コピー-->
                <div class="gallery-copy">
                    <h1 class="target"><?php the_field('gallery-copy', 'category_' . get_the_category()[0]->cat_ID); ?></h1>
                    <p class="el1"><?php the_field('gallery-description', 'category_' . get_the_category()[0]->cat_ID); ?></p>
                    <!--企画説明モーダルボタン-->
                    <p data-micromodal-trigger="modal-1" class="modal__open button-stroke el1">この展示について</p>
                </div>
            </div>
            <!--部屋一覧-->
            <div class="work-container">
                <!--動画カテゴリーの場合-->
                <?php if (is_category(array('second', 'live'))) : ?>
                    <!--動画アイテム取得-->
                    <div class="youtube-container">
                        <div class="youtube-wrapper">
                            <?php the_field('youtube', 'category_' . get_the_category()[0]->cat_ID); ?>
                        </div>
                    </div>
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                            <!--作品アイテム取得-->
                            <a href="<?php the_permalink() ?>" class="work">
                                <div class="work-top">
                                    <div class="work-image">
                                        <div class="aspect-container">
                                            <?php if (get_field('work-image')) : ?>
                                                <img src="<?php the_field('work-image'); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <h1><?php the_field('work-title'); ?></h1>
                                </div>
                                <div class="work-bottom">
                                    <div class="work-info">
                                        <?php $info = get_field('work-info');
                                        if ($info) {
                                            $fielddata = get_field_object('work-info');
                                        }
                                        ?>
                                        <p><?php echo $fielddata['label']; ?></p>
                                        <p><?php the_field('work-info'); ?></p>
                                    </div>
                                    <div class="work-author">
                                        <p><?php the_field('work-author'); ?></p>
                                    </div>
                                </div>
                            </a>
                    <?php
                        endwhile;
                    endif;
                    ?>
                    <!--グッズカテゴリーの場合-->
                <?php elseif (is_category(array('freemarket', 'officialstore'))) : ?>
                    <div class="goods-container">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                        ?>
                                <!--グッズアイテム取得-->
                                <a href="<?php the_field('goods-url'); ?>" class="goods" target="_blank">
                                    <div class="goods-image">
                                        <?php if (get_field('goods-image')) : ?>
                                            <img src="<?php the_field('goods-image'); ?>" />
                                        <?php endif; ?>
                                    </div>
                                    <div class="goods-info">
                                        <p><?php the_field('goods-title'); ?></p>
                                        <p><?php the_field('goods-category'); ?></p>
                                    </div>
                                </a>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <!--メンバーリストの場合-->
                <?php elseif (is_category('member')) : ?>
                    <div class="sentence">
                        <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                        ?>
                                <!--記事取得-->
                                <?php the_content(); ?>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </div>
                    <!--URL展示の場合-->
                <?php elseif (is_category(array('twosome', 'yuinoutsuwa', 'ttasu', 'shoten'))) : ?>
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                            <!--URLアイテム取得-->
                            <a href="<?php the_field('gallery-url'); ?>" class="gallery-url" target="_blank">
                                <p class="button-fill" style="background-color: <?php the_field('gallery-theme-color', 'category_' . get_the_category()[0]->cat_ID); ?>">サイトへ</p>
                                <div class="gallery-url-thumbnail">
                                    <?php if (get_field('gallery-url-thumbnail')) : ?>
                                        <img src="<?php the_field('gallery-url-thumbnail'); ?>" />
                                    <?php endif; ?>
                                </div>
                            </a>
                    <?php
                        endwhile;
                    endif;
                    ?>
                    <!--一般カテゴリーの場合-->
                <?php else : ?>
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                            <!--作品アイテム取得-->
                            <a href="<?php the_permalink() ?>" class="work">
                                <div class="work-top">
                                    <div class="work-image">
                                        <div class="aspect-container">
                                            <?php if (get_field('work-image')) : ?>
                                                <img src="<?php the_field('work-image'); ?>" />
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <h1><?php the_field('work-title'); ?></h1>
                                </div>
                                <div class="work-bottom">
                                    <div class="work-info">
                                        <?php $info = get_field('work-info');
                                        if ($info) {
                                            $fielddata = get_field_object('work-info');
                                        }
                                        ?>
                                        <p><?php echo $fielddata['label']; ?></p>
                                        <p><?php the_field('work-info'); ?></p>
                                    </div>
                                    <div class="work-author">
                                        <p><?php the_field('work-author'); ?></p>
                                    </div>
                                </div>
                            </a>
                    <?php
                        endwhile;
                    endif;
                    ?>
                <?php endif; ?>
            </div>
        </div>
        </div>
        <?php wp_footer(); ?>
        </body>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/galleryAnime.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/sidebarOffset.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/heightResize.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" integrity="sha512-rCjfoab9CVKOH/w/T6GbBxnAH5Azhy4+q1EXW5XEURefHbIkRbQ++ZR+GBClo3/d3q583X/gO4FKmOFuhkKrdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/mousewheel.js"></script>
        <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/modal.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/replaceBr.js"></script>

        </html>