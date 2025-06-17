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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mysitekuzmin_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '[+#K6%ApwhZ:}q?tvx*`.1>tc=|:b$6U#|/8j$p$zfjr83a.jb{kSaj$^4&A^i(P' );
define( 'SECURE_AUTH_KEY',  '?T0F9M&$ek}1z/2RJnP`>dQpi<P1{}pP!PTKN`!*Ccfi)b>hk|G>n$?;VXKAm^jz' );
define( 'LOGGED_IN_KEY',    '0d!w-u3h%gijwA<`qtFk/VmhO<|jzB2#d*sJ(]&%0sq,r!ChGoFJ;<!)~x#e-OK<' );
define( 'NONCE_KEY',        'VH7?eU][{3^.,VGHF__|r+L},HMpVFswRzbCkBlL~8jZ&n^Q<aJD~oSY6lh0 W[R' );
define( 'AUTH_SALT',        '^OD+w7qV&^VdM8,XAZUDxS:#`1c]Dd,zL3:Q,3#-cT)m6<@0+^<~CzzBDRU$N4t:' );
define( 'SECURE_AUTH_SALT', 'E!AJLW{HbK,:=E^i3b6Q3-vhw7`OjA/wq(16J-+A/|@3y4&2_*JPU<d(qSn%6~W6' );
define( 'LOGGED_IN_SALT',   'uzq;=$B  (- 1*4J`=Zt?;E-0h:Tcsk-+*H5*U#h,8tn RvKlknV5|u{yDq|ki@3' );
define( 'NONCE_SALT',       'jq5f1dotc}}opuJj6@8B@-F-8~f):!,LuglL Y?bL$T)s}+a%(#{1F0+7zCE.^/q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
