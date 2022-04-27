<!-- fonction enregistrer le menu -->
<?php 
register_nav_menus(array(
    'menu' => 'principal'
));
// fin

// afficher image à la une
add_theme_support( 'post-thumbnails' );
// fin


//supprimer barre admin
function wpc_show_admin_bar() {
    return false;
}
add_filter('show_admin_bar' , 'wpc_show_admin_bar');
//fin


// Fonction pour afficher le logo dans la nav
add_theme_support('custom-logo');
// fin

//Nombres de mots a afficher dans l'aperçu des articles page blog
function new_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');
// fin

// Fonction lire plus
function new_excerpt_more($more) {
    global $post;
    return '… <a href="'. get_permalink($post->ID) . '"> <br>' .  'Lire plus' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
//fin

//ajouter des tailles d'image
add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'home', 1280, 744, false );
    add_image_size( 'blogpage_thumb', 300, 300, false );
    add_image_size( 'singleposthumbnail', 500, 500, false );
    add_image_size( 'singleposthumbnail2', 500, 500, true );
    add_image_size( 'recentpost-thumb', 200, 200, false );
    add_image_size( 'couv', 1536, 1536, false );
}
//fin

// creation de la sidebar
function widget_register_sidebars() {
    register_sidebar( array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'widget_register_sidebars' );
// fin

function monscript() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'anek', "https://fonts.googleapis.com/css2?family=Anek+Tamil:wght@100;200;300;400;500;600&display=swap" );
    wp_enqueue_style( 'jost', "https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;1,100;1,200;1,300&display=swap" );

    }
    wp_enqueue_script( 'progressbar', get_theme_file_uri( './javascript/progressbar.js' ), array(), null, true );

        add_action( 'wp_enqueue_scripts', 'monscript' );

    wp_enqueue_script( 'slider', get_theme_file_uri( './javascript/slider.js' ), array(), null, true );
