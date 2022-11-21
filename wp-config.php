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
define( 'DB_NAME', 'b6hpvhphrphputcjkoco' );

/** Database username */
define( 'DB_USER', 'ucdo7hx4jsqomhyl' );

/** Database password */
define( 'DB_PASSWORD', 'Z0X4jmso66ZAG98d3ega' );

/** Database hostname */
define( 'DB_HOST', 'b6hpvhphrphputcjkoco-mysql.services.clever-cloud.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );


define('WP_HOME','http://app-78906b14-5971-4d69-a322-57325de90a62.cleverapps.io');
define('WP_SITEURL','http://app-78906b14-5971-4d69-a322-57325de90a62.cleverapps.io');
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
define( 'AUTH_KEY',         '}.EYJRm4[fvCw{<DB|JD@BK:Xj@}m}(R{l PUd2sZ#jB`|k-=/4ajP=!P3v1YnTJ' );
define( 'SECURE_AUTH_KEY',  ':fF4L.Rtkn7BtFA<:yj2VQUYc?RSl{`Mb<n/S~<CzdF 4TrpurT9S9[T{slH$)>1' );
define( 'LOGGED_IN_KEY',    '?D nIYdB-XX:1d&$iShF.J2|tB&NUx9^s`vA:x/r#6c(1rAQ}&/AA=>/m[+f<M g' );
define( 'NONCE_KEY',        'RLE]h3MOkMi/(Wr8KuM_@*-g$vyT-2@W3ypW9CQ(CUX!3z2V8AmZ}Y5e|=.n$KpJ' );
define( 'AUTH_SALT',        '/v#x~Oik+R;dzPF[y+rn:kmZ_B,ty}^.jt$;,V;^m~(?:! `0@yHe1m%HZmiSI:&' );
define( 'SECURE_AUTH_SALT', 'm$%*8%$&Ypb4.b58<QN{jBp$kHgRs%.yyhKJ:wo4MkjD=IV# ;&BkXr1+>fvc[WD' );
define( 'LOGGED_IN_SALT',   '~b%2Hz0wlRmGKg9SiZd-c{h4-!bC;3I,1TLM1MI-t2%sbY|NDn0*@)74TImxYwcN' );
define( 'NONCE_SALT',       '0Oaub&YC~B5iVa:|)*Q%<5v*A]<=Efn5<%JCmf,[_H..6}$*s8~6_atdHq0k49&u' );

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
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $_SERVER['HTTPS'] = 'on';
} elseif (isset($_SERVER['X_FORWARDED_PROTO']) && $_SERVER['X_FORWARDED_PROTO'] == 'https') {
    $_SERVER['HTTPS'] = 'on';  
}
