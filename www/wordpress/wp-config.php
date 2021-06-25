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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '995774' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.{s+_RK.Tx+/`>ve5mQl}NLc[=5%!taw9[C7}QE!?Bx~M,r{ = /RLS{5pOu7M^h' );
define( 'SECURE_AUTH_KEY',  'SR}</I{cSiuK!;aV`dkM%%MQ?3^tw|&l!J,[+mJ{p*KRU@K,jRuB9d4FLEW0aOm!' );
define( 'LOGGED_IN_KEY',    '~IsOZh9(1?F#ykC~)hOatk7ebL1YuwZz$~*Mi2]}l`%0~<GG#RO}3f|K(jAI6O]2' );
define( 'NONCE_KEY',        'zcMKjM8:D_DkD>:_Gq2@~a@u1g$xjHzrS$/3KKh~R!kGTE!9RffA}~;qa0#AmB(9' );
define( 'AUTH_SALT',        '`Ef>;VWJEON!OTVs/VYHj:.tac3<6#]S$I.sI2]|t`(7mzQ#762}=S(YT|=_rbt|' );
define( 'SECURE_AUTH_SALT', 'j:Cuqw>5D[(_P+4n*Nj;B.35*V-?w-<ieGSLwZ5mQ|IGq)Kh8BZUNXO7fGB?h{DS' );
define( 'LOGGED_IN_SALT',   '^ti[!2W)~+AY8,gdW4s+OA^Han3m8vNA*y|WLjc1mj[hGpqMRq-E7ro#>vU9<w1s' );
define( 'NONCE_SALT',       'd{_#h3N* X+puJ#0EOPH.,]Hi`b|=Fp;Lv9!w+0W<0f`pw*2_K)=@I5HC&pJ}q t' );

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
