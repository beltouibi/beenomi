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
define( 'DB_NAME', 'azurebeenomi' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'i~WoI)K&cHh2{*F[OUJ}@56i6p0|]We!O;|_Z[@ke0q~}B-Nx%F*4#&qZR-KsUpH' );
define( 'SECURE_AUTH_KEY',  '~^rx[zLk*Y&&;7V?$mjY0-kHM%mQqtGchlMf@-<CU><by-tsfyZ2j]rl$(#`a2dF' );
define( 'LOGGED_IN_KEY',    '=7U:F?Y#:OZ ggzrd %C>WI6^Vnx DXAn8eqzYf9k:u+mON`I{8AjaRcIb</9?HW' );
define( 'NONCE_KEY',        'YzR *W^d`&!Yw&i+fP+X55pdQZ^TS5Rwvbq6Otpf~}Bu0D|As9])T45^M<52|?OE' );
define( 'AUTH_SALT',        '#R[ILQDla*w1b Os/O=>FUHts`v(s]i+|HEvnFwtx`$+F/W|Gi&e_w[]i7rX[>}&' );
define( 'SECURE_AUTH_SALT', '!9r,^#Rby!#)@yx&[ ?!%~Ae`Hl<o,Y5Y?tr=xADVd4&sjoa]tC*NI_D $=I#V4^' );
define( 'LOGGED_IN_SALT',   'TA::d vRT^(tyDXPr6L}5mOZi]Il2(xnr1%K5trI>Fi+EoA-ODMOdZ{>F8Vv{Lb[' );
define( 'NONCE_SALT',       '6trAQtkv ~@4:dJ~!w*U:+#Q$T5LDnCABHOa~F2OVOF^5>(%i$f1sz{HX[l*:NA=' );

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
define( 'WP_DEBUG', true);

/* Add any custom values between this line and the "stop editing" line. */

define('WP_HOME','http://20.16.32.75');
define('WP_SITEURL','http://20.16.32.75');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
