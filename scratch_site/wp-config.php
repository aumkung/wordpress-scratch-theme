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
define( 'DB_NAME', 'scratch-wpdb');

/** MySQL database username */
define( 'DB_USER', 'scratch_01');

/** MySQL database password */
define( 'DB_PASSWORD', 'devpw');

/** MySQL hostname */
define( 'DB_HOST', 'scratch_db');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'b789891136ec22ed4bb797628d758b3b6e6050fb');
define( 'SECURE_AUTH_KEY',  'f440507e5a0bc6592e8305ba1b684ece1e2c564e');
define( 'LOGGED_IN_KEY',    '6709a01f6ddcbeb95d152414412d96ca1283e0c5');
define( 'NONCE_KEY',        'd9d48876715dc5e212ba7075bcb826fc3475880c');
define( 'AUTH_SALT',        'ce91ac73ac5068c6cae174bc7baae287f2529d5e');
define( 'SECURE_AUTH_SALT', 'f77fdfb5e55c051caa5d2b2f6af8c86199e17fa4');
define( 'LOGGED_IN_SALT',   'fa020a42ff0cde6260717810dba7acd85ba85f7d');
define( 'NONCE_SALT',       '9ab8f4553b081a72b013f4dbc4086965d1557afe');

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

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
