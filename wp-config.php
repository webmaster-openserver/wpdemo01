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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'oyI}=)Mg^qFQ4|+<]b-pIq!C=<_~R;Kphd5? [*ogx-OfgwAf85Np:cBJqRZwcc>' );
define( 'SECURE_AUTH_KEY',   '=(RV1ernq~V5rD;yyou6!7b!G}wc%d2}4X],r6clv2;4{7HJOQJMGIuPo;KmoGX ' );
define( 'LOGGED_IN_KEY',     '!c8C+n0`4]mDC;98J|{)!YJ]PjtFy[2$|lNi/oIf]jdM!G#R[sD,O =qV$eM$t{V' );
define( 'NONCE_KEY',         '`Ke!it0fQF6??9bGZ&|awO 7eJ8:*6V+pptKquspeKI:]Q^c9;*_{(7[2f%4pc?_' );
define( 'AUTH_SALT',         'xc$b?r>Tebz@R!@xY6UUO%vW!@/p4SUAxzMq9%*aYJjiCA}nq17w%KkC=AtHF]jp' );
define( 'SECURE_AUTH_SALT',  'Jf5R].W!,N`l/T#TMC,l}Oj,{,yGA<G]p0,hXZ%^CumjtY,>V4r|:1OzIOH@Xii;' );
define( 'LOGGED_IN_SALT',    '}?S|[^t}(*?[i-<v}G *&aXsP|NCKV!9MA~,~Datw tk+bC^m*E]=xO=(QonS)F|' );
define( 'NONCE_SALT',        'pYw{&S0T+(u#HFMv04. -ys%`[W{}BvcXc6zv4}>K3Jf{-9DYD&F|Mn#y9tjC|iu' );
define( 'WP_CACHE_KEY_SALT', 'YM.`X@s2nvC8=I!]D/WF#V?tY(h(ie5>!=5vAg*rK3%nfzp?>+U~.WCDEF+=>9Sy' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
