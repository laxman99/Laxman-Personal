<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'apspt');


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
define('AUTH_KEY',         '&u(|yTi4VUr>MjCNZ=|YPDrgchF`lR/]zU:q]jfm-1cuk-P{MilTdE lM`.P{XdO');

define('SECURE_AUTH_KEY',  'O0P}d<i+ap{,QjyyM)DaXDz-HhBV[#xZ~_+<NM9J6]-^Nsoe9Pgp^;z(n&lIf2;]');

define('LOGGED_IN_KEY',    ']$c-UFR-nSzhLA<Qjf0lW}edqR:LL|h|)&,msHgKKM5.*WPM=ikaud^,|zyF7T@*');

define('NONCE_KEY',        'Ee9BZ;T>|0-oeX%YL#8qe@a}`_`)kZcV-bg7kc>zLBX%X:(@1<P1#W`y&@qG=V{f');

define('AUTH_SALT',        'ZR5jj+qYXlD z{?x-_?(J}+-BAz8$r+-.DpvgB:+{>d/.7S:Y4W-z*-Svmt5<n`!');

define('SECURE_AUTH_SALT', 'C7wov8Au9>1nRg.{Hk2&iI;on$Sv~db+28%iaO2X7m-.Xt$[gc#`m:b`?/QHp7o}');

define('LOGGED_IN_SALT',   'NbNV9w|QFbD: /}/{6h(q-j-b:JQt+paA{|y$~1KRjdcW}-g$|mYT#Bm+|Z/gOy0');

define('NONCE_SALT',       '3w,||d|v,PkxA1}@)0%[S]s2c;]eQ(^ke@O3HD^F2g.q~iC^fCtW80-:}c}uU{.?');


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
define('WP_DEBUG', true);
define( 'WP_MEMORY_LIMIT', '256M' );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
