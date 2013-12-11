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
define('DB_NAME', 'tkc_wordpress');

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
define('AUTH_KEY',         'CcE<7n`gX|&?.mz0(>%RfOxPt|+U&^<#Xa~+D0*;E#AC#Sh$V5D[`0bjwWGq- in');
define('SECURE_AUTH_KEY',  '@f%e,PiC=NVdfbb+=p9q91kS1`ngF-6Z`)ID-(4#~Apf( x)-@%g%L>WGT=%VC4C');
define('LOGGED_IN_KEY',    'hI7W+i8N?,huBpec*sRplr{0rF{Q;3{ghQX/L.ob<h-~~rY9SnS[M,.^iQ-noYf+');
define('NONCE_KEY',        '7-4SXU=s,5ltdV%1WC+2n5?2:IbNZn13>pk{n.vMmj How`x!JE(,d49k[!zra}P');
define('AUTH_SALT',        '?@E/zcJ%#jL,oCAJ%V|7tMkmM]>1ySqpJ_y4d4~]<U:Am]/nL[lY,5e{@Zr|TnRq');
define('SECURE_AUTH_SALT', 'a_u= czt_;DX|/fwp7M?aS<7nBuk`V*4hl:18$Z5t(3j*gsT$)#||W-&S2A=g7yj');
define('LOGGED_IN_SALT',   '8z>).Bo|Xc2q~`^MFYa.r{|PvS2r(P>d7%DM7C+2gGT=i[|Z.cr$FZ1B|<{{%J8/');
define('NONCE_SALT',       '|gPl2S=XRReU?Ex+,v-1s9nGl?x{!jiE,x=o>=u?v|hCj=5g}EkE$]^w .4zU&I]');

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
