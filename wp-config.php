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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         '@-TL|eauyk H(R4niXIlJKx|(.V|Bvhobf?^H%a0vn;>?M5s`]ViAx[%CH9{aGLI' );
define( 'SECURE_AUTH_KEY',  '9y6~o*J(0E4*.;Y*+)v3way`@fKBXRyulNK#V)Q7[iXNV5)vgd#Vd8`HPiH1TP<c' );
define( 'LOGGED_IN_KEY',    '8if?)Cu#3$^zS~c(@cJOT04 s_hX^^lZswZWcjYV d +|p:?0VsjxQ8:Mcy,ddQ=' );
define( 'NONCE_KEY',        ';qA0JI7$g?~w|X(EBx+x^Cj~[i*Z%S#]y(5QR/rv`czd:SxOfU1jS f2CgZ2J)WM' );
define( 'AUTH_SALT',        'V!>8yXdZvvI/86}*b9I:WEIPe8i-NFJ(&%ax4jtRk-:<0T<c0Akhj?4c.}Yr~cgq' );
define( 'SECURE_AUTH_SALT', 'uG<5&z9Z6G@^}DaCETnRo@8OWKPq1%6$PG.ZZEtOaPe*NH1yHph;=+dC1;k)hXuJ' );
define( 'LOGGED_IN_SALT',   'x.3OD{Yb/ A~3,?JuEPT(rA7X>_pOCt|liXt&FE6`qP%gqD?:Hi6uhu^Rm |M]^l' );
define( 'NONCE_SALT',       '?kJNkL|3$XvQ[!K<! Wb]iNhB!m}5d&:U1euiFM1MT1<,KC;b.yXLED+:iT=nYya' );

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
