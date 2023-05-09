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
define( 'DB_NAME', 'natul' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'No200800' );

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
define( 'AUTH_KEY',         'rXDqN5^/Vbbz.nNxAoV=q#p%2N,ffZS=,k8J;9fe%|ZMdNGO(A]z6L6rufV+?iMH' );
define( 'SECURE_AUTH_KEY',  'N!^;q@4V.A=hMx#vK*y-f]QJi+J1vTx=HfB,O7I/T7Wa.f(Jr!s2hG%3M<6u^G2b' );
define( 'LOGGED_IN_KEY',    'z@8O3?G@)$>>+}1m`*M]D57gffa00@{BPG])XZfNz?jqr?=t}}En~$uj}uG<Mf$K' );
define( 'NONCE_KEY',        '$o>~?U=mg[02HPTS/tP{vul-bQy^8/oMhP2auqkb~=UR)8L|Oix;}}&`Jk2|hP}Z' );
define( 'AUTH_SALT',        '=787n (e3L.w^L}w9%^o:*!+(v8O*DIG-p3<%-:L1n_9BrUExL_ )x{|~?|p[:D+' );
define( 'SECURE_AUTH_SALT', 'wWwLP1-bh^~Eu6Vr})=9NG~c]!IkZ{GhHQ4mmsR?`N+DOMPc HYE%eet:kr2jM3|' );
define( 'LOGGED_IN_SALT',   '&QQ?o%Zd._)VRdO@X~Oj-2|E$MVI&7f[nJHHJb1)z`9f>SqoDKGyC90/m_b**dd5' );
define( 'NONCE_SALT',       'vgt3zP%?*AECt~SA%A-g5-do-N9k_yF2v>Z)]d.?Hs]mszeSosO,A^bjj3Xou8Q-' );

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
