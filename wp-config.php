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
define( 'DB_NAME', 'base_nidofinal' );

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
define( 'AUTH_KEY',         '9tUgD4G+GAW@6Z`,3OIR*e|i|}5zB_$KTWm##Vhv])6%A~V!bo52$VsZh:7Xtw^w' );
define( 'SECURE_AUTH_KEY',  'cv+[LqA16>e;Hv<}VZQnOvdk@E4<%</=@_5*?LWc(EXrIaN^ffs.i%h:M5S79rD3' );
define( 'LOGGED_IN_KEY',    'd{x3/mY+hI+s$7}fs3QI{uO$=Vc2od2^V-jD02/TyI,HGbq;u<Mls~WvJPLWvgpY' );
define( 'NONCE_KEY',        'Jc>yMMWJ%fY_QhO,,nNQ2zj~*3>wX5}n!Mzmm`PN@PMLRpZ1,Za2dh[C9zTv#FUH' );
define( 'AUTH_SALT',        'TEMr(@oG0|82o0N@PE/3(N6R3>zPu-KG3!b4oW#_5H#-xD;j!]lZ2+<ENMXGkTio' );
define( 'SECURE_AUTH_SALT', '@`[KI=[r7m<Gb*Z^7{<yhFUYMXc:#mLFQ<O]]`C6#Fq_BBk,`Wlr&Sr/DY>|_jk|' );
define( 'LOGGED_IN_SALT',   '2jreh4Ds|)$JTePek+f}fh]6:<]VoQfPel3+hs)BGj[J!%zL/H4hS`y]Z2,sIbX%' );
define( 'NONCE_SALT',       'pwhV;fEn2?}b(4J vk1o,~ }kzojDW!6]w@aCY_/6|v~R||]b)ERb~ARSr{|Ul5{' );

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
