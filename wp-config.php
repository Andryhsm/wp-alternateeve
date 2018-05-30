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
define('DB_NAME', 'alternateeve');

/** MySQL database username */
define('DB_USER', 'alternateeve-inc');

/** MySQL database password */
define('DB_PASSWORD', 'PHU0o*!utRebu$#@icRa');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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

define('AUTH_KEY',         '1OH8f*{o-j/?* dZ7eH98-CKbX^%9=HzsMUY2%C[<=crgKu=zhyk&#s`Ib3Djexc');
define('SECURE_AUTH_KEY',  '|bANP)xZ4XdQG1f~s#2<b3uMDiH>b9%=[+wmWsrQ8^+p?J{b0SY5a]H5QR-7`mMd');
define('LOGGED_IN_KEY',    '^SHW+kIpn_|hRz!ZU`.(;,viU{uzm9F0n*24&|?/TC%<zhofdco#,CIb[N;#i*HX');
define('NONCE_KEY',        'LAgCx7||wuT+0FWBu?BX&gB** KDtO5GT5VH!=KW6twIbJNOa{m)~9$w:Q#3NiGW');
define('AUTH_SALT',        'Ms1<jH1,IMtP!CHC}6^5~Q[|;S)Ps-^C0e}OKYeo^3CKYotL1?*o[)Ge?G$P5tZJ');
define('SECURE_AUTH_SALT', 'CHOQZ5Q9!L4 %J8*M7^?+`n$UtUj##P 5W=v[B|#0ML^7_?ig748dY.xdu!BOH{$');
define('LOGGED_IN_SALT',   'JE|N,0ZGDf-da@c3B<u*y)#y3({NsJ;n-CfnIN>n`g9jlzT1rtYTVRk&%6d8}~Cm');
define('NONCE_SALT',       'DcT^=aG9#LspAppiGX`aA7G{nLm89r4d8X24[z?p$FS=<T^lgsOgU5A2$z9+:Nb~');

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
