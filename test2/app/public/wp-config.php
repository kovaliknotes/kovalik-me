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
define( 'AUTH_KEY',          '~N0*@K7ngFqAUi,r&jM*e`$tH44!}I~RB2Jr{80#&Tu>QS7]n?`!}2A}:*}Nt[N(' );
define( 'SECURE_AUTH_KEY',   'ou!:YFq/3MY]50DSsn{yJFR/loEfql)y|9F<}/3<w[mX(7@{L]OG/yIQ(/7:{O] ' );
define( 'LOGGED_IN_KEY',     'Wc%Lt{%SySJK6!1N3[QR66_C#l@i!_7.n ?|;NZ+f[Uh%U-U@`B+*5cr`_EXa?td' );
define( 'NONCE_KEY',         '~)y6,&)ubv1x5K[.oFcg+TD!1to-hpt$lBx^7~>u0cS1AOv,o=R:h%O=*vM$y/RG' );
define( 'AUTH_SALT',         'R1JH`38PPd0>7,z@Xf%G+ 9m.WB7r@b&P.EcZfrxk$*_?h=a={[J(yBYEXb33}!^' );
define( 'SECURE_AUTH_SALT',  'axL^Ea$$ce_1lUEWlnw(2O00]<q;:v=sgOHr1naMc%*!m~@,3.gn4]kUJ5M)rkg%' );
define( 'LOGGED_IN_SALT',    'jMvr xhur{`z~Cj.JWB(MiE)j(T2TE[hV;G]Jl7x}vS6BGL,iW`bg]>ybGM#x@1v' );
define( 'NONCE_SALT',        'I$p$/.T}KMk9]0}XnKtp6HC!.X/8DNxBTsPi?O,(;FgE#1I6Rl9 HqavYH{_2C>U' );
define( 'WP_CACHE_KEY_SALT', '#P{zp:H}U6XkXhLX!t.Wc<|=~s+4pJMvBv89rBv4K0g~Sw[Dh+AB=]~SXH#]r)Qv' );


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
