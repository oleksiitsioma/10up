<?php 

add_action( 'init' , '___tenUp_register_scripts');

add_action( 'init' , '___tenUp_register_styles');

function ___tenUp_register_scripts() {

    wp_enqueue_script(
        $handle = '10up',
        $src = get_template_directory_uri( __FILE__ ) . '/build/bundle.js',
        $deps = [],
        $ver = '1.0.0',
        $in_footer = true
    );
}

function ___tenUp_register_styles() {

    wp_enqueue_style(
        $handle = '10up',
        $src = get_template_directory_uri( __FILE__ ) . '/build/main.css',
        $ver = '1.0.0',
    );
}

?>