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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         '%q`I<4c<q#)0OCJzo+&HePE=em#BM$;yd@qO/q`G6f=+tFFhtBR_xKj5c}wHzz2&' );
define( 'SECURE_AUTH_KEY',  '*B)E~tlk+jw*x8KZI96cq$S9[(QkDpuJc~[uC^8BiPgOK?I[7|+.P7A#s45-Q5}#' );
define( 'LOGGED_IN_KEY',    '=0nvYEY;to8N1GcaaQyDyP?87IZVLZCD~0WY0rhVxUqL1J0DMC2Ro`jC@,EZ{R3u' );
define( 'NONCE_KEY',        'I+!:](hh@$LF^&Q6py|>wyi^B%s:fb,*;fFUmIip%mx fEoegfpSLNQ/u{kGRuXD' );
define( 'AUTH_SALT',        'cD%p0.w2NcxLQ^-$?E~RJ&.v:xxBGb7!HGh4#JEI]=:((d.2ck#J?+*bcUM.7fKM' );
define( 'SECURE_AUTH_SALT', 'I9~H>@QG[$%V5Q`+)jT)8E$k90HjB6i~i4Luoc&A):_z/A.+>hEV2E:J5m^-.uj[' );
define( 'LOGGED_IN_SALT',   '+JT!;_`&`GBKM7W75yE>o<se%_IIn5I ,C9*n}*LF#Q7rB|GGDFJ3:;<V@~@gxHX' );
define( 'NONCE_SALT',       'H/UcRnUO:P&Yxx[ou([oALe/QS{6_js2{[n,.D1KRKs>8o4s}:5X_)n543{OB7^u' );

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
