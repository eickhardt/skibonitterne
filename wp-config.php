<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'skibonitterne');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'c+F85|9hE<x!4h76-?B:$2uBV@fV)v}f7zYn1_Xn!RP0{AJ^eBC~  @RVAp}C6hD');
define('SECURE_AUTH_KEY',  ':Rz;0`XgIbP,J;7Mi:(6!za[NT}:Wu%c=DX~>f=qDP{%{a%e|vet {|KZS<Q:l C');
define('LOGGED_IN_KEY',    ')$`2tzk~/;;#r=19P/+;w.-p{c`2,B+b,:9F62&0tp$3*s,7|7,@5|*+Tp42{M?Y');
define('NONCE_KEY',        '7nun$@Fh*uYYhVy}s}TtO#?/w[c:cHD+fCyKy8q t~$:~aNl20}P.csUGDX|I$8P');
define('AUTH_SALT',        'KJItI,6^O^!no1=!-|2EyYPj5p^kSR=f$|{jT|FFiSa`F</l#1WIYC.i>Y=L~d[r');
define('SECURE_AUTH_SALT', '7*&l-qHa0.]mHy0g{-`v&CY^%w=P.w^9r|$)5k.V$sWm-RJ-3e3hnV@&cJmCt3/+');
define('LOGGED_IN_SALT',   'C(N-rhaWnno!A,w-,NKZrO``a@?b}F7a@eD6aNguWhq`%%4-jY=j^HS[r#5]/>E*');
define('NONCE_SALT',       'Vh#UIf]33OtJ8q+qc-t=uh|xs/Zo3K`;FOlNWOO|{X=u;Le2&/hvvKRg^o28[*6W');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
