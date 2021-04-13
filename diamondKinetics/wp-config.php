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
define( 'DB_NAME', 'diamondkinetics' );

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
define( 'AUTH_KEY',         '$t@68p5C:EZ:1jbCA@1e![O6(RF?E1V^k>jc9}By+=$2UZNwN*w:aX.H-XMc0#R.' );
define( 'SECURE_AUTH_KEY',  'M63Y-PpxJZQ|b[O(3j)ZY93R~-9ZRD.<!Oc,pO%`>1|(^5knP]s~:{TrzMSkGo.e' );
define( 'LOGGED_IN_KEY',    'aAVxVvJXB>j4-WI8k*vTfdErq C=A1;;.C&!nI_#x(;L6>A)n`Dm7d+DF&eVA@?,' );
define( 'NONCE_KEY',        '37l 2Z$~L4?7|sH0StTXcwQ*VnKHDoU~&A@cJWwV~+-]=kZ*]U>mJj{}y=JXQ}la' );
define( 'AUTH_SALT',        'dr14KlthR_7*h! qcr8jokhokrI0 G:A/RRy*eSgR gq1wz6!u2[tr.UKc8_JVm;' );
define( 'SECURE_AUTH_SALT', '!YC&OekKVCx/M=<[Ap0WTBrLe=#-(p$(D3OK]I.&gDarF{uz.Vo2H67lju2-A-/B' );
define( 'LOGGED_IN_SALT',   'e7#~Q,xpeup[%0ky;nn+90pPlY|;WksWH1=@F>8PVD>Ccp2ayy<m>UDxi60gt_De' );
define( 'NONCE_SALT',       'B_vkzS^*YmZ>TpB=ypKFGg,fhw/k(xCX3k>;j[Vgpn@}lNa&xU{b[e!c$|_+ZndH' );

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
