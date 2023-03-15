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
define( 'DB_NAME', 'bus9' );

/** Database username */
define( 'DB_USER', 'vatofoto' );

/** Database password */
define( 'DB_PASSWORD', 'vaxoie123' );

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
define( 'AUTH_KEY',         '$Y`X!<6=L~aP|@8(/]ZjIMYME^D[XFXwd:mMHj6]M$qbw~|}.$]3reWQ)d&nm6>q' );
define( 'SECURE_AUTH_KEY',  'k; l;jp#+`5269ckG&*|w-Z[b+J:>@O&gg7>kd B;3m%igQiq}zJt89>uC?qHDm3' );
define( 'LOGGED_IN_KEY',    'j|[Erf{yu2-+/kkH*ZH0i4c~BL.YE#Kft<VOz3Wn!<i,Rj;Q-o:k6VQ&Bx?NzvLR' );
define( 'NONCE_KEY',        'pB#H~S9NIfF]d,sfk[*UbWEze3!V*!aI[U-<@z%j{X<5hm8vN0UkK}dzR%{RrZ[O' );
define( 'AUTH_SALT',        'N8*PJ4Ommdu a?`@iV,Z>rw6`[2YADHcQalSYS}E2s-?T0h`,Zx7x[6V(ba)XV)3' );
define( 'SECURE_AUTH_SALT', '?j8RHy!vm^LKgpy% !v9S9IAcc;TBVa61&/f)]SJC]r}NzHv*uvb!fo`(#Us#N%?' );
define( 'LOGGED_IN_SALT',   'zU ?lmlh!~8 4<L!4sg [(];M6idGl/C.](x&l:[%]e+A~BFJC})F(xy#ldpT!{@' );
define( 'NONCE_SALT',       '$l^.o!Vf.$JC_:F2f,CLG7b3UQm9a2LQOx`qQ`S#8) +@n K{n~^VK:3:M,mhu9.' );

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
