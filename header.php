<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TopUp</title>
    <?php wp_enqueue_script('jquery');
    wp_head(); ?>
</head>
<body>
<div class="main-background ">
    <div class="main-phone-container position-relative ">
        <nav class="navbar-header  w-100 ">
            <!-- MOBILE -->
            <!--        <div class="mobile-header-wrapper w-100 ">-->
            <!---->
            <!--            <div class="d-flex align-items-center flex-wrap justify-content-end w-100">-->
            <!-- MAIN LOGO -->
            <!--                <div class="mobile-logo">-->
            <!--                    <a href="<?= home_url(); ?>">-->
            <!--                        <img  src="images/icons/iOS-Icon-Client.png" alt="logo">-->
            <!--                    </a>-->
            <!--                </div>-->
            <!-- END MAIN LOGO -->
            <!-- BURGER -->
            <!---->
            <!---->
            <!--                <button id="burger" class=" collapsed burger d-block p-0" type="button" data-toggle="collapse" data-target="#header">-->
            <!--                <span class="d-block wrapper position-relative fadeButton">-->
            <!--                <span class="line position-absolute d-block"></span>-->
            <!--                <span class="line position-absolute d-block"></span>-->
            <!--                <span class="line position-absolute d-block"></span>-->
            <!--                </span>-->
            <!--                </button>-->
            <!-- END BURGER -->
            <!--            </div>-->
            <!---->
            <!---->
            <!--        </div>-->
            <!-- END MOBILE -->
            <!-- DESKTOP -->
            <div class="header collapse navbar-collapse position-relative" id="header">
                <div class="main-container w-100">
                    <div class="header-content d-flex flex-wrap align-items-center ">
                        <!-- MAIN LOGO -->
                        <div class="logo  d-flex align-items-center">
                            <?php $image = get_field("logo_top", "options");
                            if ($image) { ?>
                                <a href="<?= home_url(); ?>">
                                    <img class="logo"  src="<?= $image["sizes"]["medium"]; ?>" alt="<?= $image["alt"]; ?> "  >
                                </a>
                            <?php } ?>
                        </div>
                        <!-- END MAIN LOGO -->
                        <!-- MENU -->
                        <div class="menu position-relative"  id="menu-items" >
                            <!--                        <div class="d-flex flex-wrap mob-100">-->
                            <?php                wp_nav_menu(["theme_location" => "MenuHeader", 'menu-ul' => 'underline link-default-center', 'menu_class' => 'd-flex flex-wrap mob-100']); ?>
                            <div id="lang"  class="position-relative mob-right  ">
                                <div class=" languages selectric-wrapper d-flex  row">
                                    <div class="small-world"></div>
                                    <select id="panel" class="language-select selectric" style="opacity: 0">
                                        <option value="lv" selected >LAT</option>
                                        <option value="en" >ENG</option>
                                        <option value="ru" >RUS</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- END MENU -->
                    </div>
                </div>
            </div>
            <!-- DESKTOP -->
        </nav>