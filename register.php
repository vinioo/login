<?php

  include('includes/config.php');
  include('includes/classes/Account.php');
  include('includes/classes/constants.php');
  $account = new Account($conn);

  include('includes/handlers/register-handler.php');
  include('includes/handlers/login-handler.php');

  function getInputValue($name){
    if (isset($_POST[$name])) {
      echo $_POST[$name];
    }
  }
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Resgistro</title>
  </head>
  <body>
    <div id="inputContainer">
      <form id="loginform" action="register.php" method="post">
        <h2>Login</h2>
        <p>
          <?php echo $account->getError(Constants::$loginFailed);?>
        <label for="loginUsername">Usuario</label>
        <input type="text" name="loginUsername" id="loginUsername" placeholder="Usuario" required>
        </p>
        <p>

          <label for="loginPassword">Senha</label>
          <input type="text" name="loginPassword" id="loginPassword" required>
        </p>
        <button type="submit" name="loginButton">Login</button>
      </form>



      <form id="registerForm" action="register.php" method="post">
        <h2>Registrar</h2>
        <p>
          <?php echo $account->getError(Constants::$usernameTaken);?>
          <?php echo $account->getError(Constants::$usernameSize);?>
        <label for="username">Usuario</label>
        <input type="text" name="username" id="username" placeholder="Usuario" value="<?php getInputValue('username')?>"required>
        </p>
        <p>
          <?php echo $account->getError(Constants::$firstnameSize);?>
        <label for="firstName">Primeiro Nome</label>
        <input type="text" name="firstName" id="firstName" placeholder="Primeiro Nome" value="<?php getInputValue('firstName')?>"required>
        </p>
        <p>
            <?php echo $account->getError(Constants::$lastnameSize);?>
        <label for="lastName">Ultimo Nome</label>
        <input type="text" name="lastName" id="lastName" placeholder="Ultimo Nome" value="<?php getInputValue('lastName')?>"required>
        </p>
        <p>
            <?php echo $account->getError(Constants::$emailDoNotMatch);?>
            <?php echo $account->getError(Constants::$emailInvalid);?>
              <?php echo $account->getError(Constants::$emailTaken);?>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="email@email.com" value="<?php getInputValue('email')?>"required>
        </p>
        <p>

        <label for="email2">Confirmar Email</label>
        <input type="email" name="email2" id="email2" placeholder="confirmar email" value="<?php getInputValue('email2')?>"required>
        </p>
        <p>
            <?php echo $account->getError(Constants::$passwordsDoNotMatch);?>
            <?php echo $account->getError(Constants::$passwordsNotAlpha);?>
            <?php echo $account->getError(Constants::$passwordCharacters);?>
          <label for="password">Senha</label>
          <input type="password" name="password" id="password" placeholder="Sua Senha" value="<?php getInputValue('password')?>"required>
        </p>
        <p>

          <label for="password2">Confirmar Senha</label>
          <input type="password" name="password2" id="password2" placeholder="Confirmar Senha" value="<?php getInputValue('password2')?>"required>
        </p>
        <button type="submit" name="registerButton" >Cadastrar</button>
      </form>

    </div>
  </body>
</html>
