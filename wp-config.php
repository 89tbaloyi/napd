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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'napd' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?LfFu4-XEWVQTu5*x2Oxk?IKp}<ypX>}PYwg@XO KCPXL=HiNx2>sjSgR,H#*q.F' );
define( 'SECURE_AUTH_KEY',  'pkZqVUDRT8Le7e%o[`lsPl{&c:lcaL+@o1CZ~s!em5A!N|fxhuzRd} HFs Q)CL~' );
define( 'LOGGED_IN_KEY',    ' 0#OO|]i_1@#`n6o!#T.CN;MoeM|98Y7^xfkYq/hI}ks>wRi|EZL`18<OMbWkXs:' );
define( 'NONCE_KEY',        'KDc$1f&4g9A.tv^At1?m6dqa3Vw3^`t;-H2`a8B4,p`1L(ZE{B0K9-VnZC$s -T&' );
define( 'AUTH_SALT',        '5%AU{CD^&fHPv]6r>`lZSwBR;rp9#_/Wje[ =]:.*7spb6$Axw~!A]`1CahA-}B2' );
define( 'SECURE_AUTH_SALT', 'ZgYA9vfWr2]0^w[X`+Rj%r7WR6sTq?$_ZHGv<6b;;C7eqd8| Q2lKj6bI(l/R|^ ' );
define( 'LOGGED_IN_SALT',   'm7K0AZBb,egfCHRu9q7dwtZsDaCQ/W=v.C-p`*#x&FLm/E*JdRSyM)Zo3x;cT8|r' );
define( 'NONCE_SALT',       'jdYo24^^)smW<*Qp<Gv1E+iYJ?e4a9GAW`hLX6oUAOyI8`EfTm|OH;deSv3QU#S$' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
