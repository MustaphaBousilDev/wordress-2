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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Ys:0fswep?5u#>,7j$eG>`p-^k[/lGeOY/_YS4Mti3n5L-izqc0^G 3}|#iyJ(u ' );
define( 'SECURE_AUTH_KEY',  'v=g$j3>g^j|sIV8gg?!-GhIr_VTQYN#00gOEB,}rNSb~u>v79^|fzQ03fHJu5oal' );
define( 'LOGGED_IN_KEY',    'ZER9d`U1>b,p=TA%21^iY`hFV. #Et!lGeq?DsDkE(fUTK0MRI9PrdF[@ZGGaW4g' );
define( 'NONCE_KEY',        '=zevMIkVQu0aR@ k!o9!8Cy}s^P@{ %5`_Cao#<`tl+(d(Xe>SaQX6ztRo~@/J?G' );
define( 'AUTH_SALT',        '38*bk=hS}zUcmEfHxi^!/mgw|6ZY-.u*uhq}or,tUM[[%yhijd5KjZWqxN5 ku~E' );
define( 'SECURE_AUTH_SALT', '30]&cad(c0R%EN@#HDeZCT}J9F{4j#$t)&k]>3 3K@O#}T}Qe:gc<3_BlR&y8B5O' );
define( 'LOGGED_IN_SALT',   'eUW((PKq=*>P`!R5YGCQhW31 bkzj{9b`NP7 ?t<+G2g^)vKg15BvltOglfi!Gx0' );
define( 'NONCE_SALT',       'c^kWyk5!u%sw|0fx2jO=<2=P5$+:+dnk./Vzk|66nTx /99_Y:g$S*3RlRT,uK9#' );

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
