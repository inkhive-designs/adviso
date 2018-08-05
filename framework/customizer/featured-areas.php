<?php
/**
 *
 *	Panel for all the Featured Areas of Adviso
 *
**/


function adviso_featured_panel_customize_register( $wp_customize ) {

  // Has to be at the top
  $wp_customize->register_panel_type( 'Adviso_WP_Customize_Panel' );
  $wp_customize->register_section_type( 'Adviso_WP_Customize_Section' );

  $wp_customize->add_panel(
	  new Adviso_WP_Customize_Panel(
		  $wp_customize,
		  'adviso_featured_panel',
		  array(
			  'title'	=> __( 'Featured Areas', 'adviso' ),
			  'priority'	=> 15
		  )
	  )
  );
  
  $wp_customize->add_panel(
	  new Adviso_WP_Customize_Panel(
		  $wp_customize,
		  'adviso_featured_posts',
		  array(
			  'title'	=> __( 'Posts', 'adviso' ),
			  'priority'	=> 5,
			  'panel'	=> 'adviso_featured_panel'
		  )
	  )
  );
  
  if ( class_exists('woocommerce') ) :
	  $wp_customize->add_panel(
		  new Adviso_WP_Customize_Panel(
			  $wp_customize,
			  'adviso_featured_products',
			  array(
				  'title'	=> __( 'Products', 'adviso' ),
				  'priority'	=> 10,
				  'panel'	=> 'adviso_featured_panel'
			  )
		  )
	  );
  endif;
  
  
  // The Sections and their Controls have been defined in their respective files
  
}

add_action( 'customize_register', 'adviso_featured_panel_customize_register', 5 );



function test_customize_register( $wp_customize ) {
  // Has to be at the top
  $wp_customize->register_panel_type( 'Adviso_WP_Customize_Panel' );
  $wp_customize->register_section_type( 'Adviso_WP_Customize_Section' );
  // Below this there is only demo code, safe to delete and add your own
  // panels/sections/controls
  // Add three levels on panels
  $lvl1ParentPanel = new Adviso_WP_Customize_Panel( $wp_customize, 'lvl_1_parent_panel', array(
    'title' => 'Level 1',
    'priority' => 131,
  ));
  $wp_customize->add_panel( $lvl1ParentPanel );
  $lvl2ParentPanel = new Adviso_WP_Customize_Panel( $wp_customize, 'lvl_2_parent_panel', array(
    'title' => 'Level 2',
    'panel' => 'lvl_1_parent_panel',
  ));
  $wp_customize->add_panel( $lvl2ParentPanel );
  $lvl3ParentPanel = new Adviso_WP_Customize_Panel( $wp_customize, 'lvl_3_parent_panel', array(
    'title' => 'Level 3',
    'panel' => 'lvl_2_parent_panel',
    'priority' => 1,
  ));
  $wp_customize->add_panel( $lvl3ParentPanel );
  // Add example section and controls to the final (third) panel
  $wp_customize->add_section( 'Adviso_section', array(
    'title' => 'Section Test',
    'panel' => 'lvl_3_parent_panel',
  ));
  $wp_customize->add_setting( 'Adviso_test', array(
    'default' => 'default value here',
    'sanitize_callback' => 'wp_kses_post',
    'transport' => 'postMessage',
  ));
  $wp_customize->add_control( 'Adviso_test', array(
    'type' => 'text',
    'label' => 'Some text control',
    'section' => 'Adviso_section',
  ));
  // Add example section and controls to the middle (second) panel
  $wp_customize->add_section( 'Adviso_section_2', array(
    'title' => 'Section 2 Test',
    'panel' => 'lvl_2_parent_panel',
    'priority' => 2,
  ));
  $wp_customize->add_setting( 'Adviso_test_2', array(
    'default' => 'default value here',
    'sanitize_callback' => 'wp_kses_post',
    'transport' => 'postMessage',
  ));
  $wp_customize->add_control( 'Adviso_test_2', array(
    'type' => 'text',
    'label' => 'Some text control 2',
    'section' => 'Adviso_section_2',
  ));
  // Add example section and controls to another section
  $lvl1ParentSection = new Adviso_WP_Customize_Section( $wp_customize, 'lvl_1_parent_section', array(
    'title' => 'Level 1 Section',
    'panel' => 'lvl_3_parent_panel',
  ));
  $wp_customize->add_section( $lvl1ParentSection );
  $lv21ParentSection = new Adviso_WP_Customize_Section( $wp_customize, 'lvl_2_parent_section', array(
    'title' => 'Level 2 Section',
    'section' => 'lvl_1_parent_section',
    'panel' => 'lvl_3_parent_panel',
  ));
  $wp_customize->add_section( $lv21ParentSection );
  $wp_customize->add_setting( 'Adviso_test_3', array(
    'default' => 'default value here',
    'sanitize_callback' => 'wp_kses_post',
    'transport' => 'postMessage',
  ));
  $wp_customize->add_control( 'Adviso_test_3', array(
    'type' => 'text',
    'label' => 'Some text control 3',
    'section' => 'lvl_2_parent_section',
  ));
}
add_action( 'customize_register', 'test_customize_register' );