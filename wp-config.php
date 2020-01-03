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
define( 'DB_NAME', 'eric-rico_db' );

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
define( 'AUTH_KEY',         '8V6i?.4zs0fC[C_A;gd/&:Jz MpFkZy**os*vw)VdH:QNn#RZqn=$_%utmG4!N?j' );
define( 'SECURE_AUTH_KEY',  'f)rUW&ez3f!=DV~TwY:{hG4/`Z[cunF=@ZU[?>}92|ns+y=XS;9g%m+8-^$WZC {' );
define( 'LOGGED_IN_KEY',    '9]/)k5Sd,y9-:HPDl3n)[aH+[*DtwX`l}KTTl,q2Vob}]jA1#&baWB.?`W0.O-V:' );
define( 'NONCE_KEY',        '9chF7-Z,6sSJ{_lD3Wn.G#[Sz3*f{_,:&+c~)v[,T?*-v%KW-^8LXi(T+5KrI)Tv' );
define( 'AUTH_SALT',        'mEIU^1F#!h%qPW8YaJKgB8s2TG(1i-gw/HVQDNOU_+KbgdC. EM]cTv!sf/G`3Mm' );
define( 'SECURE_AUTH_SALT', '/yWY+!&NyABM!/|qttH>z_2t>oxE@yA97{sJE*el/b$A%[U~[Zv; )HWrv~7#uO2' );
define( 'LOGGED_IN_SALT',   'Y3R N8*:]i3Z7|nbG3u&vN%wRNEYZ!FI$3LXhrFXl{0(>S&a}GD@oGWAZyIs/2rj' );
define( 'NONCE_SALT',       '1;cU`~{U>t^JiAcYlEvBIEs)r8.,nfMtBI%Jf;9md57>ZJG#Qa )TvA2(,t^Lc#9' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
