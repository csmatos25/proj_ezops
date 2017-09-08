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
define('DB_HOST', 'crisprojezops.cgkbfrv5juif.us-east-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'j%oz1zOrM1#W6&}Hh3kLNX&8Gn$qMO}jo f [RXAaGnSO)O[yk}/E&Z!Vo#rdRgo');
define('SECURE_AUTH_KEY',  '@<u^zY!w#X:@vH^.8+sV?F&crlqAcRDf.ULBmwn.;=[C2_GPB;g(%@!<VdV-qCdq');
define('LOGGED_IN_KEY',    'UPK7OrXt%oQm=%CJdcQlIaLe-`hD.?2idvdW6v{vIXqP&tp_6H<aA=]:Z6=1T4KW');
define('NONCE_KEY',        ';fr#2hDHJ}TgTS^$FLGQ@e[VE{0Hp!d9160XB2&*)7b#1@-#F1ke|^-0LWC5=7IU');
define('AUTH_SALT',        'sS@/yU)~3[Y@@%^45:}tT%D&21Buz,Z8Izh`i)JDbDC2@>7xzG-|@!Ur@=HRkn#I');
define('SECURE_AUTH_SALT', '4U=~y2e63f@uV}<f|i;C+66<6%D3$N?:Ru}2LdhjM0x3q@W[Acwo8le;W} D|?Ou');
define('LOGGED_IN_SALT',   '7lA0pyx{TSkt}Cf}z*S4Ib(6+P !T~/uGzAcBJ|`Z;>[31wO1ac+AJk)SuB@Ll:y');
define('NONCE_SALT',       '#o|kiE,ORIATj={U/rXJ6&[z{}=:;gJxm__XwFZ`SPq&N49<,CN7[pniCByNu;_e');

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
