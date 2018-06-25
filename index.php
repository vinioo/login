<?php
include("includes/config.php");

if (isset($_SESSION['userLoggedIn'])) {
  $userLoggedIn = $_SESSION['userLoggedIn'];
}else {
  header("Location: register.php");
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Redirecionado</title>
  </head>
  <body>
    <h4>Login efetuado!</h4>
    <a href="sair.php">Sair</a>
  </body>
</html>
