<?php

require get_template_directory() .'/inc/customizer.php';

function blogtheme_load_scripts(){
    wp_enqueue_style('mr_style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style( 'google-font', "https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap", array(), null);
    wp_enqueue_style( 'font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css", array(), null);
    wp_enqueue_script( 'slider', get_template_directory_uri() ."/assets/js/slider.js", array(), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'blogtheme_load_scripts' );


function blogtheme_config(){
    
    register_nav_menus(
        array(
            'blogtheme_main_menu' => 'Main Menu',
            'blogtheme_footer_menu' => 'Footer Menu'
        )
    );
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
    $args = array(
		'default-text-color' => 'fff',
        'header-text'            => true,
		'flex-width'    => true,
        'width'         => 1980,
        'flex-height'   => true,
        'height'        => 225,
    );

    add_theme_support( 'custom-header', $args);

    $defaults = array(
		'default-text-color' => '000',
		'width'              => 200,
		'height'             => 200,
		'flex-width'         => true,
		'flex-height'        => true,
        'header-text'        => array('site-title', 'site-description')
    );

    add_theme_support( 'custom-logo',  $defaults);
}

add_action('after_setup_theme', 'blogtheme_config', 0);

add_action( 'widgets_init', 'blogtheme_sidebars');

function blogtheme_sidebars(){
    register_sidebar( 
        array(
           "name" =>    "Social Media Sidebar",
           "id" => "sidebar-socials",
           "description" => "this a blog side bare, you can add widgets here",
           "before_widget" => "<div class='social-medias'>",
           "after_widget" => "</div>",
        )
    );
    register_sidebar( 
        array(
           "name" =>    "Footer About Sidebar",
           "id" => "sidebar-abfooter",
           "description" => "this a blog side bare, you can add widgets here",
           "before_widget" => "<div class='abfooter'>",
           "after_widget" => "</div>",
        )
    );
    register_sidebar( 
        array(
           "name" =>    "Footer Socials Sidebar",
           "id" => "sidebar-slfooter",
           "description" => "this a blog side bare, you can add widgets here",
           "before_widget" => "<div class='slfooter'>",
           "after_widget" => "</div>",
        )
    );
}


if ( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}

?>