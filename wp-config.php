<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vilasales' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vGOw4jD),m:-%YokU%w)rwFRQUF&OyXf&579]{xNK7)cZV4`hpwkR=[E78YH2I%E' );
define( 'SECURE_AUTH_KEY',  '.`s(|e4#wMagnc*BUrJimy)x3T0B]U}|UdfpF3:vY$m|Q`=^9:WU9#%bJ@aa$+R9' );
define( 'LOGGED_IN_KEY',    '-H7/~bLJJAA;qVu%9Zy+go8lu]FATZxR`fX# @([-[k5U*bbVuo2urAI(yfv*tWX' );
define( 'NONCE_KEY',        'Qa*B0PkE-z^j?.sbLcVuAItRdzMA,=Nx9g@$%CXOo ,J|sg*^!`QjiNyBFrvsGE4' );
define( 'AUTH_SALT',        '>K9O&V?ydm!c5S=A*pfP!Zphl@4b:9ZZsl8RWM*KbIA6 A#e 6b`Sq:bgragCN<M' );
define( 'SECURE_AUTH_SALT', 'CVvcBu/[hokUMU=eabin9(3ssArScCEJsw4{w87/|orD9,[MI0^ Z%A@$)-y[.<#' );
define( 'LOGGED_IN_SALT',   'bG~UYgLZszqb0IlZ.<KCk?Y38#w: v1$|2hK@>Bkl8^8kQ2;kmm!F*]3Uf$QK1cy' );
define( 'NONCE_SALT',       'Pw{[}]rGm7yjpLF}[foS!5b[CbXTA*ctX%&Z*7z 0+uM|O:&h^D;i!M=ZEH5Z0Vb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
