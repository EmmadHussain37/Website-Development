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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'b{~n]=*.LBQ%C&[H)l,y?6a*hD%YO${(L!G:J#<Z5xD+)mg`_()2+b|Q0C7%<8iR' );
define( 'SECURE_AUTH_KEY',  '=p[?Bv8%oem7So<Bbh$O^z?=nl5j}ELBI($T<HK3cD.)OomMt=!v*h+DNmBdS>M}' );
define( 'LOGGED_IN_KEY',    '(-yyGtIciJ!8:Tw-AJb lY2GR5&pU/}2oJq+dd=ySI&=$Pc,mex23HpW/IT9xex~' );
define( 'NONCE_KEY',        'c*+ul4b?n3fi%+fA]|bk m>^UEyeq^}OhxR38B!:T*;!xEX(Wu5Mu<2J<MIR3ncI' );
define( 'AUTH_SALT',        'Y*)Ij&D-=IvV{DOK%J2*PS`D3x;`P&Z(A[eyOr{8tU-8HMhFBc/#Cc1$(!XUq&<{' );
define( 'SECURE_AUTH_SALT', 'P%-;2rWQ]1/N> A}*2E;t_;}xV/|ab=@0<&f;bWL#j*Gk>:Dpn4v&KaUYi8/8Lc3' );
define( 'LOGGED_IN_SALT',   '|):>B)*0#R=3fu@{>kA^ r1.0lo@0=Y3-I0P%}LFaT*RZ3YC$w]K?Pe$@=kDx$XD' );
define( 'NONCE_SALT',       '4.rcAWvWU,[sdc~t/3$`ey9dbi06&&Kl=d.G]V4p+CE[d5xOG_Yg|5mUz5-5O~N~' );

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
