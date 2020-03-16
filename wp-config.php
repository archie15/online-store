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
define( 'DB_NAME', 'online-store' );

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
define( 'AUTH_KEY',         'bDV3n4Xqg$D]}``+p_Kp@E8W$pX=Z__lO7K~3^rC_Sm^=KXxBgS*#ha/!AufgYGd' );
define( 'SECURE_AUTH_KEY',  'N@6i}Qr:w>%1ZX*-p75tX8G@(7}|tucPwd.`R|p=V3`r6>r?hB0*<*WZIJnA`w)a' );
define( 'LOGGED_IN_KEY',    'tLO7});hN|lKdnbm^.4E]`$Lv%>g}ytiKFQOn8nL||Y&MD c1Y]xr1Xilp2phwlM' );
define( 'NONCE_KEY',        'P|K<Jhvk. ZGMYrf-i(3-Mmb8!ORSd_NyZY2@X5Cw;X/k#g{e*lpGN^S@Ii2iVK-' );
define( 'AUTH_SALT',        'C=-rSi;F#(W(9=H(aHDX;jd_>_X?Q1x:s+a-F[Vb~DHsiE=co!t<qXY4t} &q^#M' );
define( 'SECURE_AUTH_SALT', '(d7i m4h=9^P|8ijM6mEeYohLuw+!]659uUf#^u65jn+8DNHP<kI]@6y/%Ydk;bz' );
define( 'LOGGED_IN_SALT',   '2swW![%;Eo#*~Z2].wq%d#8k(.B9nh|%1ynj=B/1e7Ur4zrlLfRy?LRjFNC)HiL?' );
define( 'NONCE_SALT',       '#~X~kJ|G#V[6c&515(a6K>jiEFQ2O)a=uLPDHG?r>e{<6]3=Gtwj,n&9,o9dfprq' );

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
