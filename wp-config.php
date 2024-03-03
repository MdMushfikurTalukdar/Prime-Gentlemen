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
define( 'AUTH_KEY',         'l{OeO=1%^bQUAtDc1s^x.37fcQQ TA?5V7)Y}K:;4+v&>C7UP{4LD^wS/&RJ$5=h' );
define( 'SECURE_AUTH_KEY',  'Zu<{o)+0}twR0]lQPd,F.x^ikYm*yE&DcApXzT}jSUM:)a~dN!Qb_;El^s0WHDgi' );
define( 'LOGGED_IN_KEY',    'j^Y5>tNf1j{|Md#CNAw>m!Y,?`Q+u1WM+V:d[sMHvoYz=Z@BtomjXmmQ|_d;MA2!' );
define( 'NONCE_KEY',        '({}+F~OTbwnT/n5!zL{EM9j6pXO+++hh0W{@gTj-Po-3QXX-R<D]9@sv+?@5|[DB' );
define( 'AUTH_SALT',        'Gx4k ~POL}A9WbQpA`KghW<8Eh0.Oo1_)v9xY)e]!+.WChWyOnp<B:bZp#rZ[ Sq' );
define( 'SECURE_AUTH_SALT', 'E1Cq/!{8xJC  553:3 444JQf-+aW+Y,svEY(iz*w&;lLPAr}5MVam6k>g/nz8?p' );
define( 'LOGGED_IN_SALT',   'v*swi.&lY^]/=pb?dP~r(n)/k:L[o<*7^rODt9oq2|=.t)4kjwVJ.I6+>HmtB@$-' );
define( 'NONCE_SALT',       'UuI!hUCp +7d7g/>32#jyrE[-$eHja;p-lLgQvRP/I34_PvKC^6=d&b`B~ib?[TV' );

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
