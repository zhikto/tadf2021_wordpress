<div class="side-bar">
    <div class="top-logo">
        <a href="<?php echo esc_url( home_url('/1f#f') ); ?>">
            <img class="pc" src="<?php echo get_template_directory_uri(); ?>/img/tadf-logo-black.svg" alt="tadf-logo">
            <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/tadf-logo-black-tate.svg" alt="tadf-logo">
        </a>
    </div>
    <?php 
        wp_nav_menu(array(
            'theme_location' => 'floor_nav-f',
            'menu_class' => 'level-nav'
        ));
    ?>
    <?php 
        wp_nav_menu(array(
            'theme_location' => 'social-link-black',
            'menu_class' => 'social-link'
        ));
    ?>
    <ul id="nav-color-f">
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
</div>
    <?php wp_footer(); ?>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" integrity="sha512-rCjfoab9CVKOH/w/T6GbBxnAH5Azhy4+q1EXW5XEURefHbIkRbQ++ZR+GBClo3/d3q583X/gO4FKmOFuhkKrdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/navcolor.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/heightResize.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/mousewheel.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/floorAnime.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/map.js"></script>

</html>