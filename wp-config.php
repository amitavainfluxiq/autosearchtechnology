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
define('DB_NAME', 'pearlhealth');

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
define('AUTH_KEY',         ':I8Ml>&vPd6=H~{e&E~}jFkX`Ln|.D{b3jLxO,l|N(*DQVIWCSj9R7TD%nkr>VVa');
define('SECURE_AUTH_KEY',  'VH=PdgwRNz<}7}{7iUD6RiE5TxnT)ZL|D**QhTx?jA+X|o-:52rnx0skft7/PU60');
define('LOGGED_IN_KEY',    'v`xK[J1`z|Ii8WO@5%U3ef;S!Y3aU_4w|?>L3]ef]Uv!uTv&Hp 5WJSUsypqqj-&');
define('NONCE_KEY',        't{>}mc|^|cZN)):y6+yEW6h:]Kn2~4+nt/,Aoe3;j>i$5=9`R_?0kR(e-92La[xS');
define('AUTH_SALT',        'oj$j8^l|[A(!(6G{.YY)mBR<uT1>sCA=c~St]cOTLq)dd{wh:  WMFtl^nM0fo`*');
define('SECURE_AUTH_SALT', ';B$BD)C]bJvKe3hLV&{,18HZns3,n?NH+i<cjI6C8T%C B*QbFET=NgaSj`G9]}k');
define('LOGGED_IN_SALT',   '%^>P%y41qjc=[*eFp|Ni*.hU=iARU|gf4!g5CJQZR5LH[ZZIs0!.5~La3E-9Bu)i');
define('NONCE_SALT',       '`|BJiS@}YY:%)tX?`xHS3t+J0$6^<e*]X&b|/V%]9O[K7T`5+Bb@J{E.>9FA<.%M');

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
