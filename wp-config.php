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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'CVa s&f,Y[=-L.EJU#a?J05?RL1tp3iNE%:OdxzGG*AzG~$/<grI6LdBBn:JjoXP' );
define( 'SECURE_AUTH_KEY',  '|gy;y3/Eie@S i-Dh_K&#H|0:QlA0YJ?=y#a,5(MiRnV}&ojDnei$V{3.0*gWb**' );
define( 'LOGGED_IN_KEY',    '5#6|ye{fiB:?A~t@2~D:Iq)3q}u7Nkt00@*q%]^m,Haj$1l-iN%*U#pc)l~<,4Bv' );
define( 'NONCE_KEY',        '|8DuQ?!s&X9]0[g3!Z(!3LOk9TA:^m1+yoy`[yW:?HO|c`h[5z>&>`#/6Obwu87)' );
define( 'AUTH_SALT',        '!P?q^?Rxg(a3Pvw~<o5z/q`TbuVrzU_fj[(f9,#k%k|R+c:jGFo0cXHD3h$ Mz;|' );
define( 'SECURE_AUTH_SALT', ';YoYB.8]8`q`ab_zHaVG#z[P*nQJpZvxY#AS1^howee|yy>$)PsS^IC6Y7Q-ofDE' );
define( 'LOGGED_IN_SALT',   '<>~TP~wUM^/Xa~.gerc/hTg12^LI4`-Mm4H`#&y~w[j8YT[2q^pnn(IWgVeR9SFQ' );
define( 'NONCE_SALT',       'JKp[ie^o]HEno,-G)VGz9@Va0n$WfN`dz]ZBvzqKV&mD!M=^3NhRH]UwPVRl<m*S' );

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
