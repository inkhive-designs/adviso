<?php
/**
 * adviso Theme Customizer
 *
 * @package adviso
 */

function adviso_customize_register_misc( $wp_customize ) {

	//Important Links
    $wp_customize->add_section(
        'adviso_sec_premsupport',
        array(
            'title'     => __('Important Links','adviso'),
            'priority'  => 1,
        )
    );

    $wp_customize->add_setting(
        'adviso_important_links',
        array(
            'sanitize_callback' => 'adviso_sanitize_text'
        )
    );

    $wp_customize->add_control(
        new Adviso_WP_Customize_Upgrade_Control(
            $wp_customize,
            'adviso_important_links',
            array(
                'settings'		=> 'adviso_important_links',
                'section'		=> 'adviso_sec_premsupport',
                'description'	=> '<a class="adviso-important-links" href="https://inkhive.com/contact-us/" target="_blank">'.__('InkHive Support Forum', 'adviso').'</a>
                                    <a class="adviso-important-links" href="https://demo.inkhive.com/adviso-plus/" target="_blank">'.__('Adviso Live Demo', 'adviso').'</a>
                                    <a class="adviso-important-links" href="https://www.facebook.com/inkhivethemes/" target="_blank">'.__('We Love Our Facebook Fans', 'adviso').'</a>
                                    <a class="adviso-important-links" href="https://wordpress.org/support/theme/wpre/reviews" target="_blank">'.__('Review Us', 'adviso').'</a>'
            )
        )
    );
}
add_action( 'customize_register', 'adviso_customize_register_misc' );