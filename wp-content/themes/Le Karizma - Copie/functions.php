<?php
/**
** activation theme
**/

/*Ensemble des processus faisables:
Activer des fonctionnalités comme les images mises en avant ;
Déclarer des emplacements de menus, zones de widgets ;
Déclarer des feuilles de styles CSS et scripts JS ;
Déclarer de nouveaux types de publications et taxonomies ;
Déclarer des fonctions sur mesure ;
Gérer les requêtes Ajax ;
Réécrire des URLs ;
Personnaliser certains réglages d’extensions ;
Personnaliser l’interface d’administration ;
Créer des routes dans l’API Rest ;
*/

//TAILLE DE L IMAGE MISE EN AVANT
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );
// Définir la taille des images mises en avant
set_post_thumbnail_size( 2000, 400, true );
// Définir d'autres tailles d'images
add_image_size( 'products', 800, 600, false );
add_image_size( 'square', 256, 256, false );


// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

//RESSOURCES DU THEMES CSS ET JS 
function Le_karisme_wp_theme()
{
    //Declaratin du style.Css
    wp_enqueue_style(
        "Le_karisme_wp_theme",                                          //Nom unique du fichier
        get_template_directory_uri() . '/css/header.css',                //Chemin du fichier ::: get_stylesheet_directory_uri()=> theme enfant; get_stylesheet_uri() => racine du theme 
        array(),                                                       //Chemin du fichier
        '1.0',                                                           //version du style obligatoire
        true                                                           //true=>footer sinon header
    );
    //Declaratin du script
   //#wp_enqueue_script()
}

//Declaration CPT (theme pour un type de contenue)
function capitaine_register_post_types() {
    // La déclaration de nos Custom Post Types et Taxonomies ira ici
     // Declaration d'un porte folio
     $labels = array(
        'name' => 'Portfolio',                                           
        'all_items' => 'Tous les projets',                          // affiché dans le sous menu
        'singular_name' => 'Projet',                              // 
        'add_new_item' => 'Ajouter un projet',                    //   
        'edit_item' => 'Modifier le projet',                      //  
        'menu_name' => 'Portfolio'                               //Nom du menu (vue sur wordpress admin)   
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,                                          //Utilisation des champs Gutemberg
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5,                                           //Position Menu wordpress
        'menu_icon' => 'dashicons-admin-customizer',                    //Icon de menu (wordpress icon)
    );
    /*
    argument en plus de supports:
    title : le champ Titre (il vaut mieux le laisser) ;
    editor : l’éditeur visuel (classique ou Gutenberg) ;
    author : le champ pour choisir/changer l’auteur ;
    thumbnail : l’image mise en avant ;
    excerpt : le champ extrait ;
    comments : la prise en charge des commentaires ;
    revisions : la sauvegarde automatique de révisions (je conseille de le mettre) ;
    custom-fields : la prise en charge des champs additionnels (on verra mieux avec ACF) ;
    page-attributes : utile si vous voulez donner la possibilité de choisir un template personnalisé ;
    post-formats : les Posts Formats à la tumblr
    */
    //Genere l'url de l'archive et Enregistrezment des données du portfolio pour une session
    register_post_type( 'portfolio', $args );
    
    // Déclaration de la Taxonomie
        $labels = array(
            'name' => 'Type de projets',
            'new_item_name' => 'Nom du nouveau Projet',
            'parent_item' => 'Type de projet parent',
        );
        
        $args = array( 
            'labels' => $labels,
            'public' => true, 
            'show_in_rest' => true,
            'hierarchical' => true, 
        );

    //'type-projet':::Slug de la taxonomy , 'portfolio' :::: type de publication peut etre un array
    register_taxonomy( 'type-projet', 'portfolio', $args );
}
add_action( 'init', 'capitaine_register_post_types' );

//Hooks des styles
add_action( 'wp_enqueue_scripts', 'Le_karisme_wp_theme' );


//MENU
//Placement du menu "Nom machine" => "Nom affiché"
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

//Declaration des side bar
register_sidebar( array(
	'id' => 'blog-sidebar',
	'name' => 'Blog',
) );
/*'before_widget'  => '<div class="site__sidebar__widget %2$s">',
'after_widget'  => '</div>',
'before_title' => '<p class="site__sidebar__widget__title">',
'after_title' => '</p>',
# %2$s permet l'ajout des classes wordpress
*/