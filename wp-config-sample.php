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
define( 'DB_NAME', 'tst_marsol' );

/** MySQL database username */
define( 'DB_USER', 'tst_marsol_usr' );

/** MySQL database password */
define( 'DB_PASSWORD', 'f7a9f10eb2dc83a02bb92dee8de255a0' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_general_ci' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4w= qpTYjDyxoGI~uv2U:eQDA(H^p:}S+Xz;CO>S$)^q|Bhc_?pL~{0~V!j8>udh');
define('SECURE_AUTH_KEY',  'J9V2-o*<I]oXU+%`BQD_ER4S-woxwpQ%}yB4B(Yscb?Vqj8?k<r{5~M*ek4Guvv ');
define('LOGGED_IN_KEY',    '`z) %Vu-)x@`$5syu2Xp|yFMa p|>[Zd2bN|Rv3}Z.;.hlnFUl*v`!ADK,0SX*.{');
define('NONCE_KEY',        'Q?i*L:hp_9:_%|b>aR%^4q41/gh&yT~z(thm#LE2_X(6-2Ek.9]OJE!R(w8Z#5S~');
define('AUTH_SALT',        '?m0%zuc[P+flM{5e+>cssLbXJ%bgyRnCBm*x9KKzCGillys=0(>--Z;:(-S5)}W]');
define('SECURE_AUTH_SALT', 'A 3|c(~Bv-eO_quM[-:Avl0:lj_g/Dvc6C}GYNwps/w2*bt)&!%eTR`&l}>Lk,f3');
define('LOGGED_IN_SALT',   '}F<!l4IDeBjA!:gwV-HHk|BIwp1/hbc|bDKS+rD/&COJ)2[xgk,e#!O!A-1%o$*F');
define('NONCE_SALT',       'LgiIHsZFl*q/Zj+UgnU_{%O2nGF-[<1Nbe5(tvN)4[;uwfNZ@pv=fcEgnKD`2O@$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'marsol_wp_';

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
