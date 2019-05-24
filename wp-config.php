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
define( 'DB_NAME', 'freedem-dogs' );

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
define( 'AUTH_KEY',         '*suv`qnR-kmy-I/pfe%A7q*Frhq[!X/Ik# ,dDJ$pC@F@fIh@ fs;.U|ELhNHMyt' );
define( 'SECURE_AUTH_KEY',  'M1?S|#|qMTc3%xxLqs7O#+>.;qz?=Jzu0x?2x.zu?DwGJBnb2d;uvhiC!;Jk+>Mj' );
define( 'LOGGED_IN_KEY',    '4$s^}|Mib/>wmS<?Nm4gG+[D]IO!3u6SRWo_T}2;/fW[$1M[Bp>?*G.V!$_U2y{j' );
define( 'NONCE_KEY',        'yb6?CDD4?!:AkV.N>/lG< :%0P}:[sOoGbsHz*5Or~-|Qtp!UZz~&(2p{Z*}koa$' );
define( 'AUTH_SALT',        'j]tH<z<1=HE.1 28&=gz7,5n7VHe@ce!+!<|/GB;rvp*jD0)/--9ya^?c[TT2K<^' );
define( 'SECURE_AUTH_SALT', 'n2E(.:.eB^w[V-qHcr~|XaH*i#uh2uXRN`NL9[Go~ohOwAOvV<P>$9*u*bf,jKhL' );
define( 'LOGGED_IN_SALT',   '}-mDr03$#|nt=f4</;AC|](mBqx8<!P6+KX&-c@u)f9=Db2M|SpjW%e=sm]sWnBI' );
define( 'NONCE_SALT',       '!r}xirEuGNE;qjeTRr*3,USo#C>(5ZZ}4*|$Z?SK.Ttc|}^p{7$fvt|^4rXfRM=U' );

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

define('FS_METHOD', 'direct');