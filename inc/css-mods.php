<?php
/*
**   Custom Modifcations in CSS depending on user settings.
*/

function adviso_custom_css_mods() {

    $custom_css = "";

    // Title & Tagline Color
    if ( get_theme_mod('adviso_title_font1') ) :
        $custom_css .= ".title-font, h1, h2, .section-title, .woocommerce ul.products li.product h3 { font-family: ".esc_html( get_theme_mod('adviso_title_font','Arvo') )."; }";
    endif;

    if ( get_theme_mod('adviso_body_font1') ) :
        $custom_css .= "body, h2.site-description { font-family: ".esc_html( get_theme_mod('adviso_body_font1','Ubuntu') )."; }";
    endif;
    
    wp_add_inline_style( 'adviso-main-theme-style', wp_strip_all_tags($custom_css) );



}
add_action('wp_enqueue_scripts', 'adviso_custom_css_mods');
