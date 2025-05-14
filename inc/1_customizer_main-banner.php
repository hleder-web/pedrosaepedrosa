<?php 
	Kirki::add_section( 'mainbanner', array(
		'title'      	=> __('Banner Principal', 'Pedrosa'),
		'priority' 		=> 40,
	));

	Kirki::add_field( 'default_config', [
		'type'            => 'repeater',
		'settings'        => 'mainbanner_images',
		'section'         => 'mainbanner',
		'button_label' 	  => __('New', 'Pedrosa' ),
		'fields' => [
			'image' => [
				'type'        => 'image',
				'label'       => __( 'Imagem', 'Pedrosa' ),
			],
			'imagemobile' => [
				'type'        => 'image',
				'label'       => __( 'Imagem Mobile', 'Pedrosa' ),
			]
		]
	]);
?>