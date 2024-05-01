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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'trung-nam' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'r3CJw253KoZhWvVreKqN30vDgLWKQHJj4x8yUOKiDtYfbBqC7TpqgDwFk4G5UxHi' );
define( 'SECURE_AUTH_KEY',  'IqZxvIIoJEYnlhagV5nUEXpriH622LR9r6lflCbA3vtdc7DKCBmerxcbyHLPeZCR' );
define( 'LOGGED_IN_KEY',    'EGCA7j5r8HEUhDPeGWfXE9PPu9EVbADZhjkgq7uxqBfUCabzPXbOAtjO6A3T1uiu' );
define( 'NONCE_KEY',        'm9Q9Vmx190yhPtSPhXeqCd8ewCJMc1KLd9SGJ1rENcnB8TCxtms5mRBXTrYpYWfJ' );
define( 'AUTH_SALT',        '2KJCkLam7W64A6FOpyFwspPMoX44KccOKsezEXcEarZIdRaobV6RdTcKtRh0fEPl' );
define( 'SECURE_AUTH_SALT', 'L3iextt9a4o1U9W3sYdlzmI2AzVucOYj7LZvlOlSwoEY9ltuLb2ATEbfw0PtTPad' );
define( 'LOGGED_IN_SALT',   'DDe9lL0KrMhmi40Kj2XFhNXHsJVftfqH82zuDpgBULnwJTh56QxedQUayaQXiS5B' );
define( 'NONCE_SALT',       'EnSo9i4qZN8Gy5wAp7uOIB0F0APT1GdJbGa5UH0ViWIVpgte7Kie6R6RPmYo8yT9' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
