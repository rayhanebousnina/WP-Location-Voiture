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
define( 'DB_NAME', 'project1' );

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
define( 'AUTH_KEY',         '&,8JtrgD|i$-KavMbL`kf,rir@+yZkkdMG`C1p18c(TKRIcP0zNj+nC?KaPw&^?]' );
define( 'SECURE_AUTH_KEY',  ']$X[u5YZ(RY#9XIpth/@=#iZ}a|Y2hOpY!c>4{|V|Y5`]fuLb9;(Y@K[aR!&7~8.' );
define( 'LOGGED_IN_KEY',    'yR{M~@464bb8 yReO*0SJiGXhVn+FkMdm(`.|ktrQSiCL^R-u@5F 9oVEKVeP2_{' );
define( 'NONCE_KEY',        'tQ[WZ!L>Rw34Nbn-E;}]9(g[Z7$<}Q3^4|5nQ[WgyjV$!]h)?m,1bI/{_Q31}&,.' );
define( 'AUTH_SALT',        'fK_/f/r8U/}zMN^ %J-C!LuiqvcO6uAsz%LXc5G`f?Pk+4;+l*w^k-5vWr1J+|TX' );
define( 'SECURE_AUTH_SALT', 'OGJdzi/S>u@6,9jobt5@XBi/lm[We{c;Y? <SD.]&JAPMJtJd}JkZyN&`2Jyb}@J' );
define( 'LOGGED_IN_SALT',   ')i5t+)m/!V?(n,sRAU8OytHDD~Zq$xw^]&}1~;;O}1vO;9_)[,md8@dmcY3NN0.s' );
define( 'NONCE_SALT',       'n<AK:5LBVVhj&0vLao-4Nobuu|~#F+b#:x1~+LW#YMd6{8%6Ihqw]l_p qCX,BZ6' );

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
define( 'FS_METHOD', 'direct' );
