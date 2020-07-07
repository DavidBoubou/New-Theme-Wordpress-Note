<!DOCTYPE html>
<!-- page d'arcticles--->

<?php get_header(); ?>
    <!-- Affichage de tout les posts et de leurs contenues--->
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <article class="post">
     <!-- Image mise en avant--->
     <?php if ( has_post_thumbnail() ): ?>
        <div class="post__thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>
     <?php endif; ?>

      <!-- Titre de l'article--->
      <h1><?php the_title(); ?></h1>

      <div class="post__meta">
          <!-- Obtention de l'avatar de l'auteur--->
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
        <p>
          Publié le <?php the_date(); ?>
          par <?php the_author(); ?>
          Dans la catégorie <?php the_category(); ?>
          Avec les étiquettes <?php the_tags(); ?>
        </p>
      </div>
      <!-- Contenue--->
      <div class="post__content">
        <?php the_content(); ?>
      </div>
    </article>
    <!--Affiche un champs personnalisé<--->
    <?php echo get_post_meta( get_the_ID() /*ID dez l'article*/, 'moins'/*Nom du champs*/, true /*Valeur unique pour l'article*/); ?>
  <?php endwhile; endif; ?>
<?php get_footer(); ?>
