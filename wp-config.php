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
define( 'DB_NAME', 'if0_37531454_book_library' );

/** Database username */
define( 'DB_USER', 'if0_37531454' );

/** Database password */
define( 'DB_PASSWORD', 'pUxcJOS5KlrUQUi' );

/** Database hostname */
define( 'DB_HOST', 'sql211.infinityfree.com' );

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
define( 'AUTH_KEY',         'j$;zc!|<H59?2zt^1(U4mu#?p2t8fq)X]nE*yTt0UVaj%,=?$}Q90T&ozMR9M`KW' );
define( 'SECURE_AUTH_KEY',  ' 5@D,:JzRy}[y?uSu3+gC>o&B>c:(JstaZW3!!yU,HG[]LPB?k]rCMl@3739I$Q@' );
define( 'LOGGED_IN_KEY',    'u&>O.0{ YRcv]bR|*p_oHAbtR~~qaI$EiOXUth;5<(E.?a!g=J1|`(vNpbG2I-hn' );
define( 'NONCE_KEY',        'RLf,1Q*cBQWA|>4gY+M:8uPB#60_uZ1MjJ*c{*8G?amE3EL,5y2<l&yFkb|}OC%6' );
define( 'AUTH_SALT',        ']poO8Y_^^$3i=1w{Y:2]rZ>{vzY~2?S6kJEXKy]srqYaEcVVW,je7j+J&2X+[}>*' );
define( 'SECURE_AUTH_SALT', 'J*D=_6AzK?,I >0ti^yjOn..A f/J@M}XhNt0`T3*~0+4!}C2-}}m/QIHWX1+dXw' );
define( 'LOGGED_IN_SALT',   'THnWg.fqDiQP^P%`g0a,L*fP?YU%/dZJ|.|IAW7,UY &;<?1cjExn}5~rtdxHoD%' );
define( 'NONCE_SALT',       'd$P$w&4)5;8{lI,G:+M}d5zt9;ccL|e7CY^EUA~?F`-;TX6S6_,3R!5w,h?N0,UR' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
