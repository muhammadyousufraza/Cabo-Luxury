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
define( 'AUTH_KEY',          ':t+_N;9g)2LQW<JSkmsV[>t-sEp(`a!!&Svb;?yDXL5L4x/_]@6y=2|WO~{~MR/2' );
define( 'SECURE_AUTH_KEY',   '9ziA;}+@lIBe>Gk(~zAgR|-P2V9__/Ug~>jcBN|&b{9_Xk}JVG66*Zf>T6(LB&3B' );
define( 'LOGGED_IN_KEY',     '!Is!$o@c~3_%x~=a2)IX%!p;`mph&u`$G3zq^VxYHeQmw`Wp3z;<t:w[tlqs1>aE' );
define( 'NONCE_KEY',         'd+i: Gy_J(%+fx]cM49q3d__LmyG~`4U,uV# mT<;w:b:/]MHTC5wB&3sW;0PL29' );
define( 'AUTH_SALT',         '(Dn/%h0PJEpcrB7T,j-8pA,jKslVkn;(#&4U2lwJ08~~[ <<LMPt *>t:7 AqD8E' );
define( 'SECURE_AUTH_SALT',  '{*fqVgut$&FUD[^)AMf*6E4IR;`pp@MW;;_[T<N$&aneANT!:UatQncfBqD]1[^(' );
define( 'LOGGED_IN_SALT',    '{o;;7V`@0F}}#{^Af`u3HzON*bv2f pL`j/~SodPN!LG#)pI$IA2tu2K$rY<C!|h' );
define( 'NONCE_SALT',        'F]+P$3DcEPR$mG$cCVT!S}D|*}JqZinA]4i3u1|;M+C]iEZ9aY2:O<.ub$dRDVo<' );
define( 'WP_CACHE_KEY_SALT', '0>O5rc4uefox{QwSc ZLc<>=By4Fnfn^VOi2MhB1B(d#[ktkB9`+ObdQn<VrvY:c' );


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
