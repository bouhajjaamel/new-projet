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
define( 'DB_NAME', 'New-projet' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '?1[)`ZbsB~E,m]HV9phrpGyl5d`cq,JL?lwKI%2]?[?9.gs5VdAN55HOz+VEj%y5' );
define( 'SECURE_AUTH_KEY',  '#a Lmf,y?^,jYee{}V4%-tEHz[m}@,!.@xbh.Sj8dB GPVbu0@4d#GA_T8}C*`Yy' );
define( 'LOGGED_IN_KEY',    '5q?jcoKG+2b{C* (6#.uZhs%I%e3dh/FIa4wZGDX|CVFHC& g=STbsUL]VU|6@B*' );
define( 'NONCE_KEY',        'eQ,&o.pnUO`wMH>dz2UpZS O:j{8]!#x;PYm/8IM#0txO~]9wX4 WQ|^SZ|o4}|a' );
define( 'AUTH_SALT',        '3RdXBxF0Ow&Y&G}6,*4m{_V[|q&gBI`*@;P=nn?wA{mn.YL5EaQR}0af5Oz~%Ks`' );
define( 'SECURE_AUTH_SALT', 'Ja_BHcfJw^@PRf=fkpjuMhA%.|bx&d16yQ9KXvz`sAg-f-F[P+)q[IpVvz33.cG(' );
define( 'LOGGED_IN_SALT',   'o,f+PRe%O?vuHdY%;jQ+UQae|]|>B_ 6]m{h]%nFpE)%xbM@z%}{5W&F ya^Te @' );
define( 'NONCE_SALT',       '+s5l?ngP?@K?&l:|D`5:*f<W.eI]{>g4*oz}n*X%kr+>,b6|ja@`}JX;R5`pe7=-' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
define('FS_METHOD','direct'); 