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
    <link href="./css/login.css" rel="stylesheet">
</head>
<body>
  <?php include("header.php") ?>
  <div class="content">
    <form action="fazer-login.php" method="post">
      <input type="text" name="txUsuario" placeholder="Usuario" />
      <input type="password" name="txSenha" placeholder="Senha" />
      <input type="submit" value="Login" />
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
</form>

<div id="error-message"></div>
</div>
  <?php include('footer.php'); ?>
</body>
</html>