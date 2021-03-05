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
define( 'DB_NAME', 'db_lakazbourbon' );

/** MySQL database username */
//define( 'DB_USER', 'admin' );
define( 'DB_USER', 'adminwecan' );

/** MySQL database password */
//define( 'DB_PASSWORD', '123456' );
define( 'DB_PASSWORD', '_*8gTYWqM9FHU' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'DUU;@[MMLlN];FaFPv(k0Q[6j:@WzY`PX*796FLmAc`3c.s>lq-O^eq8[!vLe`At' );
define( 'SECURE_AUTH_KEY',  'Rw))kQhv<|:@hX|Gz,iz(5[] #:U|X@z=C@Q8A>5y>SThyQKT0A?.$g>Itj3pa58' );
define( 'LOGGED_IN_KEY',    '!|H7 gF_;po1tPa}+a-R:~%=}JfTi:YlB^>g~OiqjaE!T521ZZ]oi{C}<Xv0NVY_' );
define( 'NONCE_KEY',        'I)*7*G:BCX.8E9,.G80b<]Cj[se2Jxvj1$AW_![4?p+ORb]E<_x^9G%#XW(m246d' );
define( 'AUTH_SALT',        '7e.M7BfO|a<MXR07X+n`a)r?@jb&Wwe5 Z:S@wz$X( :#/<LGzUC_^.6#d4NY(B0' );
define( 'SECURE_AUTH_SALT', '5%h/9Ahue8q%erl(YaAV%HL>bBY|skZFoKdtva$~*zrq$YC/&{V{I#KRPZ6 *8L!' );
define( 'LOGGED_IN_SALT',   'Q}//k77#)#h[KqNjY#/kHp-7qi@v8KobiT?/@`jqT&`P?gA%`k5YQlaR.O#:lne_' );
define( 'NONCE_SALT',       'dQ#0b+6[NBqelMIdjEzVA`3Sl1D!~Dn)nxzy.f68L+lF29u%~,Kl^dS05:Nl/<b2' );

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
