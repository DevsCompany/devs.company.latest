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
define('DB_NAME', 'devscrew_company');

/** MySQL database username */
define('DB_USER', 'devscrew_company');

/** MySQL database password */
define('DB_PASSWORD', 'safmq76z');

/** MySQL hostname */
define('DB_HOST', 'devscrew.mysql.ukraine.com.ua:');

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
define('AUTH_KEY',         'cDKEXQ*s^ZeMe#eK3kpLyiW!K0l^yu@wU%NP(gCVrXn2rA6vQxx9ZEr1Z^a(%gbC');
define('SECURE_AUTH_KEY',  'Zv27)f*Ys@ygicw1DmAKX78vZpbX82vNhXADONXg*4Y&mOqVci&AcS49yLHmvfgd');
define('LOGGED_IN_KEY',    'B0gfJIMHnNrh%vg!JSZg##o#z5J4(UF6KW4Ggc&lj6CPvZRf8rke*c(lh)ZRjCR2');
define('NONCE_KEY',        'HDieZPaonbN!7rRH*%T#vm8gntWT!C@VwVz@R&u95pMjOOt6zZGEaYSEMlV%(xlt');
define('AUTH_SALT',        '5L3Mz&3UxdLbHwNtuh)pG*9cxz2r0AY13pnM(tEQ9SQ*i&Val@!y24TdOY6Wa4pB');
define('SECURE_AUTH_SALT', 'zdsDx0En7dLm(1O1RotWjh#^ZcLK@Q@6l%02bSZ4KeSs2z6x0JZ&826Qc3HHXrL9');
define('LOGGED_IN_SALT',   'Nm&62kOw#qP^q)LQOkSE@Pj#kOfQL3S*GCZuJ7psQxl35dL0IR*JZdIwC4GFalLR');
define('NONCE_SALT',       '!WKGo%b6DpSK*PrTm^fGd*AY*%aWTDM8OmdD@ARt10phvyNF0&ZKHA@cMgIJ8V4X');
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
define ('WPLANG', 'ru_RU');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );
?>
