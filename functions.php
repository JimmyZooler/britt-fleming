<?php
function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    
    wp_enqueue_style( 'google-font-styles', 'https://fonts.googleapis.com/css?family=Lato:400,700', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_style( 'magnific-styles', get_stylesheet_directory_uri() . '/css/magnific-popup.css', array() );
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script( 'magnific-scripts', get_stylesheet_directory_uri() . '/js/jquery.magnific-popup.js', array(), false, true );
    wp_enqueue_script( 'custom-scripts', get_stylesheet_directory_uri() . '/src/js/scripts.js', array('jquery'), true );
    wp_enqueue_script( 'salvattore-scripts', get_stylesheet_directory_uri() . '/src/js/salvattore.min.js', array(), false, true );

}
