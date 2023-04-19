<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

//Déclarer les scripts et styles
function capitaine_register_assets() {
    
    // Déclarer jQuery
    wp_enqueue_script('jquery' );
    
    // Déclarer le JS
	wp_enqueue_script( 
        'capitaine', 
        get_template_directory_uri() . '/js/script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );
  	
    // Déclarer le fichier CSS selon son emplacement
    wp_enqueue_style( 
        'capitaine', 
        get_stylesheet_directory_uri() . '/css/main.css',
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'capitaine_register_assets' );

//Déclarer les fonts
function wpb_add_google_fonts() {
    wp_enqueue_style( 'wpb-google-fonts', "https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap", false );
}
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
