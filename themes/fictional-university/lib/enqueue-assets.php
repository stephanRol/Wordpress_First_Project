<?php

function enqueue_styles(){
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

//Frontend
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );
//Frontend & Editor
// add_action( 'enqueue_block_assets', 'enqueue_styles' );
//Editor
// add_action( 'enqueue_block_editor_assets', 'enqueue_styles' );