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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'FnaAx{|/UG(w0VM(@/&qb8g{{T>FF!om:Q9T @hTM|o9sYi|^54x2(Oa!9vUpfCl' );
define( 'SECURE_AUTH_KEY',  'LRxV<13ifYq`5=qQc6p^z~xY]?d rrPy0CLO<_d0w:lh]c*-G5Y8Qq7@]~1^-%<G' );
define( 'LOGGED_IN_KEY',    '`NE!7WPA^^+Vj?bdYGci(CGLhO:2.9?#p^rdI{F.hI1iN;@5EP!--%LFRQ?U8ji*' );
define( 'NONCE_KEY',        'tjW{*}%r4>5(66ndkmb/E2<?S$#M?OQsZdzX=kd9J+y7/orUG5`(jv;+0W#r!IU/' );
define( 'AUTH_SALT',        '@L0+,4`gn.V$;l6WL~jH3c}Mn3jh%gRV^U%/v+gh]KpFmv3L<]CJ5&rG<lk(olhe' );
define( 'SECURE_AUTH_SALT', 'lY-[+qH6=`RNanrX}D%vJ}3>Ya_7v_qti9p{DS7uk.]J?+8F(;_E7AqqnG(bxpv1' );
define( 'LOGGED_IN_SALT',   'y}f``+<ntF!}**sjQt#h<n*Fgy&C]5=:X&Qd9j8y?RRE(_fx92vET&FDRfTx(/Pa' );
define( 'NONCE_SALT',       'x69U4`|lCb@!s:u1lwI[QLw)$9}*Pd22m5+HNJ db6tI/W[)qW;)W:a~``d$by30' );

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
