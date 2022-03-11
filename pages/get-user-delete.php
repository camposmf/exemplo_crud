<?php

    require_once("..\db\user\UserBusiness.php");
    
    $user;

    if($_POST){
        $userBusiness = new UserBusiness();
        $username = $_POST["nm_user"];
        $user = $userBusiness->getUser($username);
    }

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>List users using PHP</title>

    <style>
        input:focus {
            box-shadow: 0 0 0 0;
            outline: 0;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex flex-column vh-100 justify-content-around">

        <header class="form-control form-label text-center">
            <h2>Get an especific user to DELETE</h2>
        </header>
        <div>

            <form action="./get-user-delete.php" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Digite um username válido" name="nm_user">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit">Pesquisar</button>
                    </div>
                </div>
            </form>

            <form action="../events/delete-user.php" method="POST">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Username</th>
                            <th scope="col">E-mail</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(!empty($user)){

                                echo "<tr>";
                                    echo "<th scope='row'><input class='border-0' name='id_user' value=".$user["id_user"]." readonly /></th>";
                                    echo "<th scope='row'><input class='border-0' name='nm_user' value=".$user["nm_user"]." readonly /></th>";
                                    echo "<th scope='row'><input class='border-0' name='ds_email' value=".$user["ds_email"]." readonly /></th>";
                                    echo "<td scope='row'><button type='submit' class='btn btn-danger'>Delete</button></td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </form>
        </div>
        <div class="text-center">
            <a href="../index.html">
                <button type="submit" class="btn btn-primary">Voltar Home</button>
            </a>
        </div>
    </div>
</body>

</html>