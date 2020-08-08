<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity=sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/slick-theme.css"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/lightbox.min.css">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
</head>
<body <?php body_class(); ?>>
    <div class="main_container">
    <header id="header"class="container">
        <nav class="navbar navbar-expand-lg justify-content-between p-0 d-flex height-70">
            <div class="align-items-center justify-content-between d-flex ">
                <div class="h-100 d-flex align-items-center justify-content-center">
                    <svg width="201" height="49" viewBox="0 0 201 49" fill="none" xmlns="http://www.w3.org/2000/svg"
                          xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M201 0H0V49H201V0Z" fill="url(#pattern0)"/>
                    </svg>
                </div>

            </div>
            <div class="navbar-toggler p-0 h-100 d-lg-none d-flex flex-column align-items-center justify-content-center" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
                <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                    <div class="navbar-nav w-100 align-items-center">
                        <?php
                        if( is_front_page() ) :
                            wp_nav_menu(array(
                                'theme_location' => 'main-menu',
                                'container'      => 'ul',
                                'menu_class' => 'top_menu mx-auto d-flex py-4',)); ?>
                        <hr class="menu-line" />
                        <button class="my-4 registr_btn">РЕГИСТРАЦИЯ НА МЕРОПРИЯТИЕ</button>
                        <?php else :
                            wp_nav_menu(array(
                                'theme_location' => 'main-menu-2',
                                'container'      => 'ul',
                                'menu_class' => 'top_menu_2 mx-auto d-flex justify-content-between py-4 w-100',));
                       
                        ?>
                        <hr class="menu-line" />
                        <button class="my-4 registr_btn">РЕГИСТРАЦИЯ ПОСТАВЩИКОВ</button>
                        <?php endif; ?>
                    </div>

                </div>

        </nav>
    </header>
