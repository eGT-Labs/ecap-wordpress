<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', getenv('mu_wordpress_db_name'));

/** MySQL database username */
define('DB_USER', getenv('mu_wordpress_db_user'));

/** MySQL database password */
define('DB_PASSWORD', getenv('mu_wordpress_db_password'));

/** MySQL hostname */
define('DB_HOST', getenv('mu_wordpress_db_host'));

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         '~U-M{Y+-U6+@BU)|%P_<z~X-dV~q<Ji~BP)p)Mnu7I}8Yhji, <;)<-qHi$%R?-D');
define('SECURE_AUTH_KEY',  'KJW>=VXQ&<Ubt4IyZd/L*@ R$N6pDL)d-7h!44|MbpG|+~^KO+Vm/thXmm;Z.2#V');
define('LOGGED_IN_KEY',    'zZgXdj7J]l(ccoy.IAJB!D6g4SyD^)nJ|5IJ3tBPC1&G49M6`F@+aTW1*4E@gHn1');
define('NONCE_KEY',        '^,OP|W[pX~k`w&k(FFCqSsg{zFJmAk,ut[0Jy5^Ja450dwKZk>}l0psh5-kR:S+4');
define('AUTH_SALT',        '=:n_.~*NIP5y71K;-4<&U!HNCXv`^Zr $,No-G(Wv#id*QQqhU_-h=f!;eJl>02r');
define('SECURE_AUTH_SALT', '-b|uVlR#VWrS?zC9iFO@!:}{)+e@UBRTe!{~l-;%E/L=#  k s5(k=ru Du(zT>|');
define('LOGGED_IN_SALT',   'Wg7^BVvZ5y=Y+iD/<)jVB;np<b5Qnux<R^aty.Aw9FWU|W5x8#*lygC+sh||o*Y5');
define('NONCE_SALT',       'OOdtJ-BV_y+F-i`6Xbp4F+pO+;?<1J`=@De+f>.FV;kh1,$.WsiBzXWHW3`N?r2y');


$table_prefix = 'wp_';





define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
$base = '/';
define('DOMAIN_CURRENT_SITE', getenv('mu_wordpress_domain'));
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
