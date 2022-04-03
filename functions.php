<?php

get_template_part('/inc/codestar');

function halim_setup() {

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post', 'sliders', 'teams', 'testimonials', 'portfolio', 'gallery'));
    load_theme_textdomain('halim', get_template_directory() . '/languages');
    add_theme_support( 'custom-logo' );

    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'halim')
    ));
	
			add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);


}
add_action('after_setup_theme', 'halim_setup');


function halim_assets() {
    
    // CSS
    wp_enqueue_style( 'font-family', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style( 'templatemo', get_template_directory_uri() . '/css/templatemo-style.css', array(), '1.0.0', 'all');
   

    wp_enqueue_style( 'style-theme', get_stylesheet_uri() );




    // JS
    wp_enqueue_script( 'responsiveCarousel', get_template_directory_uri() . '/js/responsiveCarousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'templatemo', get_template_directory_uri() . '/js/templatemo-script.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'isotopee', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '1.0.0', true );
   


}   
add_action('wp_enqueue_scripts', 'halim_assets');



// Custom Posts
function halim_custom_posts() {

    // Slider Custom Post
    register_post_type('sliders', array(
        'labels' => array(
            'name' => __('Who we are', 'halim'),
            'singular_name' => __('Who we are', 'halim')
        ),
        'public' => true,
        'show_ui' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true
    ));

        		    // Portfolio Custom Post
			register_post_type('portfolio', array(
				'labels' => array(
					'name' => __('Portfolios', 'halim'),
					'singular_name' => __('Portfolio', 'halim')
				),
				'public' => true,
				'show_ui' => true,
				'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
			));



			register_taxonomy('portfolio-cat', 'portfolio', array(
				'lables' => array(
					'name' => __('Categories', 'halim'),
					'singular_name' => __('Category', 'halim')
				),
				'hierarchical' => true,
				'show_admin_column' => true
			));



}
add_action('init', 'halim_custom_posts');



// Register Sidebar

function halim_widgets_init() {

    register_sidebar( array(
        'name'          => __( 'Footer Sidebar-1', 'titu' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="col-lg-2 col-md-2 col-sm-6 footer-block">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-uppercase">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Sidebar-2', 'titu' ),
        'id'            => 'sidebar-2',
        'before_widget' => '<div class="col-lg-4 col-md-4 col-sm-6 footer-block">',
        'after_widget'  => '</div>',
        'before_title'  => ' <h3 class="text-uppercase">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Sidebar-3', 'titu' ),
        'id'            => 'sidebar-3',
        'before_widget' => '<div class="col-lg-3 col-md-3 col-sm-6 footer-block">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-uppercase">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Sidebar-4', 'titu' ),
        'id'            => 'sidebar-4',
        'before_widget' => '<div class="col-lg-3 col-md-3 col-sm-6 footer-block">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-uppercase">',
        'after_title'   => '</h3>',
    ) );



 
}
add_action( 'widgets_init', 'halim_widgets_init' );