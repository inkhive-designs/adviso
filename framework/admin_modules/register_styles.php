<?php
/**
 * Enqueue scripts and styles.
 */
function adviso_scripts() {
    wp_enqueue_style( 'adviso-style', get_stylesheet_uri() );

    wp_enqueue_style('adviso-title-font', '//fonts.googleapis.com/css?family='.str_replace(" ", "+", get_theme_mod('adviso_title_font1', 'Lato') ).':100,300,400,700' );

    wp_enqueue_style('adviso-body-font', '//fonts.googleapis.com/css?family='.str_replace(" ", "+", get_theme_mod('adviso_body_font1', 'Open Sans') ).':100,300,400,700' );
    
    //FontAwesome
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css' );

    //Bootstrap
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );

    //Nivo Slider
    wp_enqueue_style( 'nivo-slider', get_template_directory_uri() . '/assets/css/nivo-slider.css' );

    //Nivo Skins
    wp_enqueue_style( 'nivo-skin', get_template_directory_uri() . '/assets/css/nivo-default/default.css' );

    //Hover Styles
    wp_enqueue_style( 'hover-style', get_template_directory_uri() . '/assets/css/hover.min.css' );

    //Main CSS
    wp_enqueue_style( 'adviso-main-theme-style', get_template_directory_uri() . '/assets/theme-styles/css/'.get_theme_mod('adviso_skin', 'default').'.css', array(), null );

    wp_enqueue_script( 'adviso-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    //External Js
    wp_enqueue_script( 'adviso-external', get_template_directory_uri() . '/js/external.js', array('jquery'), '20120207', true );

    wp_enqueue_script( 'adviso-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    //Custom Js
    wp_enqueue_script( 'adviso-custom-js', get_template_directory_uri() . '/js/custom.js', array('adviso-external'));

}
add_action( 'wp_enqueue_scripts', 'adviso_scripts' );
