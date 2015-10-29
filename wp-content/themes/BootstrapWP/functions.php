<?php

function theme_styles() {
	wp_enqueue_style( 'bootstrap_min_css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style( 'foundation_icons_css', get_template_directory_uri() . '/css/foundation/foundation-icons.css');
}
add_action('wp_enqueue_scripts', 'theme_styles');

function theme_js() {

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

	//Google analytics event tracking
	wp_enqueue_script('event-tracker', get_template_directory_uri() . '/js/event-tracker.js', array('jquery'), '', true );

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

/*-----------Registering Custom Widget Areas---------------------- */
//Front Page Left
$args = array(
	'name'          => 'Front Page Left',
	'id'            => 'front-page-left',
	'description'   => 'Area on the bottom-left of the front page.',
	'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 style="text-align: center;">',
	'after_title'   => '</h2>',
);
register_sidebar($args);

//Front Page Middle
$args = array(
	'name'          => 'Front Page Middle',
	'id'            => 'front-page-middle',
	'description'   => 'Area on the bottom-middle of the front page.',
	'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 style="text-align: center;">',
	'after_title'   => '</h2>',
);
register_sidebar($args);

//Front Page Right
$args = array(
	'name'          => 'Front Page Right',
	'id'            => 'front-page-right',
	'description'   => 'Area on the bottom-right of the front page.',
	'class'         => '',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<h2 style="text-align: center;">',
	'after_title'   => '</h2>',
);
register_sidebar($args);



?>