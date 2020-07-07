<!-- 

Fichier non utile pour wordpress, sert de note concernant les mémos.
-->
<?php 
//Verifie si l'utilisateur est connecter, obtention des informations de l' user et affichage du nom.
if ( is_user_logged_in() ):
	get_currentuserinfo(); 
    echo "Bonjour, " . $current_user->user_firstname;
else:
    echo "Bonjour, visiteur !";
endif;
?>

<?php
    //  
    single_tag_title();
    //Obtention du mot clé rechercher
    get_search_query()

    //Si page d'accueil (blog/article)
    if ( is_front_page() ) { /*Code*/}
    // Vrai sur la page des articles du blog seulement
    if( is_home() ) { } 
?>