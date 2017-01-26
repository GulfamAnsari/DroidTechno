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
define('DB_NAME', 'droidtechno');

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
define('AUTH_KEY',         '{OZ7z7b/u<0]pa(5]Rw|^-y3]NcFH<2fWjm/k1ZaIS!@B^v]_hzWb}muYr$F7x)6');
define('SECURE_AUTH_KEY',  'FeV%yk%h2fw/UCP,(k!k))8`c/54LhhXH^6@P~NEfqk]Mw/~LdR7(]F2`PTx$3bz');
define('LOGGED_IN_KEY',    '||?otz<pA_60%_a}Ae)kbX(;EW3*;~m{@PL$7;0vT@2POa00!dPcysft+qLcA~8q');
define('NONCE_KEY',        '4(5(1!>^t&sxZst m1k&W8wF?&|RV6b]|doUW`?K!A]^Fso$oB4NlG*oSKusPK<`');
define('AUTH_SALT',        'mh5Z9MI]Tqr1m%aVE6vc8L::WG+Gcy]s)4W/[>yIV-nB7]z!zr?7+AqV}1zKN5<V');
define('SECURE_AUTH_SALT', 'A37((a6&3Ow~Rt;QDB_c]vQSZ.wi,!xT<Rbn{ig<wdjZ{Fisz9q2-z{H,&o WXRa');
define('LOGGED_IN_SALT',   'zHir/f8JQFpU4!Q0 U&r+*:~3f`rp[!aXj^qe)NmJR~id#KgcqTD15B8d%5;;Z!k');
define('NONCE_SALT',       '&PGOA%>k5d4NPl7Dq&(vo`F(FC6h1p2pJ--o=B.,G:D:txIoh+5TG,?k9Y+F%I{}');

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
