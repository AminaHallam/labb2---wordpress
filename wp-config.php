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
define( 'DB_NAME', 'labb-2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '@KC*Dbfau,B)U)NOChGmJRW8]LP;X*@GO~o|J:N#]%qBE>-I&n3UV46W~4}Tbdjs' );
define( 'SECURE_AUTH_KEY',  'mw;3]pnE 2K<._V_[UlLa2[[:sspLCT*Q=,fk6r(^RDmhZAw/x$!t.he~s[C=g+V' );
define( 'LOGGED_IN_KEY',    'iA]spju!v}R08-Z%m|nOd|TEqxZNbJeK*1%(9K%G[3JG!DJg2Kdc2,C%H2uO0]Cd' );
define( 'NONCE_KEY',        '%Sw+?4_3INg;U.z0G:Gi~I41)ui^wY<<_N)HlL!)Ji0s|6KrD6U>~cR^Xmi!d}7p' );
define( 'AUTH_SALT',        'p3L$`Hb3}5HY+{UekbMLUN<mLc|n/hZ8M63X!awAT}YCsD{N?hz%O[#,IAF{Bd2O' );
define( 'SECURE_AUTH_SALT', 'a&)eq8daT>8JK~nw(^+} Wn$Vk9$y?/-TWpYrRg{@7e{@}3>}vA}LoXAq&~9{Oet' );
define( 'LOGGED_IN_SALT',   'p#&%%,{nuiunqt]?$CqJLCmDi_M ]c4)b=?27b$I7o|$X!|Kyo7qC(JHr*j!sqeT' );
define( 'NONCE_SALT',       '#g]^I/DQQh[myhbiG`L0&9z9V4el&4h2pxq.mj|)6{fi! h>U&qsQ2k3p|5,1YL8' );

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
