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
define( 'DB_NAME', 'Store_bros_build1.0' );

/** MySQL database username */
define( 'DB_USER', 'saifking' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SaifKingAkash@103' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost/Storebros' );

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
define( 'AUTH_KEY',         'u)o%IAa+H-Jza$RCxJD>`w4WA*||A:?25k @,a@ UQdbds`[j~B>.Wgj]A+&P*pi' );
define( 'SECURE_AUTH_KEY',  '!n@nPw%04|x]{[K$]vr-,osZqWnUn(|G[taeFujgXlH6zQ]E>LGS~TCEHgXp-1U8' );
define( 'LOGGED_IN_KEY',    ']20/C<,E11nb-#^Z/*EN~H|f>hCO]qYf}P[-$j3(ym!Q@zD$fC{Yi2?g[nI3RT<M' );
define( 'NONCE_KEY',        'Of:}]qgU5217Y^mSd E{s5@7SIPN{dW5&s(?h Kka~DP<tl`7aJ(jUdttV6:<aF8' );
define( 'AUTH_SALT',        '6ua&_2Zi~sN^h2fDl>a$?s:nEG|PV:*>FtVEZy]f3}~lRx.quVc.U,Fl29fqJ3k ' );
define( 'SECURE_AUTH_SALT', '<V^cDOlVQ(uU>[=z/Z*IceQE+g`l?&VOLG^Zg4AdX-V&/<7,g7ehx*d(yIL-=`/4' );
define( 'LOGGED_IN_SALT',   '*eh]OT6Gw|V<32e`n+DQt(YK.#Y{M{7c&D_}$yCZvOXg_hR?3V=t_sf0W+VwDEcp' );
define( 'NONCE_SALT',       '`<+.)0#41}SM #Us.::4A8Wt1z`],XMj^hBycR{^Kfw<T:qnux>1Q:qWS7zzxyfG' );

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
