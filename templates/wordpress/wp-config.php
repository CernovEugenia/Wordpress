<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wordpress' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'bananas' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'O!z4Se^./wayt/8%vNyO2#X!Hx[s&9saTPvp4EN}NbN)U$OvaGK5R88Dl1)}{Xy&' );
define( 'SECURE_AUTH_KEY',  'a;<n*`@ %okTS?Me?5II{2#WgWUlq)5DDtZa?k`*RIu2?0duAZ@T^f6CKg.(=N8%' );
define( 'LOGGED_IN_KEY',    'imC/uI-JT@wA<NI,PA$+) 6V*0m{9z(yFM:pO6N,Aq B6OY:j-<qJ@)>%i>SRqS]' );
define( 'NONCE_KEY',        '>Bh:g L4-Wd$q#N%BO.M>?J)vHMedN5P}d]q|b4t*VEOL..=m9ioW{_^.gx_lRe]' );
define( 'AUTH_SALT',        '<ja{{I$oZ=GYPD Nt6|L#k~GEj^i|qAAt_i)8,>tJg$t]D_QH$!S6P80b-&NQcF`' );
define( 'SECURE_AUTH_SALT', '|yTzz,M}IOdECAd;^L)1H6#3`5m7NWv%BF8rC8fq~4G5J]J=@SHP{2.ud+%>k]@U' );
define( 'LOGGED_IN_SALT',   'KdzeP9vJA(9pt1zl`UH?IdRO/KPg?X|qkflCITfEnwC=+Ac2sD5mp.4H={all:Z8' );
define( 'NONCE_SALT',       'z@1fw~qcDs0ncc~8KNd83oM_3fi$le+INyy&5wc6.w6Rv#v]1W7 !M0?X5*N<_/=' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
