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
define( 'DB_NAME', 'books' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ':3!lt}vU1[qqCtSeHF^e7QHEHH[.QOX5Nj.7b7c=|%7:` R`VU8pEO-( ^<8hy,Q' );
define( 'SECURE_AUTH_KEY',  '1h)} tE=JxyAW:jQFxg|L2N6;Bk/w WMsiIa]^y#OQ,TQjM8`=L aJ+E}5E }8cA' );
define( 'LOGGED_IN_KEY',    '4?akKy07H>Gxc}kUxj<jT8SlFJ[O4AlK}p~=Z@a3a?n[VK[h[$xu]<>|T{N`$N]Q' );
define( 'NONCE_KEY',        '1MszEf4ctTvk`@WOrH<qalHA]Zw2RAuHgZ%7>6S_>Ru5P^QhSm@z,h_Tf@fNo&pE' );
define( 'AUTH_SALT',        'Djr|iEnfzgt6~eM|p=nW7HbMP;3+.EYvj5:BCNgz)q5.+!U|&>rpQkKu}?Ro(3ku' );
define( 'SECURE_AUTH_SALT', 'c*1j[rjqrWYNPa/R?m2psdf$c.MUZTgA=0!b*kv6%=Er[- l }!4CH$HaR*(mUSV' );
define( 'LOGGED_IN_SALT',   '?tt&$oJ/`rwkBnc_pVD/dbEf6x},#?|1XU@=Ef_X*.qUbq6F,S`:r]{9Ei0^Dulj' );
define( 'NONCE_SALT',       '|j/s&sPj08crARuwtEEQ%kXQ_0_][f^L|<gE16~s5#qIk%0BVO*$VU)=Ewqg!2sv' );

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
