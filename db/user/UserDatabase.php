<?php 

    require($_SERVER['DOCUMENT_ROOT'].'\\exemplo_crud_php\\db\\base\\Database.php'); 
    
    class UserDatabase {

        public function save ($userModel){
            
            $params = array(
                "nm_user" => $userModel->nm_user,
                "ds_email" => $userModel->ds_email
            );

            $fields = array_keys($params);
            $binds = array_pad([], count($fields), '?');

            $script = "INSERT INTO tb_users (".implode(',', $fields).") VALUES (".implode(',', $binds).")";

            $database = new Database();
            $database->ExecuteInsertScript($script, $params);

        }

        public function update ($userModel, $where){

            $params = array(
                "nm_user" => $userModel->nm_user,
                "ds_email" => $userModel->ds_email
            );

            $fields = array_keys($params);
            $script = "UPDATE tb_users SET ".implode('=?,', $fields)."=? WHERE ".$where;

            $database = new Database();
            $database->ExecuteInsertScript($script, $params);

        }

        public function delete ($userId){
            
            $query = "DELETE FROM tb_users WHERE id_user = ".$userId;
            $database = new Database();
            return $database->ExecuteInsertScript($query);

        }

        public function list (){
            
            $query = "SELECT * FROM tb_users";
            $database = new Database();
            return $database->ExecuteSelectScript($query)->fetchAll();
        }

        public function getUser ($username){
            
            $query = "SELECT * FROM tb_users WHERE nm_user = '".$username."'";
            $database = new Database();
            return $database->ExecuteSelectScript($query)->fetch();

        }
        
    }

?>