<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'W)7|yA.[gaAp~iBUFo36&2GN{}BLQ|}^H2o~=uSuRs3;b,+jdyw7t8+D(t.TOdyj' );
define( 'SECURE_AUTH_KEY',  'i .:qR-WNS1Ns0Dh)9As;G}lN =-<d$ORcU_P/-6E+oAY;|x~5,qcYNH}f;t?f}-' );
define( 'LOGGED_IN_KEY',    'OF&_;3C[(oz`KIW9VMbg;8:j0^/3^[+3yT=Z/nM;709`4A)Zh2Oy&aN)hXjj|cHL' );
define( 'NONCE_KEY',        ',Gx}PZRq>K5bWR7t&?x@6WmQZ9Vy8m64>*<6zZS%h4pf]h`l]/8VZ%D<]ir:~3#*' );
define( 'AUTH_SALT',        'AJi RdOIU,XkM@jVV{V%Ux!/R@?lO?Tw8ut<wKAv:38kW?B1zZG.wwY}k[=xy;p_' );
define( 'SECURE_AUTH_SALT', 'q,e^Wu3=4?r:v;#JsC vw~qs+BWI0#J+rL^D<PqZ?ZDJ.YIHOT1Fp$pigNl/uivL' );
define( 'LOGGED_IN_SALT',   '};jqqf~W?[j?u3J,!ihK&p0zbILde=hyJ5f`utv%nDE3`?uI3#)~Oc^yjM&;n&C.' );
define( 'NONCE_SALT',       '3qCz;@hE_k=V98dS=dQxDG}z-OG5uT&dtss45vA|77/v*W?b;.6Vo@+0!oW>^]o#' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
