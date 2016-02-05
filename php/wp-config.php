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
// generated by https://api.wordpress.org/secret-key/1.1/salt/
define('DB_NAME', getenv('MYSQL_DATABASE'));

/** MySQL database username */
define('DB_USER', getenv('MYSQL_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('MYSQL_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('MYSQL_HOST'));

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
define('AUTH_KEY',         'N|pvR@k-n-;H}nzgon;JO9Z.QnwD~pj4v+%-RJy#GcVj==D@GO?^s-:Ogyg!8GVN');
define('SECURE_AUTH_KEY',  'CbtA+IDMDVU[4+ES-|uAz<8NcA/`XUQg:63dP^#(j3uJeP-gFVc|M,~f*,-Dd%Fu');
define('LOGGED_IN_KEY',    'e<mQV4wYv5$$+SR*4Fq+lD?N0d|aqA~f:,Ey8x9[AArG+<9OJ,`i$6LK|Z?u-#Gq');
define('NONCE_KEY',        '+tjNHCEcRqPQ?W)FaMQNr!h-Q)Q^4>lE|PF-9 mXl;tsFPi??nv$F#_|nJzUL+&(');
define('AUTH_SALT',        'QdVQ8yBOunfG+dXw/bm-.T/G{Io{)IL}> %{%d8OM9~+n)>_JI6H-_;6$Kynu-bi');
define('SECURE_AUTH_SALT', 'bhSMcF,=>P:NPN{JzP/V3-v#lE*qF:deD?mAk.<KikV1,b@:=gzj2X-&22|;MV;P');
define('LOGGED_IN_SALT',   '`@W|mvI=__$+|nu)*SR4@[}]+GYfW G@2fWsz:UkRDu2/:k/`Z>|R+bh7J,+uOmg');
define('NONCE_SALT',       'Qxk.0P9UTY($m@^+f5Y?0-h21cF?j1kwBL=vL5H*iMAKBiPDu.`}tG9<-/|R(CfI');

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