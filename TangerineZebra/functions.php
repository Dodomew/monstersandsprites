<?php

    // Add scripts and stylesheets

    function startwordpress_scripts() 
    {
        wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/style.css' );
        //wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
    }

    add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

    // Add Google Fonts
    function startwordpress_google_fonts() 
    {
        wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
        wp_enqueue_style( 'OpenSans');
    }

    add_action('wp_print_styles', 'startwordpress_google_fonts');

    // WordPress Titles
    add_theme_support( 'title-tag' );

    // Support Featured Images
    add_theme_support( 'post-thumbnails' );

?>