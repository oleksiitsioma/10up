<?php

// ENQUING ASSETS

    require_once( get_template_directory( __FILE__ ) . '/inc/assets.php');


// THEME SUPPORTS

    add_theme_support( 'menus' );
    add_theme_support( 'custom-logo' , array(
        'height'               => 40,
        'width'                => 170,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    ) );

    register_nav_menu(
        $location       = 'top-menu',
        $description    = 'Top Menu'
    )

?>