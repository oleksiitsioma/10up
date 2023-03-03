<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('') ? wp_title('') : bloginfo(); ?></title>
    <?php wp_head(); ?>
</head>
<body class="frontend">

    <header class="header">
        <div class="container header__container">
            
            <div class="siteLogo">

                <?php 

                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }

                ?>

            </div>

            <?php

                wp_nav_menu(
                    array(
                        'theme_location'    => 'top-menu',
                        'container'         => 'div',
                        'container_class'   => 'topmenu__wrapper',
                        'continaer_id'      => 'topmenu-wrapper',
                        'menu_class'        => 'topmenu',

                    )
                )

            ?>
        </div>
    </header>

    
