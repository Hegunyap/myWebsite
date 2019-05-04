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
define( 'DB_NAME', 'wp_hegun' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '5YF.)^FZxO?n}tV@.sMRCf^$ [mJ)QK#Wh4dU+bjwwr8Yfax#jBb2b &td OBpyd' );
define( 'SECURE_AUTH_KEY',  'A0&?-F{i{TgFO96iY|^3A4nTsi+,oG~0[g&plfT^|h9>#c8x$WH4H#(g7H+JI5#W' );
define( 'LOGGED_IN_KEY',    '0=#.Oo`7/K*17i&wj<pR#s#-G<zfBeg@AA(-sd*Btfr=f`Q~17J72K0DQ,zVfMxD' );
define( 'NONCE_KEY',        '}=K<%wR%}E+Yw!d}rQRt#0S(di&s7Pmve9GE,?nSR9;=.d`o0cH&st(*cw8SgiV<' );
define( 'AUTH_SALT',        ']WEo[33S7WHU+T^iNq8%<=FM!ied3uNCq9$bC>3.t4%^2HrE7t0W.v41|x48Q|57' );
define( 'SECURE_AUTH_SALT', 'D4ga8x}N:FxvU&G&;bkWS-F!C`=;0+k.j=iqMQ3gw)X`zPdxOtNwG(h?5ht-u9Z{' );
define( 'LOGGED_IN_SALT',   '$%5IB{-cT1FjXQA*.]}6mFA`awTJZ]0tq*W?>VGmy&`cjvu3uXh9#qKC<;>f<wgF' );
define( 'NONCE_SALT',       '>s5O!@WC*Gj|?vZRFf!IDM6q%o[bVIaz`0*VTlNs)1HD`(:ws&>Rj_xVOr:B>CZ[' );

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
