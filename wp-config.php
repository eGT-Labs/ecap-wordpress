<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('ecap_db_name'));

/** MySQL database username */
define('DB_USER', getenv('ecap_db_user'));

/** MySQL database password */
define('DB_PASSWORD', getenv('ecap_db_password'));

/** MySQL hostname */
define('DB_HOST', getenv('ecap_db_host'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         ',AXaI&Ufl4,O]SA3|@;zbhu=1#{WMO3]oDEbwZMsn4hmL&k6Onr&UdaSm4gH_vj1');
define('SECURE_AUTH_KEY',  '6$5P~r~I$u2vTv-cGwV|PcMt[YX*yjryTp$Al-,l|)p% JF/Z_m|d2(3C}Fexo`d');
define('LOGGED_IN_KEY',    'zz1drbs0x~|%8 j*%1X1pRs8P??c?|I8fi}uq2L3d|)}Y}12W R|`%$w8Zi-`4N6');
define('NONCE_KEY',        'a-3;t`CBg:-: 2zZXt(es/QX9gc7I?V^3=3Mu(DbP*Z|m5j)5VSlgxEa>/wqFFI{');
define('AUTH_SALT',        '3i]RP>}e`SDA&ia7*Z+m}VwU2n,|g!_Ysot*0Up_4<>;*&i/:x.!Re4|?QP:JXc4');
define('SECURE_AUTH_SALT', '7MwDA~Y$Xizxz8dW-Z:o$QY^4bq4ug0v+OUcv4;]%D9Utz:pxoIMC<bLUs|Wp[rs');
define('LOGGED_IN_SALT',   '4,-0![%KEhw*Ak-SJ7F_[JBKXn+@Ld,HpCN7f|YLT4oS=^x~Yr;w;(Di-4&tU%T?');
define('NONCE_SALT',       '~_d+U*2wJb6iExBu)vGlm<U@sm6=U7|P`TOOrf3q_$B0%b}dDjra1M*:1WKITd~1');


$table_prefix = 'wp_';





define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
$base = '/';
define('DOMAIN_CURRENT_SITE', getenv('ecap_domain'));
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
