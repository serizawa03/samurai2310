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
define( 'DB_NAME', 'xs682415_wp3' );

/** Database username */
define( 'DB_USER', 'xs682415_soxaf' );

/** Database password */
define( 'DB_PASSWORD', 'ge43ch32n6' );

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
define( 'AUTH_KEY',         '}p%Gl94R_#Cnbh&T0)x4rxg&qhtyF/z9lW{lQ,2-.C$xL(Us]|k9E&5E>GE|E[6i' );
define( 'SECURE_AUTH_KEY',  '?0qt#?6-5m@4r<np[L~lyk{at&7K3zjW{([,mpv](@/1&.kj?mmK[$)]u)r^R(uE' );
define( 'LOGGED_IN_KEY',    '7>|MV(Ro1K7*Id1g=/zB^GoNx+c@1-d12V6T[ik-8N#`len;[7u) {rSDfwPntG*' );
define( 'NONCE_KEY',        '$JK`6c5jfN89+c5qBS:.>|pVNK`d8xEnK)TWN.OkP76]-`i)%b*;Owg)|oG?Fs%9' );
define( 'AUTH_SALT',        ';-XkUT6pbWIWp.X7?(PI5EKzw=`t2!cf)*YV{E6t*Urs(RPxox]34L)7E-_kj.[B' );
define( 'SECURE_AUTH_SALT', 'Uc[)`w])d{-07ieK)tgdckjnfnkFd4gwZ+oyBu2^sZ:Ti-%>^c8R/GF-{2x4e(B@' );
define( 'LOGGED_IN_SALT',   'y7f=<Q_D<>7559izK]ZW.p}XT^:{?ts;wk*n]Cut 0uB;vfGIGr8=pAD%/p+xT4O' );
define( 'NONCE_SALT',       'lBt^+JF:Vn(u:S#N]5_tQgpL]eLNWWWdQxm=Fb{[A,RQ=8}*rw+P~mLKyR?it-_,' );

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
