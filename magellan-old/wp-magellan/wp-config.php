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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-magellan' );

/** Database username */
define( 'DB_USER', 'u843867' );

/** Database password */
define( 'DB_PASSWORD', 'Kippercat1' );

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
define( 'AUTH_KEY',         '98r]]/eFUg?`]G>X1HtWGby/,z{G6Eqj!7Ft/+A0~*B#~Ud3!+MJatv`xr!Ga(@M' );
define( 'SECURE_AUTH_KEY',  '$9KKh+<asD^?yo>>;iYnQWCYy28g2n#OYcw$8mgH0==seTI%3!C*VdU]j.y ew}C' );
define( 'LOGGED_IN_KEY',    '~18V7Q*xuD9UoBakV=ko=HKR/[#<?F)yOvTg5){;,sApFX?Mo3z2}7cX-h|D5cy.' );
define( 'NONCE_KEY',        '}gWZNmh!:1iAwd)h`#[]eD=r:ScXX~ghd[@_ZAgo<Tj>y>Ow1+p%DFq^}FXFoU~!' );
define( 'AUTH_SALT',        ')yX.%d3y,KSs>nu_>@d-H<vH*Pd<m{[{&$eVxOjc;4i;uLl:kUVJ@>u__A-_IgO+' );
define( 'SECURE_AUTH_SALT', 'r**!OO5|oisY)TNY;~+j@E/$?X;1@X_t[iC[3#1zR/-{hP9:~-w>lKgf5h,L[hZ[' );
define( 'LOGGED_IN_SALT',   '=?-#)h0[EH.w@g)9lXO9|^(t7&$A3ws2i5uZ=X%BR]Hxr? IN49;#F$O]{|Y)(Kz' );
define( 'NONCE_SALT',       'm]iF4://&mnets{`vi}t%*Yt8#ErwV(RFTA)d9V^2i9@JWx}cl].`.n_}W(oMhoD' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
