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
define('AUTH_KEY',         '5QF7gOrOuAyWKV+DUZRt+13Vp/ZknrQ2yARPyYOduMnbLey0gqIZGGDNHrtDKnDAYkM+MQFEv18ARXWy6fEkXQ==');
define('SECURE_AUTH_KEY',  'Fv/alk0EiZVdQZTxuAypNSjEjgrZ0u1hVgm0xNxjD9Kmlf5EqJslqbth+9mruNogmq3vykOTOpzSCBkWWE+MUg==');
define('LOGGED_IN_KEY',    'iYfFwlvowNYQi0uc0bPzh64RBJLnD2oaSxgch0mfWyZKhyUrRlFZk92v8JIkVV7+pHNQPo9PgztLWNndTtSKHQ==');
define('NONCE_KEY',        '7b03OUSJ0mKBRgN0BHgu2HXHSQ9q+Hq7LWRRHtfRWzyqFyIuSe2MPuU4ty/4QbOzE9hW/J30w0ztAbTAj6MXIQ==');
define('AUTH_SALT',        'TndqAeY74lnVZszaZXWXKrBJn9+LU75LfHfPDupDlDWpafhHFDR8v/72ra2TdbB0ND5Ltcppcdh5wDDE4PzUhw==');
define('SECURE_AUTH_SALT', 'ZlXX7sgcsD8J1oap3cc2afOQQ7EnVAnReLNR9o94AxbV9s/LjB2OQbKt+xEvhdwYbtZNKiHCCxOcT5Kiol8ASA==');
define('LOGGED_IN_SALT',   '8B2o/gP7UuvWj35TP2MLoAdBr9DNCXlfCuaIkDudhsWWuW0cpCVVpkWwRGig/y0DNe03fUeJLUaHTTvkC3QsZA==');
define('NONCE_SALT',       '4cd0oDU5AalMxaIPrvOb69FLJLGx2UAliIVa2iabgkjlROV0yK+CKIpcvktayiYtD+Tw5bEz9FwQiZaN1HxkTg==');

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
