<?php 

    // Import Dependencies
    require_once("..\db\user\UserModel.php");
    require_once("..\db\user\UserBusiness.php");

    try {

        // Check Post
        if(!$_POST){
            echo "Dados não recebidos.";
            die;
        }

        // Load values from form 
        $userModel = new UserModel();
        $userModel->id_user = $_POST["id_user"];

        // Validate values from form 
        $userBusiness = new UserBusiness();
        $userBusiness->delete($userModel->id_user);

        // Show message
        echo("
            <div class='message d-flex flex-column text-center justify-content-center vh-100'>
                <h2 class='mb-4'>Usuário deletado com sucesso.</h2>
                <a href='../index.html'>
                    <button type='submit' class='btn btn-danger'>Voltar Home</button>
                </a>
            </div>");

    } catch (\PDOException $e) {
        
        die('ERROR: '.$e->getMessage());

    }

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous"
    >
</head>
</html>