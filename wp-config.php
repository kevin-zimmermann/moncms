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
define( 'DB_NAME', 'moncms' );

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
define( 'AUTH_KEY',         'v}^hd;Qez59A*j8_?%1&PDRg|*23g*YN|ohs-#m[O(WxOb``azo,LBz_~{CrC7p:' );
define( 'SECURE_AUTH_KEY',  'ZOzY=eEEO:nky]6BA.oJ!2y!GAN|7yhPwLw748ChvAk8-Y4e@**.R4%}`PW;?Q!@' );
define( 'LOGGED_IN_KEY',    'BdxFT,*kKWKub&2~dR;d]*C:0-T#OzoS`-!>h>gUI.^$yjVQR~M%6;ZMBWX?OPS/' );
define( 'NONCE_KEY',        'b2T{=nA886$cr f;nlwgd^W%M2nIfCk89jI:i-;&MGXn)cF40gP:dp>wr6a?C@I5' );
define( 'AUTH_SALT',        '9Q%b-!E4.;~GFPRxCMVUfsA&Z`r2mw&|sO%c;4.Yw_q8zW;IaAc37nCCG/|P!<rN' );
define( 'SECURE_AUTH_SALT', 'Jz,^ba%aOfZ)e1F63[qbx:NpMNts sgh}VDArAj>+5<}~)46j*?%O+ *V&R.4tT~' );
define( 'LOGGED_IN_SALT',   'Kv1Q(>~w3-3k/=NBBjR_N,gSdO{@~)aqrt,vsWSPt[BH_+R6S8bFqQKWL(%Q/=}S' );
define( 'NONCE_SALT',       '=$|+8mkU5<[v=m$^|ae^U0>k+;!i|CDE$0po^d,04K_{4UAOWBj3~f*6m8[J<n? ' );
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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
