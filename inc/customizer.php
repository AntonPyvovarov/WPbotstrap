<?php

function wpb_customize_register($wp_customize){

	$wp_customize->add_section('showcase',[
		'title'=>__('Showcase','wpboo'),
		'description'=>sprintf('Options for showcase','WpBoo'),
		'prioriry'=>130
	]);
	//image
	$wp_customize->add_setting('showcase_image',[
		'default'=> get_bloginfo('template_directory').'/img/showcase.jpg',
		'type'=>'theme_mod'
	]);

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'showcase_image',[
			'label'=> __('Showcase Image','WpBoo'),
			'section'=>'showcase',
			'settings'=>'showcase_image',
			'priority'=>1
		])
	);

	//h1 text
	$wp_customize->add_setting('showcase_heading',[
		'default'=>_x('Custon Bootsrap Wordpress Theme','WpBoo'),
		'type'=>'theme_mod'
	]);

	$wp_customize->add_control('showcase_heading',[
		'label'=> __('Heading','WpBoo'),
		'section'=>'showcase',
		'priority'=>2
	]);



	$wp_customize->add_setting('showcase_text',[
		'default'=>_x('Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
		Adipisci amet at aut esse facere fuga illum in ipsa labore laborum minus porro possimus quo reiciendis, 
		rerum sit suscipit totam, voluptates.','WpBoo'),
		'type'=>'theme_mod'
	]);

	$wp_customize->add_control('showcase_text',[
		'label'=> __('Text','WpBoo'),
		'section'=>'showcase',
		'priority'=>3
	]);



	$wp_customize->add_setting('btn_url',[
		'default'=>_x('http://test.com','WpBoo'),
		'type'=>'theme_mod'
	]);

	$wp_customize->add_control('btn_url',[
		'label'=> __('Button URL','WpBoo'),
		'section'=>'showcase',
		'priority'=>4
	]);

	$wp_customize->add_setting('btn_text',[
		'default'=>_x('Read More','WpBoo'),
		'type'=>'theme_mod'
	]);

	$wp_customize->add_control('btn_text',[
		'label'=> __('Button Text','WpBoo'),
		'section'=>'showcase',
		'priority'=>5
	]);
}

add_action('customize_register','wpb_customize_register');