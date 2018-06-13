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
define('DB_NAME', 'wordpress_lab_magazine');

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
define('AUTH_KEY',         ')iBFNdyT]I;l</h:oD;G[8m`(g3DkOIhu>~,WUeQIa@`xI2KQ_e/e`bmTe|r[)nI');
define('SECURE_AUTH_KEY',  'zWKDux~jo3y }lA!SzrUYt!tAJ[h$0cbNz~F@LIwB:?A2ClS)h,~Jm$i+Qa1Xv^m');
define('LOGGED_IN_KEY',    '/;b1Y KG;3[y)eDoQr^I$S(:0aRxK0CyP!O9,M+)|JjX2%po_k-9hdmR4EM;4U]j');
define('NONCE_KEY',        'UFLg(5:o2xBf4hf7}nMjY>/Ousl]Tm$`)!+Om:I5OVb+qQYQ2>UJORE-(EI_3A1x');
define('AUTH_SALT',        '~`H-isWGX(d[<AL0O^I+T*Dnc^Vk4D+}{z]6/r1S~v8.9h]]_6%:NpVerI0tbMO[');
define('SECURE_AUTH_SALT', 'Z .*3%4VaIh4?IL`w>b:ygt%U]K0<$EYb}(]9Alxc&<>pE?LH!DYSi0>R=6DV=Lt');
define('LOGGED_IN_SALT',   'c]95S:WUNXd:WRHK+.JZs+.^&|;5g<o:Htet5hlO8vx)Yxk`3f(i|CNP6uq/)+j-');
define('NONCE_SALT',       'Z>2sYes.A;U&bv,/hiq?0uVqlWlHED1@k)A~)U0;rYiUSw,{oT.N31$-GH>nEU.X');

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
