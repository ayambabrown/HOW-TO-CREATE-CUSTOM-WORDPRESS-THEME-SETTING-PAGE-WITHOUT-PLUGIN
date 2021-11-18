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
define( 'DB_NAME', 'coalitiontest' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '!l|2?@<{pyZJ,#ohb]wJ5`7q=ubA<Rdz5x)CRv@^_cduxA>;9d4a?r#D{:LD%RvL' );
define( 'SECURE_AUTH_KEY',  '0N3>.SVXY;b8;PmPaG=P/;/V8:on`OG&]tShF}v(^~R69mzqejuDx1nGBTAnU[<p' );
define( 'LOGGED_IN_KEY',    '0o4(|%O7fNp,m$+%+C&E6AV(btsHOo)^ghV}$}@AV}c#kIA;TS,!1F<xnn[iLt!)' );
define( 'NONCE_KEY',        'rc.h0{(Xzp!h*5Qo!;1?ho,j3f.^vy5GI]QB]Q+~$&fikCdE*[z~Tzxq;5,q6MH3' );
define( 'AUTH_SALT',        'dJ-$TTAA|%FozA`x(sg F:Op^YvTI j+9.s*g[;1j:dbVmns/EPa!>fdBLL^^iI$' );
define( 'SECURE_AUTH_SALT', ':v7)D4%l7}!;!K?>?P:Y-?t?&NJJ]D7Sh)q)Ly5[ODU8mh(C3xnZYBZ?v+$1/G~W' );
define( 'LOGGED_IN_SALT',   '[[9otIPbBuT]p!x&D~/05m(^]sB@,XYv+*W]=@iaYZ-ou}{ljoZPY~F}>N;>xi~l' );
define( 'NONCE_SALT',       'f;x-9SNq6]K+)Qb s_vY?#=R7QAL+MF7}@i?q{FheTbMk/.X-arhwmwj=ueA|g0I' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
