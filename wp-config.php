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
define( 'DB_NAME', 'avenger' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<}.lnJ)iB3QFqRl%Qb>;/-*,YA.(`qvY]2v[7rx):zvyBw*sQ`nI@Sf8`1Z=%]bY' );
define( 'SECURE_AUTH_KEY',  ',8EARo/scKFDio`N|.^TnE`?:nmDj*5n^q EBDc.mth(-9vdXJ(_f9bW!BaFB6RW' );
define( 'LOGGED_IN_KEY',    '+HFN]>-tOTp@Wlv1D_E9)33!kvs=JM*ct6PK.`^cL!=_p]@v=9+^|64f#8hbMx|I' );
define( 'NONCE_KEY',        'JuCW/w)kK3gBWkv MR ^@%3z)Ow :GmFU/1>?##eG@G=d$YWW}08`Akr5iSWTz/-' );
define( 'AUTH_SALT',        '}E/KdI.Q9Au*vXb}48[jVHCEq10[u6?+1R QVVG1@=`bcN#VWz4.eY/a_W&tw[?i' );
define( 'SECURE_AUTH_SALT', 'FkE0d_v]^M_oV@9mBSNR%4zt1YI`|#,@Y &nu;^>:HK#T@L4mW<Nv$CB=hhh)i0V' );
define( 'LOGGED_IN_SALT',   'sI`3OLY`L<m^}@$kj}[NWpMZrLD%~8kRjjR9A]/,E,Uu`!Z~;=+Z]W[h:s{ b6+{' );
define( 'NONCE_SALT',       '90)rH2 OMCy,YkOi/(h-9GS2~!v1%5Ds1_5rxCJ`8D]!]OW}`>iT7`Efagzyu>0;' );
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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
