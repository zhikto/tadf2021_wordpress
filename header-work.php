<div class="side-bar el1">
    <?php
        $cat = get_the_category(); 
        $cat_id = $cat[0]->cat_ID;
    ?>
    <a class="back-nav" href="<?php echo get_category_link($cat_id); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow-white.svg" alt="arrow"></a>
</div>