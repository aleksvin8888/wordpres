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
define( 'DB_NAME', 'wordpress' );



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
define( 'AUTH_KEY',         '|IGMEVo%N!s-DDTG4_LB~@Efl&*fs^!n!#KzS-uY#/=-Y/u1u?*s>5[h!26F,qVt' );
define( 'SECURE_AUTH_KEY',  'VZ$A}x?8Si+_n?:+x?8%T}|t8aJ}~nTbz(|FiSFZR%xqO?q<;|9E6{]s9]4L@(pI' );
define( 'LOGGED_IN_KEY',    'm8#Z-!VH[;]YDjKb-})tYXi9`LyA,s4|BVjpOFJ=OX%9roDsK(Km19T3F;M*K`XS' );
define( 'NONCE_KEY',        '6OhA`L2YA[L^Ap@ca`kdK&Rl`=s!+[I6XL!`y_XGCqkj.?[5v>/pFEI-*3rqTfIx' );
define( 'AUTH_SALT',        'jm,:do4X7,b V{q=7f }QT}tT D^55zqvR0WOzW?[,#jbe_9Rd_hGMsU[tF3vdBs' );
define( 'SECURE_AUTH_SALT', 'G,S*[W7hy.k<i`{C(I1oR0wR<-W*+gYBCIoW70u:eM:eR#wXDw/7~klNXFX]fLF>' );
define( 'LOGGED_IN_SALT',   'IS}>Dk~SG7y}VOpI-%p3*?3}*Z)=$RlHY(r/bBU7#NoeJ5AL!2f>gd^$J_31G=f!' );
define( 'NONCE_SALT',       'A<X#ovTeIkopqzuT+2)CyGXSBhW5!CdaWY8z>J9z}3[uwXKvl_.M33~I3SsUWc{%' );

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
