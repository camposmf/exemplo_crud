<?php

    require_once("..\db\user\UserBusiness.php");

    // Get values from db
    $userBusiness = new UserBusiness();
    $users = $userBusiness->list();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>List users using PHP</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex flex-column vh-100 justify-content-around">
        <div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">E-mail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($users as $user => $value) {
                        echo "<tr>";
                            echo "<th scope='row'>" . $value["id_user"] . "</th>";
                            echo "<td scope='row'>" . $value["nm_user"] . "</td>";
                            echo "<td scope='row'>" . $value["ds_email"] . "</td>";
                        echo "</tr>";
                    } ?>
                </tbody>
            </table>
        </div>
        <div class="text-center">
            <a href="../index.html">
                <button type="submit" class="btn btn-primary">Voltar Home</button>
            </a>
        </div>
    </div>
</body>
</html>