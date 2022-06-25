<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'heladoscielos' );

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
define( 'AUTH_KEY',         'hKSc9)_[QfCjAZ0E5]m}W~Fu&1=@vK4I,4 ]}9Vcz`*uYTL#Q,w~RO;8]nFW)lIl' );
define( 'SECURE_AUTH_KEY',  'X9  44_5DRxO4jo =Q]x]L6+SLUW:bC-GKcqv|$G?T!1f;n?vLX!myHs`;-cuhi$' );
define( 'LOGGED_IN_KEY',    'Z7!p8Oh<rKNe/qZ:x(bFV&=07-uJq8UZL#V3|m)+=W 361AHSov0OPp[a`cl2ghl' );
define( 'NONCE_KEY',        'FC5qP3`4i%H 81EV{qV7.N:Mchc&Y.&FR.9hgT}FquPiId6rY3x#DN6yI*U8NkeT' );
define( 'AUTH_SALT',        'S6M=ABmV2k^16`C?C&<%,8+e3gHHD~._9o`~0>4C[Ar63g:?C:Rs<V@+Zz8]uO)_' );
define( 'SECURE_AUTH_SALT', '|ikp>&)~Mso@O%39J#Cy<HmG.eCW$ O$B%r*FcT6cC9m;=meEFOOBkX:oNR0|b3C' );
define( 'LOGGED_IN_SALT',   '~+I!(=,Yco=J:jpWUU<,#!1_.4|]+#[nE1*&%M:6?8c:)Z]2,Mx0S3:7>A~S+Xc2' );
define( 'NONCE_SALT',       'Y1_!Lvy,t:w!678B8AF7PZ6~g.^1xTJ)4%z:^I;,Wv[YG8z.85!uH/}@N726c6r2' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
