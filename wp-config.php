<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'vintage-roots' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'e5P760(IpVWwo;z4Nww0f@P%ewl><y?au1 8X&.fg-vYrvzKaf*N`]_muL4vd4[o' );
define( 'SECURE_AUTH_KEY',  'D[(@I ;K@!7YtuLJ:8E=%kNweRA^j!vfhIi<5JV-aTCU$7!q]VF_08As.G^f~)+B' );
define( 'LOGGED_IN_KEY',    '}Y{%qwP~b3LfAk@6RxLYb!R-,t^{Ky0fKNT3~kZyzbXwcY`C($DU9a!k!$}35<R/' );
define( 'NONCE_KEY',        'AQZF{&!S#}<OP:3wwWs4|H-yzy*=1$I6oJ`xuwOh:bdJ PK`|!n1_S@kU+qY^rZU' );
define( 'AUTH_SALT',        '[m{Q{bOwD&3(x8**l2OJ!7!8W5o<q5+jWem0$`DlI2k9lI4^YO]^8XTMbw;Mo4VI' );
define( 'SECURE_AUTH_SALT', 'eJrqt|Q@`%_sbpX1lv?zv,w+m!~3uZ&]*,.$<5H*g%#$?z5L2||/fI*,58@<XTLV' );
define( 'LOGGED_IN_SALT',   ';y868L*eHf[|qBZY-o%`>zuf_={WX<`2/<aJ5f%,s2*A@`W9bgm4b}X{dS|+75{C' );
define( 'NONCE_SALT',       'GR+G]^,{04O<5lU}RvTS2uxeCC!DwIT3.^PY1?pb.s.hac~)q)}-`_fH=}SB!i%*' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
// define( 'WP_DEBUG', false );
define('WP_ENV', 'development');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
