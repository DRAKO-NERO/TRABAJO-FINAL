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
define( 'DB_NAME', 'djcreaeinnova' );

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
define( 'AUTH_KEY',         '^~d{;7tWBb?yGtWIL0W~}t:UPx>)9:SEsbflxszBd9M`=Buqg1WmyC5)Ms1;Q^9B' );
define( 'SECURE_AUTH_KEY',  'vC%ecqJfG3LLXmgqF`^^=z4{_QP9cAl ^#fu_t!<-6$RMA#(YzH6E|{BG<Wt}Cyu' );
define( 'LOGGED_IN_KEY',    'NN8|Ol.CFl{hkbri.|q}o?dZuy6A+1^Tu<`^L*8d#y=_cBFotV#oOLaSKW0b0ryG' );
define( 'NONCE_KEY',        '`t*i.Akj=D1iw8 Z:mepLlf`V^W1Qb!%Vct5gqc~pNycP%d(L8vk*NIe)X@-6pvj' );
define( 'AUTH_SALT',        'gf%5Cx-58)N7]j}annzc.`6RKX9|8[L&,|ZT_)8fFvHX-:{8(1_<EF|V%GV00sr~' );
define( 'SECURE_AUTH_SALT', 'x9+r_r,K%S8+)x2/rGa69n0*$-N^(b2E`XOsGaTf%[&:^6?iOUz<;UXnl$&_AfmV' );
define( 'LOGGED_IN_SALT',   'pR3l0V%nxSY|)E~Q8cd<].~mVvZntTG!o>+u:U&?.,ho?nF&/SClDg1wdV~!eS>/' );
define( 'NONCE_SALT',       'PY/e-@pE+t6|h-=N1FmYQ[OQ,XF6-<`=%Y{ 8-!RD($ /zL7}*<WZJ^dy6ci6$,_' );

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
