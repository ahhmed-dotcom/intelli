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
define( 'DB_NAME', 'intelli' );

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
define( 'AUTH_KEY',         'J1VMo`t~70PN*CK5Rp}%-MK2=(.{$H h4|n%YqR I*F}9R*K]_Z$bxd<28;);Z(4' );
define( 'SECURE_AUTH_KEY',  'pOSR{I)A2SMZp=2kYAZy`S ulmtY8N9jI|3xaJa7p?`]>B~b&y  qlG7Ht{//*Yc' );
define( 'LOGGED_IN_KEY',    'lFOVA?VkZXK~W$RN[K[}n6i+6qhVRkuxDCF)K5207K_sbG(S,&IW*19}JQ3j%jQ#' );
define( 'NONCE_KEY',        '#QzAI/T5;;cw!(q|Phckl&4^pI2VX`?J!9fgRjgu*<VgU14oF?z]b+lMpRJyN|K|' );
define( 'AUTH_SALT',        '-[XezHO}/J]EdCl,,$JdBg6@Rhp$OnY@Rq$w{l;aI.=p_fCZS)G3lqHdMY|$I.1{' );
define( 'SECURE_AUTH_SALT', '3<TP%TLru_T:LDlC1byB2agb~i=.xX.j.d!HO3U1 tY_z5,:ex^;M&.o)cq]z 2.' );
define( 'LOGGED_IN_SALT',   '1m;w/yd[>4771r%v`y6f{@xDNK%e`t4+hY3[:h[-`gTo[,)jRI:%he7GAm7,4jE9' );
define( 'NONCE_SALT',       '@)H. M3.dm>&/Q_B-`a,zw}(D}$)Nb/xn[.,Q?GcQew3KE@>kcdhP^0Y>:sN{Hu)' );

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
