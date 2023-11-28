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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'gHR!E&Z9<7FaYa^8FY0BQ@1JO^/&6dT*I(C`*LZ8BB]o{)nVe3:b>N&FUYQrLR(w' );
define( 'SECURE_AUTH_KEY',   '}Bc><}[AmII{kycU!4#&<8dH.hd@@:f:ga,uvB]Nk8N8Z.TsTVjmPfx,VMe5Q(kK' );
define( 'LOGGED_IN_KEY',     '*Eryt6L6!|3tSfGTv&)D,5i(LGE3]CZ{ei{&wO{so*9J0-w7F4=Zx3nSp8VLZNo[' );
define( 'NONCE_KEY',         'u7:}Scex)RPlTaQ[g= :vVoAj<R9M&(A #tfTZ%K3A4h)s.y%ah[@|5p5I1+=8+i' );
define( 'AUTH_SALT',         'HHHNK*;tC/q)fw#`V#`,CSOrLfP02C*As 4+KsRN9Z6F!|[=x~fy(])K]R>AM!X:' );
define( 'SECURE_AUTH_SALT',  'iZ #yWhoG{[ST%k[wFyBn*mTf@Aow6@v<lj1pOKRx%a0aK>Lp?-$#nVnHiZXP7F=' );
define( 'LOGGED_IN_SALT',    'r[V8aN68P6.LN#345%umb@rVW./A[0$cTcUb4%wI.oQcpV-be {ekP{?TmNq:$!-' );
define( 'NONCE_SALT',        '>.ICYacl?Gm=XkfC`P4<w+=R=lV)*@R,5Env0CIe4#hks4<Gg6u][*9Q]r0O?/#7' );
define( 'WP_CACHE_KEY_SALT', 'Jlx*!h_h@zEj;>=Czz1!<vSy9ZhYg;ADK@h`ORA5-}K&w:NdL]<;X*(1a)2`(L>~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
