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
define('DB_NAME', 'moratto44');

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
define('AUTH_KEY',         'lU}&w~*S)(y]nZPPY6-7nn+(Hq=,;m|h=q47.G2iHeCZhdlr4/4e!yVyyY}Av?E1');
define('SECURE_AUTH_KEY',  '=}YVO .3(&,}y*),I(q=Hi`T>977;3P8IbE#B!?/k*rDHc(,MMY@f_2J>Hz.J0YJ');
define('LOGGED_IN_KEY',    's?X>>j6Jz;_wk;5yayBdVD8INIV77PNsW9`cJ_7app-=&^N MbxeD~j!9f`{{(Dj');
define('NONCE_KEY',        'Tkm+?hOO0/6*>EO2G+k6*J1%dBnjP:2Ft!jHex{#G?J=I.k8N2NgB~A)Ye>C)^oo');
define('AUTH_SALT',        '9;e:sg*6o2SvSd:oLy UbiZn`RpS1TlS^~P>t.B?MW$-}PFI*R(nve~cZ%D}y=qq');
define('SECURE_AUTH_SALT', 'Hn.[qZlYUm$1{/-cB^N7uM5]wYa2mXmVPNTJ:D/w~p`]NY3-m>sJ8=<vO!>5~Wzo');
define('LOGGED_IN_SALT',   ' K,mFaO`>Vt<k831!OqOMmTGe}x^SL.QYA=aGN6F,)V;QegK&5mZdsUAw=~S`K|Q');
define('NONCE_SALT',       '_#bJ:%0Lw)c/ne*^ K4ZdIp7@p3$O?hh#XzCd!v(Kp)g};c^yKs[IQASdeZuL(;Q');

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
