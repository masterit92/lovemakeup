<?php

function relipa_composer_css_js_backend() {
    //CSS
    wp_register_style( 'admin-main-css', RELIPA_COMPOSER_ASSETS_URL. '/css/admin-main.css', array(), RELIPA_COMPOSER_VERSION , 'all');
    wp_enqueue_style( 'admin-main-css' );

    //JS
    wp_register_script('admin-main-js', RELIPA_COMPOSER_ASSETS_URL . '/js/admin-main.js', array(), RELIPA_COMPOSER_VERSION ,'all');
    wp_enqueue_script('admin-main-js');
}

add_action( 'admin_print_styles', 'relipa_composer_css_js_backend' );

function relipa_composer_css_js_frontend() {
    //CSS
    wp_register_style( 'front-main-css', RELIPA_COMPOSER_ASSETS_URL. '/css/front-main.css', array(), RELIPA_COMPOSER_VERSION , 'all');
    wp_enqueue_style( 'front-main-css' );

    //JS
    wp_register_script('front-main-js', RELIPA_COMPOSER_ASSETS_URL . '/js/front-main.js', array(), RELIPA_COMPOSER_VERSION ,'all');
    wp_enqueue_script('front-main-js');
}

add_action( 'wp_enqueue_scripts', 'relipa_composer_css_js_frontend' );