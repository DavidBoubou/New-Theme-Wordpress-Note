<!DOCTYPE html>
<!-- Langue du site (réglage wordpress)-->
<html <?php language_attributes(); ?>>
<head>
    <!-- Encodage du site-->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <script src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <!-- Chargement des styles et des scripts -->
    <?php wp_head(); ?>
</head>

<!-- Ajout des class body-->
<body <?php body_class(); ?>>
 <header class="header">

   <!-- Affichage de la barre de recherche (::pour ppersonalisation creer un fichier searchform.php à la racine)-->
   <?php get_search_form(); ?>

  <!-- Affichage du menu si bien configurés-->
   <?php wp_nav_menu( array( 'theme_location' => 'main',
                                  'container' => 'ul', /* afin d'éviter d'avoir une div autour */
                                  'menu_class' => 'site__header__menu', /* ma classe personnalisée*/  ) ); ?>

    <!-- Definition de l'URL page home -->
    <a href="<?php echo home_url( '/' ); ?>">
      
     <!-- Obtention de l'url du logo logo.svg -->
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
    </a>  
  </header>
    <?php wp_body_open(); ?>