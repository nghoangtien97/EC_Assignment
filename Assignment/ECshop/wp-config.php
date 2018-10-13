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
define('DB_NAME', 'ECDB');

/** MySQL database username */
define('DB_USER', 'ECDB');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%5YG-xwqq%R/j@}l%,lbsf6:@,I6>0x2@u7E0[&X?JIyn^A,GcN+yC%;9DWp4sC?');
define('SECURE_AUTH_KEY',  'p84x`K,2,#[9+ZSlB$dnqEV,Rgqqi5J/X1xMR;xSO&[UHF `X8[G{% R/ bG$uKR');
define('LOGGED_IN_KEY',    '%`B2Ihw$n?K1$_= LWQp>_hf!@da3~s83zZagDsCP^Im(TfJK<VkZa?,,[YVXgXA');
define('NONCE_KEY',        '#jR6:jqA>oW`c,wyOQ,qD<,jLR BX9zbv{2XH:xY^R~sXvp`>J?yj]*h ,mfB,A`');
define('AUTH_SALT',        'mt`}UcLw6c_>-l,dbArkS3n]=@*bRR{ B{lTXHjVZpxe)Y:hV8yNJnzdM~y&4A&k');
define('SECURE_AUTH_SALT', '3@#_elGA.{h^V=p)qi=(dW| 7JA?B=7w3;m:<elI79[s<[_<nS+s@<xYO4|aeNnP');
define('LOGGED_IN_SALT',   'wM=zH9r8_$=a@vDTcmNZFsaVJu>gTh4K =`pIjFGR _C-w<Svc8EhC?~Eu.%-!f+');
define('NONCE_SALT',       'NLHtiF{V,0H=I+>EefzwviS4l@@P>}I;[MOK08}-zww}?%qHkZ2E&WiEVh&C+YB*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
