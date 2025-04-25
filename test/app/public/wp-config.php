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
define( 'AUTH_KEY',          '*Vp}dlAvO_;v|?/^fWMKA1,c6/5n=ob047cYM{!gT`sB*<pJ$<T@,B6Eu=b|boW+' );
define( 'SECURE_AUTH_KEY',   'oOp>3():qAmZjjQ}ReS8^:+]^}h7F>Z0fMGgdrUV^bZEBGxppNOCPXO@[tWp%t:4' );
define( 'LOGGED_IN_KEY',     '<t#T~ _z!T`cNiq6GbeZrX KR{MV{>J$E@lw?K s;,rK=u1)#Sz+:t>C1o?QMMRx' );
define( 'NONCE_KEY',         'jM*D6l?+<J^}G1sdlsT:hP!^<@iTcz}i-sc$k7Wt?,r;ruaJQcvv1~,N~C SaN<s' );
define( 'AUTH_SALT',         '+.5e!s}Dn3+mFH<O`#:NyS}i@7b7/U|h, C8PzQJ.Zgiq.|[e*f3|n)1:rwOCnko' );
define( 'SECURE_AUTH_SALT',  'Qp1xvsaMIVye|e*_;LuF)%bc~,0 *zYh1@>E2-,V@UPS2HIWo#r,JiYn@gF4C)aS' );
define( 'LOGGED_IN_SALT',    ';jYm?ys-Reg3H`3-*+gZS>c9H1Xge|? -k?EgBy]~//dbO@K,#:.fRnTSq%7}jwe' );
define( 'NONCE_SALT',        'RaanznfHL}e0#@J3gHX+tgYr`DcoWcA[vm)QcE-lr,2@9`74s]5,`zUKjjA`O9nk' );
define( 'WP_CACHE_KEY_SALT', '5y!If__Gzqgdrv|SwsovVYg=xpMPLlih~zt,]qb#ptj.U#JGww6vnIwGDXp`k&YY' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
