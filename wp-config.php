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
define( 'DB_NAME', 'company' );

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
define( 'AUTH_KEY',         'o-o<ERYRjKRb>ZJB_UWyG{2QPK`YhEjHP {V{-M%06Y_h2d!$g&8$,1@`c2i_Zi_' );
define( 'SECURE_AUTH_KEY',  'BbWVzH)#mQnE7ESfxHwae>QW}F?,L(@kKS3WkR-P&pv.2X7=<Az>}7rJLj27?|x[' );
define( 'LOGGED_IN_KEY',    '2=nxu2suU&->5>sD;#3Ky+Lc+mOQeVK4v9={Iq~1X{B;?E,1?^SR|uZutM{$fLv}' );
define( 'NONCE_KEY',        '%~#u-~Enh!$-|yM*?HHTE$+{Bdd,b2=YFCYy<$eT~Zf)q@wvX=_d=F8b/DnQ!-6I' );
define( 'AUTH_SALT',        'j0[~$|f@ou@EQGP^bLZl{q3is;d}nuNNn}hy2N<^1`n4?xJ$jebGL8%V>QSfrd-.' );
define( 'SECURE_AUTH_SALT', '~/|UN|#GHL]B<gVUd1/NM$3-7dlgZ{e+Z:+T8P,!i*(g>hXd=6.b&O@hVdyA1eV~' );
define( 'LOGGED_IN_SALT',   ')I;*pcSCDM>n,?:<:0D~z<;!h=jW8[^8-}/ ;z 8ZzHOR&>M.TRn.%{ptZ|/,XS#' );
define( 'NONCE_SALT',       '+$mT/>AlatP#@S]j|)JG62w.<ib3Z~ktW4/V{RE/OP!3UmZC5VJDu$.KLYJb,zRC' );

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
