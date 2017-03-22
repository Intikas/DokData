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
define('DB_NAME', 'dokdata-wp');

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
define('AUTH_KEY',         'q#c*/`%I3MtT90J^;k4xff; l]pL9FhT3~k`[NOJB^n-bHCD4oGc@#VPo].h},*(');
define('SECURE_AUTH_KEY',  '*0;CT:3RW^iL m^n&JJr)C$K{!U)p.S*aj=>5Q/)8$S[<_20Ed D&NBR{IHRlACI');
define('LOGGED_IN_KEY',    '-L9X;n7i)E}9Y=7ue{Er}v?m#$K{q$!a@R;fnQd@&V;Ueqp8G63*mp6tMDVs9@BV');
define('NONCE_KEY',        'yY8@i!mJ-c4eCv-`kBH<aNPCP)uOg%Zj@NLY_}kH38EQk,^G&]N2ArW|%ik-zS9l');
define('AUTH_SALT',        ']ZIXwIC#N:S((v;2EYW=~WYEg$kXK),&#83>r{US/Y3HB0%c9fpuRhyZ41 ~4OWi');
define('SECURE_AUTH_SALT', 'aJn%@XSS`t=sk2,J[E#pSkZI{E|HcmWo5^Sj-8o)-@K>?+DPX5Y%lVv^9=Yl{i0u');
define('LOGGED_IN_SALT',   '8-X5>C88h-RIW*`fc/=5fB;A&>p^Pid>Kn}y!C,SjKs6w<3m9gQ*QGrq7HZN<S!/');
define('NONCE_SALT',       '[UFPSUND$<h/$rf|BWYnlA&R+K2$Ll8Lzhv]PU0Uj>_m!;qKm.=kl(9vwqm6/:{>');

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
