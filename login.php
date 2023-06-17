<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="./css/index.css"> -->
    <link href="./css/login.css" rel="stylesheet" type="text/css"/>
</head>
<body>
  <?php include("header.php") ?>

  <div class="container">
    <form action="fazer-login.php" method="post">
      <input class="form-control" type="text" name="txUsuario" placeholder="Usuario" />
      <input class="form-control" type="password" name="txSenha" placeholder="Senha" />
      <input class="form-control" type="submit" value="Login" />
    </form>

    <?php if (isset($_SESSION['error_message'])): ?>

    <div>
      <?php echo $_SESSION['error_message']; ?>
    </div>

    <?php unset($_SESSION['error_message']); ?>
    <?php endif; ?>

      <div class="remember-me-label">
        <input type="checkbox" id="remember-me" class="remember-me-checkbox">
        <label for="remember-me" class="remember-me-text">Lembre-me</label>
      </div>

      <form class="login-form" action="login.php" method="post">
        <a href="esqueceu-senha.php">Esqueceu a senha?</a>
        <a href="usuario-cadastro.php">Cadastre-se</a>
      </form>

    <div id="error-message"></div>
  </div>

  
  <?php include('footer.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>