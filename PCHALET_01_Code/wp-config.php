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
define('DB_NAME', 'chaletd284');

/** MySQL database username */
define('DB_USER', 'chaletd284');

/** MySQL database password */
define('DB_PASSWORD', 'ebh4U3RXnv5p');

/** MySQL hostname */
define('DB_HOST', 'chaletd284.mysql.db:3306');

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
define('AUTH_KEY',         'pwtk3KK3X5jXbhOJ6SPGu2YCnjCT9sK20yfRbiXg1qCast7BoAd6OWpEhbl6');
define('SECURE_AUTH_KEY',  'YZ9D1vEJ9MKXC57GnBQ5TsiR85AOzlA3XjOzmV7ACQ6wSJ7UazOhzOOSwiRI');
define('LOGGED_IN_KEY',    'lLEFMGZtOOCalhuqTbl6fb+iYT9Thdnba+Mad4WHLm9B8vR1EnQZVDc5/eXu');
define('NONCE_KEY',        'EVj4XiCaHHSJSD/Ni1UCqAyhpDkYYI6vLiTai9f62HKx1zilePDv02Gz2BMa');
define('AUTH_SALT',        'aFexdcCwO7C2O1ylZmQ8cAMrKtJtVswNYJQR7TrhVlzMEwFzPbGZeC919/Oa');
define('SECURE_AUTH_SALT', 'Pnrr+ThNB0G6nIvdqsoTbQdkufv+R0Cz20Qa/78NhNp8NfgNYOiUDGWCMUIJ');
define('LOGGED_IN_SALT',   'dctP5LhP0vG/2QHBXDcq3E1faZYHgNSxdSrbuu0t5+GWqt6fWc0WkmHPDS8w');
define('NONCE_SALT',       'n/m8dB0gxcfAK6ia63RHZZOw2XYXci11VHLWS7yOX6Q47vGGbI89Q7FkAaZg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mod746_';

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

/* Fixes "Add media button not working", see http://www.carnfieldwebdesign.co.uk/blog/wordpress-fix-add-media-button-not-working/ */
define('CONCATENATE_SCRIPTS', false );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
