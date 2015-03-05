<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
    include( dirname( __FILE__ ) . '/local-config.php' );
} else {

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'video');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Wordpress Home URl -- defined here to allow immunity from database changes */
define('WP_HOME','http://192.169.219.222/~novastar/video');

/** Wordpress Site URL */
define('WP_SITEURL','http://192.169.219.222/~novastar/video');

}

/** The current website environment */
define('WP_ENV', 'development');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U{d2z-X%+70Z2}-^wp-G|9ip3,ZKtQZW$,#-sDp~+dWzhj]Uh)V>6cWcI$xy,FO;');
define('SECURE_AUTH_KEY',  ')1AN26.1@>@6.INZWam!g`}e3fY$XU2^6[sb?HbjW7Pzo!TN(aRYe2bwsJ+?#) I');
define('LOGGED_IN_KEY',    'W_-?~RGc2sPS@hQm0D)exLY@]r1SFm`ry>~16+KnzNS;KUGw!6zz6,-Vsg (%r2N');
define('NONCE_KEY',        '}U;7_]<DR]8[A>AXm[KBSd=)o-eB&AY)A;RUEzC]?}-VK_3]%tYP(SdS-gK~`V/^');
define('AUTH_SALT',        'AF$}?-G.DG+|:rU%Nlu(HYcm{#v!,SJZ2edc(e{j/iNzX}R)ToR:_[uc-cd*|B<4');
define('SECURE_AUTH_SALT', 'orUsi}]D/JJt|BbFeQZ Lp%m]_a:(QSRJu/^>hl/YAP$^j&K>T8pb!EF0.y&iLe[');
define('LOGGED_IN_SALT',   'k-M`Ou<xmJBfx.4UuXBlH,(?rG.K?ETSACrnDU]jz#*n@=wsxZY524WO>G6fbrI-');
define('NONCE_SALT',       'x5nu7Wr8o~/85I;h@W{+;]r[E8F|tCYe1Qdu*~sbgD|*sp[-r.t~@-KE~M#|msJm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'video.dev');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* Domain Mapping Plugin */
define( 'SUNRISE', 'on' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
