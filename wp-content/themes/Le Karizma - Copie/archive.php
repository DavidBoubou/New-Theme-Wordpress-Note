<!-- Page d'archive (contient une liste d'articles,de commentaires ....) --->

<?php get_header(); ?>

<!-- Parcours de la totalité des contenues --->
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
  <article class="post">
      <!-- Affichage du titre--->
      <h2><?php the_title(); ?></h2>

     <!-- Affichage de l'image de mise en avant (activation: voir function.php) --->
      <?php the_post_thumbnail(); ?>

      <!-- Affichage de la date de publication, autheur et nombre de commentaire comments_number(0 comments,1 comment,% comments)--->
      <p class="post__meta">
          Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
          par <?php the_author(); ?> • <?php comments_number(); ?>
      </p>

        <!-- Affichage de lun extrait de l'article (55 mots)--->
        <?php the_excerpt(); ?>
        
        <p>
        <!-- Affichage le lien vers l'article--->
          <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
      </p>
  </article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>