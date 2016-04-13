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
define('DB_NAME', '****');

/** MySQL database username */
define('DB_USER', '****');

/** MySQL database password */
define('DB_PASSWORD', '*****');

/** MySQL hostname */
define('DB_HOST', '****');

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
define('AUTH_KEY',         'Bm:|K|Z|d:>xy#fzVD2+6S{S6B/J#jlR^Jbftj;4<1)^W,%gas#`8CEf4M33lArJ');
define('SECURE_AUTH_KEY',  't(aIE*+tR:O>78hAwv>?%-+Jo5wOT~o;,2%kZ$Or+).V099O~gF5m`6;B3q+*:vU');
define('LOGGED_IN_KEY',    'uN=-_!. AV!z@H{;@)<!hi=Y|u4VQX[6ouw7Y/j(JEM~ut1-+i |7 [kJ98^Fims');
define('NONCE_KEY',        '`,M%F_4OM/| 7V8btGH)Os{fX&t25RV3o1/`ybdT?(qaQ[Jqbxg>w$SGtQ,#hdNM');
define('AUTH_SALT',        'KpNzKK|&`>uCgt39{t&m4)J~s$[I+jYa!)rHLm@D!<4iQv|s]LQKZ1)??2U$5!#t');
define('SECURE_AUTH_SALT', '5mC%!tW%Xz.M, =zVS1*Nn)hhenx)vzy|tDOJlaAvFQ~,WM@)t0[b*U_|@FujWwO');
define('LOGGED_IN_SALT',   '.W}%w<]gz9A/%lqR1%S)yg#M9R6=LK^D!s@+a`=8|OZ[553oKd6&:54uzrS4?s}P');
define('NONCE_SALT',       'YmYuVQjlZNktj/neKmY@p$`1@#WhFvj)dKV#|!n<:A|.xcq&G({l{u:z#k[{CxMZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';



define( 'WP_CONTENT_DIR', __DIR__ . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://****/wp-content' );

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
	define('ABSPATH', __DIR__ . '/wordpress');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
