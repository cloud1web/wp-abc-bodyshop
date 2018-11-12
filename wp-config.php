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
define('DB_NAME', 'i3901137_wp3');

/** MySQL database username */
define('DB_USER', 'i3901137_wp3');

/** MySQL database password */
define('DB_PASSWORD', 'O.L0KyOCCKQAeaXg73h20');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'ofEnCXBtd0XzXyfQ4FkMJOG5mTuFF5z0im0BT8vZva1oll4tAS97saSqBO4A1GdA');
define('SECURE_AUTH_KEY',  'qW1lAejd6j5EbO2FGjKC4YPUvbtjJo54y1IBrk9a45MZk9MWcVbM1ydHiLqR15JL');
define('LOGGED_IN_KEY',    '5GOljeiLZwzAU4Ya2UU0PQq4EI0CJdK4AcO5qfXzesMLBnZ6fZrVR0sL1rrPWA9H');
define('NONCE_KEY',        '854v5YNY7HZOPqp7t2KN7a1Zqeop5kr41GIE6Osrcxe7zHSa6ijExkF3WiOEY9sQ');
define('AUTH_SALT',        'SXC8ANzXScdlbxn7JV3POGvvnFyPn7afPhO6b4d81mpWKSIcSL7lkYYO3O1ILaSO');
define('SECURE_AUTH_SALT', 'XNscjERMpNYOt0FOK47UcS05vbPo0j7kV0Ah84SvyDs6sbL2oxgNlP5xmDqK1nfV');
define('LOGGED_IN_SALT',   'ShXLNUdO3jPKNWhqusDQIA7LNS5NdM1oE9mXaCyPYrWwY1BRrsFAw2fn6FCg5E9S');
define('NONCE_SALT',       'R0v9uqXb2y1fFEYakyaXTg2HCvAe1GzD8LcbBrNuC24SCM1TxtR4ju8fnj6d3BJQ');

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
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
