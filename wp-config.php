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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'V,Z+0kp4-wr9.!41_A^C?7Z&9KVi}BNPBIugk` s*[;NW{Pg;pD+n+8V$2H /].S' );
define( 'SECURE_AUTH_KEY',  '[{R5(`MQaKlD.{p[xQ[ZY%EwYU7cx[=W;/S!*6.wXMmjpoD.Q0+^M,q <;X[hXC{' );
define( 'LOGGED_IN_KEY',    'O|y=S6~}R XLFQQRnE`jTU.<;wM:;dGe#5)|=an V$ijZA:$F-4k9<RZ+}J]>~>2' );
define( 'NONCE_KEY',        'lq!C]@|LcTd_.z{>c9>#OO<&OUDD@KzUL:!f#}`XQapmZok$~b~>gVS2//)0a&Hf' );
define( 'AUTH_SALT',        'i|.:5 P9#yk.^%_6<D{`fIE*&lI6p9!uq5x*/_41N~YD}%c/=tGH]NU,O@`:j+|9' );
define( 'SECURE_AUTH_SALT', '49z2h^^zhph@.luj,JfK%g>6rcq$sDLDfMBxfOp1r<_@`CSZ~dHRUO6b+lT%PHZm' );
define( 'LOGGED_IN_SALT',   'TJ;jI65Z:U)sM%t]4PHb/<e<tuN_YZ7x}0.(NG}iLbd8n<z44k5%1WlER>6`Qoya' );
define( 'NONCE_SALT',       'Z&EFshGPG/F*,R+x=4Au)eGkcrhHcs0+~Jq;yAqk2[fXqf-*YM!01?G9]VPu3J!0' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
