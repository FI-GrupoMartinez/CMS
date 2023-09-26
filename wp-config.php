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
define( 'DB_NAME', 'grupomartinez_cms' );

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
define( 'AUTH_KEY',         'K;.fwvzBU5U0:k^~S,tgf0F`3o1EjA~6ZEIgBE,>Q:H^WMxKW{jm<Gi<<X*RS)Cd' );
define( 'SECURE_AUTH_KEY',  'rs|.{NW1u=p7c{F>sd[x>_)MI<P66aI*;3WfkgcOT7wF]*QXyF0{jsf6x#$D.!2b' );
define( 'LOGGED_IN_KEY',    'NC&e0W0I%.&pY$:+%Iwu^XE{};|e632:<BI?mif,*`zoP;~0DH+{B$tP7Q>k$(z&' );
define( 'NONCE_KEY',        'Dgv|e2vVV6dx}OIhcYG#kNWv8Gw2BFd6Xf?cRf>cIZW,8q;v#twd|A5YHjV@7)b&' );
define( 'AUTH_SALT',        '[SNk(p$iL3s*=+ |33ia_8,@HY[hj4qE>g>;Qj-?8pmFUiEnDKX~O_Sk4EGA<R7:' );
define( 'SECURE_AUTH_SALT', '&o;>r*X6O:LYxd!afG7Krv|`Yrr<Iri[L!EY+$C`f!$i&pLUV2zX^6~h,.<+qZDo' );
define( 'LOGGED_IN_SALT',   'Q6?a.+L@b38*b.@&v;Vg$8e-=:Ia:&VETzDx$$W94[hSzc.+h-Yzc5?NoR9jURk}' );
define( 'NONCE_SALT',       ' j]NFz|woFqE}Bj!yiNb6t~.uc4F][_?9;D[/V{0Nhj>Bg5<Ycu@s(H1NfhgL:RO' );

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
