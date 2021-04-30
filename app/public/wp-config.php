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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZXuDQZaftS8emGWc1DX6s5QK1NBlhd5rbBaXcc8JRhklaoWNDDl3/sWrmWPVIUU5685f+JioKqtt+jsO17d/Gw==');
define('SECURE_AUTH_KEY',  'wMXdn0ct0hxYjmqfxoHgFF9Ujw1YYNq+aeFu/uFh19LHiUWSnatjEwbwkTmNlIK5Y1vZ0jFN8iDSAfOJygrjJA==');
define('LOGGED_IN_KEY',    'eplkzKUst6G6zaaZzqQtyOK9tXr1dizxxXMwuU7hs2PN2IDr/p8qkY1kz1GsQv+UfMG6FaAnHu9C0tCS8pSpBg==');
define('NONCE_KEY',        'h55uHeQgrLQXVidQPLzeA7BjqYbi+NMGHzSJ/H5Xy/u0cL3BRm/otXdys3AkNsAkwnH62Q85Isvg6aICRINBjA==');
define('AUTH_SALT',        'jjEY79gb+9YbSvJU6/S0QEo2I/54yZKmJkpAE2JCQEuOQu+q4QGQtWJ593bK88aVQTMkRLjSk/9YI4tdx6AKrg==');
define('SECURE_AUTH_SALT', 'QKkkYcO6afOcUrUpoNUJsS3/JFELRhZ6MprPoitXD9jBl5yBcGte82H+yIWt5gbOxy77IueZkDlyVLrArIGvdw==');
define('LOGGED_IN_SALT',   'VNXGi8yDuITuUv+BR7XvLlxsSvlmHUcWZRjQRGcNlVFcLz9EO+1oOr9++FrrdM8F2jn6/RSEBEzW9H//DURRtQ==');
define('NONCE_SALT',       'rz+mZfoLCyT0Nt/zso0I0w9TebKm08xlvSsXi1J1+Dzf2Z+bCyei+MQJ6vXheQbp+Bys/W9H4n1k0H+x12B+4Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
