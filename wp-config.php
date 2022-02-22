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
define( 'DB_NAME', 'AmirDB' );

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
define( 'AUTH_KEY',         'OMBBK69[tr5SzHA5D)2z&IK]YP7}Nx4)M8r9vlfZD:ZJ)ml)E@[FlKm=*PHT=Wn*' );
define( 'SECURE_AUTH_KEY',  '0`$kd Jkng%I2SxIS]QKRw1[XVsJpGS#.jUa)N6jE=GSG}6)m|&MleA2@:ye^Tb%' );
define( 'LOGGED_IN_KEY',    'S4X&/o0%k?P9OL^Gj{EtjtW+5ba|H}$QVLv7v]BpU44AnzgAOW1YSQ}|~R;2Z-@n' );
define( 'NONCE_KEY',        'lu$yvj96DlX/a9Di{F8Wuh59)Sjc*a4gG=MRKoh6$6Dvk5c&^PIn$;VP[T/3l.59' );
define( 'AUTH_SALT',        'w&E {sP(/r7pU2orgA&n3wwyKFy5LPh#j#Bk|uW1L2/M@@e-r&`c2HW_PSbuga?f' );
define( 'SECURE_AUTH_SALT', 'd[IZ8tQ)8q<w A?+EI%A%Q14P&)]q=h0>:xg`<HWnWJ3}Uc~s(p?v!z)(<`7H3z5' );
define( 'LOGGED_IN_SALT',   '1WveGs}>4$&zE*1F+8XC>en?Q]wON_Cn<;d0:Lyo8$WI/-.M@&Jv-^k6-tnWI--~' );
define( 'NONCE_SALT',       '<hI{ YIIEi<%G=Eyb8Af&#[vy#[[JRG:5o+=ZJ7qq42B$A;^<dI=[82!16!vTDc*' );

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
