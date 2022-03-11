<?php 

    require("UserDatabase.php");

    class UserBusiness {

        public function save ($userModel){

           $database = new UserDatabase();
           return $database->save($userModel);

        }

        public function update ($userModel, $where){

            $database = new UserDatabase();
            return $database->update($userModel, $where);
 
         }

        public function list (){

            $database = new UserDatabase();
            return $database->list();
 
        }

        public function getUser ($username){

            $database = new UserDatabase();
            return $database->getUser($username);
 
        }

        public function delete ($userId){

            $database = new UserDatabase();
            return $database->delete($userId);
 
        }
    }

?>