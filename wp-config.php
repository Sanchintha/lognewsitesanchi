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
define( 'DB_NAME', 'lognewsitesanchi_db' );

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
define( 'AUTH_KEY',         '<*o1Np+!s] keT&oDV5X,r;JLh+hu[!:Q>.yjX]0UDsho5GwB&=k4zyTl!}k]r8P' );
define( 'SECURE_AUTH_KEY',  'N%+rS0qwx!T (gP&noy@z$_z6fpkN^3Oux{*^.0A6IklbC3l$q@;tUMhD0l<<s)C' );
define( 'LOGGED_IN_KEY',    'AFqHqm%>K[%kq7:JC<z4nwcT[gK?6%=lg=y.sa9kWT>urMO[4.s1/._eQB;yrNi3' );
define( 'NONCE_KEY',        'eXSNW^d+z@i=49]=9W!mSk*qp[5oQb,;w?eH.U[!R&TfzJTw/R?rQO4T@RB)b6G8' );
define( 'AUTH_SALT',        '?0YxLb(Z4uV>klg6n:=wpb]X_0?qTOFLF1eX[kHyi|Hgt:ZDZ5:@)a5*9{s;;@^7' );
define( 'SECURE_AUTH_SALT', 'p%VtBtlAyOeZ>:?:U,K M5=l_i>)owvD2CI[Dt5?IqDjAQAhE8/W$A L%a6d}s5H' );
define( 'LOGGED_IN_SALT',   '?Ck tfC%H}-KT7<l-fyLR{B4m%y=>c&!jl[~p)#$(dh^*SD:.u`JJ!B5(1f5&nr&' );
define( 'NONCE_SALT',       ' $rMOVg9jUt>s6IKi3$]kNlJJ=3+21BE klITnEnRhn+R!}k4dvyVUi9yoaN->Ky' );

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
