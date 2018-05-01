<?php
function adviso_custom_wp_admin_scripts() {

    wp_enqueue_script( 'adviso-customizer-js', get_template_directory_uri() . '/js/customizer.js' );

}
add_action( 'admin_enqueue_scripts', 'adviso_custom_wp_admin_scripts' );