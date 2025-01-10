<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web1' );

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
define( 'AUTH_KEY',         '//epvIYeEhz_c;TzvF}U_i&0Ud?&HVl~LW6<)I-{du~$HuR#a&uY^K8#FO8wmW18' );
define( 'SECURE_AUTH_KEY',  ';,3tt80WWp9d:WN]H{`8:l|%^FFRZC[67Wfd@#]r-zuIh4mEWpTv.T&of?r9GIm&' );
define( 'LOGGED_IN_KEY',    '2aM12GtXZ3iq!J&O}{x;ye(%.m7)XUN+Wkf3;h@tR5Qz<n,_Zm+A;{IRo~Md1^V`' );
define( 'NONCE_KEY',        'aU[=(7juWT5IbXS,sSYso.sdh&,O2ir2T<29CgXWlx%hl~4A2G7vs,5tcUz(ILCJ' );
define( 'AUTH_SALT',        'b&B+!D uWC8WB`CSmX0M:E4%iByi@6!#ilv-T$}t-uz/Up%g.r/bBoB6},>ONaaW' );
define( 'SECURE_AUTH_SALT', 'aawe2uj4.*VtH2xkG|%:|BkM@`P!-DPJ>--Q9CT*I^mif%yow/e?vgb,XC81(L]C' );
define( 'LOGGED_IN_SALT',   'kq;0*dNO{0n+zDKnSkJIyO#Ri$dQc=#&Bw9ro[1eNe3FO?GR#$|>;MNo%=T>#2K8' );
define( 'NONCE_SALT',       'Qy-=XiMXOxTi/&EJQxAi.1oTJ7 <0|,jV3vNl2*5^Pu%8(N;!K *r6chXe9d.R{n' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
