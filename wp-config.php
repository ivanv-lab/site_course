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
define( 'AUTH_KEY',         'hsMGH!y3&N?m<2r5AOcxqc8NM wremyM<[p{{m?qpWi0+^!h}=Vlz*(HbzKo6wJ=' );
define( 'SECURE_AUTH_KEY',  'l2rg/k!0o&okYV8$syfBj%da>N=K+D18jqL]dA3QqDy_@eqZwP6k,v6I6SM#7 !d' );
define( 'LOGGED_IN_KEY',    'MOp)SUE35C&?DH7!20?ZAti!rF#cy?egpUWV+nkbp2EL*:/`94Y[&p./0TNojg><' );
define( 'NONCE_KEY',        'jD9-mVx/xi6&iuJ Eq 1+?H}akmUJ Sjk`M7pvIJOfIezP%|WXr#B<S]HPZu>K4&' );
define( 'AUTH_SALT',        'gl.Ua5CmsVIH`uXp!u~boXg?1oWx1g|,_AP@;ib?@(w;n<Mv?tJVUa0u^+WU^R^@' );
define( 'SECURE_AUTH_SALT', 'h+vs=Mh%`IE3kaCYy>cr$^yyiA/0@**>`^<!?j4YE%5nK3Kq31CZ-7PN;bWEuqzu' );
define( 'LOGGED_IN_SALT',   'DTZI#~m*[Hk6vOSH7;M[#:^~E(fW?LfCj3Y{xE6zXL`z:Rftb@QC2s+85]swUQrc' );
define( 'NONCE_SALT',       'vPh<GR,~,)H#0y*rbs,A^s[e/fT?7/Y<[TuX/Xw/TcsF+nzpp$0G(*yC2P rttQz' );

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
