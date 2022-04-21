<?php 
register_nav_menus(array(
    'menu' => 'principal'
));
// Fonction enregistrer le menu

add_theme_support('custom-logo');
// Fonction pour afficher le logo dans la nav

function monscript() {

    wp_enqueue_style( 
        'moncss',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );}
    wp_enqueue_script( 'backtotop', get_theme_file_uri( './backtotop.js' ), array(), null, true );

        add_action( 'wp_enqueue_scripts', 'monscript' );