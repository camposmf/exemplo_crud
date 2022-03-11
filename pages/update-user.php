<?php

  // Import Dependencies
  require_once("..\db\user\UserModel.php");
  require_once("..\db\user\UserBusiness.php");

  // Check Post
  if (!$_POST) {
    echo "Dados não recebidos.";
    die;
  }

  // Load values from form 
  $userModel = new UserModel();
  $userModel->id_user = $_POST["id_user"];
  $userModel->nm_user = $_POST["nm_user"];
  $userModel->ds_email = $_POST["ds_email"];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update User using PHP</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
  <div class="container d-flex flex-column justify-content-center align-items-center vh-100">

    <header class="form-control form-label text-center">
      <h2>Update User</h2>
    </header>

    <main class="w-100">
      <form id="fm-create-user" class="form-control" action="../events/update-user.php" method="POST">

        <div class="mb-3">
        <label for="inputUsername" class="form-label">UserID</label>
          <?php
            echo "<input type='text' class='form-control' name='id_user' value='".$userModel->id_user."' readonly>";
          ?>
        </div>
        
        <div class="mb-3">
          <label for="inputUsername" class="form-label">Username</label>
          <?php
            echo "<input type='text' class='form-control' id='inputUsername' name='nm_user' aria-describedby='UsernameHelp' value=".$userModel->nm_user.">";
          ?>
        </div>

        <div class="mb-3">
          <label for="inputPassword" class="form-label">Email</label>
          <?php
            echo "<input type='email' class='form-control' id='inputPassword' name='ds_email' aria-describedby='emailHelp' value=".$userModel->ds_email.">";
          ?>
        </div>
      </form>

      <div class="form-control mt-2 text-center">

        <button type="submit" class="btn btn-warning" form="fm-create-user">
          Atualizar Usuário
        </button>

        <a href="../index.html">
          <button type="submit" class="btn btn-success">Voltar Home</button>
        </a>
      </div>
    </main>
  </div>
</body>

</html>