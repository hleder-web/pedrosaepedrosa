<?php 
	Kirki::add_section( 'header', array(
		'title'      	=> __('Header', 'Pedrosa'),
		'priority' 		=> 20,
	));

	Kirki::add_field( 'default_config', array(
		'type'            => 'image',
		'settings'        => 'header_logo',
		'label'           => __( 'Logo', 'Pedrosa' ),
		'section'         => 'header'
	));
?>