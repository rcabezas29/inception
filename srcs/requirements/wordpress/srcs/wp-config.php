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
define( 'DB_NAME', 'Database_name' );

/** MySQL database username */
define( 'DB_USER', 'Database_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Database_password' );

/** MySQL hostname */
define( 'DB_HOST', 'mariadb' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '(;b.cS-TC@ivcdVL]XNd$WZB6o_+10^@+a{ct}E@Dy.rzb-#;`v=7RWQu%Vt%V&3');
define('SECURE_AUTH_KEY',  'OJs6lc.>AXy4S~YLgEi-Bvq{9~uwJAa#3^.T`  /x3(+)*Q(jA91xTFF*j[pvP ~');
define('LOGGED_IN_KEY',    'nLE6E&u=XM8zn=5P}dAS-766pl;`?%0:0$8zeNji]Y-{rLlZR/`,^L,JKJpXuR-&');
define('NONCE_KEY',        'fAoe]U=s;GhB0F5Z&+M8g6e!DHPpllr+OqW7xXG7p;(|ND=krQD?Rg,2Kt]==Z+N');
define('AUTH_SALT',        'wscjF!9AbVFA<&u`UUQ ?R(>!8(A2[bWj+B(;>sGTbMe1{m)#9^fmIh6eu+N+1^R');
define('SECURE_AUTH_SALT', 'y(m^!0m-#s<}ZIzQ0x=Wx3.6c.B-<ONzvPp(:vP|_> {V4y?Q{Yl~kz!p:=1y-*b');
define('LOGGED_IN_SALT',   'Pp&qKjAFeCYy!_cn%x2v{w.*[HB3q7S0/tr.zph-Dm_}|H.I1`> 0G)jw)JjUtI]');
define('NONCE_SALT',       'IWj,NVM<h$E/_4@|;q- k O.ZbRI;O1e4pabX,js`5B`#cn0@kc*kMhu$(gqio<o');

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

$_SERVER['HTTPS'] = 'on';

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
