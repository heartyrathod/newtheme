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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_cloudlifts_html' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'di^e,q!0_]&E2>Ez[gI#9bOdjA UZD}!g:J.+8Z|s#xyL2ng(-;LBb<Aq=rB5~cA' );
define( 'SECURE_AUTH_KEY',  '[KYWLzS`J{^/5;e^f[;CG{=L[vBorM51]`pJRPTzy1YK 1`)G&*7UIA?0aheeDb@' );
define( 'LOGGED_IN_KEY',    '<2nDD)q9]1IgU%y;ZHr:m_M@xH25ry#8i(Yn/wJ<Q)bp%u/Y!#3 )>OZ0$Ib,az@' );
define( 'NONCE_KEY',        'btf8<,@S!uDw(Bg~t@1GYs$.w?1~3HMYx,m$B:+hI#fe:,,)WAEGd_:OW~G]@c6`' );
define( 'AUTH_SALT',        'Z8F./)&~x,[fn|SQ&J+tWm8%x O?W!m,Vf_|HvJD<[`sn$O%{f51aA/8vAPb-[M6' );
define( 'SECURE_AUTH_SALT', '%za;X,pAh;&j~1r|mbxiD[|fO.uQ,82:P-/PxF]brg`a4<]l1kS;9>oWh3a-Amv?' );
define( 'LOGGED_IN_SALT',   '{;cD-)lmd@absCePVLBRn32}0(&kCX_x6|op|{h(awV@_KSFnS%)e4%(MVyID@#v' );
define( 'NONCE_SALT',       'niYi19CB,1?j_gC8<#WYIrKBiMV$W,LTAb-[nTlsCV*Qc/vXv<[<,obG>$f %QO>' );

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
define( 'FS_METHOD', 'direct' );