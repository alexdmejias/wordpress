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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '+=v{Mt&JTUbK5{pXD`9naVz&Keqw7[6q;FQg|p|e|Qz#s-EEo/%5Ah@Ib~B)g8A1');
define('SECURE_AUTH_KEY',  '~hKZCH+udwTXBpo_UCY[@~8-&BeT!.zxpC}vl~-V+$u5H$ twSt2W~L`egfT0v,X');
define('LOGGED_IN_KEY',    'M_|7=~eR{P[;z6H~-xe}jsP!.FfxE.iPK5ku@h[=;/+wmo1Wh3XE5Bw?>B-G|lV~');
define('NONCE_KEY',        ',7bHOE+BC>L$hyI8&8vV$,h-^o9H`NRbRpC2n._}54#e8/4XK&`H[uQKIY4&-q35');
define('AUTH_SALT',        'R=+l-5QS(W^p-letZ+*i+C|n2ml9)(^{i-*7L;(p(!BM2G-|-L9Z_.`k4Q!/g=CW');
define('SECURE_AUTH_SALT', 'EN(SQ$wjR(g|!7 mO=y{8a^f/TcXl~V-SA(1]u5/n>sV|y6464$5nUT,o0,#|eb/');
define('LOGGED_IN_SALT',   '1?w+PzEx<H B;+ KZfQV-;GO_]X`X#.J]wf/aZKlx !EA4^nDIa5*b5Pz5hAyR|[');
define('NONCE_SALT',       'q&q5QP60&P.!yTMXj=+1l8W`&Z^i`M{1Itu+etJ#cQ9HW3L79(]v6BQ#3`k<+r~n');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
