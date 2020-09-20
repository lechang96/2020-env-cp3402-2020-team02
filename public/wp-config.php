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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'doctorsconnect' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '$e,XXt)i23m&/)P_f&:)hdSkIoE7:E7!,Ou/T)7:r8%g}-7?{wpw}mYQG.L*z?5i' );
define( 'SECURE_AUTH_KEY',  'T_#0MB*Hpo8L 32ofZcQhM ZJdw[3!rzc*rCv9?ah/SANi-OVodldvm0T,1%.5}!' );
define( 'LOGGED_IN_KEY',    'a?*gX9J2!e_Z^%T*{z3P:H572C6x>X%U8}a@-<;bYsKkCn.)5Yq}h+&1?Dn!|U?S' );
define( 'NONCE_KEY',        'LKL^NptQjT{mF;(6GAIJa4F1+vUbHiRyP9IO}45}MUKjCKs0sf2#u2S4.`qCk|{k' );
define( 'AUTH_SALT',        '~95BEAyW(>1B&qYrie/l8NyS)ST:F.I-6hk=jg&nR9#ZOGH</]O0K5N^|*!p~U1G' );
define( 'SECURE_AUTH_SALT', 'Z>&yrJ/?:_0(wjgS*J7[`( ISb vf:Z2%Fi){aZ6_EK^B{5EBHo:@4~7RAqIHxlV' );
define( 'LOGGED_IN_SALT',   ';[_:3Sjk#CtVfgfahwYsVK!b$G9G94#f-81E5$rC%6h#S5>T7)c:.EF)I+pwn*SL' );
define( 'NONCE_SALT',       '2w*&SeX oq-f&2ECj*m@)G |83ld91%ls:G2+s_X%1bq_[9I94l&n{_C^4?7E_Nb' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rqc_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
