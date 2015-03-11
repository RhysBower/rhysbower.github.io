<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rhysbower');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'xo(y76pOzd!vrc-kH+8Eic+5r~i3tQE<PI3@f+Q6i>EuSfE?loQ1!6=JG3ld2`$:');
define('SECURE_AUTH_KEY',  '?t|^J,uozNJag&?,K5tGof)/|Jo6XB5=[=*vpHp*eY gIlyQ8H4zr9p|6gtPBtZ-');
define('LOGGED_IN_KEY',    'Q[sGC%+MW_ a3Wik^kXg/+c%0zmA};*j6Rgva--M|/!U_){fdgAYd|6dRwAh-Sip');
define('NONCE_KEY',        'qvqwGNlGHjF>ZNfWIQB}D NK 2%Q1$,ef# //=&[l^J?K;C+*ot ec4nfQz5}h^<');
define('AUTH_SALT',        '$,TZ[Ec8,JG6 3d,Mt.fr+y;zklU9OS@x$Uwm_kwv+9H;oXS!x# |oIy}nGi/| ?');
define('SECURE_AUTH_SALT', 'iHv+T)BK)-uZ(d{^U1s4{7taWz!xUs%15oXJaT-f=>~(G5d)@<@d<|.P2%/PCLTd');
define('LOGGED_IN_SALT',   '6~CI8%hAhIiZ>+0#2dM?<J<->u~h{faDA.[|n|q/E/popUokZc4bx-gMEI!4i3pK');
define('NONCE_SALT',       '8qB;a:>JR A%E}Vu0~$%>sfl}.ArOwSDI1~oK2nS)uEbs9<t+1N(6B#o*pwWIA,m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rb_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
