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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_act2' );

/** Database username */
define( 'DB_USER', 'Jayni_02' );

/** Database password */
define( 'DB_PASSWORD', 'jenn02_jenny_0506_2' );

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
define( 'AUTH_KEY',         's{ge2Q+AGz# .2(R^&J~mH8^L#i&]=@U%tgni^:FL:t{`:vyQKL>4M}1cmkCN<Dr' );
define( 'SECURE_AUTH_KEY',  'YUOp`[ZXYc8qt!ggL.?o~#{w~xSr+#?f!CK$i.|,}5z?<?82i/[^@XhcislkA$~4' );
define( 'LOGGED_IN_KEY',    '.P:xsz.@k42+l.tSS[=2<V`p[)Pc#NuAj=y]y]+(S+oC+SL>vgqinfEgGA(9$P=M' );
define( 'NONCE_KEY',        'w$%LB;:H1U8Rc].mwS<,]R.XP>0&mo{5lLi|X8eNR5Nw,JL=WuHRsL`!r9a<AKXQ' );
define( 'AUTH_SALT',        '+545@OUb0MgtB;$,lFZ-gH?S!cr6S(h%G7}GMiXWr/!L,UW`rwyg.@PR=/-+,wND' );
define( 'SECURE_AUTH_SALT', '/szl--<$Q*_2,c,@GpUDY;X1aA6z=wUzsx)qFObQ]TZsqZP}&jX+  5]Q8mzyp(f' );
define( 'LOGGED_IN_SALT',   'db>GN^]Se,|sOUF7Ax&[u3;Wv_rB%b:*b[Iq/J{y}/JrIDjH4w(Uv;;*2[i{fCqa' );
define( 'NONCE_SALT',       'c.6!nm3q&)8BM^{ wA?5h{FJ~BR1lDchdCpUld]a!P&G/ 4saR(H-r<+i.CpM?s_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
