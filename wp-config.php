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
define( 'DB_NAME', 'wp_bentang' );

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
define( 'AUTH_KEY',         'LZsuTDz>k[+kC#`aM_s>/Ja@%wS6tLy)u~+-Khz/8b5F~[L}And SxnD=f|%Szw]' );
define( 'SECURE_AUTH_KEY',  '.MOswuqH$|Y!8T(S^ZRQ(0}Hp?<*80+8ZEg+K%>vmyr^[,VQSV$=U)XIOk,;ooWm' );
define( 'LOGGED_IN_KEY',    '--APRQW6}hXsqaj8spk#J(p}2A&&BkNCCJ}>N?^@al>tMm?fH*oK$@;* tA^Dgc7' );
define( 'NONCE_KEY',        'orH5[r%*b0C:<8Nh{v_eT_pH6:5b&lvr)oQTjO}JXnZ76@l?b:+/(H!<xw*z`cyl' );
define( 'AUTH_SALT',        'Ax<]1_Gw_5S.,9{[4,JF9]pmbOh65k&p)RI= WUA  ?--.f3wM9&zP3mBZJ`Nj@c' );
define( 'SECURE_AUTH_SALT', 'c<OH-+ZLLvDe9G 4}P_z0/UPR<K3_oWo9=fFd-`o}>wJ(dXN[AHc.4~+wL~((u8N' );
define( 'LOGGED_IN_SALT',   'FS/`*50Ka5$gyLY{z;m]^GZU)crZ-Bkbj:ujXolh.({2p]|-zDz5$*Y^~ccSv]uI' );
define( 'NONCE_SALT',       'k/^Q^p}{$G_FQLoE%3s7.A,!X:m6P`MaS@4?}{H3=r[vhUS<*@o-rgf|$if9wr4Y' );

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
