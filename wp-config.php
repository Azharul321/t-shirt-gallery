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
define( 'DB_NAME', 't-shirts-gallery' );

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
define( 'AUTH_KEY',         '3.D-1z@j9x&0Sdf6Q{RXZY9jm~4F1U2!1).>5c~Ec9h`2;57U[`RCH1nBG>TXm22' );
define( 'SECURE_AUTH_KEY',  '@?Lg!ywzIsG#Y%8,JT#.]wy!J$^OT_{WYz)qj~ Lr0+t@?RbFJQq+Y+i^lS|Jx]q' );
define( 'LOGGED_IN_KEY',    'FSR0Zt/I/2&M$B){nOZ|ATYWcV!f.F(wS+vh;^ QHIF9M4^T52T{t2U?MZX6$Y<I' );
define( 'NONCE_KEY',        'aDJ@yUuR<C9b3S>vtC[W8KKX+byb>u+Zo6CrO@:fl5.zQ<`.QeZ.1#c)Z)D@9FQK' );
define( 'AUTH_SALT',        '@5 h3MB/P_PmtEVl&6SCY1K1Osd},C~P&?M,?i0(`YpRn3s^==B?AxJQ9)U+T0jI' );
define( 'SECURE_AUTH_SALT', 'I8=~6!PV-{{vBJ?U8hBJ$T&szbK<SGQvo0b]Wi<pVEm?bU/0v`4r5b}iYa @u#kb' );
define( 'LOGGED_IN_SALT',   '?(cVTY^3>s_+TkA!9D185?41n]I{*PGH6IMUBrq2aU56x?j{S0Ij+aR#t]v;Tpt}' );
define( 'NONCE_SALT',       'Tu</n8!<Baf{Dgqwv77dh^.ap~4r1A]L;:Z(EJ!DCh0;7sh}mq_OHp 9PuQCp#Gg' );

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
