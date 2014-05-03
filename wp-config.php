<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'digest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'J74IOmS?JymNGuoO5V|4_.y0=:Z.7Dxc$8-)+NHUe&Bm)wH<U-n!R6#lZS`3t1Gc');
define('SECURE_AUTH_KEY',  '9}vD~L+bm,IZ8vLmc5oGj67C=tnG(^|}W[ ;6~J#noU5g8+Wlrc17#0Jm?Tb,F<3');
define('LOGGED_IN_KEY',    'a{6G{k-)+y1K`Q4 9Nf/Ed)7x3n[Zb9xqa++WK,xBXU|a-CdH$WO/l~akB(?}qf&');
define('NONCE_KEY',        ')O~6z{4ONKnT=jw 1ey`^xrA+WEhP+.gJ@1RLy]}q$-[=pZFS nd.[t7BUd-&Z[~');
define('AUTH_SALT',        'm`zj[jcyY1]^`CRt&|0@:H&+3%a]QX||Z4-+FX:$mbx-Iw{:<b?U4`!Gi]Q-@|5]');
define('SECURE_AUTH_SALT', '_b>SV|>d#?ct7xb.o./ftJg|no/v=EO5r&`_M:W/:] ye%*bnsEa%e9|T-+v)FB3');
define('LOGGED_IN_SALT',   'lo4+rnKLcd;{4s+r-|=EHEC/k,^||t[F]kI!+ HJM5wzNj0ol[SZv_icF|0_8eFy');
define('NONCE_SALT',       'KDb`-U~[Spo{f2n7#Bw>z` d1i-S|#m;D3T-vS`sQ~zCiwh${<+8=BFmm3B6[hnV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
