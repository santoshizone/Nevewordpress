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
define( 'DB_NAME', 'nevewordpress1_db' );

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
define( 'AUTH_KEY',         'Ur-w[~y#p6-MiGy2Ksu<2I}<=E-3AfDU:bpm daJL*uN3!}%{7WWtdBEZVH`@Bu-' );
define( 'SECURE_AUTH_KEY',  '?/Ly5#H3EaB;S_$>$rqqC?2uEYSOywtm9v:B><]YV$S 1HHPPdCu#Ej,HyI_.I7V' );
define( 'LOGGED_IN_KEY',    'MD]_LL |*@4W67x,@@~P`H2ZV j(TkX:iLJ.41P^`aM,8U/K~[st}vAo!R|:1uA*' );
define( 'NONCE_KEY',        '3^EbOVh(Lm:{bxr9eE,e|fzXnABAaTS ~/;yGeYF`aV_hk{U/]`Qy4btU1D&ZdGY' );
define( 'AUTH_SALT',        'hJWEQjB;qZKg2k:Pbe$(N)RFb/m*1jnh4+G8P/vhiB}h^^<lo:s+PBUg9oqopA%7' );
define( 'SECURE_AUTH_SALT', 'VR~}sr;T8Rg-3OX;uM0Wu&kIii<K]`lP0-@!|v`ajH ;xj@L9pOzR2Z&g-zv Qf{' );
define( 'LOGGED_IN_SALT',   'Kfe!X7uyb*d2?r/JrBD^<_jz!t|j9C)v6Vha;/EI;,9pc|eg-na]#l.Ro h1]$0I' );
define( 'NONCE_SALT',       'o|!9%@R_+!-)F6pRA`RB{1)u8#4ql^ON=-I7hp+ALx%>g|EFMKK0kvJ%tQ?y.4{s' );

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
