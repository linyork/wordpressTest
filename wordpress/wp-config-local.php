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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'username' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         'Xa0&q0Q-l$/a;$[z4o[ed%SUZ8QXh~t;5/PmqX1}H~R-&ogv5%.Z<W+G?DQr{mFG' );
define( 'SECURE_AUTH_KEY',  '$,rYX!T,XlOf!MINf~GX<#6ag%QspP1p!=w%A~|YrleGDViPl*v6n4%=7c[`kE%[' );
define( 'LOGGED_IN_KEY',    '8;}(s4D`n8mbd9PT~.5GN@9F@3xA7NQ@g0_[@XDlqj:V710}C=|{2O Q@1Sm:NmQ' );
define( 'NONCE_KEY',        'A~be 7_qxq;L}<Axj|1jF Kj-1}V>|/e@.y`295vz0JS2mg78{-O^=!0dr7=O]:y' );
define( 'AUTH_SALT',        ')m]^#SZUb0Q;dL[f/f&b^]B]14%6-*tVv$4(Kd>FMQ<^(xJ39Se`m~B=.809#oY^' );
define( 'SECURE_AUTH_SALT', 'kBwj2E4Jkro#[MYR2LfTN:fSPkyk p>7Ietp1QOV#2bC2~e<RpEfq=K>dE-@BI]f' );
define( 'LOGGED_IN_SALT',   'AYi|,8NR X H_EwzE=c>u.zhU6KuUd/,VFw-_-S<G;:;PQ,9Yyq~rsrsS> l({r+' );
define( 'NONCE_SALT',       'JMBih44sws])8W|sJR1.Tf:2``7iFVuG-]d{7$)p/IN}ReeMAr)T]#`_I!sjqOly' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
