<!-- page d'accueil du site (voir reglage wordpress)--->

<?php get_header(); ?>

    <!-- Affichage de tout les posts et de leurs contenues--->
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
    
<?php get_footer(); ?>