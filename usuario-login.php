<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <title>Document</title>
</head>
<body>

<?php 
        include("header.php");
    ?>


    <section class="container">
        <form class="mb-3" action="usuario-login-verifica.php" method="post" id="container__cadastro">
            <div>
                <label class="form-label" for="txNome">Login: </label>
                <input class="form-control" type="text" name="txUsuario" id="txNome" placeholder="E-mail"/>

            <label class="form-label" for="txSenha">Senha: </label>
            <input class="form-control" type="password" name="txSenha" id="txSenha" placeholder="Senha" />
            <input class="salvar" type="submit" value="Login" />
            </div>
            <div id="error-message">
                <?php 
                    if (isset($_SESSION['error_message'])) {
                        echo $_SESSION['error_message'];
                        unset($_SESSION['error_message']);
                    }
                ?>
            </div>
            <div>
                <p>
                <?php 
                    if (isset($_GET['message'])) {
                        echo $_GET['message'];
                        
                    }
                ?>
                </p>
            </div>

            
        </form>       

    </section>



    
</body>
</html>