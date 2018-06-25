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
define('DB_NAME', 'db5210');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

/** MySQL hostname */
define('DB_HOST', 'wp_mysql_5210');

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
define('AUTH_KEY',         'edzs+n)wQ2MVj6]X>9UXst`LR6M+>pp8 ~%qt|&m`mR <e*hZD^iZ6UVMxSV7@Jj');
define('SECURE_AUTH_KEY',  'Pdi{nQBP`Ht}B~:gBwrgLby/h8lwqRzWq-8cyp>Ad^QozX9rX&fDPwYjZlSeR)x2');
define('LOGGED_IN_KEY',    '# gMRZrc&<:X#s.M.XYM1UISCP#6{D6Ls(IT,e).)G(-Z{(D)RXn#+dZ5L{[TYZs');
define('NONCE_KEY',        '?*%mi:~3;Vh!Z`atw|),HUlvpiy9@CzjMTlqx2IP1C4Zv%-+4;4JdqLy>wn]Pc#4');
define('AUTH_SALT',        'rQg(RhTa:`o%HReK*3C,rdFW;JP>@!^K,Tn1X5PEuJ {Ez@Y,@<t1Mtgm9=.fKpv');
define('SECURE_AUTH_SALT', 'ppio2TqFZouw*0Ig5R|WJ=@rXP5g.Xf`^o*4Sq=bx{,cwp;pA[be;KKnH,7/C<3Y');
define('LOGGED_IN_SALT',   'khZvHUPY-o04hEhe7G@kX*!AWSE@C}v|T-gA$!;R+uODM1Z_fBns2F,eV7}<g7y?');
define('NONCE_SALT',       '>JROkhJ=ILfK-G/77Q/&TRybVDzxo[f0N[X>sp[%8%`OF,ked2I9B8!-bhr%S%/;');

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
