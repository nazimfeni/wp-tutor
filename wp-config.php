<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wp-tutor' );

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
define( 'AUTH_KEY',         'EVvNAYbrmjumuEBYbOrZgfUKf9IDW7wKh1UtfaEh7f4qhHuXNVjhNiMoLqRgsQEf' );
define( 'SECURE_AUTH_KEY',  'cfbGk6sS2Q3CXcyB2v35bOxKEnZILI9BfESnLQFI1KJED0V4QvY7kKcM5xQ45TQs' );
define( 'LOGGED_IN_KEY',    'EID70n8TEq7g47egK26wIDUmAjRELbOUCrMi3SEo9sR1KJQj65W7EUD8dRskvaY7' );
define( 'NONCE_KEY',        'HdVCJqUeKsNUy9YWXb9QAfhhYZFVQ4nXLNYqzsq3UNxO6tdE8St8qWZuKeHcawC0' );
define( 'AUTH_SALT',        'XvBC81B4e5eJqIlYjb4KuZLbyDWh6lD5OxAbSCxwIDRBmAJPIDxtzvamZCiADVYB' );
define( 'SECURE_AUTH_SALT', 'vhmf7pTLbBdUffPDIRWZIAyNCvePptSJzE2AJfo7xGSynz87L3r6VlwprTs7hPOH' );
define( 'LOGGED_IN_SALT',   'VJKBteNDVvCIZUnNkUDKmHZY2Qo4VMstFPFV17tbljNdIu2S43KODJ03Vs9raR7i' );
define( 'NONCE_SALT',       '548Tzj3NcCF714VBRvGwOiXsAuFCHOG4BCQWah2afmvA83pLbJBg04ryuoE3UQBb' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
