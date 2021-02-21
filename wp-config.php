<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ct_woop_9tsop');

/** MySQL database username */
define('DB_USER', 'ct_woop_9tsop');

/** MySQL database password */
define('DB_PASSWORD', 'I6xhXoUd)$s4&qG(');

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
define('AUTH_KEY',         'VlA5mgcUg^zN1J1j!SZjwtak3c&^OVPXg)QMInMvI!b(LpWcLcKSJ5RvAwm7be)w');
define('SECURE_AUTH_KEY',  'nfLK*PFIa04vbsLNZ7Kf!Kobo4b(nmrkl1cFeqSNn59h4gN1Dlx%6W!*#vFCvClc');
define('LOGGED_IN_KEY',    '6(%824VK(#hQIZ&tapXmHbLX(8ng2NMhTO#^v7IXgzTO#8r3Tb!jW9#jf00i3dyb');
define('NONCE_KEY',        '#0!4!3eGiHHNxc9414k)W3X(L3tdBY5v!Bduc0JBm7rztfxixJQ9!V8E*Y72KUzt');
define('AUTH_SALT',        'Wj35@YU0#vWsMvW(xk&5y^cvm%MMw#tdHvUo@c(LlZSnoYrXvAP9pIFJoF4(*m(3');
define('SECURE_AUTH_SALT', 'Y2FT8WaAhIE9ibqBm&@6nyWc*DK@6oJgVTO0cSA45AhYV@D0TqeLlpy93d*j#NH9');
define('LOGGED_IN_SALT',   'nbKhI)*0dEglUKKTAboCSa7ttQXJnbjjXBrWMJUfLfeA(Ck3rJ)iNZ!fE6%2VnI*');
define('NONCE_SALT',       'Mg5W5l1SEsm&8rq!gF8P#QDJ9Pg9@xQjGo3JqQKWo59AHX6b%EziKm%J(MgC5DhD');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

define('WP_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );
?>
