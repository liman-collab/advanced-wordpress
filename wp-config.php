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
define( 'DB_NAME', 'advanced-wordpress' );

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
define( 'AUTH_KEY',         'qX<e-Ss/*;jZAF:+,h7*-6SnY.nIUur{=j&_J+!{PT[R0JTYYnvMU4)|I*,(H<>1' );
define( 'SECURE_AUTH_KEY',  'B@1y)|V5oH)zVqMX_]o&R1jIz0Q(}L?ez@*RY=Sr>i>olFXO<,^{HG@8sx~7Y)2w' );
define( 'LOGGED_IN_KEY',    'E@Hji14%rSf41R]_V->lxe}C]^6Om{)?VNrQwhuIG)=@hs<?ISg_g%{Ch3DlEF{:' );
define( 'NONCE_KEY',        'H*`l3wwg&O[:FfMO`$lk5`7jDz)YeB3gg;XJjI)^vE@IX;tENFrvDN_]{.vv=Lve' );
define( 'AUTH_SALT',        'OW<;R3w`{LT&i? 99el^;=gjXpcr33%p&VAe[hj/]>45e.VPx%b0Y.e`VV_>t-X>' );
define( 'SECURE_AUTH_SALT', '`B+sH28aS 7QRgiDjg1[-2..tbC|4vc;5qWcNkz_Rk`KWrV`I2ncI0DDlc,1PU|9' );
define( 'LOGGED_IN_SALT',   '5wo|4!PKY8F8,0#y5U_KG%Xf*@;)  nO/;fPs{%h}2F{8<lpAa[(i+CX]Cs|fWSk' );
define( 'NONCE_SALT',       '<^d$=A(qNuIl*]yh6f{,eXSO*bV |qF<Cak[ttIPN:xw_Wcr@!?]*SQG)^j)RGKj' );

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
