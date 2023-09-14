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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '2cf7{0k6C%%}H/Js3CD:RnHbt_ RW ;c<*E6.K=DSOVNg1z]D[tIUck~=cCpv#xA' );
define( 'SECURE_AUTH_KEY',  ',uBSGxo*N$oo*V}#hkW>-=tm-wF_A#2@^!eB320nWTOo7_xFp{`+>4/ng2Mcbp2}' );
define( 'LOGGED_IN_KEY',    '|+tQ;~Y]1yC_%6 w_L#3jBX-zP-BF#wB}0gN(1y4_yT--Gda0TpxXx^B|XMA8<S^' );
define( 'NONCE_KEY',        ']#3?#DJ4%62jk-fqvYkm),h}#Os fT/+Y${+}6p)7TfL@{4lVgI>UbVF6}-ookX ' );
define( 'AUTH_SALT',        '&d:lDz&[Z;(!s]w`GYll*<B<F+tR=&e#p[/t1YCS=5BP=}^V&*a`Ym^P_6>^7>vn' );
define( 'SECURE_AUTH_SALT', '2i,PM9gz%: UNDlP?vooOium~Iy!%L=qpPmg?dVe7|G|U@jh%TS]gNr?P)Q!J!IF' );
define( 'LOGGED_IN_SALT',   'WB/Z$/zc6D=9upxw>wjn+`a)=|p CiQ1S(gCs_X`?%cbW:[o{w i6;owQ|=o`Xz8' );
define( 'NONCE_SALT',       '[7^S6*)@CF!PqOep:P^qN<]S#bpk;Y9W_CMIjlqX!.ZoOAc_2accb[VbXORq$u,R' );

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
