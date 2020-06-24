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
define( 'DB_NAME', 'testrepo_db' );

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
define( 'AUTH_KEY',         '.92IvKkQ~-^:615TNha0%pp}*otXsxAKqepbM$o-v3JCq?R-b_j~7Z/n0i_:&p|8' );
define( 'SECURE_AUTH_KEY',  'sDoViG-NwN7?)x_hgFtG;0~bRGSv.b#TILO;R5PjGPGP,?}vehDb3n^KWm~=%MA2' );
define( 'LOGGED_IN_KEY',    'm#U=-Rxa=9 mNP$JB<OZ:@u[/-*L?A{cC41FL1aN]+CWG!l?U5*56Oo<AvUdkAGF' );
define( 'NONCE_KEY',        'vKB|i?GQH4dKB$.y7IY>T-@99!p$UFWFJ!%{X@*|6MT:n@D(qNW:Hc;{yo?h?S=b' );
define( 'AUTH_SALT',        'SObB$C=jhY}!<Rv~fM]uv6yk{&X?eD.J,uX.LPNH[q^>Y6bnL(V8D<FQwf8JiacN' );
define( 'SECURE_AUTH_SALT', '-p;}qWRTXe,C[a;vYb_F~9*hXTe-uqB;re]Qk}ITiJ F&jiJl^>R1JWO](B&83f~' );
define( 'LOGGED_IN_SALT',   ')h/9NL~@s*>o5|q4?}|#3o,UBwXMWKZ`~rw9-HWi>p-wK1hnA$wIMKbd1R8>V:>5' );
define( 'NONCE_SALT',       'RgsNFyrq2{RG51Ap/cX:GzYFY|XaYZ3Ar@tlfuA`(j {h$?BrfYK!Fsd9bSqT,FW' );

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
