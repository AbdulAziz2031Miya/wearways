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
define( 'DB_NAME', 'wearways' );

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
define( 'AUTH_KEY',         'Z$B-y|W5ZW[;y#!b*;D~9tZ|/2I%EL+s!2?*H%_do_STq|U-?]+V`5RtgLQG}B(y' );
define( 'SECURE_AUTH_KEY',  '`nV ,y$J4/_FTkLMop@k83&qf`NW.7{*-dVu2i+(/&# pwWLW*0iHn@CgQq~BBQV' );
define( 'LOGGED_IN_KEY',    '?L=y=evH`N3NYx[B[*13B^y6]0k5EN[nMoEF(QQxTrA^t[>scEB|KX6}^snzKpfg' );
define( 'NONCE_KEY',        'ZuQ8<PO)hz lX ]c]uO_YHJoTKW2(E<U&5M$atdJZ:3sMz-AA2P]ByE2e+go/~}6' );
define( 'AUTH_SALT',        'V0dqQ+jV^i*,@~%GrLVdw5BzbH[CnxV:L-fDqlY7gh[#m>F!&?^:sOO`==%P:+~/' );
define( 'SECURE_AUTH_SALT', '2O+u~r,c=T:[-tQnm!aZE&Uoc/yPZx5.+k@nm)z+/d4;.+n<(:)cTIcn/EgP0 ]`' );
define( 'LOGGED_IN_SALT',   '?{$-v4_SZ1H%Nt,Z=HIeZUHs]vhRGs;js#DJ=W+@g|d`n#UV`G>u(Wlpa9G>_G;2' );
define( 'NONCE_SALT',       '6S[d!AMbc-hME!3|fCQk9o?:In1rSDK@JcJ/2HtT_QX_lT}<3`0Apabme?IEmi:{' );

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
