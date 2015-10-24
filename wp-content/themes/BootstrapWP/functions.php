<?php

function theme_styles() {
	wp_enqueue_style( 'bootstrap_min_css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/main.css');
}
add_action('wp_enqueue_scripts', 'theme_styles');

function theme_js() {

	//Add Google analytics to header
	wp_enqueue_script('google-analytics', get_template_directory_uri() . '/js/google-analytics.js', '', '', false ); //false means loaded in header, not footer


	//Conditionally add these scripts if before IE 9
	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js','','', false); //false means loaded in header, not footer
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js','','', false);

	
	$wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9' );

	//Bootstrap
	wp_enqueue_script('bootstrap_min_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	//Accordion Scripts
	wp_enqueue_script('jquery_ui', "//code.jquery.com/ui/1.11.4/jquery-ui.js", array('jquery'),'1.11.4', true);
	wp_enqueue_script('load-accordion',get_template_directory_uri() . '/js/load-accordion.js', array('jquery', 'jquery_ui'),'',true );
	wp_enqueue_script('cycle2', get_template_directory_uri() . '/js/jquery.cycle2.js', array('jquery'), '', true );

}
add_action('wp_enqueue_scripts', 'theme_js');

add_theme_support( 'menus' );

function register_theme_menus() {

	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' )
		)
	);
}
add_action( 'init', 'register_theme_menus' );


?>