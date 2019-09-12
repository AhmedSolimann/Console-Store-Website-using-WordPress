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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'C:\wamp64\www\FatherOfGaming\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'fatherofgaming');

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
define('AUTH_KEY',         '<k)yL`p+{hdVAYK|.,@cgWuIgSc561=6*!}xWO,!.:Vt7a4wmr;<Yi!!Y-Ud4~ M');
define('SECURE_AUTH_KEY',  'ccX@JK8Qew55wtCklpg:Mj;orF|AZ$L&c8.POlj[C?J}R5wXW]cgqr9f=9S[o0$2');
define('LOGGED_IN_KEY',    'bxYC6H+@i(<:!~w%rbBR|Hn2{v|N4}EO(82w+.7dube<t2J(,7-}H {:nmWw(4L5');
define('NONCE_KEY',        '^%Fu]*=OKfyMwT=q@ qn^,.2QMh6ZMX5#MyvZkwj]:Mc#NMbgvKWxlI][G~W~zME');
define('AUTH_SALT',        'TxlrtM[`xiU7$i0G=2qF<s9%eWf,0SyH-M6 TEhym+][hX/[{%FkFl)qB}IltDRs');
define('SECURE_AUTH_SALT', 'm|*2GFz$(/yNY[$cLo;xeLUo<vlpqGL_1t%0>LYOLrCPd]4<{!b`^ 93!9A(~z^o');
define('LOGGED_IN_SALT',   '/-y?$ZyAH;CotR*bMr^(QyA6w)@*c%y}~i$s7lwqLIs%9>#YYsL-J,s%-sKAPr]/');
define('NONCE_SALT',       'FWxFaC6H|OgT[vvkFXDG1PKJs@kkDW7{)b2-GUyeoK?}KJz~_m~fXF>Lj1XyieDd');

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
