<?php
/**
 * Class Database
 */
class Database
{
    private static $_host = "localhost";
    private static $_username = "user";
    private static $_password = "11111";
    private static $_database = "bogdan";
    private static $instance; // stores the MySQLi instance (Сохраняем в этой переменной экземпляр класса Database который назвали MySQLi)
    private function __construct() { } // block directly instantiating
    private function __clone() { } // block cloning of the object
    /**
     * @return MySQLi
     * @throws Exception
     */
    public static function connect () {
        // create the instance if it does not exist
        if(!isset(self::$instance)) {
            // the MYSQL_* constants should be set to or
            //  replaced with your db connection details
            self::$instance = new MySQLi(self::$_host, self::$_username, self::$_password, self::$_database);
            self::$instance ->set_charset("utf8");
            if(self::$instance->connect_error) { //if mysql (connect_error) display error
                throw new Exception('MySQL connection failed: ' . self::$instance->connect_error);//throw new exception ИСКЛЮЧЕНИЕ сробатывет если self::instance возвращает ошибку
            }
        }
        return self::$instance;
    }
}