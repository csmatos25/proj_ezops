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
define('DB_NAME', 'projezops');

/** MySQL database username */
define('DB_USER', 'projezops');

/** MySQL database password */
define('DB_PASSWORD', 'projezops');

/** MySQL hostname */
define('DB_HOST', 'projezops.c4vhvxcjvs3g.eu-central-1.rds.amazonaws.com');

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
define('AUTH_KEY',         '<aaO4#&,:7bmA e`A{}]!hSc)J/;nEDQb42Ir0xkA=sdGwaA$?1^waty~;&nxSWb');
define('SECURE_AUTH_KEY',  'T8l#voKV`5Q6_<LCG[hQBDUwhMcZ@Wh+ACrKO%%MQa5bj.Ev1@0(g[g-. [h/51Z');
define('LOGGED_IN_KEY',    'dJ!6y(oa^B$,Px%l7^Om}68vm:%Ry!.-cc^~v}9C-f$:@6PzljRAso<{|G]_8QZy');
define('NONCE_KEY',        'IKNJy7!|s( DmNd6_aKg X(+t<6czKY~/T8N>=l>e(a2fYjp`GkFvx ]&*ERAIyX');
define('AUTH_SALT',        'A%#XCB_,gruKrq-Esi=z=%9?}EH]0IdY9DU5_*lo|H8M?>VtWfvl=0_hB>`BfhTt');
define('SECURE_AUTH_SALT', '/M(KnBRDrY2m.h)!Fj]s;+>!eD25}C!2t$#z>`-F0,!7b&KR68[@yK_i4_.;v)D$');
define('LOGGED_IN_SALT',   'ozppM6!tQfxt^fy}p48e]79^w?Y~ZZh^--YZB0Bc/!c>~`aj{s!mqoUx(T9K-y;{');
define('NONCE_SALT',       '*{y6d?F]~&3T`GuFKvtg+;C4NZ%kO(Z;{_hSgI)PG*JcLa(p:E0)b.[ut%xk^#|e');

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
