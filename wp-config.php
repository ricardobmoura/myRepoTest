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
define( 'DB_NAME', 'wp_db_midterm' );

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
define( 'AUTH_KEY',         'aj)R!o$Pq2oJ ]V4uTda GQZWT;-1[60M}bt2jU fh9{?exWsuzLs|l`e{YKh@i+' );
define( 'SECURE_AUTH_KEY',  'NTWr?w9;U^c9[(Mf@@tWMbA*(Yn*2?<cea}g$)J(X#yOd@iC~ju/k_^W;I/YhNAQ' );
define( 'LOGGED_IN_KEY',    'v(Kz,00t`IFvhG=q8E.Q2:t&W|O/&^zzsHYom=y;!g3EP!mJ+!9eEef:EqY<sb~#' );
define( 'NONCE_KEY',        '@J>*DDMoX!Th1Yn;+OZf#0P#RUl.x-FV/iE!~oyS1,@T6ZU~R]QKz*-Fi {k,rMV' );
define( 'AUTH_SALT',        '7u_{ir2T@RaWyT#Q6[o+Icw]^],|z}@[3/k:6See%?3re2hY~bU%js$[%np_wabC' );
define( 'SECURE_AUTH_SALT', 'L~6%U%]-joLtAk)q.-eFX)~,glPk7wQb%CA}h;oO~_+0eB6b,3f20FWXj/sy! cc' );
define( 'LOGGED_IN_SALT',   '?jF+kBA*vf#aB|V#LJK8 @HK+a&{$4[G05Jdu|#irhDv2/}8KL7LXYV;D(J.h^V[' );
define( 'NONCE_SALT',       '_A32t-/E*Ppd2rIP5[$Fj<NA0`;|hL$QjR{x(]a![6{NN49C7.=U?!z,wp7XC}G;' );

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
