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
define( 'DB_NAME', 'jefftech' );

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
define( 'AUTH_KEY',         'nT8EMVbY*.oFrA1xp& 2`wNc#uCTN!pXGo&jvYUy6tD.HX3X(qU9m{BiQNiH-o|B' );
define( 'SECURE_AUTH_KEY',  'gOT3dCR+ndrsgJ[NZ9Pm4);tLbK}[X9TuM.K*{pQs#csty&mnSE-j)>!l+-{qOsC' );
define( 'LOGGED_IN_KEY',    ']:AT([n9-iP)7]i--J58G~V!&|]sRnCO(Sorlx&Gik9ek*z:H#F#q}(eGz+9Jf3?' );
define( 'NONCE_KEY',        '3_=k3Hh%htb|;ic{pT+` `*zw s]4^N@>;o#G*m$%t^J|1{IR[TR;H-0/xmoJGSi' );
define( 'AUTH_SALT',        'NV(2jog`0_kj&8i]XSx?g9e%Np 1)JQf&wZ*)WBEIH2)CKY#},4+zADI$eXG4LuJ' );
define( 'SECURE_AUTH_SALT', '9}X!g#6DAUz_(%G:aLoYM.,%8jEKo~nx%!]5 sa^wNNtX7zYLbaoIz]>S4umFS^P' );
define( 'LOGGED_IN_SALT',   '#C |@xNEgnR%s^}Oodn0lEbhh7EBK-O0U+qXZ>$xI_<hhjzkWlz9Fu4+s.%*3j,v' );
define( 'NONCE_SALT',       '.N)pp&,xnKsm1Z?Ni9ZZht}%6?|GY(F5Axi4_c61Lx+HBWj6Ib7|+u.Cgr0!wyf%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jtech_';

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
