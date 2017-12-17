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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'tLpVfqWw8jMLcfrRcihmttgvQL7q42Vq2Mau4D7+NZiJvXINA7/ROsWi/DOcg/XppvMgW1n0QwIWPgeHPgvnzQ==');
define('SECURE_AUTH_KEY',  '3TgicCasPyzU0hfajYApIOpPqDAwDW/hVf2toa5zxFzy/9PuWzf+QbQceNrMDlZxmOjkATDGF1QwSVygGRe7nQ==');
define('LOGGED_IN_KEY',    'TbKIYNJB3JxFGzstUBxnl1gRGwzmj9G/YYZMqCTWZkREVxBawOC2FJwA5c2Nd3FkS4ygMFLEyiEmmW3lv8xDnA==');
define('NONCE_KEY',        'AfCHNsV7LS2pT5et3+HhqUcBm5nmzuQwxUBLnM6eTScls6LeO0GbMQ2bHMlFfiKnnQ3P4nzb4MRkWekZCJiy+g==');
define('AUTH_SALT',        'DF9O96/dBlIpSPHIuICFPVkV3SM1Vwx/geEhrUUhMyXQGXRW32ypMSzoeruyjWsQOA0rm1j47tpd+1Zz6V0VQw==');
define('SECURE_AUTH_SALT', '5FasNlt5k2clYGWK7RXMaba+ZyEeKa/UhvBZ+6ylOBjnOqmqYOqDmqECu4ARgX1bk5KTKlJKILH/7SW/pXz4/A==');
define('LOGGED_IN_SALT',   'gKbA+HuSBlHjjpRuGgovJX27x40D/tEH5krb90ltsffctIttqV4XwWSeItd8L9H80x4YwHINuCT9bbKj7/KRCA==');
define('NONCE_SALT',       '+1R6yykZDcxDPyewWAzNq1x/tr4n3S9OCc/i/W3H9el+ALazW2vamONbQupoyxaXr7M7EU8784rx9fGjDZvO7Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
