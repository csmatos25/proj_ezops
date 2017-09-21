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
define('DB_NAME', 'cristiano');

/** MySQL database username */
define('DB_USER', 'cristiano');

/** MySQL database password */
define('DB_PASSWORD', 'cristiano');

/** MySQL hostname */
define('DB_HOST', 'cristiano.c4vhvxcjvs3g.eu-central-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'YHtmbSxu5Cxq7ybp ~1hNK,^]/l3F|>,N,]/D?cdK-yLrr|Q<<[Jfq[?f!iM3[V3');
define('SECURE_AUTH_KEY',  'ZKwJ$LTx<EDW_7ZWi6Xu%c:;I_hTTf/~rt4U#B86Ps3`yFZA=mMxy=thu);:J8x2');
define('LOGGED_IN_KEY',    'ktQ?$q_#ZI&hZ(*St50)fRSM@5D.^ifVa2f([-VTm:2|zsY85%+[Hi@YZY2=H`:D');
define('NONCE_KEY',        'KHG2@t]Bx]kaVOh`HddHuiRd|Z-N}$i?:LkTuZDcA#&R+^v6+*}Js1HG$tC[c}-7');
define('AUTH_SALT',        '4wHnh*CB3Xn-iNX6dl3t^d@E.58f6x[y/M?T^6:(3QrkV?>m kwq{77VtK@e@Wej');
define('SECURE_AUTH_SALT', 'y1gZ(zr@A)@`KLWFd+i1BoTW?:wVRZEc$!GeP=Re)dm_(%GY+77 yW,D/LlR(jeB');
define('LOGGED_IN_SALT',   'xsC3Xq}dDpb0&4K&1S={*gUd7Y25B&W iJ2/0{-Q`4>/U9fLe;y|1uc1F#/~5J:o');
define('NONCE_SALT',       'P*_Pvl?TvR@iV837,=X4L8eH3gKgP(<)9o9U/r$GBHe5o%-/klEa{uI^+e=.Ho=]');

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
