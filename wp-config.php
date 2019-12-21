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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pruebaWP' );

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
define( 'AUTH_KEY',         'wnpkGF+Y[<<=!)}(H<<g,GhlW6wE&<L(Zd8sW3#PAGLog)Jm^/)t.&$f1,puK0)(' );
define( 'SECURE_AUTH_KEY',  '/`olqsV{&?^#Q]f7- 5Kf)?f>G{ZEh o=QZHU!OW}hh0Y`shh0-7w .J7`RM4K;B' );
define( 'LOGGED_IN_KEY',    'op5C_P/G6B$T;]r{gJx[9wYM&#EuF{6ZaI|EJtA:^Ahr0b fPHBu3sDAdMg7F!sF' );
define( 'NONCE_KEY',        '^o+,|&Ben*:_l|sA0rC`}V$%6|h^uXM{}tj>-`d91NJPtS|8eJ*DTekK]q/w[1-h' );
define( 'AUTH_SALT',        'EL 5suO8OGG=dB$1q1/<b|M6lFw:7=Ki!Nx~?wIr$Wxtc zY)$LF3&iRq_EbKKlU' );
define( 'SECURE_AUTH_SALT', 'K*o4~D!f5)~O(QZqQ9?T{Cmnl`)G23j#RM/BExw,RQkTL!,)|i_7z7wJ| ^6GX,]' );
define( 'LOGGED_IN_SALT',   '7y2agUIBBsC4$w5kSAc#r<V=HLShH{o9p7N%^^R%i*ArJo(#7iSLrda)}J[8SGId' );
define( 'NONCE_SALT',       'u.Y(;@qL ^xur1xf U7_UBAw$e{Fm#IZi1xqf1?U?<fZcHHa2 V>j)ra0Kyy$3PX' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
