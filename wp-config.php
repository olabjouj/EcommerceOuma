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

/** Sets up 'direct' method for wordpress, auto update without ftp */
define('FS_METHOD','direct');

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'siteWordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wordpressEcommerce' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Yasserrabi1994@' );

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
define( 'AUTH_KEY',         'PF1gc<e-9>6XevVEpa2ZN&?}:Oa2<jYtrnJ-SD(.yx}cPWT#&tW:`w#L6(aKr<pv' );
define( 'SECURE_AUTH_KEY',  '2Kd4Q0A`-4<ngXIx:&#w;ov5zk:AZwTJS42,6k!6?-7*jlx~^QS9()W&RD(;H0}X' );
define( 'LOGGED_IN_KEY',    'b@j.1!G(bGJD1%nAX|h94SV*f-aH/F;Mll$=Yc8c}S&[hTSa/heC9V2Bg7cE_$SH' );
define( 'NONCE_KEY',        's[Yo?{mh7+Ma#si=ev-;v-340)zn)_G|:<^&g^M>a$AuEyp<uammYj+g_el8/~r>' );
define( 'AUTH_SALT',        'd`w .XpG<_W01hdRa9P;Tiuh!T6L<=y=Gww,UD){<T?;o`PT8g!bNidt8F3dsh64' );
define( 'SECURE_AUTH_SALT', '-,v<;g::^x/6$8Ga*.aeL*8f<ogXm{ebk/u#w4Ug#g&s8#p:c7x(Z~&(ePdM-eVG' );
define( 'LOGGED_IN_SALT',   '-T)a+M%AZk]&!{I>@wyT|Nl&u,p`wh>A0(i;38j4(2SdWzuuQjRyoHt%s&D _QQ>' );
define( 'NONCE_SALT',       '/,N.F?HyU8Pv#p~A<&&g-2>lU$xaLtfUNJ:3 1%Rf:W56C.y}A<LE3(|D4bUVay#' );
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

