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
define( 'AUTH_KEY',         'o{&!|y:]m&lLvSox@<)+5p`HCT7eC[;]AvUWjt-KiRhA^kK5h5b?W&KA!F[C;jf0' );
define( 'SECURE_AUTH_KEY',  'rCr<vG@ln%I<5JI@Mi5)<#h:ZL,gPaU*|HV&C =z)S3;NULB/?10|]PTpK4Ol5CL' );
define( 'LOGGED_IN_KEY',    '~h<P8dR@=fq^+L&sXpzqrt-6TL]&7Cyrev D4XWY^nDF?*)&s!a69_T562;~D7}n' );
define( 'NONCE_KEY',        'h$-l,f6x{m}A1q@`|-!&?5ImM_wP=  ndx&`;Br|Sx`VH1Z/#yBDtK0.iH]Y;AtG' );
define( 'AUTH_SALT',        '?T>$}Rx@iCI_SuYfD-GHZUzAZoaX``X$ncb+01lcR>:!IN/Waui4ZL[As6f7rps=' );
define( 'SECURE_AUTH_SALT', '&/sZar&(GdB$JuscBi~o<%.mt(N2;fF$_<i^svi{q:C2,$?5_MdY[G?+NjIp2sFp' );
define( 'LOGGED_IN_SALT',   'k^TmiKI/a6-}WsV~@#VwriTnFw%Wy(#{mTvO9>B%T]mU*2Y6 @2/7[r%MJR$DAl7' );
define( 'NONCE_SALT',       'U_.nBu)-L|xG[4FBZWO)h/!LfAREBgYSp;i]P]e8[Pw4|2{NxjQjzh0)E#M^dfmk' );

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
