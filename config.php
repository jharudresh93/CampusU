<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '`)0.c7m QIR4I*]]3l|0qp{NOxVpAzCKC#5Gw]trJfIxv[dSYCbB3*_FhV>o$ ;_');
define('SECURE_AUTH_KEY',  '%)KSzw&!14r$ XQ</71[2.tFN$0e6MMTm<d3?7T4YdfOSeD(0#|K5Xo+2f3!J+w#');
define('LOGGED_IN_KEY',    '>a_<a:Vm<}JXpYzSPONRn($KDsb<JE9o376Zv=O:bSQ/~YDz</8m@W&x*}BqfF&x');
define('NONCE_KEY',        'Zk1Ow} :l}%W.&b&F3r[jMC$:ZraWTL9 EiBcFac;h>VBqd!k3GGCIgue;zI$L`c');
define('AUTH_SALT',        '^YKQ-)>K)htjoZhd+_KL:sLAXrS!&/9#~0YoqGUZ:wZz,x[OJ }K|aYL{M=HQ_8&');
define('SECURE_AUTH_SALT', 'A0E8.zuf?@]-xH|D=gcw%2BH :fFiwPQm(^hH;)IZHo`.ilQAsR~(N3hk#Wxg`Mn');
define('LOGGED_IN_SALT',   '51 b L8N>1qFn0-($UD6B{8?`,Y?f`UK|77S::5`_e,(xoZS:l-wYhU=OTjM.Y1r');
define('NONCE_SALT',       'Rd<1~745Yv^G2@q.66/FHce[&$1zuZjnIJ<Wzaai{Y38RXgk$fxwth}*S^mTjO?9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
