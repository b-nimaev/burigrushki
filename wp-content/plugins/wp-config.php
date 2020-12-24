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
define( 'DB_NAME', 'u1089208_belen' );

/** MySQL database username */
define( 'DB_USER', 'u1089208_belen' );

/** MySQL database password */
define( 'DB_PASSWORD', '987654321t' );

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
define( 'AUTH_KEY',          '<*,R|c^X eWD>a<16vw]mVEA2u!Gzn!S2fKr {`8OwG#$Cvg>`9`ZwEWPqovY;S ' );
define( 'SECURE_AUTH_KEY',   '2)mhq^IlP&8wABn2{{d*A Y:jNh00{#(C)w(c1h)78a]dsafz.HCmc?D>=jL7ao.' );
define( 'LOGGED_IN_KEY',     'cs+/kwaga<#AbA}~/]f&<9+t%bBb-1FVp>i;YR8+wD4VubaZuawki(&Pm/g-6U?$' );
define( 'NONCE_KEY',         'O]3,WcY.ONSODdaZ=iK)TXB9j^Nx|^mH;xbvdjfl:}*n,3wJ_>n59ku$dvi*32OA' );
define( 'AUTH_SALT',         'p/ Oz61H|{TOKLoq5sK=?16>i<Flj{W<?gK<9cp+QC[pGKf8v)D)U-p#$ucpu~l#' );
define( 'SECURE_AUTH_SALT',  '-];>Ae^JZ3+d4[wW/<I1YJhT65r^s)8F48{ms}sM!~2uVY7gDs#;m6&J@ZdRD1CY' );
define( 'LOGGED_IN_SALT',    'mJuKG,#.%YsQk2Ri7cmyj1#nU_{A7PhTZ]qWBeSJf}CkC$rWsottU|5ECHD27>I+' );
define( 'NONCE_SALT',        '^b^X<c|NG*.oL0UUkk6S1`bzlSh.Oe%^z%067ee h;y &xnTn$bBE88rv% ~#<c]' );
define( 'WP_CACHE_KEY_SALT', '{#TC*P}x?*8R/rj}D!`Tdx^xigd;zM-zdv3-k&|8)qF8OSfU37G?&zNiOGQ:<0JU' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
