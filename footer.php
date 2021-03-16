<div class="footer position-relative w-100 wysiwyg-style d-flex d-flex justify-content-around">
<!--    --><?php //          wp_nav_menu(["theme_location" => "FooterMenu-list1", 'container_class' => 'column', 'menu_class' =>'link' ,'link-default-left'=> 'abc']);
//    ?>
<!--    --><?php //          wp_nav_menu(["theme_location" => "FooterMenu-list2", 'container_class' => 'column', 'menu_class' => 'link' ,'link-default-left'=> 'abc']);
//    ?>
<!--    --><?php //          wp_nav_menu(["theme_location" => "FooterMenu-list3", 'container_class' => 'column', 'menu_class' =>'link' ,'link_class' => 'link-default-left']);
//    ?>
    <!--php logics for list items to done till end ade like top for start to save up time-->

    <?php $locations = get_nav_menu_locations();
        $menuItems = wp_get_nav_menu_items($locations["menuFooter"]); ?>
    <?php $oneColumnLimit = ceil(count($menuItems) / 3); // Quantity of elements in each column + in parallel it is our limitation value for inner array
        $innerCounter = 0; // menu item counter in inner array
        for ($i = 0; $i < 3; $i++) { // Run loop with 3 iterations (3 columns) ?>
    <div class="menu-column">
        <?php for ($k = $innerCounter; $k < $oneColumnLimit; $k++) { // 3 columns ?>
        <div class="menu-item">
            <a href="<?= $menuItems[$k]->url; ?>"><?= $menuItems[$k]->title; ?></a>
        </div>
        <?php if (($k+1) == $oneColumnLimit) $innerCounter += $oneColumnLimit; // Here we set value for menu item counter for next column
            } ?>
    </div>
    <?php $oneColumnLimit += $oneColumnLimit; // Here we set value for menu items limit for next column
        }
          ?>

    <div class="position-relative w-150">
        <div class="footer-icons position-absolute">
            <?php $image = get_field("logo_footer", "options");
            if ($image) { ?>
                <a  href="<?= home_url(); ?>" target="_blank">  <img  src="<?= $image["sizes"]["medium"]; ?>" alt="<?= $image["alt"]; ?> "  > </a>
            <?php } ?>
            <?php $copyright = get_field("copyright", "options");
            if ($copyright) { ?>
                <div class=""><?= $copyright; ?></div>
                <div class="">All rights reserved.</div>
            <?php } ?>
            <div class="icons">
                <?php $content = get_field("facebook_footer", "options");
                if ($content) { ?>
                    <a  target="_blank" href="<?= $content?>" >
                        <img class="bounce" src="<?php bloginfo("template_url"); ?>/images/icons/facebook.svg" alt="facebook-logo">
                    </a>
                <?php } ?>
                <?php $content = get_field("instagram_footer", "options");
                if ($content) { ?>
                    <a  target="_blank" href="<?= $content ?>" >
                        <img class="bounce" src="<?php bloginfo("template_url"); ?>/images/icons/instagram.svg" alt="instagram-logo">
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</div> <!--Main-phone-container END-->
</div><!--colored background END -->
<?php wp_footer(); ?>
</body>
</html>