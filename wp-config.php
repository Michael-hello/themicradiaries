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
define('DB_USER', 'bn_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '45bee7e8ac');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'QYLmuoyRKOCOBvWSzUrc1WyIFC7dsq265OBMkccq2p9jTSryTPTu8aXvcXHN46FM');
define('SECURE_AUTH_KEY',  'cVQyO3XJk9Hd1YGo3g6R0UARtyze3NOlhunsttMVekcjzMDKjuER3H7gigsN3BiG');
define('LOGGED_IN_KEY',    'CVMvBNuqe3AjkhTXQW7JbaRuFLJWIYDd1qjwQWvoLcuPwFEIz99YVLumnBDemWc6');
define('NONCE_KEY',        'Faz6oVCMr39rTXAU8MYjDbqHBbmoflvrfjY0U7EfZK5IKUoVaeg6EsHGps5AwPX5');
define('AUTH_SALT',        '1Q2yHiABA00iSnNp9ZXVIb4nF7swUxJpSEXmMUZvLrQInsCARSf9xIjM7R8F3pRn');
define('SECURE_AUTH_SALT', 'HB0a7693LetoOj50T3A9YtrT9BkMvcGUoOJe4YNmuxt6yCg46Lz9LA3XiD1TBZpY');
define('LOGGED_IN_SALT',   'NbW5WaYQjcXlwwTYwg7MeyCwWVhk4NNeNaWG8ZuZPRJXdtIag3SHn0l4uSG4gCNB');
define('NONCE_SALT',       'YyI658TUfw8i3kGFpiV1QFrqUw1FcN7cIBI7FyTWIQyjSlTHyAfHXqlLBVshbfIx');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
 
error_reporting(E_ALL); ini_set('display_errors', 1);
*/

define('WP_DEBUG', false);

// define( 'WP_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
