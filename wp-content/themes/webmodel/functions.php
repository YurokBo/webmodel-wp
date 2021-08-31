<?php


add_action( 'wp_enqueue_scripts', 'webmodel_style' );
add_action( 'wp_enqueue_scripts', 'webmodel_scripts' );

// styles
function webmodel_style() {
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/styles/main.css' );
}

// scripts
function webmodel_scripts() {

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' );
    wp_enqueue_script( 'jquery' );

    // подключаем js файл темы
    wp_enqueue_script( 'main-name', get_template_directory_uri() . '/assets/scripts/script.js', array(), null, true );
}