<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head(); ?>


</head>

<body>

<header class="header-private">


    <!--    <nav id="site-navigation" class="main-navigation">-->
    <!--        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'blog-site' ); ?><!--</button>-->
    <!--        --><?php
    //        wp_nav_menu(
    //            array(
    //                'theme_location' => 'menu-1',
    //                'menu_id'        => 'primary-menu',
    //            )
    //        );
    //        ?>
    <!--    </nav>-->
    <div class="container">
        <div class="header__top">
            <?php the_custom_logo();?>
            <a class="phone" href="tel:+380505556677">+38 (050) 555 66 77</a>

        </div>

    </div>












</header>
