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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}%v+=8euYp6vCj-ZGy9-H]5X%umG&j5fo:!P!Mg7Bpt`/IU$rMMh4V o,Y!v,4$a' );
define( 'SECURE_AUTH_KEY',  'Bl{207:XZCgO&78sXcBYo1v48q]]6p;+iHn/!:^|c[sx22n?cGC~q4|Gs6]CKJ&~' );
define( 'LOGGED_IN_KEY',    '<%hkbf>,3R{2ySiZ6z<Fxh%;#BlU>&G ^<p9Et@<oHIFFS6v$?g|[YGch1N(N==7' );
define( 'NONCE_KEY',        '`kA>99A)4!bkjy]=8m,r<kC1|3npXmXh?m#Y&*TUJ`;DfMoc9>,]z#FL{3iuf*!@' );
define( 'AUTH_SALT',        ';K{NF39Np-+V$BqW[FF+_OD+v@hQ?-s8_HA|}Zw`u~LdGbTa|QD[ed=F)eg2|@HH' );
define( 'SECURE_AUTH_SALT', 'yq=W#=~zy_/_Btj,H<8JkcuD%CTky,`wWg`xFw)#e,9|anRo@A#c;|^PjfBZ.uM ' );
define( 'LOGGED_IN_SALT',   '|?&ssM wEytLSSdxHu7r2qh=8^LwXxpZz$ug/muk0n3M!ZAg ^dO_*Nv;B*48Dw ' );
define( 'NONCE_SALT',       'oEUA_w=e!;aoA7H0:0.,(L>qha }NcsIv{=H,HnMuPI-$IcAbsq$E:7]$.B&`8.i' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
