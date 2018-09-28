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
define('DB_NAME', 'ewincasta_aps1');

/** MySQL database username */
define('DB_USER', 'ewincasta_aps1');

/** MySQL database password */
define('DB_PASSWORD', 'PatitoFe0');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'hdFB0K23KiPUq@D7bRYqI0Pm2X8yyd#2q3v*5aMsOBbo#rfDxJBCr1hC7Sswt7Rv');
define('SECURE_AUTH_KEY',  'jh!b9lthLnSN9FW^P*oulqpytTO7HuPprKEhKmZ*wBGNB5c(!ar#c0*fVJt@NZZl');
define('LOGGED_IN_KEY',    '4Wy8R6UghpX(^#qJn&R^2CSX0MtS69f8jX7UoB1956fEIGfTF458NvGfqmxRXI53');
define('NONCE_KEY',        'd&Ji7(6B#Wf21eeljJt%(fvR7feJEG&xZ0NRYV%9hCac5!F^y@fj&29fFUHrm8xY');
define('AUTH_SALT',        'X%pF%e7Ws)QQhz*D7XFvHhqjyzz4FE6lP6eFc8#jPMcLH*fSIBDcQVJeEZpNyz7l');
define('SECURE_AUTH_SALT', 'OmO9*GvV1h6xSrEV5PMjYUYWDH!SJB3M7LMT8(@V48PisYav9ArGl8hYPfad0Spx');
define('LOGGED_IN_SALT',   'cRk0)jNDHaEAyBDAvit73QdTTunc#vYnmyUl)I41@!(7!EmYqFS)fddEhpv0Q5ze');
define('NONCE_SALT',       '#HZK#nhGJIYvLT0Bbbl5GivI05DO!L&7V1)W)(GujNhK0rhvkBt5PUSM3q2Inv7^');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
