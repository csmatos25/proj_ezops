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
define('DB_NAME', 'crisprojezops');

/** MySQL database username */
define('DB_USER', 'crisezops');

/** MySQL database password */
define('DB_PASSWORD', 'crisezops');

/** MySQL hostname */
define('DB_HOST', 'crisprojezops.c4vhvxcjvs3g.eu-central-1.rds.amazonaws.com');

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
define('AUTH_KEY',         ']e{s$6SV+6d|+z>Awe$!_4<4@G@0p5h6qQ?KG,P(6~kh(sk44c}Xdb=5V%KO}bk^');
define('SECURE_AUTH_KEY',  'Zq9w*CZd4+uc#E227hqXFa*pj Y}H?K<HVvL:U{yvi^s0OCBBm7P]jLCN74< I]m');
define('LOGGED_IN_KEY',    'T-ni?~{VaW$1-^wGCqBTS{s~mR+(/jn=l_$2P8B[1k9[<<cw-^ZMzs,W~ n8o){k');
define('NONCE_KEY',        '=yNDZrGr@<PPl|S0>e eCr<B%jGeghs~;oD9bU|eHe(%)3C_.Y90|Bf2~,*k9s=}');
define('AUTH_SALT',        'Dco1QaOv$`+-rT{FJx@{IC?EpQmE!9mrHr]@@U$[OC.mrZuDSGSfA|.Q4N)/n#wX');
define('SECURE_AUTH_SALT', '[]S-uG0cr#+~S9C CB*<?o%P.:r.M.}WVdPAc(&V=M?=0$@{wybV-? M1)5QI3*n');
define('LOGGED_IN_SALT',   'skJ_f),-?OEWn-o7Yj]n[$5^qzJletRA:xt{dO$V)hX,o~A<)u4%+Lqo#R(]7b|H');
define('NONCE_SALT',       '7~LXUw@Vkc:%E@VeN*?O@Un/EVE=h%BT,%>&NB0X0.?^g8^1Cfk?3_-9M7>+O>^H');

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