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
define( 'DB_NAME', 'daniel' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Wxoka`.B(c$?o0s`C0|Td*m~J4d-t[89boIaec-Y}dCVfFwJLx5?1<pAsK0Vd/tO' );
define( 'SECURE_AUTH_KEY',   'G_&x|[R)Y(Fnf@Y5_2xz7iVsUAl,Y]AIZM:FNO%oDOM{{$P2)am?> i2mL%}}suI' );
define( 'LOGGED_IN_KEY',     'jt*X^ZkYyb-r7|5eT}z,,,a@#*>qh3*}:ScEj,9/M~z5xMv70&?iAmSD`PsaJ_0h' );
define( 'NONCE_KEY',         'D}39.e>!w9xFu#[Hv#N_f!2MMRgkDM@ (jZf&WOk5&L7<?5gzfmg%rS#?G`Ej<N7' );
define( 'AUTH_SALT',         'eO!-FIu7%P)Gyy5XH/X98.=Fp#A[O8NdIVIS^BEs7gXE(qP@SS(oYeVbiuhr PkX' );
define( 'SECURE_AUTH_SALT',  'd5|a@hv]D` r,`(z_{V5&:eL(w OMWi`mZ/#ew#p*aK>e9WQiPZ/XSNdRA~0#HW%' );
define( 'LOGGED_IN_SALT',    '3z11(Pysg<$|@_~5pZT686/[PDSFW Ws^ GepY,.JTVKzMSO*qiED$Z>W7 qx|wz' );
define( 'NONCE_SALT',        '~cBo|ml]CnH/ezvNv+1*$kw&K}3D)x45)gsb5s0KxvE,OnK@iKiIv.$Sn8)8KJ-`' );
define( 'WP_CACHE_KEY_SALT', '5X%c*9gAH3yna8zG5O,U1(+YU@(*X`[B6 vH91px.>2q=yl1~Z-# QLF&3b&,|#i' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define("WP_DEBUG", false);
define('FS_METHOD', 'direct');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
