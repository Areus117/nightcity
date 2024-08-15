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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', "areusdzdecimus" );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', "areusdzdecimus" );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', "Motdepasse123456" );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', "areusdzdecimus.mysql.db" );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'xk|6[-2h+eWdR=Ou,<KW;$!Pz;&lg4@;qJEt;:#hd2xfO`vZ) &<H[fKb>A=L0sa' );
define( 'SECURE_AUTH_KEY',  'qfu-J[{87`%,Rpq0!8&hpya_^HJH@me+IZ[StX1YChm(X5)R|yX9aD{@>G#s N3n' );
define( 'LOGGED_IN_KEY',    'Xv^%@Uo%Vs<=R5m/d[)bAg)Or7Y45v+Y{@l|wK} 1-@*;>} r={Rw)M3STZ{B4_}' );
define( 'NONCE_KEY',        'SM1~{>G{@zS7jJ!T%Gv~VBJ+1H?b_w(d0XOa1/_laq;x.Gr23LhFDDF}z1yljX6y' );
define( 'AUTH_SALT',        '8B(2+oNv,(@;OLQyZoFzWue-2vEXW{3M9V7W?q|p`)[ebNKc ,~b>#=eJJM</3@A' );
define( 'SECURE_AUTH_SALT', '6.0;=(Q[But`mLm02O}k<!Cfwfv%q:0f#.`7cl+*Ij}$J%/9iX!wu6M8C$sjf.*C' );
define( 'LOGGED_IN_SALT',   '0$G.7l#yX2XR7g 27.#[2X&<IuF?P P+ I-}~2,M+5*j^Xj99Pn@]aR$*B~Mfya*' );
define( 'NONCE_SALT',       'rMmOvo}gG8:b^j3mc`bN_(O{lMlPYiEr`TvgE%W14XzTOcer~bjV:iw407^QFb[^' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
define( 'WP_SITEURL', 'http://www.voyageespace.areus-dev.fr/index.html/nightcity/' );
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
