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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'l-QA{lQ)>YkLMBS`Hp<PVJsx+[]1)Q}>O~i#8/Xl11cUXVYPCA@R3cZ=f]y>lHa1' );
define( 'SECURE_AUTH_KEY',   'q6dw/#--n9bu+)KkM8erH|zfww4P$]qBMzP1CO QhFbm#rC!a! 5}{CpB#km.I,[' );
define( 'LOGGED_IN_KEY',     'uAW4)5tZ[gB&RjsGa3{4^6@~NuULHqzF,*`-B(N?5OF+z9iFKl-s+} Z}L(k}/n-' );
define( 'NONCE_KEY',         'MQ0SsJyWWO/c)]nwGQ|<SDSu#.|x3,UPj9X yTeZe1<~$.9&e=zOn@cTrz9M<zT|' );
define( 'AUTH_SALT',         'M-<w.iS_>|hb;@kC;UDy|x{]KHEk5z7K0]U1wUJmwfls*Q^) hr{Z (Kvl.#or5F' );
define( 'SECURE_AUTH_SALT',  '=NL;)!h1zI+<%2}+Zs]Wv*&x}-<Y9kSaGhZPFHU~#.]u9LdnT3npt)`?X-u6H]j]' );
define( 'LOGGED_IN_SALT',    '>OJ;GCu[Aa%-_)Y,Q$P<c|jFB9!G3,uWjjnA`/hg=]}h rC!_8;~%LnR]o##ZQxY' );
define( 'NONCE_SALT',        'o:_2M%##)jL<y6#8U4Zag|$Z;vBSc`-K}W=}fLIXn`Iv*35jP*QZu(wt)ctNM3-(' );
define( 'WP_CACHE_KEY_SALT', '5 rHQdW!u$mgw<]TX(jQjp&K]gH15]]gCn}}Z`ZPY*a7?bKajXI{.iHQ{^.!Le6-' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
