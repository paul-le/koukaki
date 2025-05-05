<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

function addfilesjsandcss() {
    wp_deregister_script('jquery');
    // Utiliser car il est de base sur Wordpress et que ça créer des conflits quand on l'appeller de nous même

    // Enregistrer jQuery à partir de la bibliothèque de Google
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);

    // Ajouter jQuery à la file d'attente des scripts
    wp_enqueue_script('jquery');

	wp_enqueue_style( 'mainstyle', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_script( 'javascriptfile', get_stylesheet_directory_uri() . '/scripts/script.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'addfilesjsandcss' );

// function enqueue_swiper_js() {
//     // Enqueue Swiper CSS
//     // wp_enqueue_style( 'swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );

//     wp_enqueue_style('swiper-css','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',[],null , true );
    
//     // Enqueue Swiper JS
//     wp_enqueue_script( 'swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true );

//     wp_enqueue_script('swiper-script');
// }

// add_action( 'wp_enqueue_scripts', 'enqueue_swiper_js' );

function enqueue_swiper_test() {
    echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">';
    echo '<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>';
}
add_action('wp_head', 'enqueue_swiper_test');