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


define('WP_HOME', 'http://project.codekernal.com/britishartificialintelligenceawards');
define('WP_SITEURL', 'http://project.codekernal.com/britishartificialintelligenceawards');


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'britishartificial');

/** MySQL database username */
define('DB_USER', 'britishartificial');

/** MySQL database password */
define('DB_PASSWORD', 'Ab!KdAIddJD5AQ{sph');

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
define('AUTH_KEY',         '^+aa{Y0!6%I]X=0/0+iG={n>Cr0nR2pzNH_T0p4w{9!1<rpS]$FViD1&x4PnpfHL');
define('SECURE_AUTH_KEY',  'cPi7M;j>BSlBDHrh5PIIn.3@We*y@ei|E:JLo/hZ7nt(~>HiPe&jCGuv&+|Mfo(>');
define('LOGGED_IN_KEY',    '!,l2](#BUJ?^i;hnDOgg]<2Rm?6Mbpgt@asmiIOi^-DFQ8Fu.zev~]byG>C^eo?H');
define('NONCE_KEY',        'o5w<(I%:}-$%>Rsw1@}4}%i@9+%NN&]KTfcq~VZ)KRx%SJT6#0y#&<Xlf>N6vVIp');
define('AUTH_SALT',        '/RNFB3d)m#iu6U>DL*,|?t@,O(AiSu!CDc*L~w(5OhyJG,dZT^mmG8LzD{S+&Q4z');
define('SECURE_AUTH_SALT', 'o&n/^5g#%}(}!dMX6]*:6F?M0!Qu[T&_{|BGwWHz;s9ft}ZRVv~tfnSXAk*Zg;L5');
define('LOGGED_IN_SALT',   'YgBz{wlp4<xjr=DtJjUYU;W:T:j!4%[7(zj/t!4K/ GM6}/d)B=d-xbz;ln_}ko8');
define('NONCE_SALT',       '%oZMVNXq0~AZh1/q76J8d7pgH9`UyV.;4BAOI9.wzqYY2J:XvPngCp9xv1DWwDTW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bp_';

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
define('WP_HOME','https://britishpublishingcompany.com');
define('WP_SITEURL','https://britishpublishingcompany.com');

define( 'WP_POST_REVISIONS', 10 );
define( 'WP_MEMORY_LIMIT', '1024M' );

@ini_set( 'upload_max_size' , '1024M' );
@ini_set( 'post_max_size', '1024M');
@ini_set( 'max_execution_time', '300' );
//@ini_set( 'display_errors', '1' );
//@ini_set( 'display_errors', '1' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
