<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'be_amore' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'uQqxqn2ISjk|V 4^GBL~ LC-83>.4t,b$ n~>Iza ;mQw=FtlLY]2iLi0RKm2/m}' );
define( 'SECURE_AUTH_KEY',  '&[)1Ep`nmbG~p-fh]Of8=UeY=31F$9 UR2)z,(7Wkh-O(JONPUs@s]Y.Af4. zw/' );
define( 'LOGGED_IN_KEY',    '>6A+W`_{h=CmMo+{V<kHU6Ga?xrKWQcv}W)708, h_Bn#7>OJJZOmP_U5heH,Lcm' );
define( 'NONCE_KEY',        '=zw1|?f`r<+%y[]{7o)vnN7cS)*{e:DP=g1`2vBaa#vuHfh_sIa3.~J/^Kr(UMVs' );
define( 'AUTH_SALT',        '(CwFu7WzuGXX21QX@>t|:(IjClD?]_4Y/xJ~QR8[ Hr.eO4d=#Ylseu(b1Gn0GT=' );
define( 'SECURE_AUTH_SALT', ',]+tvj>|r6|%|Q0Q>{1OO<:J<MSJ$Xn``?fvgd.Y68${xo#M]]Q_`]1 KcYp#NT#' );
define( 'LOGGED_IN_SALT',   'RY+T56(Th`{!zn|s}tp`{U=JlghjH851t<K}OMlnsr=`*{Pz(/38ABF?3LPK6/?~' );
define( 'NONCE_SALT',       'KQH:=}tI1$tlm:PCu}2#B!k8HUB ;^=H-~%OQK9u%9?&KL<(.K.rpjbhC?ua1vp?' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', TRUE );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
