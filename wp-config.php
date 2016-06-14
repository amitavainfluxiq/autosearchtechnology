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
define('DB_NAME', 'autosearchtechnology');

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
define('AUTH_KEY',         'y_oh[t[yQJ(,tNfO|KEubg?w(Fz&{C4J?)24+h|EFzVayIdpVz!0(L]H|Y{>;*O`');
define('SECURE_AUTH_KEY',  '):q=)KOcf^A;thQ~yFL}h:=ibDq?T88ctO?.TC=hJ9tAYJon7B^rjy=O<o[8Htr{');
define('LOGGED_IN_KEY',    'F]f4IWAW9[0Eg9Oi2u3.`>`d45IG%kN!ZR5{]Ub|h60cn<b jIK6y1/h.t@`*SRt');
define('NONCE_KEY',        '6JoLoD?~N4ni41*xY`Hb7:>;Cdsm4.Z|r-xd!0#|AQBPcP~p.N$hA?+{28MD{G5Q');
define('AUTH_SALT',        'C@Z7hJgA9!T5h<ljPjIAjH{jDOfvemg3XK$[{Tv-aieC^1V{D<$@AwvEsCcX=M};');
define('SECURE_AUTH_SALT', 'a4u34A6T8r[BE;$h]RpoNkY-[17`/;w$=FH)T[^b`6%8<4I+3>t1rx,lI3c?k-Y*');
define('LOGGED_IN_SALT',   'Nrl!pZvXF7 f8F&Y)@SM5 gx)<0{Fm#us_i/^a|sNkk.Ic{067?|*@v=_?T6+8XV');
define('NONCE_SALT',       'Ik2pQiT;8m.<sEMw2*6}Y|B8{2}F#5x*oXuf?l@raoO/X79uvW}{Lv{hOebt=4V:');

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
