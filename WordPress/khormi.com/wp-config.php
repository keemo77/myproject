<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'khormi' );

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
define( 'AUTH_KEY',         '%D)F@y7xn<V*qGJLTS5]Fu:85h{%zu5Ubju:O^9F@?ZoO,C!vfI5wtL{KKk2r{XZ' );
define( 'SECURE_AUTH_KEY',  '*S5abSD0$M|@vc<Y}lh{,3=nl<0?FVV`8s/x.ZN(dKbN;S6l5RB1KgHkysEIr[@#' );
define( 'LOGGED_IN_KEY',    '|* PvZ/09s:Ed fM%~A-Kuu`1_M{xNv+m_x#[$HWGYLI,%H8tV<pE?Cpd0aCzm)s' );
define( 'NONCE_KEY',        'B}YINss>hrLrBkg0^~1nGnd8<|-Fw)[-4J^Jk.rxl5|DvML>az| };6`PlcR4:-E' );
define( 'AUTH_SALT',        'J>|b*(>w9`PG0D,f(8w<rq;R3ZVTAi%PY<-q-Vo4 Xve^3<t}{4rm4yq;06^`MZC' );
define( 'SECURE_AUTH_SALT', 'm/<@7<*,OPxqmd<B*ZgYX<F2o%+y=T~kDY)6?(j-&7WK?&nUS(CH|xE6?3Q|_,vA' );
define( 'LOGGED_IN_SALT',   'Y)%6,BzxVq)wIE>* O-uQ|oz1`|rt8XLUEXpSE@1r;keNS~`?t /pr,jgnRZlHzX' );
define( 'NONCE_SALT',       'JFm( tp/h`9{I`36ZWoS< I9EEp.-Z#0.,<Esw/yvP;5ihz~GN4rWqJ@(o{zj:WX' );

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
