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
define('DB_NAME', 'gregneme_work789');//work

/** MySQL database username */
define('DB_USER', 'gregneme_work789');//root

/** MySQL database password */
define('DB_PASSWORD', 'jPum41jSu8');//root

/** MySQL hostname */
define('DB_HOST', 'http://gregnemes.com/work-shop');

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

define('AUTH_KEY',         '{7BSiX1~2:}C4_*a_rF+Ia+F6MQhGGCrl>/3+#=)z~*-OSb/Gj.T[P`UWy9w590Z');
define('SECURE_AUTH_KEY',  'HA76LI{D20HE:9n=wuV,hQ#P{(ahr?}EK1zid|y+nYp4({%0qB.TO A;qxE!RB?x');
define('LOGGED_IN_KEY',    'IuEe%sY<9C2T)$:]5;^/;4wTMBjCA<h$/G)VJ)~Q_]d]|++L-tkm<|>{WU1o3.sU');
define('NONCE_KEY',        'Bc_g<w5eN.8]8,^cuAA(SN|@#0%%<9L,LmG*5D,MP-1G92lOL;VV6Kh,i_h!y/k-');
define('AUTH_SALT',        'f`U+0G6H@oVNaxqbdH3nd!2y2h*dw|rkPuu9*A|-Sz9|LB|CI3/s$l=Q!#[v{)~n');
define('SECURE_AUTH_SALT', 'gI?(He7`[%-mM9 [OJ67+GNw|%S~s]hV [^a?Z3i`XNOP=`-g~@nM,j3r9`MJ;uK');
define('LOGGED_IN_SALT',   '`f9*03:?Ur&FBSs u. .-A{>Z~{6q|zS+0$h$P4,=mrB2nd9Y*bn=Cg}#pM-O/hA');
define('NONCE_SALT',       '1LYZ_^.oYr9P.Nl2B!sw%[`vUr,I9$D#O=E:I8MN%2/dCB&y9|1vjA}5;pS.p&Mc');
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
