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
define( 'DB_NAME', 'dbofsmartsoft' );

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
define( 'AUTH_KEY',         'fU}yF=`RcD~?n;AURni9_lF_QzB}C|*-mD=YK->*)7OpGFtJ,-mnx!/Y{l}QEY3h' );
define( 'SECURE_AUTH_KEY',  '&n<~CRRcT<0Wa(w-cy?yCwaoj+xR]usl0)iNj|<r,45GlsD3q2gQ!m+j p.#Br1V' );
define( 'LOGGED_IN_KEY',    'UER)(uE6,e3mjV1RH%<;]Cf[#BNsHiHYSRii?w4&:L+MWMc2/|PgBQ|fMH~lS?7q' );
define( 'NONCE_KEY',        'NE^ #)SSm)@;HynMXNYFpLon$@>n?m^+nU->^(sk({u/w>TP~aIaw.ZzxuL/W&];' );
define( 'AUTH_SALT',        '66U&<[95YUK[7]z6ayx*!I3!|:+Rj4Hr7pa@2z$RSi_-nn2fQ(.o]o=#DJnNhB2>' );
define( 'SECURE_AUTH_SALT', 'n;pbDS0K6w[EXJxw#5/u5ntMY<=kW?GjF|R[Bkbj `.,gZBaLTl:=.j>No|8,|cC' );
define( 'LOGGED_IN_SALT',   'lC34~Qe<?cG}Johg!q}G6(q6,$PX?o}_Q[-Upiy/.}v!Oy0CTh%?8[3;B1~m)M_q' );
define( 'NONCE_SALT',       '4#O3Y2hj#5#ryusHPZK.V-5^kV/*e(WS4AMfKt|}1<0tkl}PG(j[i`siN~3%NPK.' );

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
