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
define( 'DB_NAME', 'projet-koukaki' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '8P*#F!@eVv<40EnZk0Rx:^8_r7OunU]eW#>:!5O=,/7A xK5xprm2v#AUr_0v;:R' );
define( 'SECURE_AUTH_KEY',  'G`0~`sgCu_w>`kWdsfOEI%:?z&]_P:KFdk0p)Wd.Zm]9%//m?4)j[>ClX`Rz&G>-' );
define( 'LOGGED_IN_KEY',    ':2@w):]9K|SX?d4x^?WzYIO{8*x.C*2eRQS2:@z.18-X9%^F[t5^/f;PADAXWnh|' );
define( 'NONCE_KEY',        ';)43)w^3-h0R~kt}Y1m5h t8,E+tSyr^H^V0w]A<lO.NJS@)kJ8b.)RV<dxu#vn4' );
define( 'AUTH_SALT',        '}@=cdWRa}puNr sNA JgvR*7%;Qy=-@&JnYkCf]*qVgva p%%]E,.2XoDbfC^zb}' );
define( 'SECURE_AUTH_SALT', 'Z^EYw3d,dk1Ff0DhDB~Y?0ydY,_*^D:jY:{!AS%UMz~.tAw @=uixXX*yikequsd' );
define( 'LOGGED_IN_SALT',   'CA~tAMAK_4t@xh}-EJA#&8@>j>o>A,RG6Fy#}^tAbo$<)t~e3`#?X;_nsPqTX%iY' );
define( 'NONCE_SALT',       'eDr%OdKItY=<3DWA!^G0*FdJoOCUx$7*juU<&$pWyB(-W&.$lLVIIbK0z;i&R$.(' );
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
