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
define('DB_NAME', 'josesite');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY', '4M/Qnl;o/f03=I$j]:W>HMV).X^EXO%p!SWyh`q_P+?YGS%.)(3|2b 0|]wJP^os');
define('SECURE_AUTH_KEY', ';q_8_*kNI,lXSVhx<<4ANh0&NH`y:(/p3}/yydNcgMq!N&Um?3E&3#)=+:/d5-MH');
define('LOGGED_IN_KEY',    '<TCd9+yF_k}m_.vDQo*.sj|q@0O@<Q#G6;b`I}]@9KnH/KrCHz$?&*xiCn!b`j.!');
define('NONCE_KEY','w.w1kHioa|_)GvxGT(QT<,Y5mw_HuKh.K$T^RGJiRa+UA+n09[e0:B vP0d_9J_o');
define('AUTH_SALT', '7@}$HiE#D~i(F/O-+C?<tMpb%~POTbx9Gq#X5-9o!{rZ/Vx~i(bg&`Kk=viXRnf3');
define('SECURE_AUTH_SALT', 'mh(Xkvnc_Reh|EQT|8sp#T|}-um3U,mmoW5i9&tKw+|n-ec#!nQ-5Cpe?X!kw}`z');
define('LOGGED_IN_SALT',   'kS-++lm+$Ya<l!twGSAB3%TV*<Lm(;viM){Djhu@Lyk~.G!v<5ufoW|:x FhA$*c');
define('NONCE_SALT',       's_!qw &_BiL_I%n-O1nXp+>*4i;5n<rR|cT$?y5#zHSf bw_f`BF*&`nwE42#RF}');

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
