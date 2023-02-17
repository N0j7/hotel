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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hotalM' );

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
define( 'AUTH_KEY',         'Ih3WJv6xy_X7(*pY gr*Y*`8pxTo1]v9Z.O_1O<r9j=GQ9x}V ]A;f$Q5Kwrg755' );
define( 'SECURE_AUTH_KEY',  '5dK!q4;tJBC5<Vl}b<V=C8UFyrk?#$*={EN!UH=>(i$jb3y!Cw`/N45}G~xR Tu4' );
define( 'LOGGED_IN_KEY',    'E491ZYEzQ!}g;_n19O1# Wr-h:VypZIy&p=xPC]#LlvsO&:.pjO{fJ-Nw5m[lmc1' );
define( 'NONCE_KEY',        '<r-AGN+==MjdC<K1B*=#/{9Y.~I-2E>Ae8GS)<hhtv1;kpFF i]b GHY.#uaI|x@' );
define( 'AUTH_SALT',        '@Yb2l:kjMz2Y;*C`qPh-[j[N9 :=p6*_lH=7=x6PgDaf*E6hRr;uguBeno1B(1[f' );
define( 'SECURE_AUTH_SALT', 'F]4DYx1M]3(rtul/L=)xSxN@V)XM?Rc;xh+K:B(oh{QF%Y7fV9jWo!B[0Bm?wcry' );
define( 'LOGGED_IN_SALT',   'xCKlC4vfw9P75^^+xy(Ofeu5XIOcs1UBdaV4/yf5$`>fL.yf4j(Fb665NW]%57t8' );
define( 'NONCE_SALT',       'S}{?p`-/a-3{,:3I0h`2.0FfC>8mjABc9ElfYXb]5.,NJr;WPp?A%M`3b^Ih^0*.' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
