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
define('DB_NAME', 'mypage');

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
define('AUTH_KEY',         '+^;Fz|,DjxA{c%*m=GArYI+`!dYbq9G1)xY}tg*/?h[NT@#hF>InLkpK/d]q,Wy]');
define('SECURE_AUTH_KEY',  'x6E@LMDF0xr?<_[f`,jgjo/s7ZSqyGFrF`PuWWXpO()ChDbDZUTnQlCZr4faz -n');
define('LOGGED_IN_KEY',    ';p~glUqR#i4#V#%l8b#3h4Ob9b []>@A/qXIfLY<2+a2618_Hv)|95WkxF`+c@p}');
define('NONCE_KEY',        'm:SFz o1,v1Ka#eku*S8h9{VnU$$Uh1mT%SsvxtCzklp .EIaSg/3|C%:b}r+1G;');
define('AUTH_SALT',        '2@)2k>$kD6=KtT>WUKy9#j89fvN?cL+)OACk 3SB kXY5CAN^;g53)=v.NJ<.zIv');
define('SECURE_AUTH_SALT', 'wPrA*B5b(6o6GXkE1p#e(5o)HCyZ8:[7F,#zti3iDOQt)%]Vl&}Zt)u^5cW!7!wP');
define('LOGGED_IN_SALT',   '!zGcBO$@;&ZW~^JZ3Oj~UR#k=)SHtG3l<EB{IX]xpS%dFJ(ZyBtDr#`2aI,>YPY@');
define('NONCE_SALT',       '1Z,:N3aqZ3sn,k?W*M_yx0[mc=xkz Vy+ZfSM]B>1bKE]:KR%Qix9R jP)N.cM:p');

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
