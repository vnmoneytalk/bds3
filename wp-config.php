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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'WP_CACHE', true );
define( 'DB_NAME', 'demo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', "" );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
//* Authentication Unique Keys and Salts.

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '5+B(i?nH! 7d^cc{/[>rh>=rtD(SYA6[279I5UEOQES?0/2+7dcF$<]1B&YXa$km' );
define( 'SECURE_AUTH_KEY',   'Jlnv%]7)t!(RJXj/9;%m4#4)y^@_YA8/A_rjTX[aDX s/B_Uz$,Qn)q=q^H5bltI' );
define( 'LOGGED_IN_KEY',     'FMD&*1^$r.ZBH1i{&oh]E%1XoN%?*Jp(ZJf)Rrr<j#nAbN)^9R6@.gpJ^u~HTz?6' );
define( 'NONCE_KEY',         '/L5{_5(&uGbMR.T%LZ{Km[!k$MasC6r`c>>e.CCbPNQ&q^R+:pFW5NFAes1aX.]t' );
define( 'AUTH_SALT',         ']$]#.}^{*%((i:5K6~&$@Tpzt6DaeqREx&[u=c%cFi84((IPh^&B]vs gqq>-2$O' );
define( 'SECURE_AUTH_SALT',  'u(QH.b{uYa[+#0&[r_g(6ZkG.IU M#2#jw-K_lR5kP9DD}_iU+X,ONVSl|%#<c7o' );
define( 'LOGGED_IN_SALT',    'RAYK*C$VU?ph_wIA{4)]1q%A0//[WC3NzL2x,X|CSP560zSz&;jk(nLk1Az?IRl(' );
define( 'NONCE_SALT',        'e5@AM1f?5P|y?mU@oUi^I@gIZMT6$KkWCT[=(Y&NWkjN.-{%e:8Oo#}E0BE.YRqg' );
define( 'WP_CACHE_KEY_SALT', 'kaQc4qPNzI%&uvg/NP1^-zw{J0o<#FJA.# GXJ-]hZk?eFN!dr odZj%4fq&3[iP' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
