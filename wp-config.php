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
define( 'DB_NAME', 'myweb' );

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
define( 'AUTH_KEY',         'plu9r:/, 6oz0N1<pA#B)^o^~=e-314y_KRA2H@O}@}sIWp$RBTz*Ptoc@1g2.+O' );
define( 'SECURE_AUTH_KEY',  'f:1$^so6)vh1{4-Kb-0d{cCRpc|IWe>cW>>6j.SP>3<F~+VP>RH)S@^X2%nTr7FO' );
define( 'LOGGED_IN_KEY',    'Ii4QL/8To<=oh-MWN=*YHwOn_av@X~g^s0^n%jK&zAKqpIF(^|i#es5I3)U;U?j&' );
define( 'NONCE_KEY',        'y>W0H*4uC9!XM6m=mkL^n5Ju7a(jkOcrFl#^m<o>8mw$(B7)%hOm- {DC% I7U~x' );
define( 'AUTH_SALT',        '%i*g3CZodn0-OG -isEL%;Nu71;q$~7{Z~^B+HJ. || G Y?!5G0 #Ah#d@!a2;[' );
define( 'SECURE_AUTH_SALT', '!z+u%6RPneSyUJyh76kb%~IY=AL&pA%VaH3/,UZ39}3f/TLSt_N&7(;Mq,iar1W1' );
define( 'LOGGED_IN_SALT',   'sljR`LE-u/%hX%qJ;Dmz_j_(rzU4Y $ICNwh^zaUR8L%R(`,E|fwr!=,r=~/Xa]7' );
define( 'NONCE_SALT',       '=@nG0:hr7T6l|r:}l:a)},LIbkUfIWN*~uwlyrx!G^,?P$6AA}&`Zb<B]By7uyuy' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
