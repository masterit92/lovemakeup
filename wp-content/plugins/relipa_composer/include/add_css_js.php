<?php

function relipa_composer_css_js_backend() {
    //CSS
    //wp_register_style( 'demo-css', RELIPA_COMPOSER_ASSETS_URL. '/css/demo.css', array(), RELIPA_COMPOSER_VERSION , 'all');
    //wp_enqueue_style( 'demo-css' );

    //JS
    //wp_register_script('demo-js', RELIPA_COMPOSER_ASSETS_URL . '/js/demo.js', array(), RELIPA_COMPOSER_VERSION ,'all');
    //wp_enqueue_script('demo-js');
}

add_action( 'admin_print_styles', 'relipa_composer_css_js_backend' );

function relipa_composer_css_js_fronend() {
    //CSS

    //JS
}

add_action( 'wp_enqueue_scripts', 'relipa_composer_css_js_fronend' );