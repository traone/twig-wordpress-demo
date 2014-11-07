<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_demo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '9~|+|0+~Cs20-H~7-`G,`L_ k^:7q6[+B|LU0R]q`06{.NJw.Gqa+v|.I1|QQqxq');
define('SECURE_AUTH_KEY',  '-k+_.+n4q7;-V2C=o(h6K5!H)BW1Oz9)a5>GO=;)Pe0%f6S?-{`|y]:ERm<V]v&N');
define('LOGGED_IN_KEY',    'wM2v5kv<{mzr^mW.h7n(EPH+3oJB8c<JDHNzzkd|*9qGC@1o;R!_YriI9#+s6fB|');
define('NONCE_KEY',        'CYsk,P8Qe Y_!|Q~$)Jz!BS1sWPm2^.Sw&k7[5m3kkW?9uc=`09F*=L27pv$EW8~');
define('AUTH_SALT',        'd`ZR|M&JQX2(G5c>-9m2(tP@yG0L<6dk<}r9Ni2PC4pNjN-P*)|LYsY)Wa{J3`p*');
define('SECURE_AUTH_SALT', 'fu64NaFCP4t=b[bb}gj-CyU;Sl|cfQ@4fYBFC|;CI-vQe*kE,e%miVk]Cv,7iR3N');
define('LOGGED_IN_SALT',   '1D_QMt/KZYRU?m+(+`wFF%wuojHOi%T{,>%%vRb%p;fglk}gD$QsVsznb*n)cms{');
define('NONCE_SALT',       'lk:A>j&LO+@--m02Lr=^B4Y7!PgTP1YCwNa*;aC{T>r4l5B[oOiXbsy21^qq<LGp');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
