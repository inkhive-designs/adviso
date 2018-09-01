<?php
function adviso_header_text($wp_customize) {
   

    $wp_customize->add_section(
    	'adviso_header_text_section', 
		array(
	        'title' => __('Header Text', 'adviso'),
	        'priority' => 37,
	        'panel'	=> 'adviso_header_panel'
		)
	);
	
	$wp_customize->add_setting(
		'adviso_header_text',
		array(
			'default'	=> '',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
			'transport'		=> 'postMessage'
		)
	);
	
	$wp_customize->add_control(
		'adviso_header_text',
		array(
			'label'	=> __('Enter the Header Text', 'adviso'),
			'type'	=> 'textarea',
			'section'	=> 'adviso_header_text_section'
		)
	);

}
add_action( 'customize_register', 'adviso_header_text' );