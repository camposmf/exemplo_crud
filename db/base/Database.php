<?php 

    require("Connection.php");

    class Database {

        public static function ExecuteInsertScript($script, $params = []){

            $createConnection = new Connection();
            $connection = $createConnection->createConnection();

            $statement = $connection->prepare($script);
            $statement->execute(array_values($params));

            $connection = null;

        }

        public static function ExecuteSelectScript($script){

            $createConnection = new Connection();
            $connection = $createConnection->createConnection();

            $statement = $connection->query($script);
            $connection = null;
            
            return $statement;

        }
    }
    
?>