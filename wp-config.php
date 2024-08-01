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
define( 'DB_NAME', 'wordpress_utn' );

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
define( 'AUTH_KEY',         ':mAg>]|Yn~[`ayP1.iM^Xhj{>TeN~ C3Qpz+,1ujcuXMwqfJb$BD~(A49<k+d9;:' );
define( 'SECURE_AUTH_KEY',  'jmj`K>U!I!0J/SSp!(qem:`=|7s@:iu{MJ:aUdm5v&:N3#uCiPDmhDHLa20 QpAV' );
define( 'LOGGED_IN_KEY',    'VL7pWQ;;8(T[.;U;z?~?#`wzE>/F^8<!FZB%z{<j/?Gn[%.xQ^_*x+@83FwQP#M7' );
define( 'NONCE_KEY',        'x%aE%e`g1_c4R$TuG19NcJDS U a|[)[jrVS0-lK<W~ ktRu +nv69u[-T_x}C%S' );
define( 'AUTH_SALT',        'YMe=U@{7q4_jFw(xC@3dXQ-.($0r*go,dksEuMXJ]NJZof4=1Mr4mMYJrtt77njH' );
define( 'SECURE_AUTH_SALT', 'I/^Ee >o!2F}[;<UiT8%r[GDpfndrrIh&4lb`rVwHg213|0M*GFusune)5IZc/M*' );
define( 'LOGGED_IN_SALT',   ';?-C*ns(}LF mTaL!&ktV#sss({`7|-O-vXKN o)Y,P^f?T]P[+Pc7###Gys%AO(' );
define( 'NONCE_SALT',       'XZj|{vTB-xeWd)&Xpl<c.Yi]e01:NF@$yBKG%JUrXQSeW!9-Clg&**1*ro7QJU[i' );

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
