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

/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');
/** MySQL database username */
define('DB_USER', 'wordpress');
/** MySQL database password */
define('DB_PASSWORD', 'secret');

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

define('AUTH_KEY',         'ZG1B3$[j^|Z.J<fu=XC!D^uM^LdYl/@u+3>Q|H9K$hW~u-H6l,GAz{c&&{nHJ;cb');
define('SECURE_AUTH_KEY',  'Qj^Qn=5+4{,o]8=;uw.Ub> OT62X<(T9dN_JQ9I!)p:]-9!1#&8>_=|I%K/A}]S ');
define('LOGGED_IN_KEY',    'k]cGbjc6Y&/;UG-uY(U+6>rlvr|cBmi*btPMx[H5^]&[1{_IYOF>A>3sxgieC#RQ');
define('NONCE_KEY',        'U|uf1.|JF_N?{Rp)x0|):J+X7q+9acbuXf~+=16wBwD+P>xi)Q=;U{-{1Xb1> -(');
define('AUTH_SALT',        '+|J+?C+,z3a)eia8+?|SW=8<6-}#}`E4bp0Ube@bA3&Q4u`d%xprM0o^+!)aOn|b');
define('SECURE_AUTH_SALT', '[dfF:,F99[9R *Vdj5>> v4psV6OFmD[:-a:Wmr_>[g2}5uUk:`0[YK$RI;9T7$R');
define('LOGGED_IN_SALT',   'Nw+URpEV`aCfh-1&ZItHT,Pf{T+gP4y1-.~E4Zy;/6vp4F;FDecKldPA+E0u.UR`');
define('NONCE_SALT',       '6E]pI>sDUi| *nD;5I4sXvVDtjh$g-SZoiu}p;Ln+Nq0,TL.SjD,aky[QbB4)Zs3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/**
 * Enable caching for Memcached
 */
define('WP_CACHE', true);

/**
 * Setup Memcached for caching
 */
global $memcached_servers;
$memcached_servers = array('default' => array('127.0.0.1:11211'));

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD', 'direct');
