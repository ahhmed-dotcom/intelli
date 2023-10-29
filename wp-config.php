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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'P2g`fI4qB)yPA}WJ>Gh%oqC%|j=6}_[+SV-.HtOtaPniVHwWU{ NT]LbmE:/xwtw' );
define( 'SECURE_AUTH_KEY',  'Mx7AdT<fXwIDsb8v|l0QFPv)$$(aiMg;!_;[SZU1[U*R#T{%S]4Of:cA=D+sR.{P' );
define( 'LOGGED_IN_KEY',    'QqF~Np;EJv^dMu]Y#@+D1f2<H-IFxAgl(0H>Qhae/[t#cHaSBuWu(=@},V#`0*D=' );
define( 'NONCE_KEY',        'V))dCGNrj^E_TXpc=V$S}kthR_R{bHV;S|`@@48M->{QU:s:c%[;am1xcyYqt:W>' );
define( 'AUTH_SALT',        '*E;SU&g3@XD6~ANTnC[7QZYY<ab(mF*>ZGMQnY0ui:`y7e$5t@]+0(Fu5hK|(2`*' );
define( 'SECURE_AUTH_SALT', 'z{1}xsVjEOC-&!P*f&u{&rCf.qNcjwC5vN]yH *_((uQI?tn}3Y?@~uQjwB2bYM!' );
define( 'LOGGED_IN_SALT',   'n]*#IR5y`&w`:;M[%6 Ozr7Y%Wp_{}{(zVQl]*j6vI<LG{L(@AcT(F&cXBVY=s~X' );
define( 'NONCE_SALT',       '=(5B]?3F}SA2DhX,<wNLMv^w^,M# G2<l(`S#C|UNgJ@&bE-E$NO<-Rz-0Uu*0Bf' );

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
