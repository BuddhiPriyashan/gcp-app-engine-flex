// ** MySQL settings - You can get this info from your web host ** //
if ($onGae) {
    /** Production environment */
    define('DB_HOST', '<SQL_Instance_Private_IP>');
    /** The name of the database for WordPress */
    define('DB_NAME', 'DB_Name');
    /** MySQL database username */
    define('DB_USER', 'root');
    /** MySQL database password */
    define('DB_PASSWORD', '<DB_Root_User_Password>');
} else {
    /** Local environment */
    define('DB_HOST', '127.0.0.1');
    /** The name of the database for WordPress */
    define('DB_NAME', 'DB_Name');
    /** MySQL database username */
    define('DB_USER', 'root');
    /** MySQL database password */
    define('DB_PASSWORD', 'DB_Root_User_Password');
