<!-- Page basiques-->

<?php get_header(); ?>
    <!-- Affichage de tout les posts et de leurs contenues--->
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
    <aside class="site__sidebar">
            <ul>
                <!-- Affichage de la sidebar  ;; utile pour les footer--->
                <?php dynamic_sidebar( 'blog-sidebar' ); ?>
            </ul>
    </aside>
    <!-- Navigation Suivant-Précédent --->
    <?php posts_nav_link(); ?>

    <!-- Navigation Numéroté --->
    <div class="site__navigation">
        <div class="site__navigation__prev">
            <?php previous_posts_link( 'Page Précédente' ); ?>
        </div>
        <div class="site__navigation__next">
            <?php next_posts_link( 'Page Suivante' ); ?> 
        </div>
    </div>

    <!-- Affichages des commentaires et du formulaire --->
    <?php 
    /*Voir comments.php pour personnalisation*/
    comments_template(/*We can specify file here!*/); 
    ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

<!-- 
Les CPT ou type de contenue devlopppé on leurs propres hooks telque is_post_type_archive::
is_post_type_archive({Nom du type de contenue}) :: retourne un booler si le type de contenue correspont
-->