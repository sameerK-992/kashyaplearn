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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_taxi_ride' );

/** MySQL database username */
define( 'DB_USER', 'smit' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Smit!123' );

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
define( 'AUTH_KEY',         'fy%AXkKvsFt=0qC&a&r;x;jFzl>!rDj9wHe:1qD!k:w]F}_E1`.^(j*[Pd7B}w~8' );
define( 'SECURE_AUTH_KEY',  'v?2|YF:F|:h6j6M)WTYsx*vnJ<!Q2lkzF?ly?P+,:QO{ANqvUt)c<e=/i,iID3DZ' );
define( 'LOGGED_IN_KEY',    'IKD.Ei4+*asWFH{yNccUR9U!.U-5S$!]P3ynsit+wD&tETf(ZTZ`N|}=uk>hR^G1' );
define( 'NONCE_KEY',        '7{ad*Vay,kQP^WjAp2_^,vbw:zhbe4E-fL5U`4^t5.qY=IWZV&@W=mv(itm4.L-]' );
define( 'AUTH_SALT',        '%(S)H;u=sU`5M7oQ$]d`UIpVR6*bbq{|C}g$te}tUr9)BuFw%b:Nu`-MSuTNfs0u' );
define( 'SECURE_AUTH_SALT', '@m3N][|_kwx0j6D>~#!8L<$gW=J<0,iaP*:n[>YeiZ:Qz8HTaG~<+&WNqZu+;aA ' );
define( 'LOGGED_IN_SALT',   '=0]<U+`grHDJ8p,B6 ~TfLGllii|LUIvP+SguNAY*O,]},vJI3K,^M.&N{cRb@A3' );
define( 'NONCE_SALT',       'fgEC$$ K4z(l^P|3U =5HHIh=PwoEbp3yG18BFM0B&g9W]I3J12W`4O6hL^8Z=.5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mtr_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
