<?php	
function adviso_customize_register_skins( $wp_customize ) {
	
	$wp_customize->get_section('colors')->title = __('Theme Skin & Colors','adviso');
	$wp_customize->get_section('colors')->panel ='adviso_design_panel';
	
	$wp_customize->get_control('header_textcolor')->label = __('Site Title Color','adviso');
	
	$wp_customize->add_setting('adviso_header_desccolor', array(
	    'default'     => '#FFFFFF',
	    'sanitize_callback' => 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control( 
		$wp_customize, 
		'adviso_header_desccolor', array(
			'label' => __('Site Tagline Color','adviso'),
			'section' => 'colors',
			'settings' => 'adviso_header_desccolor',
			'type' => 'color'
		) ) 
	);
	
	$wp_customize->add_setting(
		'adviso_skin',
		array(
			'default'=> 'default',
			'sanitize_callback' => 'adviso_sanitize_skin' 
			)
	);
	
	$skins = array( 'default' => __('Default(Adviso)','adviso'),
					'blue-pink' => __('Pinkyblue','adviso'),
                    'yellow-black' => __('Yellowishblack', 'adviso'),
					);
	
	$wp_customize->add_control(
		'adviso_skin',array(
				'settings' => 'adviso_skin',
				'section'  => 'colors',
				'label' => __('Choose Skin','adviso'),
				'description' => __('Free Version of Adviso Supports 3 Different Skin Colors.','adviso'),
				'type' => 'select',
				'choices' => $skins,
			)
	);
	
	function adviso_sanitize_skin( $input ) {
		if ( in_array($input, array('default', 'blue-pink', 'yellow-black') ) )
			return $input;
		else
			return '';
	}
}
add_action('customize_register', 'adviso_customize_register_skins');
 