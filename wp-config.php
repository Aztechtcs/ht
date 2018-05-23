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
define('DB_NAME', 'dns');

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
define('AUTH_KEY',         '1/.mwyB9}PndWUYCm[X[^l*G@INa@;%16&!)|Ul7./Zy~S%zLd4eeNP{qa*cNpza');
define('SECURE_AUTH_KEY',  'W[9@c.1cF,6{]D4V?qAjdZv~@Cb<Q;o8% P<{}3J>]&e6HWdrH={+8*>C[vJ2}+/');
define('LOGGED_IN_KEY',    'LsL#(X)CE@.e9a^j:]0@L6!:S${53+q}F&WKtbu+Jh~[7Cv0Rz[304=g-w*F|t^(');
define('NONCE_KEY',        ',5WbC27f;[`kff~@7-MXKx{Js@sY3~1%AO8Ju+b)L2wF=mBrwiW>.Dno?KmV9`yA');
define('AUTH_SALT',        '?(e/CAXIC6Ui%_3%d!)nkMn >H<*YywCNAQA$o-Hc<s>B.VuFJYh#res>F2`{;R9');
define('SECURE_AUTH_SALT', '!@.d7pssfdWua>`im+JoX@~@`L-1gRV&Kc {Q:ND[C-HEX0]lR%6eYf]:zU. X$%');
define('LOGGED_IN_SALT',   'Ox*>25,1K@%3cp%qS]%$p)29}}b3e?f~9<h[GgbpFo:O9h<7w:9%I{uH-1b~b(xn');
define('NONCE_SALT',       'Mq[,Jqpd|iLhh*3rNycbSwW<eky~>kn>N3Xuo~]XqVo!@}~|qw;/S>qK=XB|o2gr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
