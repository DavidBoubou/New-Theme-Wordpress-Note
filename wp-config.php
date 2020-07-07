<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp-mysql' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u&_<QI,7$:B7<uLiV%xCDIG~I/:uTM1~+cJwb<IXD?te&n%:G07.TF1Nez^.QS2s' );
define( 'SECURE_AUTH_KEY',  '[A 2)`H2o+cnuYEn_3rH2|SnUu 0q[wO1d~SXLvs*:g7,g3ukD8@h%m5WndL}Hz4' );
define( 'LOGGED_IN_KEY',    '6;zMJc9pQocy;)&pGeo191_EF!?yUh~~*Oj*wTS&C{<t(V$J9yzkd-CSf}~W0c)(' );
define( 'NONCE_KEY',        '#8z8N;_J)P+9ua@u05!Vhh##j+0[f3M?3DV}Lq&ZjMA+YX/Ai//qx[H%$|2o`-e5' );
define( 'AUTH_SALT',        '?l]ntF_D8=RCtM<@d(fK?GdPZLL~0:#5|lAWhH<=}I|%ns77RLH$J7N  y9])gSW' );
define( 'SECURE_AUTH_SALT', '^?Rxa>|YtF!wVQ6`#jHDZ^;U ftH :-1cVg4gz5I(8!~L:FKi0w7q`}00=mng$WE' );
define( 'LOGGED_IN_SALT',   'Rk[D<H#7[:j sF{:~a?m)ZvCk: =IxD{F<d>.)@(fPoT/+-5N$h;qP:O2j=,F`0T' );
define( 'NONCE_SALT',       '~<Ry&OeE5%NA#GSaJv:15P;B9tiYGk&iWMg~0t<*T!hZnKxcDde|ZBdAJ_v9ct6g' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
