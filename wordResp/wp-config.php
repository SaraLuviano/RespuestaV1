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
define('DB_NAME', 'wordresp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zA{HoMQlLZ38}02;,9}2Q+:+K~vwk@&^Nf:}sZHIJ~9fPY_d|1xi}Wm:b6g>U{gX');
define('SECURE_AUTH_KEY',  '2QQ>*6o@I2-+hiy9uL] N4lb%*^b%U.GI!U?.vb?F3^5(H^PF@8Wv]ntjzfzVT$E');
define('LOGGED_IN_KEY',    'v3kZ(ro8?g-O[eCXh0!aLDKm},?Uee/A}fW>#b;1j=ZE~I sx`0TP;|mvK>V=ph,');
define('NONCE_KEY',        'Vz&ySmwR+P0FVvG.lnpT^T.yQs3T2fIz2H@X|[9uU6S}(}wX{ml_>:.V`D-QoZnq');
define('AUTH_SALT',        '449Xbn>8W|6!#Ky2R1,A}@ITY7^f(K_b]Ma&2]AS;e+W|JAUO!|-xrKbH-1Y/>~8');
define('SECURE_AUTH_SALT', 'Z<6~Ps0=RN[8#FIYVuMm%RK|y/DUoE`K4:#1oV{MgfTRnLwI/bwPC-KylwfJJhjV');
define('LOGGED_IN_SALT',   '-*IYE6z?_IyWp,`q6p]dX[OJ4Q!@R^Nd*2*>?q%FrS#?U:O?zc&j>LH/c>9bu3Qg');
define('NONCE_SALT',       'c,]$,>3GlQVpPXa8>xHq8SCH=lRcAH`JN)PN8~&[B,a?zo2<)@|c[FDu``G`+}C=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_resp';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
