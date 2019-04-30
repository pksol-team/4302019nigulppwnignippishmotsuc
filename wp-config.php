<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shipping' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ke#dx0Dq=lqCA12BZZl~b-x_X#T~0he/ZBtx<nsF29c2TN]eKZodaC+SwIaL_%h6' );
define( 'SECURE_AUTH_KEY',  'o3~$Xaz~fyb=8%AYupXdf|^MPkCMp~3NU{|HXh=,@jZC6@jpF5vPOt?I)e3XU*Q#' );
define( 'LOGGED_IN_KEY',    'XSAw[X_lo*NA]49X!_M9p7SSnYB+.!9RrIEuHe+D_*W(C9uRolmW_,Q[m0_y(mp6' );
define( 'NONCE_KEY',        '#5[&t@/.GZq<c(Gb)S&EkDIhm6<O)L~^!Bpu#UBb QT_;<S?:IbE+]_:}Ah;!NJD' );
define( 'AUTH_SALT',        '>U2}fk8(v`{Ch`zg_8}x-&b9Kf*6.QOZdwZaSBOQt8qU>5 Sz1Y`,yg|72QaaMW/' );
define( 'SECURE_AUTH_SALT', '!,L=,c!>3BP,$vuXs*E6^DStyKZz(4/jN=~#99L.oPlkj_Zq[jG|`Jdk,p(MNvV;' );
define( 'LOGGED_IN_SALT',   'jw)1l_OuN{W5gd{iZy*@Pxt*aZ}zN$6C7u<}[td!BB8#sr~z  {$,lf*#jx`P|6!' );
define( 'NONCE_SALT',       'X73ZC.iFU=_s/(`CE-w|qr0n&-B[!5`=u0`E/axKje?t55<#ZW3x-gmgD/5y)8A5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
