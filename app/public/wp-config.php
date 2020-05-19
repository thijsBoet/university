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
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'QTT0PjXhl8+HjIU/YjSURvG1S3W2T0GP3wSdxi6ZhNRSYO9CbeTT8HEzTN5iV2dXM5vsh0sUu0+i/hDFhcillg==');
define('SECURE_AUTH_KEY',  'qxHxxRP18NIlVyXB2ostM7gr9pSUO/XXZeaeAq0mRNu33Td6kotON3LfSK5BqqgWCEQKpct5NhEfxO7nraqqaA==');
define('LOGGED_IN_KEY',    'vX0aFtN2RPSu2AbBHdUE+VcxeZ/JLYBdxMPTEqz6ZsLCke2uYHttTZ8lrl21IsawQFoIBW8JelntR6l7vRCoHQ==');
define('NONCE_KEY',        'EcpkTcXptl+8LpeLPVcM71Xw918Yr+GR3PnkpuQ1/tm2ueiRc3zfoOWhTMsjAtCVHtSS5UpI9NpMQ6BYx65VMQ==');
define('AUTH_SALT',        'Cn9V25C0RjiGa5GAfChib/2mv/W1HykleP/3g6n/t08QgwLKTofLKsHYdbm2bZGfcAxUSwNRtevdrnir03TspA==');
define('SECURE_AUTH_SALT', 'fvuKhXDzZML3R8R5x1aujIpbcMhBAazm7/UZt+i6BfBctts/eznWUuz1mIaKyEqbzlbg1niwwvTnqBPkBoDsgA==');
define('LOGGED_IN_SALT',   'TMozjZf53DKJ/v2sbLKiCkuaWnVb65twPzP8Thuakuj8gK6H8WiVZC19Ho2AXk8/v/CW5NfbMpLI6vX6hZiGqw==');
define('NONCE_SALT',       'b9Xtvg9gcQdHaAQiHirxTgDpWyxeFpSxtdxgPUFdjrq41YRh0bse3SHSXW3gdUxK+c0uPyrLV6MTTa/4iRFzTQ==');

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
