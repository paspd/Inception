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

define( 'DB_NAME', getenv('MYSQL_DATABASE') );

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'Y?6Ox3i1=&*4&*aAx0CQ>75q0S+8;P4&mzt+U?f8:j,faq)&&/0r]hpMt_J-AukG');
define('SECURE_AUTH_KEY',  '3~Mi5*y$w5|=6egNRZ*5}GSS?oz3ePxO~nbKkb^]lwK1_Q1C_Fjd+Odr0PFy-xj.');
define('LOGGED_IN_KEY',    '5w}!_Es3{|G]f1@z2Y:pZ@@9+Fn3tV]$+2A7||HY21.&G#{Xl:)U?rwF/}Z+9wiV');
define('NONCE_KEY',        'ZqG|;b2P>ew=S5==e 5]=YPSrZ77?8)`_dRg3y&?_c-%3D1D)bMVxu#k7hGk}+S`');
define('AUTH_SALT',        '{T/-S>qNwUXF$N#J1aAJzG.eq++py@8pJVK!+lyXscCqb0nOV:0a!1%!znHY-*h|');
define('SECURE_AUTH_SALT', '@QD):&-q*l)ijZpyj~Qhy#hvjU-S|1dL/P<Mjp5nB;[FK1m0paPzmlga<nSf$l%T');
define('LOGGED_IN_SALT',   '-%Id%I4UM6S7k2)whja}bLKn;p}Rwm9TE/DRNQLLLV]i0zB3@(j%FqOf_`^7}.%)');
define('NONCE_SALT',       'wSiN2n9u1{>7m^l4HBeLJtYCJ<@i,f5]iaU*{X1f$!w+S%.>s)m#h!E[s2MA}Nbm');

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';