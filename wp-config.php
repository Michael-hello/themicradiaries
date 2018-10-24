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
define('DB_NAME', 'mikeuk91_wp1');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '9bw<!-n%Qp!Qn{A$~_*z8JH1aw4]gH2&8,jue{ekuO*]}MV.~wKF{-#<M&3xczSp');
define('SECURE_AUTH_KEY',  '^:(MNn-v6us7^QtB8Kx1`1]aSE]Qcn4|5 dl)5vYG=~lNn~nad4]~)|2OaLXA%L:');
define('LOGGED_IN_KEY',    '%s,^I2aVZ=^O31R ztzrqirw&Tk:rtiIr~(JM(wHxZU!;Kvs-s*|K]2_KZs @c(^');
define('NONCE_KEY',        'k=8-i=vlKpTT2EDs+sc9`cLOS6O)4`Kw3#*i?88Izr`|}6)Az}rz|fL1iGm]c-Ua');
define('AUTH_SALT',        'Z[Li|yC4Ypr_gG4`]N&?s IVJC0oMF>x9?UeGU-SLjL]7z)34,W*0$0*Dy143:|?');
define('SECURE_AUTH_SALT', 'KI@}cJr*{qPTOe2;|DzrphZ(M!G:b<-TjkIF32!}UhwtbsEhZ=H_PpS(zr=>qw(%');
define('LOGGED_IN_SALT',   'kD@Fo>6UaA=z]ZaU,oEH-{1LW2H8D:Ws2M&Puk>=31cOki(|=ozy*MQXES6`W-{F');
define('NONCE_SALT',       'E[LpYjUr3}Agj8K(-6se[zBLs})L/.XI(?m,4HN|pr{H,_xBY@X0Z>u/M&}32H!=');

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
