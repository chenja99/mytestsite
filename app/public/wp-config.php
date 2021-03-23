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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'ImMLUxV8H1LZU5oYJhNDSAPxLpq75PDC+ABadinc+39mPUlayV8bdJi2aB8KMsiBg+MmDXj1yjpbh14Zvuakqg==');
define('SECURE_AUTH_KEY',  'iNQnK7I5OcYewfTepMYkVpAYOHukelxlJ8IksAri8am68ewHtygOcqjgwdeEuI97c0Jn+W5g+ldZJZ+0u6MEDQ==');
define('LOGGED_IN_KEY',    'tjzhoCEiDjL3zGwYkyR7RObrGQjq0MeGc3vPcvMK7kZGcDbCG79jkkV/PmEKmRtMT/Lzqhe+vheK4o0R8MedSQ==');
define('NONCE_KEY',        '4kAuAJ/EQINQI1YQC9Z+7iV/7ponHz+vOSgpxJ4+r/X369l2Nzq0nSpTSfKKDPnaEkmeHIIP9CKVlfhuCuZ3mA==');
define('AUTH_SALT',        '/rSAHUfrFULsMZG8DaPh450w2qpRt3G1iTSpq7TMX3Vf6KpGTgBYoYgZuGuya/aU8SlTgSzOfdfdWcjOpZOyZA==');
define('SECURE_AUTH_SALT', 'L3tsNlzLj35lbkvs7+Bt/5fIeVT3zGfVOYtzUFC0hpNMT2YX3OvDZnY91IWsQYoGsHq2hLayv3ALcuVFHtt4Lw==');
define('LOGGED_IN_SALT',   '0gGk4RXFQip8gNJFODBFel1UEHylA9s+vomscuq4qOJYL+ze1LmwsNYIUEV5u+HB3DwV78uzb9mR6g+ywH+t+A==');
define('NONCE_SALT',       'PLQvtOsgOGWKp3CMyZGz9eTVwFwZJD1NqD06G+qrIW8Pyw+U+0aajuoRxSyKH1c0iR9ETu0DFCEn4BzRFNW2JQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
