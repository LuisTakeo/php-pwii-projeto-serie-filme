<?php
session_start();
$user = isset($_POST['txUsuario']) ? $_POST['txUsuario'] : '';
$pass = isset($_POST['txSenha']) ? $_POST['txSenha'] : '';

include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("SELECT * FROM usuario WHERE nome='$user' AND senha='$pass'");
    $stmt->execute();
    
    $row = $stmt->fetch(PDO::FETCH_BOTH);

    if ($row == false) {
        $_SESSION['error_message'] = "Usuário e/ou senha inválidos";
    header("Location: login.php");
    exit;
    }

    if ($row['nome'] === 'admin') {
        // Redireciona o usuário admin para uma página de administração
        header("Location: admin.php");
  
        
    } else {
        
        header("Location: index.php");
        exit;
    }
}
?>

<!-- <?php

    $user = $_POST['txUsuario'];
    $pass = $_POST['txSenha'];

    echo $user . " <br /> ";
    echo sha1($pass);

    include("conexao.php");

    $stmt = $pdo->prepare("select * from tbUsuario 
                            where emailUsuario='$user' and senhaUsuario='$pass'"
                        );	
    $stmt ->execute();
    
    $row = $stmt ->fetch(PDO::FETCH_BOTH);
        
    //echo $row[1] . " ";
    
    if($row[1]==null){
        header("location:login.php?mensagem=Usuário e/ou senha inválidos.");
    }
    else{
        echo "Usuário logado";
    }
?> -->