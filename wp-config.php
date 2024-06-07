<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wprueba3' );

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
define( 'AUTH_KEY',         'x2*4Pt;c-Op;D0:WHJ^W;t!!W^snO:F&Q)4;xCj+jAeg8s@Of;#s9jML.SKLv%si' );
define( 'SECURE_AUTH_KEY',  '-bza$^. 9C{zr9tb~K#|E6w{1dK@**7t+9L~Lh.]SVKAN)~:d|*T/=6!>VHDhO-x' );
define( 'LOGGED_IN_KEY',    '(>n;4$-U:Zv[fc_2>/c}pD8HafrK/dN`Bjw 5|3QkxSXJpI?)?=&y4>j_WbKR)dR' );
define( 'NONCE_KEY',        '^h@FRFp4d}6.J=.xW2t#/Gm.*7W&7#uyYaS?r%smG XTK9Gm2rQNSp~C (cD5?r{' );
define( 'AUTH_SALT',        's)8P^M9$4,gr`1E8o^ujQx]Q2YPe%<h>DK^gr1H9V`AF1HY^1q8q:E{#DtatbtsP' );
define( 'SECURE_AUTH_SALT', 'N-P`Z/!H?oj*O|7y wa8zN`qFO1G*t@OuDrp7iAH3zl]ZLOY >;&rAcFcVKJc]LH' );
define( 'LOGGED_IN_SALT',   'Dn}|GN#R!o G[Aup,tlY2fvgIPSad/a{EOqnQt@{p7})EDHq|y% *CAH|Y38?XZ_' );
define( 'NONCE_SALT',       'PkqFI6hoaE%5*u6kw|2v9~W QyJie[oT.QEJ,9ugGt<j.RLHl==v,*8<@/o|Au*B' );

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
