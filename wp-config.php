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
define( 'DB_NAME', 'pk' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Admin@123' );

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
define( 'AUTH_KEY',         '*S1q)Qy>+a$MAM+Suj2w.!*o,hI:2o#}}TUYU_>4vc}`Q]b%%7H*7ULmQE>+7aRt' );
define( 'SECURE_AUTH_KEY',  '~_vf@3/?y*F8*Ko!|se02HB)Is% [c(XB/Q>iswhX fuz-YNhqy-/:s>@X=y)U>j' );
define( 'LOGGED_IN_KEY',    '>kq7Jpw{5-5B}lZ<~/wIOH/$n@,#O73~ n`)i_izcG:)p8vyd1<B2u~|+t0`V3[D' );
define( 'NONCE_KEY',        'T,#c;[qpa1cW*/~dIZ/svlaj1d:^d7J@rPEBBaE!uc/;z4pRIU?7zh~tq^@TK?UH' );
define( 'AUTH_SALT',        'MvN~[7NZQi+rKL0F(At.cR;K=*V(xp2AB4mRrWEpDw&YQ8`%p+V_j7%XgSx9y:bi' );
define( 'SECURE_AUTH_SALT', '?5B@sJ9*yXsxl?oSbPIYX~~gcpQ{/9,)Wy<n*3Iy6Ay-#s]r;11`-xf!p9CNEPEq' );
define( 'LOGGED_IN_SALT',   '`+DJ}g#ZQHop-f&JRR6md+[P8sE[duTiyRRDmL?IW;pfhm3=:qu)_[2gl,w(B!s!' );
define( 'NONCE_SALT',       'T]r, {0Ir^qOdUdk,hC!&S>uN2`ya) xFk,O_LPAbeUhRf+=fzuXogQK!&{*oluF' );

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
