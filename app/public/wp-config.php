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
define('AUTH_KEY',         'GMi92THIFDOS71UgHzsnag46rNm/FQxRAb4m1k0ZA+W127II85qLJKcDfiItHTy31TOfRU/89c9SYowIl8CM6Q==');
define('SECURE_AUTH_KEY',  '8q1XYc7/gnMtw9Ki50IhLrhLwGYavrtBGtH/rv9/i/j2gnSfGCthzBoELCDoMAvn0fZagBRvkg+CCJR5em33/A==');
define('LOGGED_IN_KEY',    'GmzVF0j5vx4LvsuqZZtl5+T51yWWLRY7a4zMVKvqoYIb5fpi3aVeNR5NAZf6yhN8wRsho2asJXPf9tMrxnWTHQ==');
define('NONCE_KEY',        'BJY5FG70/1eBzMFjoRNTMfjQ0XlPH2zoZcJGZjvzl4uimrx1WOkXR93dcHMe0WpW1sFx1GabFWPnyA8Ksc1bUg==');
define('AUTH_SALT',        'Pd7cpybkShTF1v5OsNNazsCNaEQLBgTMKQgQoZKpbex9yTCgl0bZrOsf+Mwv8g43p3wVApY8Xocg2XyUmRBkQA==');
define('SECURE_AUTH_SALT', 'tjv91G0SUOOjtcDIE8D8QncyyyqrD6Jg5a1LHKySo3EXAooyLBrrAY5lObxYcqY82n/cBqadgwPdpEMBEW2xnA==');
define('LOGGED_IN_SALT',   'bBQw9d/AGJuitMbiyK2V0H2kIAfafj3+hVd+NhcCJVfYefeIw3lVu7CWfBCeIIWpGeY7ToU0lZYs1hVYSS51WQ==');
define('NONCE_SALT',       'nIUGRAMCB5oLPqjUGmq4ON4jB0hixCNfjLRX03qbB+Cndwjbm7Hr52Geq9diNRn5rBO0qWNp/dZUs30TeLg3Ew==');

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
