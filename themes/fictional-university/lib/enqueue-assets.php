<?php

function enqueue_styles(){
    wp_enqueue_script('main-university-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true );
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.csss');
    wp_enqueue_style('styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('extra-styles', get_theme_file_uri('/build/index.css'));
}

//Frontend
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
//Frontend & Editor
// add_action( 'enqueue_block_assets', 'enqueue_styles' );
//Editor
// add_action( 'enqueue_block_editor_assets', 'enqueue_styles' );