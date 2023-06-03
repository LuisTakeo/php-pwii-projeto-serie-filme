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
    <?php

    session_start();

    $user = $_POST['txUsuario'];
    $pass = $_POST['txSenha'];

    include("conexao.php");

    $stmt = $pdo->prepare("select * from tbUsuario 
                            where email='$user' and senha='$pass'"
                        );	
    $stmt ->execute();

    $row = $stmt ->fetch(PDO::FETCH_BOTH);
        
    //echo $row[1] . " ";

    if($row[1]==null){
        header("location:usuario-login.php?message=Usuário e/ou senha inválidos.");
    }
    else{
        echo "<p>Usuário logado</xp>";
    }
    ?>

    </section>



    
</body>
</html>