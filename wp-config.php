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
define('DB_NAME', 'tdc_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tnGsWqGsN4>g1j,:32_<!vu/y]a$aA$=a8>g4&5UEa8ES.kT[S*I%NlP v  |5TZ');
define('SECURE_AUTH_KEY',  'AxH&n}OwI:<Ad*mK;kWEyHg@ZF1q&l<Za}]Gp91zES0b]9l5q2,0p6j]zEqRl?%0');
define('LOGGED_IN_KEY',    '-J}3v,keCgG4PXxi34Uzqo`1~<2M(SPMowtdc#D;d2Ocuq%)GI-!_Xv6pLV#9_NE');
define('NONCE_KEY',        'x.#n$pT.]8.BX!d&XO((,B_)5s.9Nr[yW$pTK[vE#DfX/YvNP:[0Zx7Wg3kA=L00');
define('AUTH_SALT',        '6WyM.Ls8yE+v^1K$dt?(RQ+vvE)c[*AS.?eK4Xv)DUQjF2/|zXfOJhlT)P};1!nR');
define('SECURE_AUTH_SALT', 'tVoH9<B*iVol|Q`p~;YR<[|37@/<BxI-w,mf[afcHTrP|$]k]P!)&wM@0?_^MS7z');
define('LOGGED_IN_SALT',   'UX7ck0I#k.JZ|a,%@oB>9O|?AiH cji,m2?{vtGO:T}d%g+R4f(AvghM,juo7PQ ');
define('NONCE_SALT',       ']Nb;mTz1/X &v~jHfX74C3e5[Y9lH4];[/Xh7eSc=Mt/7ZH cXCgT/XyvB+u[wM%');

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
