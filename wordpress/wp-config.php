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
define( 'DB_NAME', 'my_app' );

/** Database username */
define( 'DB_USER', 'my_app' );

/** Database password */
define( 'DB_PASSWORD', 'secret' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'ghbIR>VKK]x^ourRrOyDx sAt0ss&.{,@c/]H<pxk{3%MqL!!%&$]}+h~Y`MaP?Q' );
define( 'SECURE_AUTH_KEY',  'S[+jW;I_gE:th)u$N9w0XWJHBhXL[*(3j},|Spx|?~#<en0(zZBOCTY{}#$?5GEV' );
define( 'LOGGED_IN_KEY',    'kVpvCfnn{_%l)1EnzGm@q/t=7|-f>#4MQ CslpLo~G5&*RJeB.t>IT|`l/^AMEfP' );
define( 'NONCE_KEY',        'j0BNbR_^kw!{ZbA^w-PzCi3V6}6p}hfhP=5M0`LHe-@C%=j^,X9eXf-o,-EsTleM' );
define( 'AUTH_SALT',        ':T^%~Ykz6}jzOm6mq4Fm.sc?cB)e::DTMD^cI*+^ESe_qPB2zNj*&mrf6}=#1rot' );
define( 'SECURE_AUTH_SALT', '|*de(A49Oy~M20IYgwj5Brlu<N }n)?YMY|gCp|p@.5F|H8_d{G&up_n9r.uo`DZ' );
define( 'LOGGED_IN_SALT',   'FlT^g8gM4Ua)-o>.`*K{}p<SBKWv9/9},^1-)GnXCg%=6M+(^G5Kdw;RDN|S9U[3' );
define( 'NONCE_SALT',       'y;TU^U)D.hIQ#:LQLbZ~Z0Z8}VchpmmyA,9CvKHg_r_gYYw6R;1x#Zv_|zoX`YmF' );

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
