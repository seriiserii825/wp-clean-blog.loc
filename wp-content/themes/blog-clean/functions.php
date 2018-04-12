<?php

// правильный способ подключить стили и скрипты темы
add_action( 'wp_enqueue_scripts', 'blog_clean_scripts' );
function blog_clean_scripts() {
	// подключаем файл стилей темы
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_style( 's3slider', get_template_directory_uri() . '/assets/s3slider.css' );
	
	// подключаем js файл темы
	wp_enqueue_script( 'jquery-my', get_template_directory_uri() .'/assets/js/jquery.min.js', array(), null, true );
	wp_enqueue_script( 's3Slider', get_template_directory_uri() .'/assets/js/s3Slider.js', ['jquery-my'], null, true );
}


//регистрируем меню
add_action('after_setup_theme', 'register_top_menu');
function register_top_menu(){
	register_nav_menu( 'menu-top', 'Меню в шапке');
}

//регистрируем сайдбар
add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){
	register_sidebar( array(
		'name'          => 'Сайдбар',
		'id'            => 'sidebar',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div class="templatemo_list">',
		'after_widget'  => "</div>",
		'before_title'  => '<h4>',
		'after_title'   => "</h4>",
	) );
}
