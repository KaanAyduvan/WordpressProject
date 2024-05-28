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
define( 'DB_NAME', 'duvanproduction' );

/** Database username */
define( 'DB_USER', 'kaan' );

/** Database password */
define( 'DB_PASSWORD', 'Asdasdf.123Kaan' );

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
define( 'AUTH_KEY',         'E1?iQJL[^Kg*Bh[@WL9Ua-2(+~7hhhl1HR@b{k1/D$Gl,/2~;`W-O{&eJ_V$kFf[' );
define( 'SECURE_AUTH_KEY',  '}/q>g&q:rWpB>-VlZ}9`y5[F>&Hy*1rF?wJ?q2uNZo3*j3cMSatq#.-;G>>bBJe/' );
define( 'LOGGED_IN_KEY',    'mZ~Y4A{ifC=J3y;_*K.(us1eG[]v>rN`x?Cc~6[M:`X4c.SND6ECMO-!v9Cf7_F%' );
define( 'NONCE_KEY',        'I>|:Q8C>NQFsgV!EnBm}repqD%--HOT$Z8THR X_D%AE=WM?%])$zEz]Cs GUQ,4' );
define( 'AUTH_SALT',        '=eU6<tJW9zrqFO:-e,7r&Tc]JwXqx$*>&i~^+EppTSU74yjOK Np(dZ3z2?$;@}?' );
define( 'SECURE_AUTH_SALT', '32p;V,Kc;KeD{IV~eEboMN3H8I;NT@60wk+#(pWx<LT%At,G+!U;~8>5SZwN{Kx/' );
define( 'LOGGED_IN_SALT',   ':DLN2g:bN{q[]b0y(v3VJ}fWpzJ>Vt$,lh-o-BykT`0-na_vzCH1S11%an5aQU>0' );
define( 'NONCE_SALT',       ',V4]|IVS(gLStKo>&gS$iI@<zwON<64)GSmkC&)cO[%^Zdb{5x+m5J !`vc@&i6K' );

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
