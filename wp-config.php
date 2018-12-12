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
define('DB_NAME', 'baza');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'word123+');

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
define('AUTH_KEY',         'ya6v5r`gh!uUq}iC?`5lI4Ubc.YLkbWE{u`)L<O;,QCWzpgHc2G=pKwxZhR-X}lZ');
define('SECURE_AUTH_KEY',  '%@Av&.;1Qb3e7ld_g)CQJ+J.uas)WR,ohpxJt.Q#IRC|pKL`yGeP%[R[I*Yg0D. ');
define('LOGGED_IN_KEY',    'E)x{;zA=[[7vz;QEWyO,>~oT9&JtI7r>r6#&RVoGe1ii!$D=oX_/f&~`A/=05W+3');
define('NONCE_KEY',        'Di;YY<,?5+;c~ #Ms32lG*.2Z.xCa>x8]A|qdGz **Sfo2=qAyAhaejs!92K*vG]');
define('AUTH_SALT',        'Sg#!IvCJCu7<HwT1/9b/06ci hjdA^nTZ5~8zDgq![osxAo,sXn4@g4nPlOQQgSM');
define('SECURE_AUTH_SALT', ':BW&#UuYfzz3-t@ bO>*|n,+&O7{^f6$u|x5t~-_IC~SM>ksN]R@h>&2n#,/-FZm');
define('LOGGED_IN_SALT',   'Z1poY*Prsi#-<Fge >/R@]>FTZ6/v^+2<o2zS?b^i-(?&q-V6rS2TD[xCmp+~T@,');
define('NONCE_SALT',       '0Ih*brwrLXKkX1wq_,t:tUleed&FzAx:$iN<8X*Q=ogh~%]vqlcnK11<7d:4}e%Q');

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
