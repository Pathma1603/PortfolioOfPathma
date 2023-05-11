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
define( 'DB_NAME', 'project2' );

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
define( 'AUTH_KEY',         'zc`THl-E^##?h.*1lvne09yY7OJdIi9%b)Jnif$P0wh`_wc*K{[)L1eV~V{S<D1f' );
define( 'SECURE_AUTH_KEY',  'FH/<iijOhp|{{<FyZg((w WQgp]uW:S&S2urYYxYr&@_ m|Kf8GnyC|LPLo#z8yQ' );
define( 'LOGGED_IN_KEY',    '0^uB*lrN0ibJu_BVKf*0huOqU=g.A3=e1wI=E*j9t`NI{qio(zH{zwCcFe;,iOyK' );
define( 'NONCE_KEY',        '!Z?&sk8T}J&E@uj]EnP9KS7uV,:1,!KI`g8y?D}fy%Y,]cD. z/nwoT|4;W$~i*R' );
define( 'AUTH_SALT',        'xd<{]VV!r?eqb?Nm8~UA.L`MP{oy,O$tn/+%fS>dXbOD4vM#97$%s5DysdE;B]LK' );
define( 'SECURE_AUTH_SALT', '9{B(ga^G;{N)>kgQ9MY7:;&E cQ=<vQ6h`Aps~BtyG8[z/w!glm*YYxxbpqRiByT' );
define( 'LOGGED_IN_SALT',   '(<7b5&e|XO z~46*}TY0 deX;aK$!=ih~2kJ/QYYv.yWg =;4 ksvLApxQ%e-2J0' );
define( 'NONCE_SALT',       '4>)53`9oTb5(xE<We+}_j?-zzDnPE/J7V91!,)u/V<5_>Fl9KSArB}`x$QCcIQli' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp';

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
