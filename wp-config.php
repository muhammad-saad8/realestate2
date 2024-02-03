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
define( 'DB_NAME', 'realestate2' );

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
define( 'AUTH_KEY',         'G;!4$Wv5+^Nj|JN;a^WKXaA2`-64QpS^bP[W4pR07Lw|s2[WdoZ>^jzQVz:_mlR-' );
define( 'SECURE_AUTH_KEY',  '00+Q-F3egQSQXAXJ@m~,K/2cUEAcUnO,fkqudTq2|OLDq. d<gHx/Wo$$sD4/nDG' );
define( 'LOGGED_IN_KEY',    '2`31`O?T9Pm; %Dl~| ,dE64mAj3$tB?W]9(%V3P|t]j ^p}v?(C*~i?K=Op Uu*' );
define( 'NONCE_KEY',        'GcX#ok[7/XH$$2;0Jd:v%lv5Tq?JLAvt/!a<wOAojWaI4Qe^Be01HnjOD.z|Czgs' );
define( 'AUTH_SALT',        'I9F~e7ZZozqP-mhM28.7Fd~NM?$$>XIWVT+]y#sjFes]c&[]c8yga|/@Mh6i4a(<' );
define( 'SECURE_AUTH_SALT', '28&,8RO!<?tk#eFB@1V/CKe_U-8SolJ8Cd;d6NolbytOU38M&-1n;iif><f4#!|u' );
define( 'LOGGED_IN_SALT',   '=#R Z${><Wq(~1g)g,l[:<M=Yf$wY6sO3mVal*s0oMTK!wh65o~c,Ckl4ve60oYR' );
define( 'NONCE_SALT',       '<[}~dp_O1j]on]d-<WSp[|Y%6peMA5`@Wnvw$G7$LLek|3S;eN3#C]qQjlVxk|56' );

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
