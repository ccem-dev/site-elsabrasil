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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'W7iGGu5G' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'Pw)2XvcqAZ3n*4AATtemHq7dJOcI][>kf6dcdjjF=4=;GvqLa4<<*0v}LeGc!^+~' );
define( 'SECURE_AUTH_KEY',   '%<!4yi=qe8V/xN8@4(SU!cpRZ7cXeyC,Q}3vKN92/g]y*FGr9ORm;Gkv3JpuR,- ' );
define( 'LOGGED_IN_KEY',     '|siv?.@@Q1DOq!.I%6wG @Dyit!x+qlBQ38FMihBInh~4) _`U1g}~*7U#B7;MX2' );
define( 'NONCE_KEY',         '(zZ%U,%%H$4+eOR8v1ZM<70:i`3/R@5$Kl9nf3Xtow@{gD_GN.*/0FiLU+J?Aeif' );
define( 'AUTH_SALT',         'lF[P2B<6t98fJS2FOYLm0>&WN u9p=vC0OW:$0dHwo=4&8ziyXIFXADErD}r5xI@' );
define( 'SECURE_AUTH_SALT',  'XcpAfn7r{86|(s,!Q{+/g?eRxzS2N+3BQ_E;J_kQ[)E Nr;t#4#8t.?4K2D;KA1<' );
define( 'LOGGED_IN_SALT',    '4fZ^&|K#6()3wf*GX7aum,(=ghj3`6v:1cl,C?/A<;om$=|%MA)Xbr(SyAncrUz.' );
define( 'NONCE_SALT',        '<,S4tJ>0qK^&*CxZDeS1F#WGeo}F;uSW:p6-FM Do1~d9Y?Sl#g)NEa1?)qjg;WM' );
define( 'WP_CACHE_KEY_SALT', 'w>r*d{h5`Wy1N}3!0O|GE<du%eJ3{9XWZ2Q_ZVewL*/KX!D`A/qjiS$VA >Qfuk@' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jiban_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
