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
define( 'DB_NAME', 'admin' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin1234' );

/** Database hostname */
define( 'DB_HOST', 'database-1.czjl7yukrwwh.us-east-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'Z.H8gTMb|AfS*6xxk!b!r`Ot5sQI>S89kTlPv9hNz=4>N?H2=[oMDEH!i-#X9g>b' );
define( 'SECURE_AUTH_KEY',  'Toi06U51f.xkIe/$Q2@[B*}.h6*|&hl3Rnw<1EepB[/wRYw9lHbmv<+>/uV&xCUr' );
define( 'LOGGED_IN_KEY',    '~;nZ~k+ao z?jcXQthSMp*tUosgTbYrJYIP;fdMiaVD,7B$)xq[o|5bg.B,ZB|f>' );
define( 'NONCE_KEY',        'lv^r-eSv=9I!aY-{mz%>-i_^D(T<fpBu[WR]bZZEJ:l|i%9uM+w+iH^{+U8w9o)o' );
define( 'AUTH_SALT',        'ScU1=m5M%R{b+V]^mW9/f+ch0rNGqbH}/qT-2<b1@ ]9M|R.6zbi>-8|QyxSRWYV' );
define( 'SECURE_AUTH_SALT', 'pmjqc6}i,SI[7|$(/1U-Yx^68&>yrP3hF}e8OWWm{o=+?v%F+H|Am+j[iZBI}KxG' );
define( 'LOGGED_IN_SALT',   'Z5lIS -UwxDklcSWScPFN`+=c+f$4l/<GCk!MlpH?/I5ZNOg|BF7k[y?|@9Etu+l' );
define( 'NONCE_SALT',       '=(B)?16^B>?CBsI %bg{PY}%{?#A?RI3<NzV@kzfW&g,M:WHa#B0L,/TeuZke05(' );

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
