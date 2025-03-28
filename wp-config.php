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
define( 'DB_NAME', 'websitetin' );

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
define( 'AUTH_KEY',         'Sl.PF,tG gdOcZBn6X~cEyX[Yum;g4S]d4IC39.;M&oNKDY*$PlqWn#1lu{7Jwl7' );
define( 'SECURE_AUTH_KEY',  'S9@c }`g57BbfI]^_qBE`HrR* :FI5Vq1:b}7KlA/q^,gk??O5t/;#6NQ.g,Y/2 ' );
define( 'LOGGED_IN_KEY',    '94}g^)d*yb>s_K#HT]3=Gf(_{z0Xp.RQLHJmm@8S]EvYme7D9v ]r!*9o#o;[N6b' );
define( 'NONCE_KEY',        'V{%n+DL4:t:[_x+@q5Ltm@/?B|+4WIF^cVN$,&5,Eryxs;DO,I@]og;m]lokh:hd' );
define( 'AUTH_SALT',        'cu7B}7R5C,lUrtS%,LPS-#_LSY13d%0<A,Nq)+/lRv];lCaIPBr}rpGRF]c{zt$o' );
define( 'SECURE_AUTH_SALT', 't<8hePKoD*H+#u w8PNyXMN:dn(]OvP/]]1Z=)XY/l/_;XbDwO]~#E!>P$fuB}] ' );
define( 'LOGGED_IN_SALT',   'sX0cjTF[*N d5QZD:!~# .VZ|<s]@Aqo5$13pQmu-TCg=0iYcImFR`z#MBgM~|S3' );
define( 'NONCE_SALT',       '@C&$:88yq}>.GJvoNN?!bT|_x%[b;}q{aLT/NSS{<161^KyQBe~8yXVQ<g-(f$Aq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
