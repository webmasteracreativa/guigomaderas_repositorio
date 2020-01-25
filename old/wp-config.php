<?php
//increase WP Memory Limit
define('WP_MEMORY_LIMIT', '256M');
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
define('DB_NAME', 'guigomad_carpinteria11');

/** MySQL database username */
define('DB_USER', 'guigomad_carpint');

/** MySQL database password */
define('DB_PASSWORD', 'EnlaceNorte11');

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
define('AUTH_KEY',         '(F?>O`>;2b+),AE9T9!I`::h)#g~+N47tX$5QE/85Fvu}}pc|*eD2@wb1:CBdM^Y');
define('SECURE_AUTH_KEY',  'q2`niWCilwZ[k)IVSV;($^7>iwsWW|{|4SN?M,cs;yaT+KS2odv_@lK&kY3_O7iJ');
define('LOGGED_IN_KEY',    '{Q<f$p+D}V_92:!iC5mvHwuIV&avQFN J{0g~PFR:n9I8ig O=u,(tCCn.Doo*m)');
define('NONCE_KEY',        'LDknH~$41}tNDrP58g]sBx2IwlP{-O*-/0p?Wh!`S-o,-;|ZU<!>1rVzuBI~:r 8');
define('AUTH_SALT',        '-|Imh?&.[tby<pKG c92m3P}_@jZ]]4rfHH{ jiDzdoneJ+HxJ?<D_DR]yt.#Lv<');
define('SECURE_AUTH_SALT', '6cdj5*Ft]bIe|^t`dI ^X2^[nIBft_+KVQX9VSQ3Hk0DTE~XU#hINc#T|&@GM2NN');
define('LOGGED_IN_SALT',   'a%,3N {dFTB<2Ql=EwJoP^k0^4pkp-#%d4;d%Kb*`^gs[]M6VVLv.`tI=)jv@A6U');
define('NONCE_SALT',       'VSU*OXfMw?2@C=^XXHhX/+:vAS24kstB4yXVY*9u`9c3=&1;FGfJL)y$/ca`QI$@');

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
