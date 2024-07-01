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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'classic_americana' );

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
define( 'AUTH_KEY',         'q)-g;n=fKQ!SzL]X,B{_IrN`]18#S5[;dF+iU}}7WsA$.GO!#%xaiU<%MAbyFSb[' );
define( 'SECURE_AUTH_KEY',  '<K|EmIX)@ p.RB-|Cr56df!RRf] $>:$4XZ<sIP4<5J(OI|Pz4]~Fei C6`&cr)$' );
define( 'LOGGED_IN_KEY',    'Pm^q]dAKe^]%KoO<lp:d0[Rz!VikqKq}_a<8c}>n:A}-)QG^.A*kYItr#(?R6=`S' );
define( 'NONCE_KEY',        ')nwe4`e?FKCCu):-T.Y<^:e_:$^#wNtT+3D$_I.Y$T`gvU@45l?-1K}IISt(*W :' );
define( 'AUTH_SALT',        '_<p ;k1?f&v&/W:l.3SH$>`X5?.wLXjTTwirl.v-fOQ-PAu)bmBRNdYce)JK+gVm' );
define( 'SECURE_AUTH_SALT', 'O&rtw #zaOpLf}0s[<P;F8d&pqQ2dkZHu<ZlIM`L)%HK%~wsq~sPqBLk]c,/W4MR' );
define( 'LOGGED_IN_SALT',   '|UHe>,X125H?va>Q5dOiWTl-V)hY$xSt<zAg+4[f4!4i2v9(qH {l1!8oy>3Auo*' );
define( 'NONCE_SALT',       '@wqFUyrtGBTHAf`+V2=3sJ;2ipeuR2X5j69x5-#o+l/![!2>)r%]X62%caVG=(mP' );

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
