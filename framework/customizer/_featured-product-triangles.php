<?php
function adviso_customize_register_fproduct_triangles($wp_customize) {
    if ( class_exists('woocommerce') ) :
        $wp_customize->add_section(
            'adviso_product_triangle_section',
            array(
                'title'     => __('Featured Products Triangles','adviso'),
                'priority'  => 10,
                'panel'     => 'adviso_featured_products'
            )
        );

        $wp_customize->add_setting(
            'adviso_product_triangle_enable',
            array(
                'sanitize_callback' => 'adviso_sanitize_text',
                'default' => 'disable'
            )
        );

        $wp_customize->add_control(
            new Adviso_Switch_Control(
                $wp_customize,
                'adviso_product_triangle_enable',
                array(
                    'settings'		=> 'adviso_product_triangle_enable',
                    'section'		=> 'adviso_product_triangle_section',
                    'label'    => __( 'Enable Product Triangles.','adviso' ),
                    'enable_disable' 	=> array(
                        'enable' => __( 'Enabled', 'adviso' ),
                        'disable' => __( 'Disabled', 'adviso' )
                    )
                )
            )
        );

        $wp_customize->add_setting(
            'adviso_product_triangle_title',
            array( 'sanitize_callback' => 'sanitize_text_field' )
        );

        $wp_customize->add_control(
            'adviso_product_triangle_title', array(
                'settings' => 'adviso_product_triangle_title',
                'label'    => __( 'Title','adviso' ),
                'section'  => 'adviso_product_triangle_section',
                'type'     => 'text',
            )
        );

        $wp_customize->add_setting(
            'adviso_product_triangle_cat',
            array( 'sanitize_callback' => 'adviso_sanitize_product_category' )
        );

        $wp_customize->add_control(
            new WP_Customize_Product_Category_Control(
                $wp_customize,
                'adviso_product_triangle_cat',
                array(
                    'label'    => __('Products Category.','adviso'),
                    'settings' => 'adviso_product_triangle_cat',
                    'section'  => 'adviso_product_triangle_section'
                )
            )
        );
    endif;
}
add_action('customize_register', 'adviso_customize_register_fproduct_triangles');