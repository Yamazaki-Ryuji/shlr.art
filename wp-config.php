<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shlrdatabase' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%.1yJs2(3Ey+pBm2Zrp/cyZVg`ojoyN&8]b[B%he4rLc]B^);@6B)b|nK_JL( F-' );
define( 'SECURE_AUTH_KEY',  'e[945HN2t!!FNtIM@-]}2k<jr =lZE]o`]S`|c<ZCf,Gqt;]P,L9wdxfM=[:U8$F' );
define( 'LOGGED_IN_KEY',    'kR.&e2~]w/r~3.}OV?5O&odBo-e*>awr4>>$4Pr{|_}[P` FZ:(t?Lj7:kf3Szo%' );
define( 'NONCE_KEY',        'P8|)eb7j:#RDdH<r.k6!4vZ`*!?U9ywc,EmO{@.4k//S2=we@y`W-LSg CP[&wpj' );
define( 'AUTH_SALT',        '%XdsVk{o42E=2G_ihZ:heDuD,^4-WSDNem1tf23Pu`Z*1f$&WeA5wfw$H7OT/Ei5' );
define( 'SECURE_AUTH_SALT', '=twoA5y<%GN5E]g(*/VCaO$<70XC%v:!5cHYr:d`[5Q4<[1]h{j9xVMbG@CYDB)r' );
define( 'LOGGED_IN_SALT',   'PZe+u--)>N1},h@M*fmy:FYiC}6LpZKhz<OZP2bnh1TvvS*+vrv0U%tccjSu/3]n' );
define( 'NONCE_SALT',       ' 7t|w<,,xT,{1oH~TRuW!&:W}6Zg_.5U;~LDx`V+|:4.UK H_FLlYUD+}FNp)[g!' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
