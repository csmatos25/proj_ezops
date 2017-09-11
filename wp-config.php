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
define('DB_NAME', 'crisezops');

/** MySQL database username */
define('DB_USER', 'crisezops');

/** MySQL database password */
define('DB_PASSWORD', 'crisezops');

/** MySQL hostname */
define('DB_HOST', 'crisezops.c4vhvxcjvs3g.eu-central-1.rds.amazonaws.com');

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
define('AUTH_KEY',         '/1]NySd~mFgZ_1Urzi2]Kv`AhEX|ab2#;)p5vxDDf1Ug:mV0V}Ii=(gG~!PwK/^7');
define('SECURE_AUTH_KEY',  '{/N:OIQ*EWyGnN}Jv`8L|!g=w^65FVyETfwUh[1n64|B(_[qVPT{/W.it`RW=@E~');
define('LOGGED_IN_KEY',    '`BwXr}I4lP@OQZ^]AYt/-}u.x~7yi1r]-SODcqO-vT>D]/%lZ*9s1JaUv)pC3m$>');
define('NONCE_KEY',        '^tsVQ|(ye72$g|mhcx;0TOD5I|tdj{t~-AM6%q4&lgIf#=re:=Di7sAV=@_o#P_,');
define('AUTH_SALT',        'BtxVmynK32RT_/pw;q#3=kwA#xpDRN%NgIMR e!OaFHB98;+G<ki!?5y_^%gmR>r');
define('SECURE_AUTH_SALT', 'Ycw=!GoV&c5FY){L~b>DkxN[{sQWYj*G]JYz?^y,h6*V4sK0N1GCgc-tzn=8x;Sw');
define('LOGGED_IN_SALT',   'QW[S}]jN;ttW5}c[`?u=F+@BC$w{u+pdNXVj/NgD;r2v_w:3e1@@qw{:b[jkFr&6');
define('NONCE_SALT',       'hOHK:1Pf5ZR1QcV*D2^y.?ye*,9~PLm};up?#VX8uB(^hxKr%NpjGqf-xCQ?U/Aa');

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
