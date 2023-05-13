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
define( 'DB_NAME', 'img-it-academy' );

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
define( 'AUTH_KEY',         'Vk:7neaTw<hk|Jl|UKpMv>V;J;8@u&TYi>WcA//u.+<fR2M2wU<CdMZ$MoeHVj*z' );
define( 'SECURE_AUTH_KEY',  '[ME#oBB>?><8ZIf|C~y+`K&hGIhIOSWOoIz3PjR^3y)bK(xap=/-0bE8rhTa1BVZ' );
define( 'LOGGED_IN_KEY',    'MhGRgDFia&c%ut?:GIKMnsIeb|>:TZtYh#(rW`I.nQ3$T,>?Pr(wFW3rHvE/,Ww~' );
define( 'NONCE_KEY',        '}<No@d+enaXao6scyFmz6.0A?q%rZ?~:?3tnYn@~1xcS%B|k2,O]sUSv!in:<*Xa' );
define( 'AUTH_SALT',        'tG]Sske,MFq.7-fExRI%95i_;W{XMsP[JIANsDW!!(4aKn]:/&e[hzya  o9QR`g' );
define( 'SECURE_AUTH_SALT', '$++g!HKbI1ya5ui]zNsH]QDLeY`z(`0;b1tF0;=2,Hi.]Dk(Kr_^lH^4,TF-VX::' );
define( 'LOGGED_IN_SALT',   ',I?%lFux:-X9;n|1d&rYaLf>4p!HCLd3$hz&0?lQ9XS]K8va@y!0d>h[$gq[c7sS' );
define( 'NONCE_SALT',       '<Oz*@4sNbLhTw^!xUO_]<?Zeqk Bq*Xzg}=Zr:Ewv)dD%A>Wey?[0K-~]NA-W<51' );

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
