<?php	
function adviso_customize_register_skins( $wp_customize ) {
	
	$wp_customize->get_section('colors')->title = __('Theme Skin & Colors','adviso');
	$wp_customize->get_section('colors')->panel ='adviso_design_panel';
	$wp_customize->get_control( 'background_color' )-> priority	=	15;

	$header_titlecolor = (object)$wp_customize->get_setting('header_textcolor');
	$header_titlecolor->default = "#ff5722";

	$wp_customize->get_control('header_textcolor')->label = __('Site Title Color','adviso');
	
	$wp_customize->add_setting('adviso_header_desccolor', array(
	    'default'     => '#FFFFFF',
	    'sanitize_callback' => 'sanitize_hex_color',
	    'transport'	=> 'postMessage'
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
	
	$wp_customize->add_setting('adviso_top_bar_color', array(
	    'default'     => '#000000',
	    'sanitize_callback' => 'sanitize_hex_color',
	    'transport'	=> 'postMessage'
	));
	
	$wp_customize->add_control(new WP_Customize_Color_Control( 
		$wp_customize, 
		'adviso_top_bar_color', array(
			'label' => __('Top Bar Color','adviso'),
			'description'	=> __('Color for Site Navigation ,Search Icon and Contact Information on Front Page', 'adviso' ),
			'section' => 'colors',
			'settings' => 'adviso_top_bar_color',
			'type' => 'color',
			'priority'	=> 20,
		) ) 
	);
	
	
//	$wp_customize->add_setting(
//		'adviso_skin',
//		array(
//			'default'=> 'default',
//			'sanitize_callback' => 'adviso_sanitize_skin' 
//			)
//	);
//	
//	$skins = array( 'default' => __('Default(Adviso)','adviso'),
//					'blue-pink' => __('Pinkyblue','adviso'),
//                    'yellow-black' => __('Yellowishblack', 'adviso'),
//					);
//	
//	$wp_customize->add_control(
//		'adviso_skin',array(
//				'settings' => 'adviso_skin',
//				'section'  => 'colors',
//				'label' => __('Choose Skin','adviso'),
//				'description' => __('Free Version of Adviso Supports 3 Different Skin Colors.','adviso'),
//				'type' => 'select',
//				'choices' => $skins,
//			)
//	);
//	
//	function adviso_sanitize_skin( $input ) {
//		if ( in_array($input, array('default', 'blue-pink', 'yellow-black') ) )
//			return $input;
//		else
//			return '';
//	}

    //Select the Default Theme Skin
    $wp_customize->add_section(
        'adviso_skin_options',
        array(
            'title'     => __('Theme Skin & Colors','adviso'),
            'priority'  => 39,
            'panel'     => 'adviso_design_panel'
        )
    );

    function adviso_sanitize_skin( $input ) {
        if ( in_array($input, array('default','blue-pink','yellow-black','off-blue-gray','brownish') ) )
            return $input;
        else
            return '';
    }

    //Skins
/*
    $wp_customize->add_setting(
        'adviso_skins',
        array(
            'default'	=> 'default',
            'sanitize_callback' => 'adviso_sanitize_skin',
            'transport'	=> 'refresh'
        )
    );

    if(!function_exists('adviso_skin_array')){
        function adviso_skin_array(){
            return array(
                '#ff6600' => 'default',
                '#2590df' => 'blue-pink',
                '#000000' => 'yellow-black',
                '#04def7' => 'off-blue-gray',
                '#e2ccb2' => 'brownish',
            );
        }
    }

    $adviso_skin_array = adviso_skin_array();


    $wp_customize->add_control(
        new Adviso_Skin_Chooser(
            $wp_customize,
            'adviso_skins',
            array(
                'settings'		=> 'adviso_skins',
                'section'		=> 'colors',
                'label'			=> __( 'Select Skins', 'adviso' ),
                'type'			=> 'skins',
                'choices'		=> $adviso_skin_array,
            )
        )
    );
*/
}
add_action('customize_register', 'adviso_customize_register_skins');
 