<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'humantrafficking');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'P y%Ut#>}g,uMq$E;z&RW)|STpK}9NsF?EB^SfWeM# h-1bZ4k-eVZvY-|0~*11G');
define('SECURE_AUTH_KEY',  'vq.3t$X+0iQhwYkCIv3+]e+bc+DM<]Bk)s~a^Z,|6*1^o<bvYO+h)rVrdW#|6{90');
define('LOGGED_IN_KEY',    'm6mR%T@e+be}-IL}<Q9e6!(6<_4{rF-NH*i~)FjjZC[}[aEX]J?d+LkYG#txAO-A');
define('NONCE_KEY',        'xLL#hc]Vw<^1;dFADtaZ#q2+b+B]+ynNII hxIOOx5kIm6x?U@kT)?I{@9st- >I');
define('AUTH_SALT',        'nq+K0cQ3sBc-<_F|l%]&.y;g(eK]J$8Qz3Zo2X%T*I/vB&BY>t}x+4pvI>/;I Gf');
define('SECURE_AUTH_SALT', '78OAXs1EPy[[MYH%1H<;R3-d9ZgaJ25MNPT+={Mmlz.;2b!#!H_mz2Dn7xH9e,iE');
define('LOGGED_IN_SALT',   '_c1(+,>liT5/)*KwY{jq!uW@hFGLm+f*iN:&M5}{W`3*H+MH] HW-+CU/&;of]+U');
define('NONCE_SALT',       'J&F 9 Phk26xs1BDINnQ-ywdQ2-up{9o1,EH^A>Pi]lNN-mUULg`RGBvY_!JI`%s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
