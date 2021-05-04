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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Pz4E%`PlO7KMKfkiUWYZX>@8&gW:0DgMc8kz1L.~J><Su2dq@u#.eiI61OZ++q3Z' );
define( 'SECURE_AUTH_KEY',  'a}:3YE>Hz,H[a03{e`F8S)T&Ghz>j`NEejr5<+jlr?,Gr%m`NFMWh25ba6#*Z]7r' );
define( 'LOGGED_IN_KEY',    '2$PM8iDgbzqTv$E%0]Jzr_B*8XGLT*67o<N(^p(*PZa]JUga)mhXBzG7u@/||Kh<' );
define( 'NONCE_KEY',        '/)1QK*6p`<bjuJ^EgkHwklig#bf#kBxC{K_oGJLg.C(^>]:rk?/5_#S(y*B]pn,9' );
define( 'AUTH_SALT',        'wWeUReQ#WP5A:8Kzf`^DmTf`)d-8l<B*Z}vBfE/{]|?3W{9d:tbB,Jya|rK20lR&' );
define( 'SECURE_AUTH_SALT', '{!;?1M8%])F!F0dK(R18Gr3#;-*B=@uD%5cSu*537U8Q<$o~9r(C.%GLwBO=cxt ' );
define( 'LOGGED_IN_SALT',   '}e*G{THeGv9.ISNv6`@e:@#eN:/Z0:dQf[.LJb%z8_M7m5)@aQ+8!7PDoL#3?3uU' );
define( 'NONCE_SALT',       '=TW;5l-sK*,dA9fPw-v>FL+#Q)ZMQ|p(o$uM^ucXK>&tZeU7+|J[k:Fp6ketK-Ug' );

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
