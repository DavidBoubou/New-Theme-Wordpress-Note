<div id="commentaires" class="comments">
    <!-- Commentaire associé à l'article--->
    <?php if ( have_comments() ) : ?>
        <h2 class="comments__title">
            <?php echo get_comments_number(); // Nombre de commentaires ?> Commentaire(s)
        </h2>
    
        <ol class="comment__list">
            <?php
            	// La fonction qui liste les commentaires
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                ) );
            ?>
        </ol>
        
        <?php 
    		// S'il n'y a pas de commentaires
    		if ( ! comments_open() && get_comments_number() ) : 
    	?>
        <p class="comments__none">
            Il n'y a pas de commentaires pour le moment. Soyez le premier à participer !
    	</p>
        <?php endif; ?>
    <?php endif; ?>
 
    <?php comment_form(); // Le formulaire d'ajout de commentaire ?>
</div>
<!-- 
    Pour personnalisation du commentaires:

    get_the_title()            : Obtention du titre
    wp_list_comments( array()) : style de la liste des commentaires (definir une balise liste av application)
    comment_form();            : Fromulaire du commentaire
    paginate_comments_links(); : Pagination des commentaires (utile pour mobile).Activez la conf wordpress !!! 

    Metadata: get_comment_link(),get_comment_author(),get_comment_date(),get_comment_time(),get_comment_text()

    <h2 class="comments-title">
    <?php
    /*
                printf( _nx( 'One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'twentythirteen' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );

             wp_list_comments( array(
                                    'style'       => 'ol',
                                    'short_ping'  => true,
                                    'avatar_size' => 74,
                                ) );
     */
    ?>
        </h2>
-->