<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_capiro' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%#^HOq [yl[g?jSS_fK3i.3^Om,4yTCQEYOt o,WrYdCOLBXlfV)RVv3x*AxUZP+' );
define( 'SECURE_AUTH_KEY',  '2s`>!)d^oo,f&-D$(7^wv?{RU1z%7,?j56MQ@y=z?b8AWnQ$CA|cJMiC-5{5N$b6' );
define( 'LOGGED_IN_KEY',    '&,D3~mpJ5j7`7z1<wjF]YkwAzVG,sUF_KGBP/|S*zMz6G;gqcH*$2[k#-<*X{NJ1' );
define( 'NONCE_KEY',        ']=YZ&K?@HI%}(a;rY17k6{T}1OUytOE4A@<1<??R2%BML2I~baEj#mCpA,v}wQSU' );
define( 'AUTH_SALT',        'QzQuyj;5ceCKxk(1kXs5.OA~+IDXajGZk@:^L*~9?/D]cj)w#ns4d/Kq,x>Cxe,f' );
define( 'SECURE_AUTH_SALT', 'QIn68yvC$TlXN[L|6#(KYFReJC.3qMHTNah)XY@V?0<EZx.Xg^ VO0G|;RD8BOwI' );
define( 'LOGGED_IN_SALT',   'd@fKjIK2Qe5KBDrs-$aKsE9x~.5QVOf,Fgt[cy4a-Y;8T:Ib8VRWS2M/iR!?%zoo' );
define( 'NONCE_SALT',       'vL{5$Ylf@SuG`EDuMKr!vfy3o@/lg4fCn9y@zhV6*7W3h3!z[qrK-G;<0cm3)Ys_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
