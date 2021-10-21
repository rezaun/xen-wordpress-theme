<?php

require_once 'inc/xen-customizer.php';

function xen_setup_theme(){
    load_theme_textdomain('xen', get_theme_file_path().'/language');
    add_theme_support('post-thumbnails', array('post'));
    add_theme_support('title-tag');

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    set_post_thumbnail_size( 1568, 9999 );
    // Set content-width.
    global $content_width;
    if ( ! isset( $content_width ) ) {
        $content_width = 580;
    }

    /**
     * Add post-formats support.
     */
    add_theme_support(
        'post-formats',
        array(
            'link',
            'aside',
            'gallery',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat',
        )
    );

    register_nav_menus(array(
        'main-menu'=>__('Primary Menu','xen'),
    ));
}
add_action('after_setup_theme','xen_setup_theme');




function xen_assets(){
    wp_enqueue_style("xen", get_stylesheet_uri());
    wp_enqueue_style("bootstrap-css", get_theme_file_uri("/assets/css/bootstrap.min.css"));
    wp_enqueue_style("font-awesome-css", get_theme_file_uri("/assets/css/font-awesome.min.css"));
    wp_enqueue_style("magnific-popup-css", get_theme_file_uri("/assets/css/magnific-popup.css"));
    wp_enqueue_style("style.css-css", get_theme_file_uri("/assets/css/slick.css"));
    wp_enqueue_style("main-css", get_theme_file_uri("/assets/css/style.css"));

    wp_enqueue_script("jquery-nav", get_theme_file_uri("/assets/js/jquery.nav.js"), array('jquery'), null, true);
    wp_enqueue_script("bootstrap-js", get_theme_file_uri("/assets/js/bootstrap.min.js"), array('jquery'), null, true);
    wp_enqueue_script("popper-min-js", get_theme_file_uri("/assets/js/popper.min.js"), array('jquery'), null, true);
    wp_enqueue_script("waypoint-js", get_theme_file_uri("/assets/js/magnific-popup.min.js"), array('jquery'), null, true);
    wp_enqueue_script("counterup-js", get_theme_file_uri("/assets/js/counterup.min.js"), array('jquery'), null, true);
    wp_enqueue_script("magnific-popup-js", get_theme_file_uri("/assets/js/magnific-popup.min.js"), array('jquery'), null, true);
    wp_enqueue_script("slick-js", get_theme_file_uri("/assets/js/slick.min.js"), array('jquery'), null, true);
    wp_enqueue_script("main-js", get_theme_file_uri("/assets/js/main.js"), array('jquery'), null, true);
}
add_action('wp_enqueue_scripts','xen_assets');

require_once get_template_directory() . '/inc/xen-activation.php';