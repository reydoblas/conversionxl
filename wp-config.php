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
define('DB_NAME', 'conversionxl');

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
define('AUTH_KEY',         '>0C>,T 0llNj;`z%T6,R~.PDCaF^(lOiI=Rp{L~UIg:gJZrq1CL8MP)(R~a-[T*n');
define('SECURE_AUTH_KEY',  ')nO/l39nF=JY*BQr>>l*9ha$jtBsr.$*!BIYns}Lzo8e)uM$_djGx6DQ)Q%qbwt&');
define('LOGGED_IN_KEY',    'I^$&kz)&D<6Uj(nJ4@px:~DJ_6+Ys6yt?% ])]~QW8*lyEetK?*A(y9COcrl;3N4');
define('NONCE_KEY',        'Lx:ZQt`~vPD;}#e$Td0L453#b)F-d0Gc4Cu*0gi4va<S>!M:5V)s--(4|IaIG9~;');
define('AUTH_SALT',        '-L)R3u>o55ukj[s.LgAjeAnpONyKtD?A4c`VtB1aEt.oQj~_s~NEw4 #>4SRQWLS');
define('SECURE_AUTH_SALT', '*CLP8.^[cu*<N0K#fR/QE1bkNu4$b1tb-{6Q4n@_Gc(`vTTKP_l8Bgq1B-L<(p4[');
define('LOGGED_IN_SALT',   'D0C:w(;9)30{80},i4tjS|IR&Ckapr>hwRCJ83,0bgJ{A~~3YFv7_FiMk^N<VaHw');
define('NONCE_SALT',       '.:n>x:_%*rW=QE@mIdJ_gg@#z=i(P5jMw-Al()PP^EC*bUAO:iXC/*VcmwKl+~l=');

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
