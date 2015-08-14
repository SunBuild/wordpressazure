 <?php
// MySQL settings
/** The name of the database for WordPress */ 
 
define('DB_NAME', getenv ('DB_NAME'));
 
/** MySQL database username */
define('DB_USER', getenv ('DB_USER'));
 
/** MySQL database password */
define('DB_PASSWORD', getenv ('DB_PASSWORD'));
 
/** MySQL hostname */
define('DB_HOST', getenv ('DB_HOST'));
 
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 * Turn on debug logging to investigate issues without displaying to end user. For WP_DEBUG_LOG to     
 * do anything, WP_DEBUG must be enabled (true). WP_DEBUG_DISPLAY should be used in conjunction  
 * with WP_DEBUG_LOG so that errors are not displayed on the page */


define('WP_DEBUG', getenv ('WP_DEBUG'));
define('WP_DEBUG_LOG', getenv ('TURN_ON_DEBUG_LOG'));
define('WP_DEBUG_DISPLAY',false);

//Security key settings
/** If you need to generate the string for security keys mentioned above, you can go the automatic generator to create new keys/values: https://api.wordpress.org/secret-key/1.1/salt **/  
define('AUTH_KEY',         'Lq&7vYFO:5Zv-:E(yvwqstc*k%tQz%7o_Pwrm-mGZmroLj+Oywoe#R-ZB5 S W7Z');
define('SECURE_AUTH_KEY',  '(l@3DI6^8m}4s73~ry/r,|G|10hRJP?(UVky@w.-m=}-^f*YGT wy.Nut:0?WV*W');
define('LOGGED_IN_KEY',    '.*=kJ)[F[NE;Ig JdJit]CwIVty8^!G6y3>x2!ldL7cg?Y!yHg^#?YJU^miPTV@r');
define('NONCE_KEY',        '<{Y6*WQ)|I&UDbF)07fg}FqNFL2^lRD 9=+--7am2`vB7/+p$5.R:KGIS0Lx*}2e');
define('AUTH_SALT',        'vCZnubCdyWd7fV07n,Vy3K[=)3+zG9(WE>etg;x7maFUS`Mow;Yeu0Uje[c{8;bE');
define('SECURE_AUTH_SALT', 'x,!KN{,y)+}r|KY>R!28c4|>a^yo-Mq<~$(%JWv{j{cAIA,yl23T4My@?(Uu]sms');
define('LOGGED_IN_SALT',   'B*+}B-Kw( jBix+W7JHu}Nmm+xe[CGf=RrtM ]K;/2S!5)DY_h8&CK}Qvr?$T:l]');
define('NONCE_SALT',       '0]uFbbkZ{&t|mozg{kDiFO6]KYpU,laVUSXkAH/*hfXtqca,hCK-s++eJ280N)!F');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = getenv('DB_PREFIX');
