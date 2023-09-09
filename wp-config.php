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
define( 'AUTH_KEY',         '[npRu=p9zHomGHE5&3Zz1^07E$4T,Fh`?/=rs13mBf/4C85/sr*s;Wur,)~>(cIu' );
define( 'SECURE_AUTH_KEY',  'FxFgW.Jil[KpaBwrT3m:r:|=o{6kn2dQc.Z{}Rnz7Z19w0;YvNV:.X)=S-k;! 4H' );
define( 'LOGGED_IN_KEY',    'yg>]9AN?w19P;HCtrmqkb+UgPhGpYb|IE (<nN}}a6+zzeNR38}tG[Xo)zb>lmqI' );
define( 'NONCE_KEY',        'r.Vvr1=6xqNk*a&05p/LEm];76Nc%Af4,Q]W5/?SCl9xw+xD5F1XlxN}<]}q:fhS' );
define( 'AUTH_SALT',        'M0782qws1ACLEP4|pcuvbD@Q>D_`rE%U}v8IM{B?@z[7UE%nN]~RU#RqBwKxozIH' );
define( 'SECURE_AUTH_SALT', 'HkH.Jro5%U3jOwsz+.:QmTwV`gp .Jv+H;1t_9Q+=|}^FCn)y/o ,:D?;9`=F_:t' );
define( 'LOGGED_IN_SALT',   '>o6j0/w0;vilwnkumtsx?-_>0du{n}0n%ih#?#(#]>Jj#u^NiNFO5XDv>Pu$+%-h' );
define( 'NONCE_SALT',       'B%}Rd45d4{-1/rA/>IS@!k.=ocLa#t)}6,4 A~CKX2{l[0U|Tvw5 JiSxB4|]*rC' );

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
