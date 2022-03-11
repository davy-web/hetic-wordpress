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
define( 'DB_NAME', 'data' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'password' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'r3 SRz~gUVSvyOG~7+FEx^YDz8kbK#B_U@FjX6~197:iscXa?g5iG,U7aAk!PVrL' );
define( 'SECURE_AUTH_KEY',  'H_0HH:;:.[{f6VL{E23`H1M(z]{IF]i|L%/d3]f~3p]~s[v.)}jn)#2zFeR&/sbi' );
define( 'LOGGED_IN_KEY',    'Ae6t+!p<u&CTp0.i_f1<2P2}4<w4fcrX_o=Vl]j<|Z/ykmO/zk0:OAzUSc?|7P@N' );
define( 'NONCE_KEY',        'CGbCZWeTnM,3?p>$*)?;Py|ZO ^DEZiNYJ>)nNP(Nldk`8T.*(TU$u*W5/<JHNr:' );
define( 'AUTH_SALT',        'DdTCf}6x9!r*Z>C2fN~k{k~F%TIkxhC}v,3q?G;7TsX)My#:> 1_~Y>W1mu0_!#d' );
define( 'SECURE_AUTH_SALT', '?5,Aqj|xZ#Rqlk3]E7t96hoVV;{!p=h,9-4fHxu3!)>hivjxF7FN+sUQ=Jvc6B`-' );
define( 'LOGGED_IN_SALT',   ',f4v-u~^mr:#ukV}Q`%(XGk;.VxADz2>G$#v-wX@IAYbV|K.biRM)NEfu=iL(. |' );
define( 'NONCE_SALT',       'dK(%^gue 2XJR$OzG@6PiMs]wz9|i##4v![t$oP,P5k{Jz=eImcB3V8.}{x}zvE*' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
