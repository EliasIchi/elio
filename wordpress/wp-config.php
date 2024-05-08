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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\elio\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'elio' );

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
define( 'AUTH_KEY',         'J)2{mUJ_S~jsjs!PVH$<89*[0]Kwwb}Z:GQa9qLjzPGKM:T|s;t]e1ErLs;vl<Ja' );
define( 'SECURE_AUTH_KEY',  'w_IXUKi^RF&dl~JbNa^{1:5PnW?RIqv=ZJv41w2k2-g*/4=~=uQQ@Dx/5hQ2M.@X' );
define( 'LOGGED_IN_KEY',    '@:,#:Syy_~7f*~`J[`xi)Vwi6Vap(Tv5G+mhR4jhl9(r v4jS7R-B)<U%;j3&tde' );
define( 'NONCE_KEY',        '~Fb;FH,(@Q+TPa=1%L&},o;G&foVxCL?Ci9;9(l;Iq@^445H7%59]~zc-;%Z)CY1' );
define( 'AUTH_SALT',        'rX;*J5veX;0vr]<ppS7pO3,a,,>]^nr1z*`6JRSUEj9.yadX-fyiqs;J)*}h:}8t' );
define( 'SECURE_AUTH_SALT', 'uNuLcda#V,.VQ?%=j3Kue`TbG;TY_2hsd1ms:KI;h!}6Fh3E--}!G8v?H8b5n:)&' );
define( 'LOGGED_IN_SALT',   ':_$WR%zfe(jgCYpCAIJ{BNZC:S{LbNqMzE4rm^rOw6+S:+4!R| vxCkw`k/A~|Zr' );
define( 'NONCE_SALT',       'CAK9&xm|^&|*wY-7.2v*Q]~!;?[9/Bn6Z;tIp9%M>OH?/i||f/%{RY)/>^p(&lX[' );

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
