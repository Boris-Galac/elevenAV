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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '#lGJYBR7]o 8;8b22&uCEJoP@132S2Y3nLla>*1S)dq??3n!b?8|z.8GjFTcjiL3' );
define( 'SECURE_AUTH_KEY',   '/sfhoN@paf1%~(QHy_r|$~G67-7{Ht1vynCh6k:JdID(%VWS b%-0y2u>e9s+SOq' );
define( 'LOGGED_IN_KEY',     'qY) (,]HY-@Y2gsSr6}<z7{N@pqz9;^WCPzp:q[Og( K03!~4u*A|9x2kqxmF ?X' );
define( 'NONCE_KEY',         'iR$~}OpaRJ57Q9XxMys9Dbdj4Kl6Qk#>R.Lmd87[Ly9%TJS>s7:MYtH !P]MZAJs' );
define( 'AUTH_SALT',         '~ -09/wKqc(kKeib+P^ZlQ0o~6mD1JH,0&eOG.cYg=w&{KJG?D}z}wxy&[Nw-Xu(' );
define( 'SECURE_AUTH_SALT',  'l]kgvW$ynjU~Y&YlJb0T/_y06i~I,C!q8Pyb~Gcs %Vzy#MGe?Xvxkw+8.~q4pW/' );
define( 'LOGGED_IN_SALT',    'a.4`:oE+{:jPGe*:IO8>k~F]KIUc)$o=)@dyio=ilbqUR&-`iEg:LU:>%V4;]@VQ' );
define( 'NONCE_SALT',        'm/a@+==8N7q.lBm]|7P[y7AJaZ,$ja[U2uA|)gCB??seLII_HA <%S7}mPN1HBr{' );
define( 'WP_CACHE_KEY_SALT', '7ud/G=vvcq[bw~.7y&dSpGP&C1hC|UW}zD!5$z+ D],UBB@].lE4.pmGc&r;L$T6' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
