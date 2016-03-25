 <?php
// MySQL settings
/** The name of the database for WordPress */ 
 
$connectstr_dbhost = '';
$connectstr_dbname = '';
$connectstr_dbusername = '';
$connectstr_dbpassword = '';

foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_defaultConnection") !== 0) {
        continue;
    }
    
    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $connectstr_dbname);
/** MySQL database username */
define('DB_USER', $connectstr_dbusername);
/** MySQL database password */
define('DB_PASSWORD', $connectstr_dbpassword);
/** MySQL hostname */
define('DB_HOST', $connectstr_dbhost);
 
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 * Turn on debug logging to investigate issues without displaying to end user. For WP_DEBUG_LOG to     
 * do anything, WP_DEBUG must be enabled (true). WP_DEBUG_DISPLAY should be used in conjunction  
 * with WP_DEBUG_LOG so that errors are not displayed on the page */


define('WP_DEBUG', false);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY',false);

//Security key settings
/** If you need to generate the string for security keys mentioned above, you can go the automatic generator to create new keys/values: https://api.wordpress.org/secret-key/1.1/salt **/  
define('AUTH_KEY',         getenv('authentication Key'));
define('SECURE_AUTH_KEY',  getenv('secure Authentication Key'));
define('LOGGED_IN_KEY',    getenv('logged In Key'));
define('NONCE_KEY',        getenv('nonce Key'));
define('AUTH_SALT',        getenv('authentication Salt'));
define('SECURE_AUTH_SALT', getenv('secure Authentication Salt'));
define('LOGGED_IN_SALT',   getenv('logged In Salt'));
define('NONCE_SALT',       getenv('nonce Salt'));

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = getenv('DB_PREFIX');
