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
define('DB_NAME', 'syumi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'jM4t>>)d@mt`8]iQFnJF^INX=ZrCtnb3.30`~Bp1V67&Xbo6]iq37|7sYB6ut,-~');
define('SECURE_AUTH_KEY',  'J#xT|Su?b@J9v+e5)O(>J+4K2)puJAw[L5X-7`9uw+v6PL->G9u&zqI:k$^TY<I$');
define('LOGGED_IN_KEY',    '3`_&qLvWG[VtD43$XuD?1`K?J2Xh,qhkBn96y@31u:yeM<sCWJD*f<mJ<I-iq+}j');
define('NONCE_KEY',        '.cTe&YZku#wJ1p|?a{fkJZGY3m+X[&ymhaDE6P|0b@g8QI`8K~R=4T.aS}{@d z{');
define('AUTH_SALT',        'MY7r8!cG!@TN3BA2(1}Iav/FVp{P^Z!lm#wz-I6&AS992Ic8s&{SgJYEXY^%%`~=');
define('SECURE_AUTH_SALT', '%ma4Y_(VFJHcJ=(%#W@@;j;F@O$no#Ng[%PubRtPl23vU[yfSlC6uWF*:T9cE?EJ');
define('LOGGED_IN_SALT',   'epqPeYmm,8(?el.HgJ-#?LqxE`AG*?Fj=</KN)E%kiygA~&Cw);`~-bSO-ayhD^D');
define('NONCE_SALT',       'KOOuGcb3nVA;.A%6ft3k_K7AozR$bW!3q4A&^]gZUz[7XBhj,aa2FP$l/|tr[Xvm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'syumi_';

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
