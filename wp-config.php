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
define( 'DB_NAME', 'chic dressing' );

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
define( 'AUTH_KEY',         '-D6%nz<Q~%Oc~~jbXsS`eP4u;jCL<SZHR/r#J:J8!;MJ/>Uw/_~96e.fz)#Zn8aq' );
define( 'SECURE_AUTH_KEY',  'jS{V9d/>Ow@>c9+8}He=R>3|j74T@Ax#U/;zGQk;2-r<S/F=d`?azB$6^({f6&Yg' );
define( 'LOGGED_IN_KEY',    '^A:m+.B[g %@,/$fIZ4,z^DBn$2P, kRb0T7#MnI/`FKF;B.CWiR-Ob$5w:er*>@' );
define( 'NONCE_KEY',        'wB8(&gdAaiE+OG7((g?.9UFf0Iw{Y;!U0DLXUx8E]IOl@t%5ahF^6*S9VX0c#d.A' );
define( 'AUTH_SALT',        ' T0JLZn%,nC17,_.%Iem{9vuf`3Vfj):(f3*VWrYa;G/U0*!,OLgp^+p0<C#*c2C' );
define( 'SECURE_AUTH_SALT', '5=5Brii8?FrgI#XGDTu]::HyqkQTUX&`7^.h:!!<.Q}+@Inf<Nhgqf~811{PPv:O' );
define( 'LOGGED_IN_SALT',   '{vFq>82:zj#m|j7*snvN,wrE-]z.teOQkgH1<.qB.d[ltlBOD$6tl;p<+@1e2C0L' );
define( 'NONCE_SALT',       's:$w`8,Uf<pc|@yIg.J*}@S0(m35:`ZzS!jnx>=f=b.`UmYTJN0*DYV}><h_iyJ.' );
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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
