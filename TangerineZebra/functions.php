<?php

    // Add scripts and stylesheets

    function startwordpress_scripts() 
    {
        wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/style.css' );
    }

    add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

    // Load external file to add support for MultiPostThumbnails. Allows you to set more than one "feature image" per post.
    require_once('library/multi-post-thumbnails.php');

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
    //Note: 'true' enables hard cropping so each image is exactly those dimensions and automatically cropped
    add_image_size( 'feature-image', 960, 540, true ); 
    add_image_size( 'medium-thumb', 350, 350, true );

    // Define additional "post thumbnails". Relies on MultiPostThumbnails to work
    if (class_exists('MultiPostThumbnails')) {
        new MultiPostThumbnails(array(
            'label' => '2nd Feature Image',
            'id' => 'feature-image-2',
            'post_type' => 'post'
            )
        );
    }


    //set x number of posts per page
    function set_posts_per_page( $query ) {
      if ( !is_admin() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', '4' );
      }
    }
    add_action( 'pre_get_posts', 'set_posts_per_page');

    add_action('get_header', 'remove_admin_login_header');
    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }

?>