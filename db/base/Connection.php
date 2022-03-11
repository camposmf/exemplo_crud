<?php 

    require_once($_SERVER['DOCUMENT_ROOT'].'\\exemplo_crud\\settings.php');

    class Connection {
        
        private static $dbname;
        private static $username;
        private static $password;
        private static $servername;

        function __construct(){
            self::$dbname = DBNAME;
            self::$username = USERNAME;
            self::$password = PASSWORD;
            self::$servername = SERVER_NAME;
        }

        public static function createConnection(){

            $connection = new PDO('mysql:host='.self::$servername.';dbname='.self::$dbname, self::$username, self::$password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;

        }
    }
?>