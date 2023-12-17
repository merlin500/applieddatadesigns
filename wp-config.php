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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '*[B#DXl]4L<q_}qcQUkdCN6u()^F8}9+FB1@I gCc~*>WfwFJb!Zm%wthJ:eSSgv' );
define( 'SECURE_AUTH_KEY',  '}24|2/SxRU.e:~Dr3fqg~M8D7|$u38[j&4{}e,lOyY($3#Hy,Q6*cEOWYOLs9pH3' );
define( 'LOGGED_IN_KEY',    'wCJQbz?OE$)^XVjxus)WLQEgboFs;PtOPjXdnPOus1k>-82]7Y<Il6A~{VkmN#I.' );
define( 'NONCE_KEY',        'eK=oc>d#oPO3hMsvXOB%o1kCg=coI^Ifh0SPeD%>jl`Io{)v(K/wuyYdxg^u@{B*' );
define( 'AUTH_SALT',        '31x4.X/A dV=5cLS@v[yiEROK-C$YoX4Z%|h[oKQsVm-*//^|/lN*%^B&P3E:aus' );
define( 'SECURE_AUTH_SALT', '00fbL7|EGE|Bl+}hPFuD>z-T}: j%0(3I}BALf=7kA03:WVON^]4ujEL*NJs(T`T' );
define( 'LOGGED_IN_SALT',   '*6xyWz g~}w/wZQs%|n&=667X$L<RbuSq8|~.mn}n0Qv!XZZRrCN)prKLr[,,j)C' );
define( 'NONCE_SALT',       '-6.ia :8 i}.:L;huRj@[z;FC^P)bB^J#w}0|~IU^MxnvY)JP_k>`w!J|XMQ-khw' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
