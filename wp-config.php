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
define( 'DB_NAME', 'travelblog_db' );

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
define( 'AUTH_KEY',         ']:9Xfon7kKO)=;N0kZ-2g:3/<{dz-3Mtr5Ym!j:`C$I[],,O0S$$dvry;BV_t=6q' );
define( 'SECURE_AUTH_KEY',  'Bx1D/cJs`[^_o&<88DHI:>fToC~McfCH(N YSH,7WaC`dDFNpCLgtWSj[0`)$bnt' );
define( 'LOGGED_IN_KEY',    '`ln8(Vy7(hS&AZNL7YUv&*7rzR@K_sVo|kd?s<8Oe}4]FfpvlWh5C0~T`:|B>1Jc' );
define( 'NONCE_KEY',        'qo_M9F[$8YklJ15.Q3-o.H=;$c-2#(/8y$}>|GYpuMo^G+od@W;6X`R8C>R$ 6!Y' );
define( 'AUTH_SALT',        '%,oy,lro_uwtBR]DN#@EX|gj,%D=k9h?}m]8aq(% ^GZ#d){XK9x1f3Jf^s5fM7^' );
define( 'SECURE_AUTH_SALT', '}*Muw?-tro&J){iW=]Cz$r<gnY>ryVo]cVU{L?JenDb@EWD>N,vB%?qwE/TwHd75' );
define( 'LOGGED_IN_SALT',   '`^ A*ax4R#~8FR6mtd36TCH{zfj7?$b.UX:ze~VL%vL4*9fV>+b.T-1u!WNUq8`Y' );
define( 'NONCE_SALT',       ']f5h(uSr/VO40$4YjaB=s#]YND)~B$!oM&:h^uGXy!K0}U<e]*c[5]Ecr7s3WEg,' );

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
